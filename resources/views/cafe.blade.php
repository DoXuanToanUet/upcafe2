<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Upcafe" />
<meta name="author" content="Upcafe" />
<meta name="robots" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Upcafe | Admin" />
<meta property="og:title" content="Upcafe | Admin" />
<meta property="og:description" content="Upcafe | Admin" />
<meta property="og:image" content="{{asset('assets/admin/images/screen_area.png')}}" />
<meta name="format-detection" content="telephone=no">

<!-- PAGE TITLE HERE -->
<title>Upcafe | Cafe</title>

<meta name="csrf-token" content="{{ csrf_token() }}">
@extends('layouts.app')
@section('title', 'Catering')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/front/css/venobox.css') }}">
@endsection
<?php
    $pageName = 'cafe';
?>
@section('content')
    @include('layouts.header')


    <!-- -------------------- banner area -------------------- -->
    @if($banner->count() > 0)
        <section id="banner_area">
            <div class="banner_slider">
                @foreach($banner as $b)
                    <div class="banner_slider_items">
                        <?php
                        $img = asset('uploads/banner/' . $b->name);
                        ?>
                        <img src="{{$img}}" alt="{{$b->title}}" class="banner-img">
                    </div>
                @endforeach
            </div>
            <div class="banner_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner_overlay_content boct">
                                <h1>CAFE<br>
                                    <a href="#">BREAKFAST | LUNCH | DINNER</a>
                                </h1>
                                
                            </div>
                            <!-- <div class="banner_big_arrow2 text-center">
                                <img src="images/arrowstop.png" alt="arrow">
                            </div> -->
                        </div>
                    </div>
                </div>
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

    <!-- -------------------- promise area-------------------- -->
    @if($menu->count() > 0)
        <section id="promise_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="promise_content text-center">
                            <h3>MADE WITH AROHA</h3>
                            <h2>OUR CAFE MENU</h2>
                            <p class="promise_contentp">Enjoy breakfast, lunch and dinner in our cosy cafe or to take
                                away. Including guilt and gluten-free plus vegetarian options. Selected beer, wine and
                                cocktails plus great coffee await.</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="top_review1">
                            <img src="images/top reviews logo 1.png" alt="topReview">
                            <p>Top Cafes & Best Food Delivery <br> Services in Auckland 2020</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">


                    <div class="manu_slider_items">
                        @foreach($menu as $d)
                            <div class="col-md-4">

                                <a class="venobox" href="{{asset('uploads/cafe/'.$d->file)}}">
                                    <img src="{{asset('uploads/cafe/'.$d->file)}}">
                                </a>

                            </div>

                        @endforeach

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 text-center cafe-page-order-button">
                        <a class="btn btn-primary order-now" href="tel:<?=$site->contact?>" role="button"><i class="fas fa-phone"></i> RESERVE A TABLE</a>
                        <a class="btn btn-primary order-now" href="mailto:<?=$site->email?>" role="button"><i class="fa fa-envelope"></i> PRE-ORDER NOW</a>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- -------------------- slide gallery area  -------------------- -->
    @if($gallery->count() > 0)
        <section id="slide_gal_area">
            <div class="container-fluid">
                <div class="slide_gel_title text-center">
                    <p>NORMAL DAY AT THE OFFICE</p>
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

@section('scripts')
    <script src="{{ asset('assets/front/js/venobox.min.js') }}"></script>
@endsection