<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bagadana Youth Community</title>
    <link rel="shortcut icon" href="{{ asset('frontend') }}/assets/images/logo/byc_logo.png" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/animate.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/lightcase.css">
    @stack('custom_css')
    <style>
        
        .navbar-brand img{
            height: 55px;
        }
        .footer__logoarea img{
            height: 40px;
        }
    </style>

    <!-- main css for template -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.min.css">
</head>

<body class="home-2">

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



    <!-- ================> header section start here <================== -->
    <header class="header" id="navbar">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.html"><img src="{{ asset('frontend') }}/assets/images/logo/byc_logo.png" alt="byc"></a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler--icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="menu">
                        <ul>
                            <li>
                                <a href="{{ route('index') }}" class="active">Home</a>
                            </li>
                            <li>
                                <a href="#0">Events</a>
                            </li>
                            <li>
                                <a href="#gallery">Gallery</a>
                            </li>
                            <li>
                                <a href="#blog">Blog</a>
                            </li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    <a href="{{ route('donate') }}" class="default-btn move-right"><span>Donate <i class="fas fa-heart"></i></span></a>
                </div>
            </nav>
        </div>
    </header>
    <!-- ================> header section end here <================== -->

    @yield('content')


    <!-- ================> Footer section start here <================== -->
    <footer class="footer">
        <div class="footer__top padding--top padding--bottom">
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer__logoarea">
                            <img src="{{ asset('frontend') }}/assets/images/logo/byc_logo.png" alt="footer-logo">
                            <p>Bagadana Youth Community is a dynamic organization making a significant impact on Bangladesh. Their mission is to empower youth, promote environmental sustainability, and improve the lives of marginalized communities.
                                </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer__post footer-title">
                            <h3>Quick Links</h3>
                            <ul>
                                <li>
                                    <div class="footer__postcontent">
                                        <a href="{{ route('volunteer') }}"><h6>Volunteer</h6></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer__postcontent">
                                        <a href="{{ route('contact') }}"><h6>Contact</h6></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer__postcontent">
                                        <a href="{{ route('donate') }}"><h6>Donate</h6></a>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer__gallery footer-title">
                            <h3>Gallery Post</h3>
                            <ul>
                                <li>
                                    <div class="footer__gallerythumb">
                                        <a href="{{ asset('frontend') }}/assets/images/footer/gallery/01.jpg" data-rel="lightcase"><img src="{{ asset('frontend') }}/assets/images/gallery/home-2/1.jpg" alt="footer-gallerythumb"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer__gallerythumb">
                                        <a href="{{ asset('frontend') }}/assets/images/footer/gallery/02.jpg" data-rel="lightcase"><img src="{{ asset('frontend') }}/assets/images/gallery/home-2/2.jpg" alt="footer-gallerythumb"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer__gallerythumb">
                                        <a href="{{ asset('frontend') }}/assets/images/footer/gallery/03.jpg" data-rel="lightcase"><img src="{{ asset('frontend') }}/assets/images/gallery/home-2/3.jpg" alt="footer-gallerythumb"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer__gallerythumb">
                                        <a href="{{ asset('frontend') }}/assets/images/footer/gallery/04.jpg" data-rel="lightcase"><img src="{{ asset('frontend') }}/assets/images/gallery/home-2/4.jpg" alt="footer-gallerythumb"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer__gallerythumb">
                                        <a href="{{ asset('frontend') }}/assets/images/footer/gallery/05.jpg" data-rel="lightcase"><img src="{{ asset('frontend') }}/assets/images/gallery/home-2/5.jpg" alt="footer-gallerythumb"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer__gallerythumb">
                                        <a href="{{ asset('frontend') }}/assets/images/footer/gallery/06.jpg" data-rel="lightcase"><img src="{{ asset('frontend') }}/assets/images/gallery/home-2/6.jpg" alt="footer-gallerythumb"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer__gallerythumb">
                                        <a href="{{ asset('frontend') }}/assets/images/footer/gallery/07.jpg" data-rel="lightcase"><img src="{{ asset('frontend') }}/assets/images/gallery/home-2/7.jpg" alt="footer-gallerythumb"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer__gallerythumb">
                                        <a href="{{ asset('frontend') }}/assets/images/footer/gallery/08.jpg" data-rel="lightcase"><img src="{{ asset('frontend') }}/assets/images/gallery/home-2/8.jpg" alt="footer-gallerythumb"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer__gallerythumb">
                                        <a href="{{ asset('frontend') }}/assets/images/footer/gallery/09.jpg" data-rel="lightcase"><img src="{{ asset('frontend') }}/assets/images/gallery/home-2/9.jpg" alt="footer-gallerythumb"></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer__info footer-title">
                            <h3>Contact Info</h3>
                            <p>Bagadana Youth Community Organization </p>
                            <ul>
                                <li><i class="fas fa-home"></i> Bagadana Gov't primary school Road, Kazirhat, Sonagazi, Feni</li>
                                <li><i class="fas fa-phone-alt"></i> +880 1234567895 +880 9874321457</li>
                                <li><i class="fas fa-envelope"></i> contact@bagadanayouthcommunity.org</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-6 col-12">
                        <div class="footer__copyright">
                            <p>&copy; Bagadanayouthcommunity 2024, All Right Reserves | Powered By <a href="https://prorakib.com">TechKonotch</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="footer__social">
                            <ul>
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
    </footer>
    <!-- ================> Footer section end here <================== -->


    
    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="fas fa-arrow-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
    <!-- scrollToTop ending here -->


    

    
    <!-- vendor plugins -->
    <script src="{{ asset('frontend') }}/assets/js/jquery-3.6.0.min.js"></script>
    <!-- <script src="{{ asset('frontend') }}/assets/js/parallax.min.js"></script> -->
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('frontend') }}/assets/js/waypoints.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/all.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/swiper.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/lightcase.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/donate-range.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/wow.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/custom.js"></script>
    @stack('custom_js')


@if (Session::has('success'))
    
<script>
  Swal.fire({
  position: "top-end",
  icon: "success",
  title: "{{ Session::get('success') }}",
  showConfirmButton: false,
  timer: 3000
});
</script>
  
@endif


</body>
</html>