<footer class="main-footer style-three">
    <div class="auto-container">
        <div class="widget-wrapper">
            <div class="row">
                <!-- About Widget -->
                <div class="col-lg-4 about-widget-three footer-widget">
                    <div class="logo"><a href="{{route('/')}}"><img src="{{url('/thumbnail/100/100/80/storage/settings/'.setting('logo'))}}" alt=""></a></div>
                    <div class="text">{{setting(app()->getLocale())['description']}}</div>
                    <div class="copyright-text"><span class="flaticon-heart-2"></span>© 2009–2019 All Rights Reserved.</div>
                </div>
                <!-- Gallery Widget -->
                <div class="col-lg-4 instagram-widget footer-widget">
                    <h4 class="widget-title-two">WorldWide Tour</h4>
                    <div class="wrapper-box">
                        @foreach($photos as $photo)
                            <div class="image">
                                <img src="{{url('/thumbnail/100/100/80/storage/photo_images/'.$photo->image)}}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Twiter Widget -->
                <div class="col-lg-4 twitter-widget footer-widget">
                    <h4 class="widget-title-two">WorldWide Trends</h4>
                    <div class="text">Did You Know! Once you initiate a payment towards the <a href="#">#charity,</a> you will receive a confirmation email against that <a href="#">#payment</a>.</div>
                    <div class="link"><a href="#">https://www.goodsoul/charity.com</a></div>
                    <div class="twitter-portfolio">
                        <div class="icon"><span class="fa fa-twitter"></span></div>
                        <h4>Mark Richarson</h4>
                        <a href="#" class="user">@caregiver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-three">
        <div class="auto-container">
            <ul class="social-icon-four">
                @if(setting('facebook'))
                <li><a href="{{setting('facebook')}}" class="facebook"><span class="fa fa-facebook-square"></span>Facebook</a></li>
                @endif
                @if(setting('twitter'))
                    <li><a href="{{setting('twitter')}}" class="twitter"><span class="fa fa-twitter"></span>Twitter</a></li>
                @endif
                @if(setting('instagram'))
                    <li><a href="{{setting('instagram')}}" class="instagram"><span class="fa fa-instagram"></span>Instagram</a></li>
                @endif
            </ul>
        </div>
    </div>
    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target style-three" data-target="html"><span class="icon flaticon-next"></span></div>
</footer>
