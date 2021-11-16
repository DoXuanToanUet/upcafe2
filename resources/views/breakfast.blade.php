@extends('layouts.app')
@section('title', 'Breakfast')
@section('content')
    <?php
    $option = 'breakfast';
    ?>

    <div class="be-wrapper be-fixed-sidebar be-fixed-sidebar123" style="background-color: #D1E6D7;">
        @include('layouts.checkout-heading', ['currentPage' => $currentPage ?? null])
        @include('layouts.catering-side-menu')

        <div class="be-content">
            <div class="main-content">
                <div class="food-section">
                    <div class="container-fluid">
                        <form class="row" id="menu">
                            @csrf
                            @if(isset($data) && isset($data['finger-food']) && count($data['finger-food']) > 0)
                                <div class="col-lg-4 col-12 p-0">
                                    <div class="row">
                                        <div class="col-12 p-0">
                                            <div class="full  left-gray p-5">
                                                <div class="title doll  " style="margin-top: 36px;">
                                                    <h3 class="">
                                                        FINGER FOOD
                                                        <span class="float-right" style="font-size: 26px;">
                                                        <img src="/assets/front/assets/Icon/fingerfood.svg" width="115%"
                                                             class="float-right">
                                                    </span>
                                                    </h3>
                                                </div>
                                                @foreach($data['finger-food'] as $d)
                                                    <div class="card"
                                                         style="margin-top: 35px; border: none !important; border-radius: none !important; box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                                                        <div class="card-header p-4"
                                                             style="border: none !important; background: rgb(232 232 232);">
                                                            <h4>{{ $d->name }}
                                                                <span class="float-right"
                                                                      style="float: right !important;">
                                      <input class="form-check-input breakfast" type="radio" value="{{$d->id}}"
                                             id="flexCheckChecked" name="finger-food">
                                                        </span>
                                                            </h4>
                                                        </div>
                                                        <div class="card-body p-4">
                                                            {!! $d->content !!}
                                                            <div class="card_end_icon d-flex align-items-end justify-content-end">
                                                                <div class="card_icons1 text-center same-one tooltip-div">
                                                                    <img src="/assets/front/assets/img/green-1.png"
                                                                         alt="man icon">
                                                                    <h6 class="mt-1"
                                                                        style="color: #8EC39B;; font-weight: 500; font-size: 14px; font-weight: 500;">{{ $d->group }}</h6>
                                                                        <span class="tooltiptext">No. of People</span>
                                                                </div>
                                                                <div class="card_icons2  text-center same-one tooltip-div">
                                                                    <img src="/assets/front/assets/img/green-2.png"
                                                                         alt="man icon">
                                                                    <h6 class="mt-1"
                                                                        style="color: #8EC39B;; font-weight: 500; font-size: 14px;">
                                                                        $ <?=number_format($d->price, 2)?></h6>
                                                                        <span class="tooltiptext">Per Person</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endif
                        @if(isset($data) && isset($data['buffet']) && count($data['buffet']) > 0)
                            <!-- 2nd coumn -->
                                <div class="col-lg-4 col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="full p-3"
                                                 style="background-color: transparent; margin-top: 44px;">
                                                <div class="title">
                                                    <h3>BUFFET
                                                        <span class="float-right" style="font-size: 27px;">
                                                        <img src="/assets/front/assets/img/dinerr.png"
                                                             class="float-right" width="40%">
                                                    </span>
                                                    </h3>
                                                </div>
                                                @foreach($data['buffet'] as $d)
                                                    <div class="card"
                                                         style="margin-top: 34px; border: none !important; border-radius: none !important; box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;"
                                                    ">
                                                    <div class="card-header p-4" style="background: rgb(232 232 232);">
                                                        <h4>
                                                            {{$d->name}}
                                                            <span class="float-right">
                                                                <input class="form-check-input coupon_question setup-radio breakfast-buffet"
                                                                       type="radio" name="buffet" value="{{$d->id}}"
                                                                       id="flexCheckDefault"/>
                                                            </span>
                                                        </h4>
                                                    </div>
                                                    <div class="card-body p-4">
                                                        {!! $d->content !!}
                                                        <div class="card_end_icon d-flex justify-content-end">
                                                            <div class="card_icons1 text-center same-one tooltip-div">
                                                                <img src="/assets/front/assets/img/green-1.png"
                                                                     alt="man icon">
                                                                <h6 class="mt-1"
                                                                    style="color: #8EC39B;; font-weight: 500; font-size: 14px; font-weight: 500;">{{$d->group}}</h6>
                                                                    <span class="tooltiptext">No. of People</span>
                                                            </div>
                                                            <div class="card_icons2  text-center same-one tooltip-div">
                                                                <img src="/assets/front/assets/img/green-2.png"
                                                                     alt="man icon">
                                                                <h6 class="mt-1"
                                                                    style="color: #8EC39B;; font-weight: 500; font-size: 14px;">
                                                                    $ <?=number_format($d->price, 2)?></h6>
                                                                    <span class="tooltiptext">Per Person</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if(isset($data['setup']) && count($data['setup']) > 0)

                                                        <div class="setup setup-{{$d->id}} setup-buffet-{{$d->id}}">

                                                            <h4 class="text-center p-2"
                                                                style="font-size: 26px; line-height: 45px;">PLEASE
                                                                SELECT</h4>
                                                            <div class="card-footer border-0"
                                                                 style="background: rgba(142, 195, 155, 0.2);">
                                                                <div class="if-select-buffet">  @foreach($data['setup'] as $s)

                                                                        <div class="selection"
                                                                             style="justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                                                            <span class="selection-name"
                                                                                  style="font-size: 18px; color: #8EC39B; text-transform: uppercase;">{{$s->name}}</span>
                                                                            <span class="price-span">$ {{ number_format($s->price, 2) }}</span>
                                                                            <input class="form-check-input setup-buffet-radio"
                                                                                   type="radio" value="{{$s->id}}"
                                                                                   id="flexCheckDefault" name="setup">


                                                                        </div>


                                                                    @endforeach
                                                                </div>
                                                            </div>

                                                        </div>
                                                    @endif
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                    </div>
                @endif
                <!-- 3rd column -->
                    <div class="col-lg-4 col-12">
                        <div class="row full-height">
                            <div class="col-12">
                                <div class="additional-section full-height">
                                    <div class="full p-5 pb-5 left-white full-height dinner-bavver" style="background-color: white;">
                                        @if(isset($data) && isset($data['additional-options']) && count($data['additional-options']) > 0)
                                            <div class="row mt-5">
                                                <div class="col-md-12">
                                                    <h3 style="font-weight: bold;">ADDITIONAL
                                                        OPTIONS</h3>
                                                </div>

                                            </div>

                                            @foreach($data['additional-options'] as $d)
                                                <div class="form-check mt-5">
                                                    <input class="form-check-input" type="checkbox" value="{{$d->id}}" id="flexCheckDefault" name="beverage[]">
                                                    <label class="form-check-label items-name" for="flexCheckDefault">
                                                        {{$d->name}}
                                                    </label>
                                                    <label class="form-check-label items-price" for="flexCheckDefault">
                                                        $ <?=number_format($d->price,2)?>
                                                    </label>
                                                </div>
                                            @endforeach
                                        @endif
                                        @if(isset($data) && isset($data['beverage']) && count($data['beverage']) > 0)
                                                <div class="row breakfst-top-margin-custom">
                                                    <div class="col">
                                                        <h3 style="font-weight: bold;">BEVERAGES</h3>
                                                    </div>
                                                    <div class="col">
                                                        <img src="/assets/front/assets/img/box.png" class="float-right" width="50px">
                                                    </div>
                                                </div>


                                            @foreach($data['beverage'] as $d)
                                                    <div class="form-check mt-5">
                                                        <input class="form-check-input" type="checkbox" value="{{$d->id}}" id="flexCheckDefault" name="beverage[]">
                                                        <label class="form-check-label items-name" for="flexCheckDefault">
                                                            {{$d->name}}
                                                        </label>
                                                        <label class="form-check-label items-price" for="flexCheckDefault">
                                                            $ <?=number_format($d->price,2)?>
                                                        </label>
                                                    </div>
                                            @endforeach
                                        @endif
                                        <div class="button text-center pb-4" style="margin-top: 52px;">
                                            <button type="submit" class="btn btn-success view-my-selection-button" disabled> VIEW
                                                MY SELECTION
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <?php
    $inner = true;
    ?>
    <style>
        @media screen and (max-width: 767px) {
            .be-left-sidebar .sidebar-elements {
                margin-top: -9px !important;
            }
        }
    </style>
@endsection

@section('scripts')
    <script>
        $(function () {
            const $body = $('body');
            $body.on('change', '.breakfast', function () {
                $('.breakfast-buffet, .setup-buffet-radio').prop('checked', false);
                $('.breakfast-buffet').closest('.card').find('.setup').hide();
            });
            $body.on('change', '.breakfast-buffet', function () {
                $('.breakfast').prop('checked', false);
            });
            $body.on('change', '.form-check-input', function () {
                if ($('.form-check-input:checked').length > 0) {
                    if ($('.view-my-selection-button').prop('disabled')) {
                        $('.view-my-selection-button').prop('disabled', false);
                    }
                } else {
                    $('.view-my-selection-button').prop('disabled', true);
                }
            });
        });
    </script>
@endsection