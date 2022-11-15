@extends('layouts.web.app')
@section('page_title')@lang('site.cart')@endsection

@section('content')
    <script src="{{asset('web/js/jquery.js')}}"></script>
    <!-- Page Title -->
    <section class="page-title" style="background-image:url(images/background/bg-13.jpg)">
        <div class="auto-container">
            <div class="content-box">
                <h1>Shopping Cart</h1>
                <ul class="bread-crumb">
                    <li><a class="home" href="index.html"><span class="fa fa-home"></span></a></li>
                    <li>Products</li>
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
                        <li><span>Your Cart:</span> {{$userCarts->count()}} Items</li>
                        <li><span>Total :</span> $94.97</li>
                    </ul>
                    <div class="table-outer">
                        <table class="cart-table">
                            <thead class="cart-header">
                            <tr>
                                <th class="prod-column">Products</th>
                                <th class="hide-column"></th>
                                <th>Quantity</th>
                                <th class="price">Price</th>
                                <th>Total</th>
                                <th>Remove</th>
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

                                <td class="price">${{$userCart->price}}</td>
                                    <input class="price_{{$userCart->id}}" type="hidden" value="{{$userCart->price}}">
                                <td class="sub-total sub-total_{{$userCart->id}}">${{$userCart->quantity * $userCart->price}}</td>
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
                                    var userCartId = $('.userCartId_{{$userCart->id}}').val();
                                    $('.remove_{{$userCart->id}}').click(function () {
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
                                        //alert(quantity);
                                        $.ajax({
                                            type: "get",
                                            url: '{{route('cart.quantity.update')}}',
                                            data: {
                                                userCartId: userCartId,
                                                quantity: quantity,
                                            }
                                        }).success(function (data) {
                                            var total = $('.price_{{$userCart->id}}').val() * $('.quantity-spinner_{{$userCart->id}}').val()
                                            $('.item-count').empty().append(data.count);
                                            $('.sub-total_{{$userCart->id}}').empty().text(total);
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
                                </script>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection



