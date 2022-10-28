<aside id="sidebar" class="col-lg-4">


    <!-- SEARCH FIELD -->
    <div id="search-field" class="sidebar-div mb-50">
        <form action="{{route('blogs')}}" method="get">
        <div class="input-group mb-3">

                <input type="text" class="form-control" name="search" placeholder="@lang('site.search_placeholder')" aria-label="Search" aria-describedby="search-field" value="{{request()->search}}">
                <div class="input-group-append">
                    <button class="btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>

        </div>
        </form>
    </div>


    <!-- BLOG CATEGORIES -->
    <div class="blog-categories sidebar-div mb-50">

        <!-- Title -->
        <h5 class="h5-sm steelblue-color">@lang('site.all_categories')</h5>

        <ul class="blog-category-list clearfix">
            @foreach($categories as $category)
                @php
                    $cat_count=App\Models\Blog::where('category_id','=',$category->id)->count();
                @endphp
                <li><a href="{{route('category.show',['category'=>$category->id,make_slug($category->name)])}}"><i class="fas fa-angle-double-right blue-color"></i> {{$category->name}}</a> <span>({{$cat_count}})</span></li>
            @endforeach
        </ul>

    </div>


    <!-- POPULAR POSTS -->
    <div class="popular-posts sidebar-div mb-50">

        <!-- Title -->
        <h5 class="h5-sm steelblue-color">@lang('site.latest_blogs')</h5>

        <ul class="popular-posts">
            @foreach(\App\Models\Blog::orderBy('id', 'desc')->take(3)->get() as $blog)
                <li class="clearfix d-flex align-items-center">

                        <!-- Image -->
                        <img class="img-fluid my_border_radius" src="{{url('/thumbnail/150/150/80/storage/blog_images/'.($blog->image ? $blog->image : 'default.png'))}}" alt="blog-post-preview" />

                        <!-- Text -->
                        <div class="post-summary">
                            <a href="{{route('blog.show',['blog'=>$blog->id,make_slug($blog->name)])}}">{{$blog->name}}</a>
                        </div>

                    </li>
            @endforeach
        </ul>

    </div>

</aside>