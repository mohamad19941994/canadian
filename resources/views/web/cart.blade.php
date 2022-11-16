@extends('layouts.web.app')
@section('page_title')@lang('site.cart')@endsection

@section('content')
    <script src="{{asset('web/js/jquery.js')}}"></script>
    <!-- Page Title -->
    <section class="page-title" style="background-image:url(images/background/bg-13.jpg)">
        <div class="auto-container">
            <div class="content-box">
                <h1>معاينة عناصر السلة الالكترونية</h1>
                <ul class="bread-crumb">
                    <li><a class="home" href="{{route('/')}}"><span class="fa fa-home"></span></a></li>
                    <li>سلة التبرعات</li>
                </ul>
            </div>
        </div>
    </section>

    <!--Cart section-->
    <section class="cart-area">
        <div class="auto-container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <ul class="total-item-info">
                        <li><span>عدد عناصر السلة:</span> {{$userCarts->count()}}</li>
                        <li class="totalPrice"><span>المجموع الكلي:</span> {{$totalPrice}}$</li>
                    </ul>
                    <div class="table-outer">
                        <table class="cart-table">
                            <thead class="cart-header">
                            <tr>
                                <th class="prod-column">الغاية</th>
                                <th class="hide-column"></th>
                                <th>الكمية</th>
                                <th class="price">المبلغ</th>
                                <th>المجموع</th>
                                <th>ازالة</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($userCarts as $userCart)
                                <tr>
                                    <td colspan="2" class="prod-column">
                                        <div class="column-box">

                                            <div class="title">
                                                <h3 class="prod-title">{{$userCart->campaign->name}}</h3>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="qty">
                                        <input class="quantity-spinner quantity-spinner_{{$userCart->id}}" type="text" value="{{$userCart->quantity}}" name="quantity">
                                    </td>
                                    <td class="price">${{$userCart->price}}
                                        <input class="price_{{$userCart->id}}" type="hidden" value="{{$userCart->price}}">
                                    </td>
                                    <td class="sub-total sub-total_{{$userCart->id}}">${{$userCart->quantity * $userCart->price}}
                                        <input class="total_{{$userCart->id}}" type="hidden" value="{{$userCart->quantity * $userCart->price}}">
                                    </td>
                                    <td>
                                    <input type="hidden" class="userCartId_{{$userCart->id}}" value="{{$userCart->id}}">
                                    <div class="remove_{{$userCart->id}}">
                                        <div class="checkbox">
                                            <span class="flaticon-cross"></span>
                                        </div>
                                    </div>
                                </td>
                                </tr>

                                <script>

                                    $('.remove_{{$userCart->id}}').click(function () {
                                        var userCartId = $('.userCartId_{{$userCart->id}}').val();
                                        $.ajax({
                                            type: "get",
                                            url: '{{route('cart.remove')}}',
                                            data: {
                                                userCartId: userCartId,
                                            }
                                        }).success(function (data) {
                                            console.log(data)
                                            $('.item-count').empty().append(data.count);
                                            new Noty({
                                                text: data.message,
                                                timeout: 2000,
                                                killer: true,
                                                type: "alert",
                                                theme: 'semanticui',
                                                layout: 'bottomLeft'
                                            }).show();
                                            location.reload();
                                        });

                                    })

                                    // update quantity
                                    $('.quantity-spinner_{{$userCart->id}}').change(function (){
                                        var quantity = $('.quantity-spinner_{{$userCart->id}}').val();
                                        var userCartId = $('.userCartId_{{$userCart->id}}').val();
                                        var price = $('.price_{{$userCart->id}}').val();
                                        $.ajax({
                                            type: "get",
                                            url: '{{route('cart.quantity.update')}}',
                                            data: {
                                                userCartId: userCartId,
                                                quantity: quantity,
                                                price: price,
                                            }
                                        }).success(function (data) {
                                            var total = $('.price_{{$userCart->id}}').val() * $('.quantity-spinner_{{$userCart->id}}').val()
                                            $('.item-count').empty().append(data.count);
                                            $('.totalPrice').empty().append('<span>المجموع الكلي:</span>'+data.totalPrice+'$');
                                            $('.sub-total_{{$userCart->id}}').empty().text('$'+total);
                                            new Noty({
                                                text: data.message,
                                                timeout: 2000,
                                                killer: true,
                                                type: "alert",
                                                theme: 'semanticui',
                                                layout: 'bottomLeft'
                                            }).show();
                                            //location.reload();
                                        });
                                    })

                                    $( document ).ready(function() {
                                        var campaignTotal = $('.total_{{$userCart->id}}').val();

                                    });
                                </script>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="text-center" style="margin-top: 80px; ">
                <div class="link-btn">
                    <a href="{{route('checkout')}}" class="theme-btn btn-style-one"><span>اجراء عملية الدفع</span></a>
                </div>
            </div>
        </div>

    </section>


@endsection



