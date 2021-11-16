@extends('layouts.app')
@section('title', 'Details')

@section('styles')
    <style>
        html {
            font-family: sans-serif;
            font-size: 15px;
            line-height: 1.4;
            color: #444;
        }

        body {
            margin: 0;
            background: #504f4f;
            font-size: 1em;
        }

        .wrapper {
            /* margin: 15px auto; */
            max-width: 1100px;
            float: left;
        }

        @media screen and (max-width: 991px) {
            .wrapper {
                /* margin: 15px auto; */
                width: 100%;
                /* float: left; */
                text-align: center;
                margin: auto;
            }
        }


        .button-container-calendar button, .button-container-calendar a {
            cursor: pointer;
            display: inline-block;
            zoom: 1;
            background: #00a2b7;
            color: #fff;
            border: 1px solid #0aa2b5;

            padding: 5px 10px;
        }

        .table-calendar {
            border-collapse: collapse;
            width: 100%;
        }


        /* sunday */
        .date-picker:nth-child(1) {
            color: red;
        }


        .footer-container-calendar label {
            padding-left: 16px
        }

        @media screen and (max-width: 767px) {
            .be-left-sidebar .sidebar-elements {
                margin-top: -9px !important;
            }
        }

        .main-page .button-section .show {
            background-color: black;
            padding: 9px 25px;
            color: black;
            color: white;
            font-size: 17px;
        }

        /*
        @media screen and (max-width: 810px){
            .main-page .button-section{
            background-color: black;
            padding: 9px 25px;
            color: black;
            color: white;
            font-size: 17px;
        }
        } */

        @media screen and (max-width: 1222px) {
            .main-page .button-section span::before {
                content: " ";
                width: 12px;
                height: 3px;
                margin-left: 104px !important;
                background-color: white;
                display: block;
                display: none;
                transform: translateY(-14px);
            }

        }

        @media screen and (max-width: 1118px) {
            .main-page .button-section .show {
                background-color: black;
                padding: 9px 13px;
                color: black;
                color: white;
                font-size: 17px;
            }
        }

        @media screen and (max-width: 1054px) {
            .main-page .button-section .show {
                background-color: black;
                padding: 6px 7px;
                color: black;
                color: white;
                font-size: 17px;
            }
        }

        @media screen and (max-width: 1040px) {
            .main-page .button-section .show {
                background-color: black;
                padding: 6px 7px;
                color: black;
                color: white;
                font-size: 17px;
                display: none;
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
          integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="/assets/front/css/jquery.datetimepicker.css">

@endsection

@section('content')
    <?php
    $is_active = 'details';
    ?>

    <div class="be-wrapper be-fixed-sidebar " style="background-color: white">
        @include('layouts.checkout-heading')

        <div class="be-left-sidebar">
            <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="{{ url('/catering/breakfast') }}">Dashboard</a>
                <div class="left-sidebar-spacer">
                    <div class="left-sidebar-scroll">

                    </div>
                </div>
                <div class="progress-widget">
                    <div class="back-section">
                        <a href="{{ url('/review') }}"><i class="fa fa-angle-left"
                                                          style="margin-left: 27px; color: black;"></i> &nbsp;&nbsp;
                            <span class="" style="font-size: 17px; color: black;">BACK</span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="be-content details-delivery">
            <div class="main-content">
                <div class="delivery-section">
                    <div class="container">
                        <!-- <form action=""> -->


                        <form id="details" class="row main-form-custom">
                            @csrf
                            <input type="hidden" value="1" name="type">
                            <input type="hidden" name="date" class="selected-date">
                            <div class="col-lg-4 col-12 review-table">
                                <div class="full p-4 pb-4 full min-height why-just">
                                    <h4 class="text-center pb-3">We just need a few more
                                        details.</h4>
                                    <div class="input m-auto text-center">
                                        <input type="text" class="form-control mx-auto" placeholder="Name" name="name"
                                               required>
                                    </div>
                                    <div class="input m-auto py-2 text-center">
                                        <input type="text" class="form-control mx-auto" placeholder="Mobile Number"
                                               name="contact" required>
                                    </div>
                                    <div class="input m-auto text-center">

                                    <input type="text" class="form-control mx-auto" placeholder="Email" name="email"
                                           required>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-8 col-12 all-ok review-table">
                        <div class="row full min-height">
                            <div class="col-md-6 p-0">
                                <div class="input-group date calendar-container p-0 m-0">
                                    <div class="container-calendar">
                                    <div class="button">
                                        <a class="btn btn-primary delivery-button bg-light-gray"
                                           href="#" role="button">DELIVERY</a>
                                        <a class="btn btn-primary pickup-button bg-full-black"
                                           href="#" role="button">PICKUP</a>


                                    </div>
                                    </div>

                                    <input type="text" class="form-control datetimepicker-input"  id="datetimepicker1" name="date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="stranges p-3">
{{--                                    <h5 class="mt-5 mb-3 ml-2">Expected time </h5>--}}
                                    <div class="container delivery-address d-none">
                                        <h5 class="mt-5">DELIVER TO</h5>
                                        <div class="caridt">
                                            <div>
                                                <input type="text" name="street" id="ship-address" class="form-control"
                                                       autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="caridt">
                                            <div class="mt-1">
                                                <input type="text" name="apartment" id="address2" class="form-control"
                                                       placeholder="Apartment, unit, suite, or floor #">
                                            </div>
                                            <div class="mt-1">
                                                <input type="text" name="city" id="locality" class="form-control"
                                                       placeholder="City">
                                            </div>
                                            <div class="mt-1">
                                                <input type="text" name="code" id="postcode" class="form-control"
                                                       placeholder="Postal code">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container pickup-address">
                                        <h5 class="mt-5">PICKUP FROM</h5>
                                        <div class="caridt">
                                            <p class=""
                                               style="margin-top: 20px; padding-bottom: 15px;">{{$site->address}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row  justify-content-end button-section mt-3">
                            <button type="submit" class="btn btn-success view-my-selection-button w-lg-25">
                                PLACE ORDER
                            </button>
                        </div>
                    </div>
                    </form>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </div>

    </div>
    <?php
    $detailPage = true;
    ?>

@endsection

@section('scripts')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js" integrity="sha512-AIOTidJAcHBH2G/oZv9viEGXRqDNmfdPVPYOYKGy3fti0xIplnlgMHUGfuNRzC6FkzIo0iIxgFnr9RikFxK+sw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const $body = $('body');

        $body.on('click', '.delivery-button', function (event) {
            event.preventDefault();

            $(this).removeClass('bg-light-gray').addClass('bg-full-black');
            $('.pickup-button').removeClass('bg-full-black').addClass('bg-light-gray');
            $('input[name="type"]').val(0);
            $('.delivery-address').removeClass('d-none');
            $('.pickup-address').addClass('d-none');

            $('.delivery-address input:not(#address2)').prop('required', true);
        });

        $body.on('click', '.pickup-button', function (event) {
            event.preventDefault();

            $(this).removeClass('bg-light-gray').addClass('bg-full-black');
            $('.delivery-button').removeClass('bg-full-black').addClass('bg-light-gray');
            $('input[name="type"]').val(1);
            $('.pickup-address').removeClass('d-none');
            $('.delivery-address').addClass('d-none');

            $('.delivery-address input').prop('required', false);
        });

        $(function () {
            $('#datetimepicker1').datetimepicker({
                minDate: new Date(),
                format:'d/m/Y H:i',
                step: 15,
                hours12:true,
                yearStart: 2021,
                yearEnd: 2022,
                next:'xdsoft_next',
                prev :'xdsoft_prev',

                inline: true
            });
        });
    </script>
    <script>
        let autocomplete;
        let address1Field;
        let address2Field;
        let postalField;

        function initAutocomplete() {
            address1Field = document.querySelector("#ship-address");
            address2Field = document.querySelector("#address2");
            postalField = document.querySelector("#postcode");
            // Create the autocomplete object, restricting the search predictions to
            // addresses in the US and Canada.
            autocomplete = new google.maps.places.Autocomplete(address1Field, {
                componentRestrictions: {country: ["nz"]},
                fields: ["address_components", "geometry"],
                types: ["address"],
            });
            address1Field.focus();
            // When the user selects an address from the drop-down, populate the
            // address fields in the form.
            autocomplete.addListener("place_changed", fillInAddress);
        }

        function fillInAddress() {
            // Get the place details from the autocomplete object.
            const place = autocomplete.getPlace();
            let address1 = "";
            let postcode = "";

            // Get each component of the address from the place details,
            // and then fill-in the corresponding field on the form.
            // place.address_components are google.maps.GeocoderAddressComponent objects
            // which are documented at http://goo.gle/3l5i5Mr
            for (const component of place.address_components) {
                const componentType = component.types[0];

                switch (componentType) {
                    case "street_number": {
                        address1 = `${component.long_name} ${address1}`;
                        break;
                    }

                    case "route": {
                        address1 += component.short_name;
                        break;
                    }

                    case "postal_code": {
                        postcode = `${component.long_name}${postcode}`;
                        break;
                    }

                    case "postal_code_suffix": {
                        postcode = `${postcode}-${component.long_name}`;
                        break;
                    }
                    case "locality":
                        document.querySelector("#locality").value = component.long_name;
                        break;
                }
            }

            address1Field.value = address1;
            postalField.value = postcode;
            // After filling the form with address components from the Autocomplete
            // prediction, set cursor focus on the second address line to encourage
            // entry of subpremise information such as apartment, unit, or floor number.
            address2Field.focus();
        }
    </script>
    <script async
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCos3Dafy5X802CA3eeiAheNC7H-T1LWWY&libraries=places&callback=initAutocomplete"></script>
@endsection