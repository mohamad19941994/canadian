@extends('layouts.web.app')
@section('page_title')@lang('site.checkout')@endsection

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image:url(images/background/bg-13.jpg)">
        <div class="auto-container">
            <div class="content-box">
                <h1>صفحة الدفع</h1>
                <ul class="bread-crumb">
                    <li><a class="home" href="{{route('/')}}"><span class="fa fa-home"></span></a></li>
                    <li>اجراء عملية الدفع</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="checkout-area" style="padding-bottom: 100px;">
        <div class="auto-container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="form billing-info">
                        <div class="shop-title-box">
                            <h3>اجراء عملية الدفع</h3>
                            <h5>المبلغ الكلي: <span style="font-weight: bold">{{$total}}$</span></h5><br>
                        </div>
                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif
                        <form role="form"
                              action="{{ route('stripe.post') }}"
                              method="post"
                              class="require-validation"
                              data-cc-on-file="false"
                              data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                              id="payment-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="field-label">الاسم الثلاثي على البطاقة*</div>
                                    <div class="field-input">
                                        <input type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="field-label">رقم البطاقة*</div>
                                    <div class="field-input">
                                        <input type="text" placeholder="" autocomplete='off' class='card-number' maxlength="20"> {{--Number: 4242 4242 4242 4242--}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="field-label">سنة*</div>
                                    <div class="field-input">
                                        <input type="text" placeholder="YYYY" autocomplete='off' class='card-expiry-year' maxlength="4">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="field-label">شهر*</div>
                                    <div class="field-input">
                                        <input type="text" placeholder="MM" autocomplete='off' class='card-expiry-month' maxlength="2">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="field-label">CSV*</div>
                                    <div class="field-input">
                                        <input autocomplete='off' class='card-cvc' placeholder='مثال. 311' type='text' maxlength="3">
                                    </div>
                                </div>
                                <div class='form-row row'>
                                    <div class='col-md-12 error form-group d-none'>
                                        <div class='alert-danger alert'>Please correct the errors and try again.</div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="theme-btn btn-style-one" type="submit"><span>اجراء عملية الدفع</span></button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection

@push('scripts')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    <script type="text/javascript">

        $(function() {

            /*------------------------------------------
            --------------------------------------------
            Stripe Payment Code
            --------------------------------------------
            --------------------------------------------*/

            var $form = $(".require-validation");

            $('form.require-validation').bind('submit', function(e) {
                var $form = $(".require-validation"),
                    inputSelector = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'].join(', '),
                    $inputs = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid = true;
                $errorMessage.addClass('d-none');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('d-none');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }

            });

            /*------------------------------------------
            --------------------------------------------
            Stripe Response Handler
            --------------------------------------------
            --------------------------------------------*/
            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('d-none')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    /* token contains id, last4, and card type */
                    var token = response['id'];
                    //console.log(token)
                    $.ajax({
                        type: "get",
                        url: '{{route('confirm_payment')}}',
                        data: {
                            token: token,
                        }
                    }).success(function (data) {
                        console.log(data)
                    });
                    /*$form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();*/
                }
            }

        });
    </script>
@endpush
