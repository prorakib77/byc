@extends('layouts.frontend_master')

@section('content')


    <!-- ================> banner section start here <================== -->
    <div class="banner__section home-2">
        <div class="container">
            <div class="banner">
                <div class="banner__content">
                    <h2>বাগাদানার মানুষের পাশে দাঁড়ান</h2>
                    <h5>Bounty always receives part of its value from the manner in which it is bestowed.</h5>
                    <a href="{{ route('contact') }}" class="default-btn move-right"><span>Learn More</span></a>
                </div>
            </div>
        </div>
        <div class="banner__thumb text-center">
            <img src="{{ asset('frontend') }}/assets/images/banner/home-2/01.png" alt="banner-thumb">
            <ul>
                <li><img src="{{ asset('frontend') }}/assets/images/banner/home-2/shape/01.png" alt="banner-thumb"></li>
                <li><img src="{{ asset('frontend') }}/assets/images/banner/home-2/shape/02.png" alt="banner-thumb"></li>
                <li><img src="{{ asset('frontend') }}/assets/images/banner/home-2/shape/03.png" alt="banner-thumb"></li>
            </ul>
        </div>
    </div>
    <!-- ================> banner section end here <================== -->


    <!-- ================> about section start here <================== -->
    {{-- <div class="about-section bg-white padding--top padding--bottom">
        <div class="container">
            <div class="about">
                <div class="d-flex flex-wrap flex-xl-nowrap align-items-start">
                    <div class="about__filter nav flex-xl-column  justify-content-center nav-pills me-xl-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-one-tab" data-bs-toggle="pill" data-bs-target="#v-pills-one" type="button" role="tab" aria-controls="v-pills-one" aria-selected="true">
                            <img src="{{ asset('frontend') }}/assets/images/about/icon/01.png" alt="about-thumb"><span>Recycling Rubbish</span>
                        </button>
                        <button class="nav-link" id="v-pills-two-tab" data-bs-toggle="pill" data-bs-target="#v-pills-two" type="button" role="tab" aria-controls="v-pills-two" aria-selected="false">
                            <img src="{{ asset('frontend') }}/assets/images/about/icon/02.png" alt="about-thumb"><span>Plant Ecology</span>
                        </button>
                        <button class="nav-link" id="v-pills-three-tab" data-bs-toggle="pill" data-bs-target="#v-pills-three" type="button" role="tab" aria-controls="v-pills-three" aria-selected="false">
                            <img src="{{ asset('frontend') }}/assets/images/about/icon/03.png" alt="about-thumb"><span>Dynamic Ecology</span>
                        </button>
                        <button class="nav-link" id="v-pills-four-tab" data-bs-toggle="pill" data-bs-target="#v-pills-four" type="button" role="tab" aria-controls="v-pills-four" aria-selected="false">
                            <img src="{{ asset('frontend') }}/assets/images/about/icon/04.png" alt="about-thumb"><span>Recycling Materials</span>
                        </button>
                        <button class="nav-link" id="v-pills-five-tab" data-bs-toggle="pill" data-bs-target="#v-pills-five" type="button" role="tab" aria-controls="v-pills-five" aria-selected="false">
                            <img src="{{ asset('frontend') }}/assets/images/about/icon/05.png" alt="about-thumb"><span>Eco Idea</span>
                        </button>
                    </div>
                    <div class="about__filtercontent tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-one" role="tabpanel" aria-labelledby="v-pills-one-tab">
                            <div class="about__item">
                                <div class="about__inner">
                                    <div class="about__thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/about/01.jpg" alt="about-thumb">
                                    </div>
                                    <div class="about__content">
                                        <h5>We love to Plant ecology</h5>
                                        <h6>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</h6>
                                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The sed odio sit amet vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        <a href="#" class="default-btn move-right"><span>Apply Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-two" role="tabpanel" aria-labelledby="v-pills-two-tab">
                            <div class="about__item">
                                <div class="about__inner">
                                    <div class="about__thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/about/01.jpg" alt="about-thumb">
                                    </div>
                                    <div class="about__content">
                                        <h5>We love to Plant ecology</h5>
                                        <h6>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</h6>
                                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The sed odio sit amet vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        <a href="#" class="default-btn move-right"><span>Apply Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-three" role="tabpanel" aria-labelledby="v-pills-three-tab">
                            <div class="about__item">
                                <div class="about__inner">
                                    <div class="about__thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/about/01.jpg" alt="about-thumb">
                                    </div>
                                    <div class="about__content">
                                        <h5>We love to Plant ecology</h5>
                                        <h6>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</h6>
                                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The sed odio sit amet vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        <a href="#" class="default-btn move-right"><span>Apply Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-four" role="tabpanel" aria-labelledby="v-pills-four-tab">
                            <div class="about__item">
                                <div class="about__inner">
                                    <div class="about__thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/about/01.jpg" alt="about-thumb">
                                    </div>
                                    <div class="about__content">
                                        <h5>We love to Plant ecology</h5>
                                        <h6>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</h6>
                                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The sed odio sit amet vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        <a href="#" class="default-btn move-right"><span>Apply Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-five" role="tabpanel" aria-labelledby="v-pills-five-tab">
                            <div class="about__item">
                                <div class="about__inner">
                                    <div class="about__thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/about/01.jpg" alt="about-thumb">
                                    </div>
                                    <div class="about__content">
                                        <h5>We love to Plant ecology</h5>
                                        <h6>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</h6>
                                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The sed odio sit amet vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        <a href="#" class="default-btn move-right"><span>Apply Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- ================> about section end here <================== -->



    <!-- ================> Donate Range section start here <================== -->
    <div class="donate-range-section padding--top padding--bottom bg-img">
        <div class="container">
            <div class="section-header style-3">
                <h4>We Are Very Thankful</h4>
            </div>
            <div class="section-wrapper">
                <div class="donaterange">
                    <div class="donaterange__content">
                        <h3>You’ve helped us raise an overwhelming</h3>
                        <h3><span>&#2547;15,0000</span> so far!</h3>
                        <div class="donaterange__bars" data-percent="60%">
                            <div class="donaterange__bar"></div>
                        </div>
                        <a href="{{ route('donate') }}" class="default-btn move-right"><span>Donate <i class="fas fa-heart"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Donate Range section end here <================== -->



    <!-- ================> Volunteer section start here <================== -->
    {{-- <div class="volunteer-section padding--top padding--bottom">
        <div class="container">
            <div class="section-header style-2">
                <h2>Volunteers</h2>
                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
            </div>
            <div class="section-wrapper">
                <div class="volunteer">
                    <div class="row justify-content-center g-4">
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="volunteer__item">
                                <div class="volunteer__inner text-center">
                                    <div class="volunteer__thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/volunteer/01.jpg" alt="volunteer" class="rounded-circle">
                                    </div>
                                    <div class="volunteer__content">
                                        <h5>john Doe</h5>
                                        <span>Founder</span>
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        <div class="footer__social">
                                            <ul class="justify-content-center">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="volunteer__item">
                                <div class="volunteer__inner text-center">
                                    <div class="volunteer__thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/volunteer/02.jpg" alt="volunteer" class="rounded-circle">
                                    </div>
                                    <div class="volunteer__content">
                                        <h5>Jesmine Doe</h5>
                                        <span>Director</span>
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        <div class="footer__social">
                                            <ul class="justify-content-center">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="volunteer__item">
                                <div class="volunteer__inner text-center">
                                    <div class="volunteer__thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/volunteer/03.jpg" alt="volunteer" class="rounded-circle">
                                    </div>
                                    <div class="volunteer__content">
                                        <h5>Martin Doe</h5>
                                        <span>Maneger</span>
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        <div class="footer__social">
                                            <ul class="justify-content-center">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="volunteer__item">
                                <div class="volunteer__inner text-center">
                                    <div class="volunteer__thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/volunteer/04.jpg" alt="volunteer" class="rounded-circle">
                                    </div>
                                    <div class="volunteer__content">
                                        <h5>Anthony Doe</h5>
                                        <span>Photographer</span>
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        <div class="footer__social">
                                            <ul class="justify-content-center">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- ================> Volunteer section end here <================== -->


    <!-- ================> Volunteer section start here <================== -->
    <div class="volunteer-section bg-ash padding--top padding--bottom">
        <div class="container">
            <div class="section-header style-2">
                <h2>Volunteers</h2>
                <p>We want to make sure you get as much out of volunteering as you put into it. That’s why we work hard to match your aims, goals, aspirations, personality, available time and everything else with opportunities in your area.</p>
            </div>
            <div class="section-wrapper pt-4">
                <div class="volunteer volunteer-style2">
                    <div class="volunteer__item volunteer__item-style2">
                        <div class="volunteer__inner">
                            <div class="volunteer__thumb">
                                <img src="{{ asset('frontend') }}/assets/images/volunteer/byc_bol.jpg" alt="volunteer">
                            </div>
                            <div class="volunteer__content">
                                <div class="volunteer__top">
                                    <div class="volunteer__icon">
                                        <i class="far fa-user"></i>
                                    </div>
                                    <div class="volunteer__title">
                                        <h5>Become A Volunteer</h5>
                                        <h6>To become a volunteer please click on apply button and fill the form with valid information.</h6>
                                    </div>
                                </div>
                                <div class="volunteer__bottom">
                                    <p>We ask our wonderful volunteers every year what they’ve gained from their experiences with us. Their answers show that volunteering is not only good for the community, but can improve your physical and mental health and wellbeing.</p>
                                    <a href="{{ route('volunteer') }}" class="default-btn move-right"><span>Apply Now</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Volunteer section end here <================== -->



    <!-- ================> Gallery section start here <================== -->
    <div class="gallery-section padding--top padding--bottom" id="gallery">
        <div class="container">
            <div class="section-header style-2">
                <h2>Gallery</h2>
                <p>Some Of our Works For Inspire People</p>
            </div>
            <div class="section-wrapper">
                <div class="gallery">
                    <div class="gallery__filter">
                        <ul>
                            <li data-filter="*" class="active">All</li>
                            <li data-filter=".charity">Flood</li>
                            <li data-filter=".nature">Nature</li>
                            <li data-filter=".wildlife">wildlife</li>
                            <li data-filter=".video">Video</li>
                            <li data-filter=".children">Children</li>
                        </ul>
                    </div>
                    <div class="row g-4 grid">
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 charity children">
                            <div class="gallery__item">
                                <div class="gallery__inner">
                                    <div class="gallery__thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/gallery/home-2/1.jpg" alt="gallery-thumb" class="w-100">
                                    </div>
                                    <div class="gallery__content text-center">
                                        <a href="{{ asset('frontend') }}/assets/images/gallery/home-2/1.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 nature video">
                            <div class="gallery__item">
                                <div class="gallery__inner">
                                    <div class="gallery__thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/gallery/home-2/2.jpg" alt="gallery-thumb" class="w-100">
                                    </div>
                                    <div class="gallery__content text-center">
                                        <a href="{{ asset('frontend') }}/assets/images/gallery/home-2/2.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                        <h5>e</h5>
                                    </div>
                                    <div class="gallery__content text-center">
                                        <a href="{{ asset('frontend') }}/assets/images/gallery/home-2/12.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wildlife">
                            <div class="gallery__item">
                                <div class="gallery__inner">
                                    <div class="gallery__thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/gallery/home-2/3.jpg" alt="gallery-thumb" class="w-100">
                                    </div>
                                    <div class="gallery__content text-center">
                                        <a href="{{ asset('frontend') }}/assets/images/gallery/home-2/3.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 charity">
                            <div class="gallery__item">
                                <div class="gallery__inner">
                                    <div class="gallery__thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/gallery/home-2/4.jpg" alt="gallery-thumb" class="w-100">
                                    </div>
                                    <div class="gallery__content text-center">
                                        <a href="{{ asset('frontend') }}/assets/images/gallery/home-2/4.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 nature">
                            <div class="gallery__item">
                                <div class="gallery__inner">
                                    <div class="gallery__thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/gallery/home-2/5.jpg" alt="gallery-thumb" class="w-100">
                                    </div>
                                    <div class="gallery__content text-center">
                                        <a href="{{ asset('frontend') }}/assets/images/gallery/home-2/5.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wildlife video">
                            <div class="gallery__item">
                                <div class="gallery__inner">
                                    <div class="gallery__thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/gallery/home-2/6.jpg" alt="gallery-thumb" class="w-100">
                                    </div>
                                    <div class="gallery__content text-center">
                                        <a href="{{ asset('frontend') }}/assets/images/gallery/home-2/6.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 children">
                            <div class="gallery__item">
                                <div class="gallery__inner">
                                    <div class="gallery__thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/gallery/home-2/7.jpg" alt="gallery-thumb" class="w-100">
                                    </div>
                                    <div class="gallery__content text-center">
                                        <a href="{{ asset('frontend') }}/assets/images/gallery/home-2/7.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 nature">
                            <div class="gallery__item">
                                <div class="gallery__inner">
                                    <div class="gallery__thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/gallery/home-2/8.jpg" alt="gallery-thumb" class="w-100">
                                    </div>
                                    <div class="gallery__content text-center">
                                        <a href="{{ asset('frontend') }}/assets/images/gallery/home-2/8.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                        <h5></h5>
                                    </div>
                                    <div class="gallery__content text-center">
                                        <a href="{{ asset('frontend') }}/assets/images/gallery/home-2/9.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                        <h5></h5>
                                    </div>
                                    <div class="gallery__content text-center">
                                        <a href="{{ asset('frontend') }}/assets/images/gallery/home-2/10.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Gallery section end here <================== -->


    <!-- ================> Testimonial section start here <================== -->
    {{-- <div class="testimonial-section padding--top padding--bottom bg-img">
        <div class="container">
            <div class="section-wrapper">
                <div class="testimonial">
                    <div class="testimonial__slider overflow-hidden">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial__item">
                                    <div class="testimonial__inner text-center">
                                        <div class="testimonial__content">
                                            <h5>Maria Jones</h5>
                                            <p>“Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.”</p>
                                        </div>
                                        <div class="testimonial__thumb">
                                            <img src="{{ asset('frontend') }}/assets/images/testimonial/01.jpg" alt="testimonial-thumb" class="rounded-circle">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial__item">
                                    <div class="testimonial__inner text-center">
                                        <div class="testimonial__content">
                                            <h5>Maria Jones</h5>
                                            <p>“Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.”</p>
                                        </div>
                                        <div class="testimonial__thumb">
                                            <img src="{{ asset('frontend') }}/assets/images/testimonial/01.jpg" alt="testimonial-thumb" class="rounded-circle">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial__item">
                                    <div class="testimonial__inner text-center">
                                        <div class="testimonial__content">
                                            <h5>Maria Jones</h5>
                                            <p>“Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.”</p>
                                        </div>
                                        <div class="testimonial__thumb">
                                            <img src="{{ asset('frontend') }}/assets/images/testimonial/01.jpg" alt="testimonial-thumb" class="rounded-circle">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__pagination text-center"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- ================> Testimonial section end here <================== -->


    <!-- ================> Blog section start here <================== -->
    {{-- <div class="blog-section padding--top padding--bottom" id="blog">
        <div class="container">
            <div class="section-header style-2">
                <h2>News</h2>
                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
            </div>
            <div class="section-wrapper">
                <div class="blog blog-style2">
                    <div class="row g-4">
                        <div class="col-lg-6 col-12">
                            <div class="blog__item">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="blog-single.html"><img src="{{ asset('frontend') }}/assets/images/blog/02.jpg" alt="blog-thumb" class="w-100"></a>
                                    </div>
                                    <div class="blog__content">
                                        <div class="blog__meta">
                                            <div class="blog__icon">
                                                <i class="fas fa-image"></i>
                                            </div>
                                            <ul>
                                                <li>09 Nov 21</li>
                                                <li>John Doe</li>
                                                <li>24 Comments</li>
                                            </ul>
                                        </div>
                                        <div class="blog__postcontent">
                                            <a href="blog-single.html"><h5>Awesome Blog Post Title Goes Here</h5></a>
                                            <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                                            <a href="blog-single.html" class="default-btn move-bottom"><span>Read On</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="blog__item">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="blog-single.html"><img src="{{ asset('frontend') }}/assets/images/blog/03.jpg" alt="blog-thumb" class="w-100"></a>
                                    </div>
                                    <div class="blog__content">
                                        <div class="blog__meta">
                                            <div class="blog__icon">
                                                <i class="fas fa-image"></i>
                                            </div>
                                            <ul>
                                                <li>09 Nov 21</li>
                                                <li>John Doe</li>
                                                <li>24 Comments</li>
                                            </ul>
                                        </div>
                                        <div class="blog__postcontent">
                                            <a href="blog-single.html"><h5>Awesome Blog Post Title Goes Here</h5></a>
                                            <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                                            <a href="blog-single.html" class="default-btn move-bottom"><span>Read On</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="blog__item">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="blog-single.html"><img src="{{ asset('frontend') }}/assets/images/blog/04.jpg" alt="blog-thumb" class="w-100"></a>
                                    </div>
                                    <div class="blog__content">
                                        <div class="blog__meta">
                                            <div class="blog__icon">
                                                <i class="fas fa-image"></i>
                                            </div>
                                            <ul>
                                                <li>09 Nov 21</li>
                                                <li>John Doe</li>
                                                <li>24 Comments</li>
                                            </ul>
                                        </div>
                                        <div class="blog__postcontent">
                                            <a href="blog-single.html"><h5>Awesome Blog Post Title Goes Here</h5></a>
                                            <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                                            <a href="blog-single.html" class="default-btn move-bottom"><span>Read On</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="blog__item">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="blog-single.html"><img src="{{ asset('frontend') }}/assets/images/blog/05.jpg" alt="blog-thumb" class="w-100"></a>
                                    </div>
                                    <div class="blog__content">
                                        <div class="blog__meta">
                                            <div class="blog__icon">
                                                <i class="fas fa-image"></i>
                                            </div>
                                            <ul>
                                                <li>09 Nov 21</li>
                                                <li>John Doe</li>
                                                <li>24 Comments</li>
                                            </ul>
                                        </div>
                                        <div class="blog__postcontent">
                                            <a href="blog-single.html"><h5>Awesome Blog Post Title Goes Here</h5></a>
                                            <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                                            <a href="blog-single.html" class="default-btn move-bottom"><span>Read On</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- ================> Blog section end here <================== -->


    <!-- ================> Event section start here <================== -->
    <div class="event-section padding--top padding--bottom" id="event">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-12">
                    <div class="section-header style-4">
                        <div class="event-icon">
                            <i class="far fa-calendar-alt"></i>
                        </div>
                        <h3>upComing Events</h3>
                        <p>To Join our upcomming events please fillup our volunteer form.</p>
                        <div class="event_navi">
                            <div class="event__next">
                                <i class="fas fa-chevron-left"></i>
                            </div>
                            <div class="event__prev">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="section-wrapper">
                        <div class="event">
                            <div class="event__slider overflow-hidden">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="event__item">
                                            <div class="event__inner">
                                                <div class="event__thumb">
                                                    <img src="{{ asset('frontend') }}/assets/images/gallery/home-2/7.jpg" alt="event-thumb">
                                                </div>
                                                <div class="event__content">
                                                    <div class="event__author">
                                                        <img src="{{ asset('frontend') }}/assets/images/logo/byc_logo.png" alt="event-thumb">
                                                        <div class="name">
                                                            <h6>Bagadana Youth Community</h6>
                                                            <span>Save The World</span>
                                                        </div>
                                                    </div>
                                                    <div class="event__list">
                                                        <a href="event-single.html"><h5>Helping flood affected people</h5></a>
                                                        <ul>
                                                            <li><i class="far fa-clock"></i><b>Time:</b> 03 Sep 2024 at 02:00 pm</li>
                                                            <li><i class="fas fa-map-marker-alt"></i><b>Address:</b>Bagadana, kazirhat, Feni</li>
                                                        </ul>
                                                    </div>
                                                    <div class="event__btn">
                                                        <a href="{{ route('contact') }}" class="default-btn move-right"><span>Read More</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="event__item">
                                            <div class="event__inner">
                                                <div class="event__thumb">
                                                    <img src="{{ asset('frontend') }}/assets/images/volunteer/byc_bol.jpg" alt="event-thumb">
                                                </div>
                                                <div class="event__content">
                                                    <div class="event__author">
                                                        <img src="{{ asset('frontend') }}/assets/images/logo/byc_logo.png" alt="event-thumb">
                                                        <div class="name">
                                                            <h6>Bagadana Youth community</h6>
                                                            <span>Save trees, Save Life</span>
                                                        </div>
                                                    </div>
                                                    <div class="event__list">
                                                        <a href="event-single.html"><h5>Tree Plantation</h5></a>
                                                        <ul>
                                                            <li><i class="far fa-clock"></i><b>Time:</b> 03 Oct 2024 at 02:00 pm</li>
                                                            <li><i class="fas fa-map-marker-alt"></i><b>Address:</b>Bagadana, Kazirhat Feni.</li>
                                                        </ul>
                                                    </div>
                                                    <div class="event__btn">
                                                        <a href="{{ route('contact') }}" class="default-btn move-right"><span>Read More</span></a>
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
            </div>
        </div>
    </div>
    <!-- ================> Event section end here <================== -->


    

    <!-- ================> Counter section start here <================== -->
    <div class="counter-section padding--top padding--bottom bg-img">
        <div class="container">
            <div class="counter">
                <div class="section-header style-3">
                    <h4>Our Achivements</h4>
                </div>
                <div class="section-wrapper">
                    <div class="row g-5 g-lg-4 justify-content-center">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="counter__item">
                                <div class="counter__inner">
                                    <div class="counter__thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/counter/icon/01.png" alt="counter-thumb">
                                    </div>
                                    <div class="counter__content">
                                        <h2><span class="counter__number">11025</span></h2>
                                        <p>ACRES CONSERVED</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="counter__item">
                                <div class="counter__inner">
                                    <div class="counter__thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/counter/icon/02.png" alt="counter-thumb">
                                    </div>
                                    <div class="counter__content">
                                        <h2><span class="counter__number">309</span></h2>
                                        <p>SCIENTISTS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="counter__item">
                                <div class="counter__inner">
                                    <div class="counter__thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/counter/icon/03.png" alt="counter-thumb">
                                    </div>
                                    <div class="counter__content">
                                        <h2><span class="counter__number">99</span><span class="counter__persent">%</span></h2>
                                        <p>RECYCLING</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="counter__item">
                                <div class="counter__inner">
                                    <div class="counter__thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/counter/icon/04.png" alt="counter-thumb">
                                    </div>
                                    <div class="counter__content">
                                        <h2><span class="counter__number">1200</span><span class="counter__persent">MW</span></h2>
                                        <p>SOLAR POWER</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Counter section end here <================== -->



    <!-- ================> Social section start here <================== -->
    <div class="social-section">
        <div class="container">
            <div class="social">
                <ul>
                    <li class="social__list"><a href="#" class="social__name social-facebook"><span class="social__icon"><i class="fab fa-facebook-f"></i></span> <span>facebook</span></a></li>
                    <li class="social__list"><a href="#" class="social__name social-linkedin"><span class="social__icon"><i class="fab fa-linkedin-in"></i></span> <span>linkedin</span></a></li>
                    <li class="social__list"><a href="#" class="social__name social-pinterest"><span class="social__icon"><i class="fab fa-pinterest-p"></i></span> <span>pinterest</span></a></li>
                    <li class="social__list"><a href="#" class="social__name social-twitter"><span class="social__icon"><i class="fab fa-twitter"></i></span> <span>twitter</span></a></li>
                    <li class="social__list"><a href="#" class="social__name social-google"><span class="social__icon"><i class="fab fa-google-plus-g"></i></span> <span>google</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ================> Social section end here <================== -->



@endsection