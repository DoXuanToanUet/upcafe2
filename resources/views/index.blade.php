@extends('layouts.app')
@section('title', 'Home')
@section('content')
<?php $indexPage = 1;
$notification_header = true; ?>
@include('layouts.header')

    @if($banner->count() > 0)
        <section id="banner_area">
            <div class="banner_slider">
                @foreach($banner as $d)
                    <div class="banner_slider_items">
                        <?php
                            $img = asset('uploads/banner/'.$d->name);
                        ?>
                        <img src="{{$img}}" alt="{{$d->title}}" class="banner-img">
                        
                        @if($d->title)
                        <div class="banner_overlay_content">
                            <h1>{{$d->title}}</h1>
                            <!-- <a href="{{ url('/cafe') }}" class="a1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CAFE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            <a href="{{ url('/catering') }}" class="a2">CATERING</a>
                            <div class="wow bounce banner_big_arrow text-center" data-wow-duration="5s" data-wow-delay="1s">
                                <img src="images/arrowstop.png" alt="arrow">
                            </div> -->
                            <div class="promise_banner">
                                <div class="container">
                                    <div class="our-promise-flex">
                                        <div class="item">
                                            <div class=" wow slideInLeft">
                                                <a href="/cafe">
                                                    <img class="img" src="images/cafe.png" alt="">
                                                </a>
                                                <!-- <div class="content left">
                                                    <div class="left-content">
                                                        <img src="images/cup-icon.png" alt="cap">
                                                        <h3>CAFE</h3>
                                                        <p>For delicious food and great mood</p>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" wow slideInRight">
                                                <a href="/catering">
                                                    <img class="img" src="images/catering-index.png" alt="">
                                                </a>
                                                <!-- <div class="content right">
                                                    <div class="right-content">
                                                        <img src="images/Catering.svg" alt="cap">
                                                        <h3>CATERING</h3>
                                                        <p>For a memorable event</p>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </section>

        <div class="container">
            <div class="contect_part1 timing-banner">
                <h2>OPENING HOURS</h2>
                <div class="row">
                    <div class="col-6 contect_part11">
                        <p>MONDAY</p>
                        <p>TUESDAY</p>
                        <p>WEDNESDAY</p>
                        <p>THURSDAY</p>
                        <p>FRIDAY</p>
                        <p>SAT & SUN</p>
                        <p>PUBLIC</p>
                    </div>
                    <div class="col-6 contect_part12">
                        <p>8 AM - 2 PM</p>
                        <p>8 AM - 2 PM</p>
                        <p>8 AM - 8 PM</p>
                        <p>8 AM - 8 PM</p>
                        <p>8 AM - 5 PM</p>
                        <p>8 AM - 1 PM</p>
                        <p>CLOSED</p>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- --------------------promise area two -------------------- -->
    <section id="promise_area2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="our-promise-flex">
                        <div class="item">
                            <div class=" wow slideInLeft">
                                <img class="img" src="images/cafe.png" alt="">
                                <!-- <div class="content left">
                                    <div class="left-content">
                                        <img src="images/cup-icon.png" alt="cap">
                                        <h3>CAFE</h3>
                                        <p>For delicious food and great mood</p>
                                        <a href="{{ url('/cafe') }}">SEE MORE</a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="item">
                            <div class=" wow slideInRight">
                                <img class="img" src="images/catering-index.png" alt="">
                                <!-- <div class="content right">
                                    <div class="right-content">
                                        <img src="images/Catering.svg" alt="cap">
                                        <h3>CATERING</h3>
                                        <p>For a memorable event</p>
                                        <a href="{{ url('/catering') }}">SEE MORE</a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- -------------------- OUR CAFE are -------------------- -->
    <section id="ourCafe_area">
        <div class="container-fluid p-0">
            <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="promise_content text-center">
                            <h3>DINE IN or TAKEAWAY</h3>
                            <h2>OUR CAFE</h2>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="top_review1">
                            <img src="images/top reviews logo 1.png" alt="topReview">
                            <p>Top Cafes & Best Food Delivery <br> Services in Auckland 2020</p>
                        </div>
                    </div>
                </div>
            @if(isset($cafeBanner) && isset($cafeBanner[0]))
                <?php
                    $img = asset('uploads/banner/'.$cafeBanner[0]->name);
                ?>
                <div class="ourCafe_bg" style="background-image: url({{$img}}) !important;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ourcafe_content text-center">
                                    <h2>{{ $cafeBanner[0]->title }}</h2>
                                    <a href="{{ url('/cafe') }}">VIEW OUR CAFE MENU</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="ourCafe_bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ourcafe_content text-center">
                                    <h2>BREAKFAST | LUNCH | DINNER | DRINKS</h2>
                                    <a href="{{ url('/cafe') }}">VIEW OUR CAFE MENU</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- -------------------- CATERING & PRIVATE EVENTS are -------------------- -->
    <section id="catering_area">
        <div class="container-fluid p-0">
            <div class="catering_title text-center">
                <p>YOU CREATE THE OCCASION – WE TAKE CARE OF THE FOOD</p>
                <h2>CATERING & PRIVATE EVENTS</h2>
            </div>
            @if(isset($cateringBanner) && isset($cateringBanner[0]))
                <?php
                    $img = asset('uploads/banner/'.$cateringBanner[0]->name);
                ?>
                <div class="catering_bg" style="background-image: url({{$img}}) !important;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="catering_content text-center">
                                    <h2>{{ $cateringBanner[0]->title }}</h2>
                                    <a href="{{ url('/catering') }}">VIEW OUR CATERING MENU</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="catering_bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="catering_content text-center">
                                    <h2>CREATING SWEET MEMORIES</h2>
                                    <a href="{{ url('/catering') }}">VIEW OUR CATERING MENU</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- -------------------- about area -------------------- -->
    <section id="about_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 about_content_lrt">
                    <div class="about_content">
                        <p>FROM HUMBLE BEGINNINGS TO A THRIVING CAFE</p>
                        <h2>A PASSION FOR FOOD AND SERVICE</h2>
                        <p class="about-p2">At Up Cafe we’re passionate about what we do.
                        We serve breakfast, lunch and dinner, great coffee as well as selected beers, wines and cocktails.

                        Open for catering and private functions 7 days a week, including public holidays, we take the stress out of organising your next birthday party, ladies night or company event.

                        We look forward to sharing our cosy cafe, great food and some Māori and Samoan hospitality with you.</p>
                        <p class="about-p3">
                            Lisa Hawkins & Aaron Paul
                        </p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-bg">
                        <img class="about-bg-img" src="images/Vector 16.png" alt="vector">
                        <div class="about-img">
                            <img src="images/about.png" width="100%" alt="about img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




<!-- -------------------- slide gallery area  -------------------- -->
@if($gallery->count() > 0)
    <section id="slide_gal_area">
        <div class="container-fluid">
            <div class="slide_gel_title text-center">
                <p>BE PART OF THE EXCITEMENT</p>
                <h2>UP CAFE IN ACTION</h2>
            </div>
            <div class="social">
                <a href="https://www.facebook.com/upcafeakl" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/up_cafe/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a>
            </div>
            <div class="gal_slide_view">

                <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                <div class="elfsight-app-52c3bf59-a602-44c6-9d3b-481cb1263955"></div>



            </div>
        </div>
    </section>


@endif
<!-- -------------------- slide gallery area  -------------------- -->

    @include('testimonials-contact')

    @include('layouts.footer')
@endsection