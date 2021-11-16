@extends('layouts.app')
@section('title', 'Contact Us')
<?php $pageName = 'contact'?>
@section('content')
    @include('layouts.header')
<style>
    .container {
        max-width: 1500px;
    }
    nav.desktop {
        width: 100%;
        padding-top: 0;
        padding-bottom: 0;
        position: relative;
        top: 0;
        left: 0;
        z-index: 999;
        background: rgb(27 26 25);
    }

    .footer_top_bg img {
        width: 100%;
        position: relative;
        top: 0;
        display: none;
    }
    .form {
        padding-top: 0;
    }
</style>


    <section class="contact-us-page">


<div class="container">
    <div class="row margin-top-desktop">
        <div class="col-lg-6 col-12 review-table">
            <div class="full p-5">
                <h4>Up Cafe And Catering </h4>
                <div class="contact-info-box mt-5">
                    <h5 class="mb-3"><i class="fa-solid fa-location-dot"></i> {{$site->address}} </h5>
                    <h5 class="mb-3"><i class="fa-solid fa-envelope"></i> <a href="mailto:{{$site->email}}"> {{$site->email}}</a> </h5>
                    <h5 class="mb-3"><i class="fa-solid fa-square-phone"></i><a href="tel:{{$site->contact}}"> {{$site->contact}} </a></h5>
                </div>

                <div class="map-box mt-5">
                    <iframe src="https://maps.google.com/maps?q=Level%201/8%20Albert%20Street,%20Auckland%20CBD,%20Auckland%201010&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                </div>

            </div>
        </div>
        <!-- right -->
        <div class="col-lg-6 col-12 review-table contect_part2 contact-form-home">
            <div class="full p-5 ">
                <h3 class="mb-5">Get in Touch</h3>
                <form id="contact" class="d-grid form">
                    @csrf
                    <input type="text" class="form-control" placeholder="Name" name="name" required>
                    <input type="email" class="form-control" name="mail" id="" placeholder="Email" name="email" required>
                    <input type="tel" class="form-control" name="number" id="" placeholder="Mobile Number" name="contact" required>
                    <textarea class="form-control"  rows="3" name="comment" id="" placeholder="Your message" required></textarea>

                    <input class="btn btn-primary submit-button" type="submit" value="submit">
                </form>
            </div>
        </div>
    </div>
</div>
    </section>



    @include('layouts.footer')
@endsection