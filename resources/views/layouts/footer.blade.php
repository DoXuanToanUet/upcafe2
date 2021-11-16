<footer class="footer-section">
    <div class="container">
        <div class="footer-cta pt-5 ">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="cta-text">
                            <h4>Find us</h4>
                            <span>{{$site->address}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-phone"></i>
                        <div class="cta-text">
                            <h4>Call us</h4>
                            <span>{{$site->contact}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="far fa-envelope-open"></i>
                        <div class="cta-text">
                            <h4>Mail us</h4>
                            <span>{{$site->email}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-content pt-4 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
{{--                        <div class="footer-logo">--}}
{{--                            <a href="index.html">--}}
{{--                            <?php--}}
{{--                      $logo = asset('uploads/logo/'.$site->logo);--}}
{{--                                                   ?>--}}
{{--                                                   <img src="{{$logo}}" width="100%" class="img-fluid" alt="logo">--}}

{{--                            </a>--}}
{{--                        </div>--}}
                        <div class="footer-text">
                            <p>{{$site->shortinfo}}</p>
                        </div>
                        <div class="footer-social-icon">
                            <span>Follow us</span>
                            @if($site->facebook)
                                <a href="{{$site->facebook}}" target="_blank">
                                    <i class="fab fa-facebook-f facebook-bg" aria-hidden="true"></i>
                                </a>
                            @endif
                            @if($site->instagram)
                                <a href="{{$site->instagram}}" target="_blank">

                                    <i class="fa-brands fa-instagram instagram-bg" aria-hidden="true"></i>
                                </a>
                            @endif

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Useful Links</h3>
                        </div>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="{{ url('/cafe') }}">Cafe</a></li>
                            <li><a href="{{ url('/catering') }}">Catering</a></li>
                            <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Order Online</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <p>Don’t miss our delicious food. Place a order online now</p>
                        </div>
                        <div class="subscribe-form">
                            <a class="btn btn-primary" href="{{ url('/catering/breakfast') }}" role="button">ORDER ONLINE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 text-center text-lg-start">
                    <div class="copyright-text">
                        <p>Copyright &copy; <?php echo date("Y");?>, All Right Reserved <a href="https://codepen.io/anupkumar92/">UP Cafe and Catering</a></p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-none d-lg-block text-end">
                    <div class="footer-menu">
                        <ul>

                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Policy</a></li>
                            <li><a href="{{ url('/contact-us') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="javascript:" id="return-to-top"><i class="fa-solid fa-chevron-up"></i></a>






