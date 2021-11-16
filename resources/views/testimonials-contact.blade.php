@if($testimonials->count() > 0)
        <section id="praise_area">
            <div class="container-fluid testimonial-bg">
                <div class="row">
                    <div class="col-lg-4 text-center">
                        <img class="qur_img" src="images/Vector.png" alt="quor">
                    </div>
                    <div class="col-lg-4">
                        <div class="praise_title text-center">
                            <h2>WHAT OUR CUSTOMERS ARE SAYING</h2>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
                <div class="row">

                    <div class="col-lg-12 p-5 review_position">
                        <div class="review_silder">



                            @foreach($testimonials as $d)
                            <div class="col-md-3">
                                <div class="review_slider_items text-center">
                                    <div class="card">
                                        <div class="card-flex">
                                            <?php
                                                $img = 'https://ui-avatars.com/api/?name='.$d->name;
                                            ?>
                                            <img src="{{$img}}" class="testimonial-profile-image">
                                            <div class="name">
                                                <b>{{$d->name}}</b> recommends <b>Up Cafe</b>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            {{ $d->content }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="review_arrows">
                            <i class="fa fa-arrow-left rleft" aria-hidden="true"></i>
                            <i class="fa fa-arrow-right rright" aria-hidden="true"></i>
                        </div>
                    </div>

                </div>

            </div>
        </section>
    @endif

    <!-- <section id="contect">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="contect_part1">
                        <h2>OPENING HOURS</h2>
                        <div class="row">
                            <div class="col-4 contect_part11">
                                <p>MONDAY</p>
                                <p>TUESDAY</p>
                                <p>WEDNESDAY</p>
                                <p>THURSDAY</p>
                                <p>FRIDAY</p>
                                <p>SAT & SUN</p>
                                <p class="p2p">PUBLIC <br>
                            HOLIDAYS</p>
                            </div>
                            <div class="col-8 contect_part12">
                                <p>8 AM - 2 PM</p>
                                <p>8 AM - 2 PM</p>
                                <p>8 AM - 8 PM    Dinner available</p>
                                <p>8 AM - 8 PM    Dinner available</p>
                                <p>8 AM - 5 PM</p>
                                <p>8 AM - 1 PM</p>
                                <p class="p2p">CLOSED</p>
                                <p class="p2p2">Google latest opening hours</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="contect_part1Img">
{{--                                    <img src="/images/Frame 252.png" alt="map">--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contect_part2 text-center contact-form-home">
                        <h2>GET IN TOUCH</h2>
                        <div class="contect_part2_title_two d-flex justify-content-center">
                            <p>{{$site->contact}}</p><p>|   {{$site->email}}</p>
                        </div>
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
                <div class="col-lg-1 bg-dem"></div>
            </div>
        </div>
    </section> -->