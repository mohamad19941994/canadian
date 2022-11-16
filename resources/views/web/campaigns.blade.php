@extends('layouts.web.app')
@section('page_title')@lang('site.campaigns')@endsection

@section('content')
    <script src="{{asset('web/js/jquery.js')}}"></script>
    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{asset('web/images/background/bg-13.jpg')}})">
        <div class="auto-container">
            <div class="content-box">
                <h1>@lang('site.campaigns')</h1>
                <ul class="bread-crumb">
                    <li><a class="home" href="{{route('/')}}"><span class="fa fa-home"></span></a></li>
                    <li>@lang('site.campaigns')</li>
                </ul>
            </div>
        </div>
    </section>
    @include('admin.partials._session')
    <!-- Causes Section Four -->
    <section class="causes-section-four">
        <div class="auto-container">
            <div class="cause-wrapper">
                <div class="row">
                    @foreach($campaigns as $campaign)
                        <div class="cause-block-four style-two col-lg-4 col-md-6">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{($campaign->image ? url('/thumbnail/180/180/80/storage/campaign_images/'.$campaign->image) : url('/thumbnail/180/180/80/storage/settings/'.setting('logo')) )}}" alt="">
                                <div class="overlay"><a href="#" class="donate-box-btn">@lang('site.donate')</a></div>
                            </div>
                            <div class="lower-content">
                                <div class="wrapper-box">
                                    <h4><a href="{{route('campaign.show',['campaign'=>$campaign->id,make_slug($campaign->name)])}}">{{$campaign->name}}</a></h4>
                                    <div class="text">{!! $campaign->description !!}</div>
                                    <div class="info-box">
                                        <div class="raised">
                                            <a href="#"><span>متبقٍ:</span> $72000</a>
                                        </div>
                                        <div class="count-box">
                                            <span class="count-text" data-speed="3000" data-stop="60">0</span><span class="affix">%</span>
                                        </div>
                                        <div class="goal">
                                            <a href="#"><span>مطلوب:</span>  ${{$campaign->goal}}</a>
                                        </div>
                                        {{--<div class="overlay-content">
                                            <ul class="clearfix">
                                                <li>
                                                    <div class="addToCart_{{$campaign->id}}"><span class="fa fa-shopping-cart"></span>
                                                        <div class="toltip-content">
                                                            <p>Add to Cart</p>
                                                        </div>
                                                    </div>
                                                    <input type="number" name="price_{{$campaign->id}}" class="form-control price_{{$campaign->id}}" />
                                                    <input type="hidden" name="campaignId_{{$campaign->id}}" value="{{$campaign->id}}" class="form-control campaignId_{{$campaign->id}}" />
                                                </li>
                                            </ul>
                                        </div>--}}

                                    </div>

                                    <form action="#" class="donate-form default-form">
                                        <ul class="chicklet-list clearfix">
                                            <li>
                                                <input type="radio" id="donate-amount-1-{{$campaign->id}}" value="10" name="donate-amount-{{$campaign->id}}">
                                                <label for="donate-amount-1-{{$campaign->id}}" data-amount="10">$10</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="donate-amount-2-{{$campaign->id}}" value="20" name="donate-amount-{{$campaign->id}}" checked="checked">
                                                <label for="donate-amount-2-{{$campaign->id}}" data-amount="20">$20</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="donate-amount-3-{{$campaign->id}}" value="50" name="donate-amount-{{$campaign->id}}">
                                                <label for="donate-amount-3-{{$campaign->id}}" data-amount="50">$50</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="donate-amount-4-{{$campaign->id}}" value="100" name="donate-amount-{{$campaign->id}}">
                                                <label for="donate-amount-4-{{$campaign->id}}" data-amount="100">$100</label>
                                            </li>
                                            <li class="other-amount">
                                                <div class="input-container" data-message="Every dollar you donate helps end hunger.">
                                                    <input type="number" name="price_{{$campaign->id}}" id="other-amount-{{$campaign->id}}" class="price_{{$campaign->id}}" placeholder="قيمة اخرى" dir="rtl">
                                                </div>
                                                <input type="hidden" name="campaignId_{{$campaign->id}}" value="{{$campaign->id}}" class="form-control campaignId_{{$campaign->id}}" />
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                                <div class="overlay-content">
                                    <ul class="clearfix" style="display: flex;justify-content: space-evenly;">
                                        <li>
                                            @if(\Illuminate\Support\Facades\Auth::check())
                                                <a href="javascript:;" class="addToCart_{{$campaign->id}}"><span class="fa fa-shopping-cart"></span>
                                                    <div class="toltip-content">
                                                        <p>أضف للسلة</p>
                                                    </div>
                                                </a>
                                            @else
                                                <a href="{{route('login')}}"><span class="fa fa-shopping-cart"></span>
                                                    <div class="toltip-content">
                                                        <p>أضف للسلة</p>
                                                    </div>
                                                </a>
                                            @endif
                                        </li>

                                        <li>
                                            <a href="javascript:;"><span class="fa fa-money"></span>
                                                <div class="toltip-content">
                                                    <p>تبرع</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                        <script>
                            $('.addToCart_{{$campaign->id}}').click(function (){

                                var price = $(".price_{{$campaign->id}}").val();
                                var campaignId = $('.campaignId_{{$campaign->id}}').val();

                                $.ajax({
                                    type: "get",
                                    url: '{{route('add.to.cart')}}',
                                    data: {
                                        price: price,
                                        campaignId: campaignId
                                    }
                                }).success(function( data ) {
                                    $('.item-count').empty().append(data.count);
                                    new Noty({
                                        text: data.message,
                                        timeout: 2000,
                                        killer: true,
                                        type: "alert",
                                        theme: 'semanticui',
                                        layout: 'bottomLeft'
                                    }).show();
                                });

                            })

                            $(function() {

                                $("input:radio[name=donate-amount-{{$campaign->id}}]").on("click",function() {
                                    var amount = $("input:radio[name=donate-amount-{{$campaign->id}}]:checked").val();
                                    $('#other-amount-{{$campaign->id}}').val(amount);
                                });
                            });
                        </script>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection

