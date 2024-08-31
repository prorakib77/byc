@extends('layouts.frontend_master')

@section('content')

    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->



    <!-- ================> Page Header section start here <================== -->
    <div class="pageheader-section">
        <div class="container">
            <div class="pageheader">
                <div class="pageheader__title">
                    <h2>Contact Us</h2>
                </div>
                <div class="pageheader__breadcamp">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Page Header section end here <================== -->


    <!-- ================> Contact section start here <================== -->
    <div class="contect-section padding--top padding--bottom">
        <div class="container">
            <div class="section-header style-2 mb-5">
                <h2>Contact Us</h2>
                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
            </div>
            <div class="contact">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="contact__form">
                            <h4 class="mb-4">Drop Us A Message</h4>
                            <form class="d-flex flex-wrap justify-content-between" action="{{ route('contact.post') }}" id="contact-form" method="POST">
                                @csrf
                                <input type="text" placeholder="Your Name" id="name" name="name" required="required">
                                <input type="text" placeholder="Your Email" id="email" name="email" required>
                                <input class="w-100" type="text" placeholder="Subject" id="subject" name="subject" required>
                                <textarea placeholder="Your Message" rows="4" name="message" id="message" required></textarea>
                                <button type="submit" class="default-btn move-right"><span>submit</span></button>
                            </form>
                            {{-- <p class="form-message"></p>  --}}
                        </div> 
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="contact__info">
                            <h4>Contact Info</h4>
                            <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                            <ul>
                                <li>
                                    <div class="contact__info-left">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact__info-right">
                                        <p>Kazirhat, Sonagazi, Feni</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact__info-left">
                                        <i class="fas fa-phone-volume"></i>
                                    </div>
                                    <div class="contact__info-right">
                                        <p>+01833017656, +01309983164, +01611996606</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact__info-left">
                                        <i class="fas fa-envelope-open-text"></i>
                                    </div>
                                    <div class="contact__info-right">
                                        <p>support@bagadanayouthcommunity.org</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact__info-left">
                                        <i class="fas fa-globe"></i>
                                    </div>
                                    <div class="contact__info-right">
                                        <p>http://bagadanayouthcommunity.org</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Contact section end here <================== -->


    <!-- ================> Google map section start here <================== -->
    <div class="maps-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423283.4355669374!2d-118.69192993092697!3d34.02073049448939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1633958856057!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <!-- ================> Google map section end here <================== -->


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