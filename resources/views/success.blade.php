@extends('layouts.app')
@section('title', 'Details')
@section('content')

    <div class="be-wrapper be-fixed-sidebar " style="background-color: white" >
        @include('layouts.checkout-heading', ['currentPage' => $currentPage ?? null])

        <div class="be-left-sidebar">
            <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Dashboard</a>
                <div class="left-sidebar-spacer">
                    <div class="left-sidebar-scroll">
                      
                    </div>
                </div>
            </div>
        </div>

        <div class="be-content" style="background-color: white">
            <div class="main-content success-page">
                <div class="confirm-section py-4">
                        <div class="container">
                            <div class="title mt-4">
                                <h2 class=" p-2">Thanks for placing your order!</h2>
                                <div class="para">
                                    <p class=" px-2">We send you a confirmation email. And will call you shortly.</p>
                                </div>
                            </div>



                            <div class="row mt-5">
                                <div class="col-md-9 review-table mb-4">
                                    <div class="full order-details-done table-responsive p-3">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                            <tr>

                                                <th scope="col">Items</th>
                                                <th scope="col">Price /Per Person</th>
                                                <th scope="col">Group Size</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @if($data)
                                                @foreach($data as $d)
                                            <tr>

                                                <td class="align-middle">

                                                    <h4>{{$d['menu']['name']}}</h4>

                                                </td>
                                                <td class="align-middle"><h5 class="fw-bold  text-center">{{ number_format($d['menu']['price'], 2) }}</h5></td>
                                                <td class="text-center align-middle">
                                                    @if($d['menu']['group'])
                                                        <img src="/assets/front/assets/img/black.png" style="width: 30px;   transform: translate(-2px, -3px);"> <span style="font-weight: bold;">{{$d['quantity']}}</span>
                                                    @endif
                                                </td>
                                            </tr>

                                                @endforeach
                                            @endif


                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-md-3 review-table">
                                    <div class="full order-details-done table-responsive p-3">

                                        <div class="time">
                                            <h3 class="fw-bold mb-4">Contact Information</h3>
                                            <h4 class="mt-1" style="font-weight: bold;">Email - {{ $site->email }}</h4>
                                            <h4 class="mt-1" style="font-weight: bold;">Call- {{ $site->contact }}</h4>
                                            <h4 class="mt-1 mb-4" style="font-weight: bold;">{{$site->address}}</h4>

                                            <a class="btn btn-dark mt-1" href="#" role="button">CONTACT US</a>
                                        </div>
                                        <hr>
                                        <div class="or-contact-us text-center ">
                                            <h5>Want to order more?</h5>
                                            <a href="{{ url('/') }}" class="btn btn-success mt-3" style="background-color: #8EC39B;font-weight: bold; border: none;">PLACE NEW ORDER</a>
                                        </div>

                                    </div>
                                </div>
                            </div>







                        </div>
                    </div>
                </div>
            </div>
       </div>
    </div>
<?php
    $inner = true;
    $success = true;
?>

<style>
    @media screen and (max-width:767px) {
        .be-left-sidebar .sidebar-elements{
            margin-top: -9px !important;
        }
    }

    @media screen and (max-width: 810px){
    .main-page .button-section .show {
        background-color: black;
        padding: 9px 11px;
        color: black;
        color: white;
        font-size: 17px;
    
    }
    }
    .main-page .button-section span::before {
    
        background-color: black;

    }
    .be-left-sidebar:before {
        content: "";
        position: fixed;
        z-index: -1;
        width: inherit;
        top: 0;
        width: 247px;
        left: 0;
        bottom: 0;
        background-color: inherit;
        border-right: none;
    }
</style>
@endsection