@extends('layouts.app')
@section('title', 'Lunch')
@section('content')
    <?php
        $option = 'lunch';
    ?>

    <div class="be-wrapper be-fixed-sidebar be-fixed-sidebar123" style="background-color: #fff;" >
        @include('layouts.checkout-heading', ['currentPage' => $currentPage ?? null])
        @include('layouts.catering-side-menu')
        
        <form id="menu">
            @csrf
            <div class="be-content" id="main-option">
                <div class="main-content">
                    <div class="food-section">
                        <div class="container-fluid">
                            <div class="row d-flex align-items-start">
                            <div class="col-lg-8 col-md-8 col-12 row">
                                    @if(isset($data) && isset($data['main-options']) && count($data['main-options']) > 0)
                                        <?php
                                            $count = count($data['main-options']) / 2;
                                            $exact = count($data['main-options']);
                                        ?>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            @for($i=0;$i<$count;$i++)
                                                <div class="option3-section">
                                                    <div class="row" style="margin-top: 44px;">
                                                        <div class="col-12">
                                                            <div class="full full-custom">
                                                                <div class="head " style="background-color: #F4F4F4; border: none;">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <h4>{{$data['main-options'][$i]['name']}}</h4>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="box3 float-right">
                                                                                <input class="form-check-input" type="radio" value="{{$data['main-options'][$i]['id']}}" id="flexCheckChecked" name="main-options">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="p-2" style="background-color: white; border: none !important; border-radius: none !important; box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;" >
                                                                    <div class="content">
                                                                        {!! $data['main-options'][$i]['content'] !!}
                                                                    </div>
                                                                    <div class="card_end_icon d-flex mt-4 justify-content-end">
                                                                        <div class="card_icons1 text-center same-one tooltip-div">
                                                                            <img src="/assets/front/assets/img/green-1.png" alt="man icon">
                                                                            <h6 class="ml-2 mt-1" style="color: #8EC39B;; font-weight: 500; font-size: 14px; font-weight: 500;">{{$data['main-options'][$i]['group']}}</h6>
                                                                            <span class="tooltiptext">No. of People</span>
                                                                        </div>
                                                                        <div class="card_icons2  text-center same-one tooltip-div">
                                                                            <img src="/assets/front/assets/img/green-2.png" alt="man icon">
                                                                            <h6 class="mt-1" style="color: #8EC39B;; font-weight: 500; font-size: 14px;">$ <?=number_format($data['main-options'][$i]['price'],2)?></h6>
                                                                            <span class="tooltiptext">Per Person</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            @for($i=$count;$i<$exact;$i++)
                                                <div class="option3-section">
                                                    <div class="row" style="margin-top: 44px;">
                                                        <div class="col-12">
                                                            <div class="full full-custom">
                                                                <div class="head " style="background-color: #F4F4F4; border: none;">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <h4>{{$data['main-options'][$i]['name']}}</h4>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="box3 float-right">
                                                                                <input class="form-check-input" type="radio" value="{{$data['main-options'][$i]['id']}}" id="flexCheckChecked" name="main-options" >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="p-2" style="background-color: white; border: none !important; border-radius: none !important; box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;" >
                                                                    <div class="content">
                                                                        {!! $data['main-options'][$i]['content'] !!}
                                                                    </div>
                                                                    <div class="card_end_icon d-flex mt-4 justify-content-end">
                                                                        <div class="card_icons1 text-center same-one tooltip-div">
                                                                            <img src="/assets/front/assets/img/green-1.png" alt="man icon">
                                                                            <h6 class="ml-2 mt-1" style="color: #8EC39B;; font-weight: 500; font-size: 14px; font-weight: 500;">{{$data['main-options'][$i]['group']}}</h6>
                                                                            <span class="tooltiptext">No. of People</span>
                                                                        </div>
                                                                        <div class="card_icons2  text-center  same-one tooltip-div">
                                                                            <img src="/assets/front/assets/img/green-2.png" alt="man icon">
                                                                            <h6 class="mt-1" style="color: #8EC39B;; font-weight: 500; font-size: 14px;">$ <?=number_format($data['main-options'][$i]['price'],2)?></h6>
                                                                            <span class="tooltiptext">Per Person</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor
                                        </div>
                                    @endif
                                </div>
                                @if(isset($data) && isset($data['salad']) && count($data['salad']) > 0)
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="additional-section">
                                                    <div class="full  p-3 pb-5" style="background-color: white;">
                                                        <div class="bever dinner-bavver" style="margin-top: 12px;">
                                                            <div class="row" style="margin-top: 2.3rem;">
                                                                <div class="col-md-10 p-0">
                                                                    <h3 style="font-weight: bold;">SALAD OPTIONS</h3>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <img src="/assets/front/assets/img/box.png" class="float-right" width="50px">
                                                                </div>
                                                            </div>

                                                            @foreach($data['salad'] as $d)
                                                                <div class="form-check mt-5">
                                                                    <input class="form-check-input" type="checkbox" value="{{$d->id}}" id="flexCheckDefault" name="salad[]">
                                                                    <label class="form-check-label items-name" for="flexCheckDefault">
                                                                        {{$d->name}}
                                                                    </label>
                                                                    <label class="form-check-label items-price" for="flexCheckDefault">
                                                                        $ <?=number_format($d->price,2)?>
                                                                    </label>
                                                                </div>

                                                            @endforeach

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>


                            <div class="row">


                            <div class="col-lg-8 col-md-8 col-12 row">
                                <div class="main-selction-4  pb-5 mt-6">
                                    <div class="view-my-selection m-auto text-center  pb-5">
                                        <button type="button" class="btn btn-success main-option arrow-button-white w-100">ADDITIONAL OPTIONS</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12 row">
                                <div class="main-selction-4  pb-5 mt-6">
                                    <div class="button text-center ">
                                        <button type="submit" class="btn btn-outline-success view-my-selection-button" disabled> VIEW MY SELECTION</button>
                                    </div>
                                </div>
                            </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="be-content" id="sub-option">
                <div class="main-content">
                    <div class="dinner-cafe-section py-4">
                        <div class="container-fluid">
                            <div class="row mt-4">
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="all">
                                        <img src="/assets/front/assets/img/v.png" width="15%"> <span> VEGETARIAN</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="all">
                                        <img src="/assets/front/assets/img/gf.png" width="15%"> <span> GLUTEN FREE</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="all">
                                        <img src="/assets/front/assets/img/veg.png" width="15%"> <span> VEGAN</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="all">
                                        <span> PRICING AVAILABLE ON <span class="ml-1"> REQUEST</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="food-section py-4">
                            <div class="container-fluid">
                                <div class="row"  style="margin-top: 22px;" >
                                    @if(isset($data) && isset($data['sandwich']) && count($data['sandwich']))
                                        <div class="col-lg-4 col-12">
                                            <h2 class=" ml-5" style="font-weight: 500;">SANDWICH  </h2>
                                            <div class="option3-section dinner">
                                                <div class="full " style="background-color: #fff;">
                                                    <div class="height  p-5">
                                                        @foreach($data['sandwich'] as $d)
                                                            <div class="check-1">
                                                                <input class="form-check-input" type="checkbox" value="{{$d->id}}" id="flexCheckDefault" name="sandwich[]"> <span>{{$d->name}}</span>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if(isset($data) && isset($data['savoury']) && count($data['savoury']))
                                        <div class="col-lg-4 col-12">
                                            <h2 class=" ml-5" style="font-weight: 500;">SAVOURY  </h2>
                                            <div class="option3-section dinner">
                                                <div class="full " style="background-color: #fff;">
                                                    <div class="height  p-5">
                                                        @foreach($data['savoury'] as $d)
                                                            <div class="check-1">
                                                                <input class="form-check-input" type="checkbox" value="{{$d->id}}" id="flexCheckDefault" name="savoury[]"> <span>{{$d->name}}</span>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if(isset($data) && isset($data['sweet']) && count($data['sweet']))
                                        <div class="col-lg-4 col-12">
                                            <h2 class=" ml-5" style="font-weight: 500;">SWEET  </h2>
                                            <div class="option3-section dinner">
                                                <div class="full " style="background-color: #fff;">
                                                    <div class="height  p-5">
                                                        @foreach($data['sweet'] as $d)
                                                            <div class="check-1">
                                                                <input class="form-check-input" type="checkbox" value="{{$d->id}}" id="flexCheckDefault" name="sweet[]"> <span>{{$d->name}}</span>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid main-selction-4  py-5">
                            <div class="view-my-selection  mt-4 pb-5 ">
                                <button type="button" class="btn btn-success sub-option arrow-button">MAIN OPTIONS</button>
                                <button type="submit" class="btn btn-success  four view-my-selection-button" disabled>VIEW MY SELECTION</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

<?php
    $inner = true;
?>
<style>
    @media screen and (max-width:767px) {
        .be-left-sidebar .sidebar-elements{
            margin-top: -9px !important;
        }
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

@section('scripts')
    <script>
        $('body').on('change', '.form-check-input', function () {
            if ($('.form-check-input:checked').length > 0) {
                if ($('.view-my-selection-button').prop('disabled')) {
                    $('.view-my-selection-button').prop('disabled', false);
                }
            } else {
                $('.view-my-selection-button').prop('disabled', true);
            }
        });
    </script>
@endsection