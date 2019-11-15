@include('components.head')
<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Main Wrapper Start Here -->
    <div class="wrapper">
        <!-- Banner Popup Start -->
        <div class="popup_banner">
            <span class="popup_off_banner">×</span>
            <div class="banner_popup_area">
                    <img src="{{asset('site')}}/img/banner/pop-banner.jpg" alt="">
            </div>
        </div>
        <!-- Banner Popup End -->
       <!-- Newsletter Popup Start -->
        <div class="popup_wrapper">
            <div class="test">
                <span class="popup_off">Close</span>
                <div class="subscribe_area text-center mt-60">
                    <h2>Newsletter</h2>
                    <p>Subscribe to the Truemart mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                    <div class="subscribe-form-group">
                        <form action="#">
                            <input autocomplete="off" type="text" name="message" id="message" placeholder="Enter your email address">
                            <button type="submit">subscribe</button>
                        </form>
                    </div>
                    <div class="subscribe-bottom mt-15">
                        <input type="checkbox" id="newsletter-permission">
                        <label for="newsletter-permission">Don't show this popup again</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Popup End -->
        <!-- Main Header Area Start Here -->
     @include('components.Header')
        <!-- Main Header Area End Here -->

        <!-- Categorie Menu & Slider Area Start Here -->
     @include('components.slider')
        <!-- Categorie Menu & Slider Area End Here -->
   @yield('content')
        <!-- Footer Area Start Here -->
      @include('components.footer')
        <!-- Footer Area End Here -->

    </div>
    <!-- Main Wrapper End Here -->

    <!-- jquery 3.2.1 -->
    <script src="{{asset('site')}}/js/vendor/jquery-3.2.1.min.js"></script>
    <!-- Countdown js -->
    <script src="{{asset('site')}}/js/jquery.countdown.min.js"></script>
    <!-- Mobile menu js -->
    <script src="{{asset('site')}}/js/jquery.meanmenu.min.js"></script>
    <!-- ScrollUp js -->
    <script src="{{asset('site')}}/js/jquery.scrollUp.js"></script>
    <!-- Nivo slider js -->
    <script src="{{asset('site')}}/js/jquery.nivo.slider.js"></script>
    <!-- Fancybox js -->
    <script src="{{asset('site')}}/js/jquery.fancybox.min.js"></script>
    <!-- Jquery nice select js -->
    <script src="{{asset('site')}}/js/jquery.nice-select.min.js"></script>
    <!-- Jquery ui price slider js -->
    <script src="{{asset('site')}}/js/jquery-ui.min.js"></script>
    <!-- Owl carousel -->
    <script src="{{asset('site')}}/js/owl.carousel.min.js"></script>
    <!-- Bootstrap popper js -->
    <script src="{{asset('site')}}/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('site')}}/js/bootstrap.min.js"></script>
    <!-- Plugin js -->
    <script src="{{asset('site')}}/js/plugins.js"></script>
    <!-- Main activaion js -->
    <script src="{{asset('site')}}/js/main.js"></script>
</body>

</html>