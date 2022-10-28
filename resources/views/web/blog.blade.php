@extends('layouts.web.app')
@section('page_title'){{$blog->name}}@endsection
@section('post_head')
<meta property="og:type" content="article"/>
    <meta property="og:title" content="{{($blog->meta_title ? $blog->meta_title: $blog->name)}}"/>
    <meta property="og:description" content="{{($blog->meta_description ? $blog->meta_description: setting(app()->getLocale())['description'] )}}"/>
    <meta property="og:url" content="{{route('blog.show',['blog'=>$blog->id,make_slug($blog->name)])}}"/>
    <meta property="og:image" content="{{($blog->image ? url('/thumbnail/500/500/80/storage/blog_images/'.$blog->image) : url('/thumbnail/500/500/80/storage/settings/'.setting('logo')) )}}"/>
    <meta property="og:image:width" content="500"/>
    <meta property="og:image:height" content="500"/>
    <meta property="article:author" content="@lang('site.author')"/>
    <meta property="fb:app_id" content="111027297706500"/>
    @php
    $keywords = ($blog->keywords ? $blog->keywords: setting(app()->getLocale())['site_keywords']);
    $tags = explode(',', $keywords);
    @endphp
    @foreach($tags as $tag)<meta property="article:tag" content="{{$tag}}"/>
    @endforeach
<meta property="article:published_time" content="{{\Carbon\Carbon::parse($blog->created_at)->format('Y-m-d H:i:s')}}"/>
    <meta property="article:modified_time" content="{{\Carbon\Carbon::parse($blog->updated_at)->format('Y-m-d H:i:s')}}"/>

@endsection
@section('content')
    <!-- BREADCRUMB
			============================================= -->
    <div id="breadcrumb" class="division">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-holder">

                        <!-- Breadcrumb Nav -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('/')}}">@lang('site.home')</a></li>
                                <li class="breadcrumb-item"><a href="{{route('blogs')}}">@lang('site.blogs')</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$blog->name}}</li>
                            </ol>
                        </nav>

                        <!-- Title -->
                        <h4 class="h4-sm steelblue-color">{{$blog->name}}</h4>

                    </div>
                </div>
            </div>  <!-- End row -->
        </div>	<!-- End container -->
    </div>	<!-- END BREADCRUMB -->

    <!-- BLOG PAGE CONTENT
    ============================================= -->
    <div id="single-blog-page" class="wide-100 blog-page-section division">
        <div class="container">
            <div class="row">


                <!-- SINGLE POST -->
                <div class="col-lg-8">
                    <div class="single-blog-post pr-30">


                        <!-- BLOG POST IMAGE -->
                        <div class="blog-post-img mb-40">
                            <img class="img-fluid" src="{{($blog->image ? url('/thumbnail/1200/500/80/storage/blog_images/'.$blog->image) : url('/thumbnail/1200/500/80/storage/settings/'.setting('logo')) )}}" alt="blog-post-image" />
                        </div>


                        <!-- BLOG POST TEXT -->
                        <div class="sblog-post-txt">

                            <!-- Post Title -->
                            <h4 class="h4-lg steelblue-color">{{$blog->name}}</h4>

                            <!-- Post Data -->
                            <span>{{ $blog->created_at->format('Y-m-d') }} @lang('site.by') <span>@lang('site.author')</span></span>

                            {!! $blog->description !!}

                        </div>	<!-- END BLOG POST TEXT -->


                    </div>
                </div>	 <!-- END SINGLE POST -->


                <!-- SIDEBAR -->
            @include('layouts.web.sidebar')	<!-- END SIDEBAR -->


            </div>	<!-- End row -->
        </div>	 <!-- End container -->
    </div>	<!-- END BLOG PAGE CONTENT -->
@endsection


@section('scripts')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebPage",
            "name": "@if(setting(app()->getLocale())['title']){{setting(app()->getLocale())['title']}}@else@lang('site.title')@endif - {{$blog->name}}",
            "image": "{{url('/thumbnail/200/200/80/storage/settings/'.setting('logo'))}}",
            "url": "{{route('blog.show',['blog'=>$blog->id,make_slug($blog->name)])}}",
            "publisher": {
                "@type": "Organization",
                "name": "{{setting(app()->getLocale())['title']}}",
                "logo": {
                    "@type": "ImageObject",
                    "url": "{{url('/thumbnail/200/200/80/storage/settings/'.setting('logo'))}}"
                }
            }
        }
    </script>
@endsection
