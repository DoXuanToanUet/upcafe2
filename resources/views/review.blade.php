@extends('layouts.app')
@section('title', 'Review')
@section('content')
<style>
    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 0px solid rgba(0, 0, 0, .1) !important;
    }
</style>
    <?php
    $is_active = 'review';
    ?>

    <div class="be-wrapper be-fixed-sidebar be-fixed-sidebar123" style="background-color: white;">
        @include('layouts.checkout-heading', ['currentPage' => $currentPage ?? null])

        <div class="be-left-sidebar">
            <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Dashboard</a>
                <div class="left-sidebar-spacer">
                    <div class="left-sidebar-scroll">
                    </div>
                </div>
                <div class="progress-widget">
                    <div class="back-section">
                        <?php
                        // (isset($link) && $link) ? $link : '/';
                        ?>
                        <a href="{{ url('catering/breakfast') }}"><i class="fa fa-angle-left"
                                                                     style="margin-left: 27px; color: black;"></i>
                            &nbsp;&nbsp; <span class="" style="font-size: 17px; color: black;">BACK</span></a>
                    </div>
                </div>
            </div>
        </div>

        @if($data)
            <div class="be-content">
                <div class="main-content">
                    <div class="confirm-section confirm-box-2 py-4">
                        <div class="container-fluid" style="width: 96%;">
                            <form id="editMenu">
                            <div class="row margin-top-desktop">

                                    @csrf
                                    <div class="col-lg-9 col-12 review-table">
                                        <div class="full p-5">
                                            @foreach($data as $d)
                                                <input type="hidden" value="{{$d['menu']['id']}}" name="id[]">
                                                <div class="row mt-5">
                                                    <div class="col-md-6">
                                                        <div class="main-box cart-page-title">
                                                            <h3>{{$d['menu']['name']}}</h3>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 user-group-img">
                                                        @if($d['menu']['price'])
                                                            <img src="/assets/front/assets/img/green-1.png"
                                                                 style="width: 30px;  transform: translate(-2px, -3px);">
                                                            <span style="color: green;">$ {{ $d['menu']['price'] }} pp</span>

                                                        @endif
                                                    </div>
                                                    <div class="col-md-2 user-group-img">
                                                        @if($d['menu']['group'])
                                                            <div class="number">
                                                                <span class="minus">-</span>
                                                                <input type="text" value="{{$d['quantity']}}"
                                                                       data-limit="{{$d['menu']['group']}}"
                                                                       name="quantity[]"/>
                                                                <span class="plus">+</span>
                                                            </div>
                                                        @else
                                                            <input type="hidden" name="quantity[]" value="1"
                                                                   data-limit="1">
                                                        @endif
                                                    </div>
                                                    <div class="col-md-2 user-group-img">
                                                        <div class="text-center">
                                                            <?php
                                                            $deleteId = $d['menu']['id'];
                                                            ?>
                                                            <img src="/assets/front/assets/Icon/delete.svg"
                                                                 style="width: 20px;   transform: translate(-2px, -3px);"
                                                                 onClick="destroy('{{$deleteId}}', '/delete-menu', '/review');">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 2nd -->
                                                <div class="row mt-4">
                                                    <div class="col-12">
                                                        <div class="review_ul">
                                                            {!! $d['menu']['content'] !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            @endforeach
                                        </div>

                                    </div>
                                    <!-- right -->
                                    <div class="col-lg-3 col-12 review-table">
                                        <div class="full time p-5">
                                            <p>Please let us know about special dietary or individual packing
                                                requirements
                                                here (fee apply)</p>
                                            <p style="color: green">*All items are excluding GST, You have to pay the GST at the time of payment</p>
                                        </div>

                                        <div class="button text-center mt-5">
                                            <button class="btn btn-success view-my-selection-button w-100">CONFIRM
                                            </button>
                                        </div>

                                    </div>

                            </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <?php
    $inner = true;
    $review = true;
    ?>

    <style>
        @media screen and (max-width: 767px) {
            .be-left-sidebar .sidebar-elements {
                margin-top: -9px !important;
            }
        }


        @media screen and (max-width: 810px) {
            .main-page .button-section .show {
                background-color: black;
                padding: 9px 11px;
                color: black;
                color: white;
                font-size: 17px;

            }
        }

        .main-page .button-section span::before {

            background-color: white;

        }

        .main-page .button-section .remove::before {

            background-color: white;

        }


        /* plus and minus */

        span {
            cursor: pointer;
        }

        .number {
            margin: 0px;
        }

        .minus, .plus {
            width: 20px;
            height: 20px;
            background: #f2f2f2;
            border-radius: 4px;
            padding: 8px 5px 8px 5px;
            border: 1px solid #ddd;
            display: inline-block;
            vertical-align: middle;
            text-align: center;
        }

        input {
            height: 34px;
            width: 100px;
            text-align: center;
            font-size: 26px;
            border: 1px solid #ddd;
            border-radius: 4px;
            display: inline-block;
            vertical-align: middle;
        }


        input {
            height: 20px;
            width: 27px;
            text-align: center;
            font-size: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            border: none;
            display: inline-block;
            vertical-align: middle;
            font-weight: bold !important;
        }

        .minus {
            width: 25px;
            height: 25px;
            background: #f2f2f2;
            border-radius: 4px;
            padding: 0px 6px 11px 6px;
            border: 0px solid #ddd;
            display: inline-block;
            font-weight: bold;
            vertical-align: middle;
            text-align: center;
            border-radius: 12px;
            font-size: 18px;
        }

        .plus {
            width: 25px;
            height: 25px;
            background: rgba(142, 195, 155, 0.2);
            border-radius: 4px;
            padding: 0px 6px 11px 6px;
            border: 0px solid #ddd;
            display: inline-block;
            font-weight: 300;
            vertical-align: middle;
            text-align: center;
            border-radius: 12px;
            font-size: 18px;
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