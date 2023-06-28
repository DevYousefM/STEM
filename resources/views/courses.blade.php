<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>STEM ZONE | Courses</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="STEM, STEAM, AI, artificial intelligence, kits, programmingcoding" name="keywords">
    <meta content="STEM ZONE offers cutting-edge technology education programmes for students aged 6 to 18 years old, assisting them in learning and pursuing jobs in programming, graphics, artificial intelligence, We put an emphasis on student education to get them ready for an exciting digital future." name="description">

    <!-- Favicon -->
    <link href="{{asset('img/favicon.ico')}}" rel="icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('img/site.webmanifest')}}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            @include("components.header")
            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated zoomIn">Courses</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="https://stemzone.online">Home</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">Courses</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-2 pt-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h1>Our Courses</h1>
                </div>
                <p class=" wow fadeInUp mb-5 fs-5" data-wow-delay="0.1s">
                    Creating technology is a team experience. Join our live-class coached team sessions, to create your
                    own apps and games and get a head-start on tomorrow’s tech skills.
                </p>
                <div class="row mb-4">
                    @foreach($courses as $i)

                    <div class="col-lg-4">
                        <div class="single_course wow fadeInUp" data-wow-delay="0.3s">
                            <div class="course_head">
                                <img class="img-fluid" src="{{asset($i->image_1)}}" alt="" />
                            </div>
                            <div class="course_content">
                                <span class="price">%30</span>
                                <span class="tag mb-4 d-inline-block text-capitalize">{{$i->category}}</span>
                                <h4 class="mb-3">
                                    <a href="{{route("courses",$i->id)}}">{{$i->course}}</a>
                                </h4>
                                <p>
                                    {{$i->short_desc}}
                                </p>
                                <div class="col-lg-6 text-center m-auto mt-3">
                                    <a class="btn px-3 mt-auto mx-auto" href="{{route("courses",$i->id)}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-light footer mt-5  wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-2 px-lg-5">
            <div class="row g-5 m-auto">

                <div class="col-md-6 col-lg-5">
                    <h5 class="text-white mb-4">Our Vision</h5>
                    <p class="">Empower kids with coding, No matter what kind of employment a young person wants to
                        pursue, they
                        all need to learn how to code. Coding is a new form of literacy. Our lessons turn
                        tech-addicted
                        children into inventive, engaged creators who express themselves through coding.</p>
                </div>
                <div class="col-md-6 col-lg-3 ">
                    <h5 class="text-white mb-4">Popular Link</h5>
                    <a class="btn btn-link" href="{{route("about")}}">About Us</a>
                    <a class="btn btn-link" href="{{route("contact")}}">Contact Us</a>
                    <a class="btn btn-link" href="{{route("courses")}}">Courses</a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <h5 class="text-white mb-4">Get In Touch</h5>
                    <p class="fs-6"><i class="fa fa-map-marker-alt me-3"></i>74 Housny Mobarak, Sheraton Al Matar,
                        El Nozha, Cairo
                        Governorate, Egypt</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+20 109 383 8808</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+20 112 571 2666</p>
                    <p><i class="fa fa-envelope me-3"></i><a class="mail" href="mailto:info@stemzone.online">info@stemzone.online</a></p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://api.whatsapp.com/message/6BRILOY7YHMTJ1?autoload=1&app_absent=0"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/Stemzone2022"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://instagram.com/stem_zone?igshid=YmMyMTA2M2Y"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/company/stem-zone/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

            </div>
        </div>
        <div class="container px-lg-5">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">STEM Zone</a>, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset("lib/wow/wow.min.js")}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>