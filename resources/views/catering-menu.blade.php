@extends('layouts.app')
@section('title', 'Catering Menu')
@section('content')

    <?php
        $is_active = 'select';
    ?>

    @include('layouts.checkout-heading', ['currentPage' => $currentPage ?? null])

    <section id="catering_breakfast_content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <div class="model_area">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">BREAKFAST</button>
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">AM/PM TEA</button>
                            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">LUNCH</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">DINNER</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="model_view text-center">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="finger_part text-center">
                                            <div class="finger_title d-flex justify-content-center">
                                                <h2>FINGER FOOD</h2>
                                                <img src="images/fingerfood.png" alt="finger icon">
                                            </div>
                                            @foreach($breakfast['finger-food'] as $d)
                                                <div class="option_card">
                                                    <div class="option_header">
                                                        <div class="row">
                                                            <div class="col-8">
                                                                <div class="option_card_title">
                                                                <h2> OPTION I</h2>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="option_header_select">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card_list">
                                                                <ul>
                                                                    <li>Assorted fruit danishes</li>
                                                                    <li>Petite filled croissants w/ cheese omelette & tomato relish</li>
                                                                    <li>Nutty granola, fresh fruit & yoghurt portions</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card_end_icon d-flex justify-content-end">
                                                                <div class="card_icons1 d-grid">
                                                                    <img src="images/bluw-man-group.png" alt="man icon">
                                                                    <span>20</span>
                                                                </div>
                                                                <div class="card_icons2 d-grid">
                                                                    <img src="images/blue-man.png" alt="man icon">
                                                                    <span>20</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
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
     <div class="arrow_left_btn d-flex">
        <img src="images/arrow_left.png" alt="arrow icon">
        <p><a href="{{ url('/') }}">Back</a></p>
    </div>
    </section>

@endsection