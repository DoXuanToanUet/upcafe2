@extends('layouts.app')
@section('title', 'More')
@section('content')
    <?php
        $option = ($segment) ? $segment : 'more';
    ?>

    <div class="be-wrapper be-fixed-sidebar be-fixed-sidebar123" style="background-color: #D1E6D7;">
        @include('layouts.checkout-heading', ['currentPage' => $currentPage ?? null])
        @include('layouts.catering-side-menu')

        <div class="be-content">
            <div class="main-content">
                <form class="row" id="menu">
                    @csrf
                    <div class="food-section" style="margin-top: 44px;">
                        <div class="container-fluid">

                            {{--                        ISLAND CARD START--}}
                            @if($segment == 'island')
                            <div class="row island-container">
                                <div class="col-md-12">
                                    <h2 class="fw-bold">
                                        ISLAND <small>(minimum order 35 people)</small>
                                    </h2>
                                </div>

                                @foreach($data['island'] as $island)
                                    <div class="col-md-4">
                                        <div class="title doll mb-5">

                                            <div class="card"
                                                 style="margin-top: 15px; border: none !important; border-radius: 0 !important; box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                                                <div class="card-header p-4 d-flex justify-content-between"
                                                     style="border: none !important; background: rgb(232 232 232);">
                                                    <h4>{!! $island->name !!} <small>(Minimum order {{ $island->group }}
                                                            people)</small></h4>
                                                    @if($island->price != null)
                                                        @if($island->price >= 0)
                                                            <span class="price-span">$ {{ number_format($island->price, 2) }} pp</span>
                                                        @endif
                                                    @endif
                                                    <input class="form-check-input setup-buffet-radio island"
                                                           type="radio" value="{{ $island->id }}"
                                                           id="flexCheckDefault" name="island">
                                                </div>
                                                <div class="card-body">
                                                    {!! $island->content !!}
                                                    <div class="card_end_icon">
                                                        @if(array_key_exists('island-' . Str::slug($island->name, '-') . '-setup', $data))
                                                            @foreach($data['island-' . Str::slug($island->name, '-') . '-setup'] as $islandSetup)
                                                                <div class="selection selection-island island-{{ $island->id }} d-none"
                                                                     style="justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                                            <span class="selection-name"
                                                                  style="font-size: 16px; color: #000; text-transform:capitalize;">{!! $islandSetup->name !!}</span>
                                                                    @if($islandSetup->price != null)
                                                                        @if($islandSetup->price >= 0)
                                                                            <span class="price-span">$ {{ number_format($islandSetup->price, 2) }} pp</span>
                                                                        @endif
                                                                        <input class="form-check-input setup-buffet-radio island-setup"
                                                                               type="radio"
                                                                               value="{{ $islandSetup->id }}"
                                                                               id="flexCheckDefault"
                                                                               name="island-setup">
                                                                    @endif

                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                                @if(array_key_exists('island-' . Str::slug($island->name, '-') . '-additional-options', $data))
                                                    <div class="setup setup-6 setup-buffet-6 setup-island island-{{ $island->id }} d-none"
                                                         style="display: block;">

                                                        <h5 class="text-center p-2 fw-bold" style="font-size: 20px;">
                                                            ADDITIONAL
                                                            OPTIONS </h5>
                                                        <div class="card-footer border-0"
                                                             style="background: rgba(142, 195, 155, 0.2);">
                                                            <div class="if-select-buffet">
                                                                @foreach($data['island-' . Str::slug($island->name, '-') . '-additional-options'] as $additionalOptions)
                                                                    <div class="selection"
                                                                         style="justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                                        <span class="selection-name"
                                                              style="font-size: 18px; color: #8EC39B; text-transform: uppercase;">{!! $additionalOptions->name !!}</span>
                                                                        <span class="price-span">$ {{ number_format($additionalOptions->price, 2) }} pp</span>
                                                                        <input class="form-check-input setup-buffet-radio island-options"
                                                                               type="checkbox"
                                                                               value="{{ $additionalOptions->id }}"
                                                                               id="flexCheckDefault"
                                                                               name="island-options[]">
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>

                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                            @endif
                            {{--                        ISLAND CARD END--}}

                            <!-- <hr> -->
                            {{--                        GRAZE CARD START--}}
                            @if($segment == 'graze')
                            <div class="row mt-5 graze-container">
                                <div class="col-md-12">
                                    <h2 class="fw-bold">
                                        GRAZE <small>(minimum order 25 people, pricing available on request)</small>
                                    </h2>
                                </div>

                                @foreach($data['graze'] as $graze)
                                    <div class="col-md-4 ">
                                        <div class="title doll mb-5">

                                            <div class="card"
                                                 style="margin-top: 15px; border: none !important; border-radius: 0 !important; box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">


                                                <div class="card-header p-4 d-flex justify-content-between"
                                                     style="border: none !important; background: rgb(232 232 232);">
                                                    <h4>{!! $graze->name !!}</h4>
                                                    @if($graze->price != null)
                                                        @if($graze->price >= 0)
                                                            <span class="price-span">$ {{ number_format($graze->price, 2) }} pp</span>
                                                        @endif
                                                        <input class="form-check-input setup-buffet-radio graze"
                                                               type="radio" value="{{ $graze->id }}"
                                                               id="flexCheckDefault" name="graze">
                                                    @else
                                                        <input type="radio" class="d-none graze"
                                                               value="{{ $graze->id }}"
                                                               id="flexCheckDefault" name="graze">
                                                    @endif
                                                </div>
                                                <div class="card-body p-4">
                                                    {!! $graze->content !!}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @endif
                            {{--                        GRAZE CARD END--}}

                            <!-- <hr> -->
                            {{--                        GRAZE CARD START--}}
                            @if($segment == 'funeral')
                            <div class="row mt-5 funeral-container">
                                <div class="col-md-12">
                                    <h2 class="fw-bold">
                                        FUNERAL <small>(minimum order 25 people, individual packaging available)</small>
                                    </h2>
                                </div>

                                @foreach($data['funeral'] as $key => $funeral)
                                    <div class="col-md-4 ">
                                        <div class="title doll mb-5">

                                            <div class="card"
                                                 style="margin-top: 15px; border: none !important; border-radius: 0 !important; box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                                                <div class="card-header p-4 d-flex justify-content-between"
                                                     style="border: none !important; background: rgb(232 232 232);">
                                                    <h4>{!! $funeral->name !!}</h4>
                                                    @if($funeral->price != null)
                                                        @if($funeral->price >= 0)
                                                            <span class="price-span">$ {{ number_format($funeral->price, 2) }} pp</span>
                                                        @endif
                                                    @endif
                                                    <input class="form-check-input setup-buffet-radio funeral"
                                                           type="radio" value="{{ $funeral->id }}"
                                                           id="flexCheckDefault" name="funeral">
                                                </div>
                                                <div class="card-body p-4">
                                                    {!! $funeral->content !!}
                                                    @if(array_key_exists('funeral-option-' . ($key+1) . '-setup', $data))
                                                        @foreach($data['funeral-option-' . ($key+1) . '-setup'] as $setup)
                                                            <div class="selection"
                                                                 style="justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                                <span class="selection-name"
                                                      style="font-size: 16px; color: #000; text-transform:capitalize;">{!! $setup->name !!}</span>
                                                                <span class="price-span">$ {{ number_format($setup->price, 2) }} pp</span>
                                                                <input class="form-check-input setup-buffet-radio funeral-setup"
                                                                       type="radio"
                                                                       value="{{ $setup->id }}" id="flexCheckDefault"
                                                                       name="funeral-setup">
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @endif
                            {{--                        GRAZE CARD END--}}

                            <!-- <hr> -->
                            {{--                        GRAZE CARD START--}}
                            @if($segment == 'high-tea')
                            <div class="row mt-5 high-tea-container">
                                <div class="col-md-12">
                                    <h2 class="fw-bold">
                                        HIGH TEA <small>(Served at Up Cafe only from 11:30am - 2pm)</small>
                                    </h2>
                                </div>

                                @foreach($data['high-tea'] as $tea)
                                    <div class="col-md-6">
                                        <div class="title doll mb-5">

                                            <div class="card"
                                                 style="margin-top: 15px; border: none !important; border-radius: 0 !important; box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                                                <div class="card-header p-4"
                                                     style="border: none !important; background: rgb(232 232 232);">
                                                    <div class="selection"
                                                         style="justify-content: space-between; align-items: center;">
                                                        <h4>{!! $tea->name !!} <small>(Minimum order {{ $tea->group }}
                                                                people)</small></h4>
                                                        @if($tea->price != null)
                                                            @if($tea->price >= 0)
                                                                <span class="price-span">$ {{ number_format($tea->price, 2) }} pp</span>
                                                            @endif
                                                        @endif
                                                        <input class="form-check-input setup-buffet-radio high-tea"
                                                               type="radio" value="{{ $tea->id }}"
                                                               id="flexCheckDefault" name="high-tea">
                                                    </div>
                                                </div>
                                                <div class="card-body p-4">
                                                    {!! $tea->content !!}
                                                </div>
                                                <div class="setup setup-6 setup-buffet-6 d-none"
                                                     style="display: block;">

                                                    <h5 class="text-center p-2 fw-bold" style="font-size: 20px;">
                                                        ADDITIONAL
                                                        OPTIONS </h5>
                                                    <div class="card-footer border-0"
                                                         style="background: rgba(142, 195, 155, 0.2);">
                                                        <div class="if-select-buffet">
                                                            @foreach($data['high-tea-additional-options'] as $option)
                                                                <div class="selection"
                                                                     style="justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                                        <span class="selection-name"
                                                              style="font-size: 18px; color: #8EC39B; text-transform: uppercase;">{!! $option->name !!}</span>
                                                                    <span class="price-span">$ {!! number_format($option->price, 2) !!} pp</span>
                                                                    <input class="form-check-input setup-buffet-radio high-tea-options"
                                                                           type="checkbox" value="{{ $option->id }}"
                                                                           id="flexCheckDefault"
                                                                           name="high-tea-options[]">
                                                                </div>
                                                            @endforeach

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-md-6">

                                </div>

                            </div>
                            @endif
                            {{--                        GRAZE CARD END--}}
                            <!-- <hr> -->
                            {{--                        PLATTERS CARD START--}}
                            @if($segment == 'patters')
                            <div class="row mt-5 platters-container">
                                <div class="col-md-12">
                                    <h2 class="fw-bold">
                                        PLATTERS
                                        <small>(All served with a minimum of 7 pieces per person)</small>
                                    </h2>
                                </div>

                                @foreach($data['platters'] as $platter)
                                    <div class="col-md-4">
                                        <div class="title doll mb-5">

                                            <div class="card"
                                                 style="margin-top: 15px; border: none !important; border-radius: 0 !important; box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                                                <div class="card-header p-4"
                                                     style="border: none !important; background: rgb(232 232 232);">
                                                    <div class="selection"
                                                         style="justify-content: space-between; align-items: center;">
                                                        <h4>{!! $platter->name !!}</h4>
                                                        @if($platter->price != null)
                                                            @if($platter->price >= 0)
                                                                <span class="price-span">$ {{ number_format($platter->price, 2) }} pp</span>
                                                            @endif
                                                        @endif
                                                        <input class="form-check-input setup-buffet-radio platter"
                                                               type="radio" value="{{ $platter->id }}"
                                                               id="flexCheckDefault" name="platter">
                                                    </div>
                                                </div>
                                                <div class="card-body p-4">
                                                    {!! $platter->content !!}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <div class="col-md-4">
                                    <div class="title doll mb-5">

                                        <div class="card"
                                             style="margin-top: 15px; border: none !important; border-radius: 0 !important; box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                                            <div class="card-header p-4"
                                                 style="border: none !important; background: rgb(232 232 232);">
                                                <div class="selection"
                                                     style="justify-content: space-between; align-items: center;">
                                                    <h4>WALK & FORK
                                                        <small>(served in noodle boxes)</small>
                                                    </h4>
                                                    <input class="form-check-input setup-buffet-radio platter platter-walk"
                                                           type="radio" value="{{ $platter->id }}"
                                                           id="flexCheckDefault" name="platter">
                                                </div>
                                            </div>
                                            <div class="card-body p-4">
                                                @foreach($data['platters-walk-and-fork'] as $platter)
                                                    <div class="selection"
                                                         style="justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                                <span class="selection-name"
                                                      style="font-size: 16px; color: #000; text-transform:capitalize;">{!! $platter->name !!}</span>
                                                        <span class="price-span">$ {{ number_format($platter->price, 2) }} pp</span>
                                                        <input class="form-check-input setup-buffet-radio platter-walk-setup"
                                                               type="checkbox"
                                                               value="{{ $platter->id }}" id="flexCheckDefault"
                                                               name="platter-options[]">
                                                    </div>
                                                @endforeach

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            {{--                        PLATTERS CARD NED--}}
                            <!-- <hr> -->
                            {{--                        XMAS THEMED CARD START--}}
                            @if($segment == 'xmas-themed')
                            <div class="row mt-5 xmas-themed-container">
                                <div class="col-md-12">
                                    <h2 class="fw-bold">
                                        XMAS THEMED
                                        <small>(minimum order 10 people)</small>
                                    </h2>
                                </div>

                                @foreach($data['xmas-themed'] as $xmas)
                                    <div class="col-md-4">
                                        <div class="title doll mb-5">

                                            <div class="card"
                                                 style="margin-top: 15px; border: none !important; border-radius: 0 !important; box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                                                <div class="card-header p-4"
                                                     style="border: none !important; background: rgb(232 232 232);">
                                                    <div class="selection"
                                                         style="justify-content: space-between; align-items: center;">
                                                        <h4>{!! $xmas->name !!}</h4>
                                                        @if($xmas->price != null)
                                                            @if($xmas->price >= 0)
                                                                <span class="price-span">$ {{ number_format($xmas->price, 2) }} pp</span>
                                                            @endif
                                                        @endif
                                                        <input class="form-check-input setup-buffet-radio xmas-themed"
                                                               type="checkbox" value="{{ $xmas->id }}"
                                                               id="flexCheckDefault" name="xmas-themed[]">
                                                    </div>
                                                </div>
                                                <div class="card-body p-4">
                                                    {!! $xmas->content !!}

                                                    @if(array_key_exists('xmas-themed-' . Str::slug($xmas->name, '-') . '-setup', $data))
                                                        @foreach($data['xmas-themed-' . Str::slug($xmas->name, '-') . '-setup'] as $setup)
                                                            <div class="selection selection-xmas xmas-{{ $xmas->id }} d-none"
                                                                 style="justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                                    <span class="selection-name"
                                                          style="font-size: 16px; color: #000; text-transform:capitalize;">{!! $setup->name !!}</span>
                                                                <span class="price-span">$ {!! number_format($setup->price, 2) !!} pp</span>
                                                                <input class="form-check-input setup-buffet-radio xmas-themed-setup"
                                                                       type="radio"
                                                                       value="{{ $setup->id }}" id="flexCheckDefault"
                                                                       name="xmas-themed-setup">
                                                            </div>
                                                        @endforeach
                                                    @endif

                                                </div>

                                                @if(array_key_exists('xmas-themed-' . Str::slug($xmas->name, '-') . '-additional-options', $data))
                                                    <div class="setup setup-6 setup-buffet-6 setup-xmas xmas-{{ $xmas->id }} d-none"
                                                         style="display: block;">

                                                        <h5 class="text-center p-2 fw-bold"
                                                            style="font-size: 20px;">ADDITIONAL
                                                            OPTIONS </h5>
                                                        <div class="card-footer border-0"
                                                             style="background: rgba(142, 195, 155, 0.2);">
                                                            <div class="if-select-buffet">
                                                                @foreach($data['xmas-themed-' . Str::slug($xmas->name, '-') . '-additional-options'] as $option)
                                                                    <div class="selection"
                                                                         style="justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                                            <span class="selection-name"
                                                                  style="font-size: 18px; color: #8EC39B; text-transform: uppercase;">{!! $option->name !!}</span>
                                                                        <span class="price-span">$ {{ number_format($option->price, 2) }} pp</span>
                                                                        <input class="form-check-input setup-buffet-radio xmas-themed-options"
                                                                               type="checkbox" value="{{ $option->id }}"
                                                                               id="flexCheckDefault"
                                                                               name="xmas-themed-options[]">
                                                                    </div>
                                                                @endforeach

                                                            </div>
                                                        </div>

                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            @endif
                            {{--                        XMAS THEMED CARD NED--}}


                        </div>

                    </div>

                    <div class="container-fluid main-selction-4  py-5">
                        <div class="row">
                            <div class="view-my-selection mt-4 pb-5 ">
                                <button type="submit" class="btn btn-outline-success view-my-selection-button float-end"
                                        disabled=""> VIEW MY SELECTION
                                </button>

                            </div>
                        </div>
                    </div>
                </form>
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
            $body.on('change', '.island', function (event) {
                const island = $(event.target).val();
                $('.selection-island').each(function (index, element) {
                    if ($(element).hasClass('island-' + island)) {
                        $(element).removeClass('d-none');
                        if ($(element).find('.island-setup:checked').length === 0) {
                            $(element).find('.island-setup:first').prop('checked', true);
                        }
                    } else {
                        $(element).addClass('d-none');
                        $(element).find('input[type="checkbox"], input[type="radio"]').prop('checked', false);
                    }
                });
                $('.setup-island').each(function (index, element) {
                    if ($(element).hasClass('island-' + island)) {
                        $(element).removeClass('d-none');
                    } else {
                        $(element).addClass('d-none');
                        $(element).find('input[type="checkbox"], input[type="radio"]').prop('checked', false);
                    }
                });

            });
            $body.on('change', '.high-tea', function (event) {
                $('.high-tea').each(function (index, element) {
                    if ($(element).prop('checked') === true) {
                        $(element).closest('.card').find('.setup').removeClass('d-none');
                    } else {
                        $(element).closest('.card').find('.setup').addClass('d-none');
                        $(element).closest('.card').find('.high-tea-options').prop('checked', false);
                    }
                });
            });
            $body.on('change', '.funeral-setup', function (event) {
                $('.funeral').prop('checked', false);
                $(event.target).closest('.card').find('.funeral').prop('checked', true);
            });
            $body.on('change', '.high-tea', function (event) {
                $('.high-tea').each(function (index, element) {
                    if ($(element).prop('checked') === true) {
                        $(element).closest('.card').find('.setup').removeClass('d-none');
                    } else {
                        $(element).closest('.card').find('.setup').addClass('d-none');
                        $(element).closest('.card').find('.high-tea-options').prop('checked', false);
                    }
                });
            });
            $body.on('change', '.platter', function (event) {
                if ($(event.target).hasClass('platter-walk')) {
                    if ($('.platter-walk-setup:checked').length === 0) {
                        $('.platter-walk-setup:first').prop('checked', true);
                    }
                } else {
                    $('.platter-walk-setup').prop('checked', false);
                }
            });
            const $xmas = $('.xmas-themed');
            $body.on('change', '.xmas-themed', function (event) {
                const xmas = $(event.target).val();
                $('.selection-xmas, .setup-xmas').each(function (index, element) {
                    if ($(element).hasClass('xmas-' + xmas)) {
                        $(element).removeClass('d-none');
                    } else {
                        $(element).addClass('d-none');
                        $(element).find('input[type="checkbox"], input[type="radio"]').prop('checked', false);
                    }
                });
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