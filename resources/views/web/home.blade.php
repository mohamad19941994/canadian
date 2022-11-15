@extends('layouts.web.app')
@section('page_title')@lang('site.home')@endsection
@push('styles')
    <style>
        .modal-backdrop{
            z-index: 1 !important;
        }
    </style>
@endpush
@section('content')
    <script src="{{asset('web/js/jquery.js')}}"></script>

    <!-- Bnner Section -->
    <section class="banner-section style-three">
        <div class="swiper-container banner-slider">
            <div class="swiper-wrapper">
                @foreach($sliders as $slider)

                    <!-- Slide Item -->
                    <div class="swiper-slide" style="background-image: url({{url('/thumbnail/1920/800/80/storage/slider_images/'.$slider->image)}});">
                        <div class="content-outer">
                            <div class="content-box justify-content-center">
                                <div class="inner text-center">
                                    <div class="logo"><img src="{{asset('storage/settings/'.setting('logo'))}}" alt=""></div>
                                    <h1>{{$slider->name}} </h1>
                                    <div class="link-box">
                                        <a href="{{$slider->button_url}}" class="theme-btn btn-style-ten"><span>{{$slider->button_name}}</span>
                                        </a>
                                        {{--<a href="#" class="theme-btn btn-style-eleven"><span>Recent Causes</span>
                                        </a>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
            <div class="banner-slider-pagination style-four"></div>
            <div class="banner-slider-nav style-one">
                <div class="banner-slider-control banner-slider-button-prev"><span class="fa fa-angle-left"></span></div>
                <div class="banner-slider-control banner-slider-button-next"><span class="fa fa-angle-right"></span> </div>
            </div>
        </div>
    </section>
    <!-- End Bnner Section -->

    <!-- Blog Section -->
    <section class="blog-section">
        <div class="auto-container">
           {{-- <div class="sec-title text-center">
                <h5>@lang('site.home_blogs_title')</h5>
                <h1>@lang('site.home_blogs_description')</h1>
            </div>--}}
            <div class="row">
                @foreach($blogs as $blog)

                    <!-- News Block Two -->
                    <div class="col-lg-4 news-block-two style-two">
                        <div class="inner-box wow fadeInUp" data-wow-delay="200ms">
                            <div class="image">
                                <a href="{{route('blog.show',['blog'=>$blog->id,make_slug($blog->name)])}}"><img src="{{($blog->image ? url('/thumbnail/950/450/80/storage/blog_images/'.$blog->image) : url('/thumbnail/356/267/80/storage/settings/'.setting('logo')) )}}" alt=""></a>
                            </div>
                            <div class="lower-content">
                                <div class="date"><span class="flaticon-clock"></span>{{ $blog->created_at->format('Y-m-d') }}</div>
                                <h4><a href="{{route('blog.show',['blog'=>$blog->id,make_slug($blog->name)])}}">{{$blog->name}}</a></h4>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{--<a href="{{route('blogs')}}" class="theme-btn btn-style-twelve"><span>@lang('site.all_blogs')</span></a>--}}
            </div>
        </div>
    </section>



    <section class="causes-section-four">
        <div class="auto-container">
            <div class="cause-wrapper">
                <div class="row">
                    @foreach($campaigns as $campaign)

                        <div class="cause-block-four style-two col-lg-4 col-md-6">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{($campaign->image ? url('/thumbnail/330/230/80/storage/campaign_images/'.$campaign->image) : url('/thumbnail/330/230/80/storage/settings/'.setting('logo')) )}}" alt="">
                                    <div class="overlay"><a href="#" class="donate-box-btn" data-toggle="modal" data-target="#exampleModalLongNew_{{$campaign->id}}">@lang('site.donate')</a></div>
                                    {{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                        Launch demo modal
                                    </button>--}}
                                </div>
                                <div class="lower-content">
                                    <div class="wrapper-box">
                                        <h4><a href="{{route('campaign.show',['campaign'=>$campaign->id,make_slug($campaign->name)])}}">{{$campaign->name}}</a></h4>
                                        <div class="text">Indignation and dislike men who are like all <br>beguiled and demoralized.</div>
                                        <div class="info-box">
                                            <div class="raised">
                                                <a href="#"><span>Raised:</span> $72000</a>
                                            </div>
                                            <div class="count-box counted">
                                                <span class="count-text" data-speed="3000" data-stop="60">60</span><span class="affix">%</span>
                                            </div>
                                            <div class="goal">
                                                <a href="#"><span>Goal:</span>  $100000</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-lg" id="exampleModalLongNew_{{$campaign->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" >
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">{{$campaign->id}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="donate-form-area">
                                                <div class="donate-form-wrapper">
                                                    <div class="close-donate theme-btn"><span class="flaticon-close"></span></div>
                                                    <div class="sec-title text-center">
                                                        <h1>Donate us to achive our goal</h1>
                                                        <div class="text">Beguiled and demoralized by the charms of pleasure of the moment, so by desire, <br>that they cannot foresee.</div>
                                                    </div>

                                                    <form  action="#" class="donate-form default-form">
                                                        <ul class="chicklet-list clearfix">
                                                            <li>
                                                                <input type="radio" id="donate-amount-1" name="donate-amount" />
                                                                <label for="donate-amount-1" data-amount="10" >$10</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="donate-amount-2" name="donate-amount" checked="checked" />
                                                                <label for="donate-amount-2" data-amount="20">$20</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="donate-amount-3" name="donate-amount" />
                                                                <label for="donate-amount-3" data-amount="50">$50</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="donate-amount-4" name="donate-amount" />
                                                                <label for="donate-amount-4" data-amount="100">$100</label>
                                                            </li>
                                                            <li class="other-amount">

                                                                <div class="input-container" data-message="Every dollar you donate helps end hunger."><input type="text" id="other-amount" placeholder="Other Amount"  />
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')

    <script>
        $(function() {

            $("input:radio[name=amount]").on("click",function() {
                var amount = $("input:radio[name=amount]:checked").val();
                $('#textAmount').val(amount);
            });
        });
    </script>
@endpush
