<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>STEM ZONE | About Us</title>
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
                            <h1 class="text-white animated zoomIn">About Us</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="https://stemzone.online">Home</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="{{asset('img/stemzone-ab.png')}}">
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion  wow fadeInUp" id="accordionExample" data-wow-delay="0.1s">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Our Story
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The digital revolution brings with it many fantastic opportunities for
                                        learning and creating, as well as challenges and risks. We believe that
                                        learning to code gives children the tools they need to navigate the
                                        new digital world. As we deliver the best curriculum, the best
                                        coaches, and international competitions, we work to provide the best
                                        stem education and introduce students to the digital world of coding
                                        and robotics since 2018.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Our Goal
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">

                                        STEM ZONE offers cutting-edge technology education programmes for
                                        students aged 6 to 18 years old, assisting them in learning and pursuing
                                        jobs in programming, graphics, artificial intelligence,
                                        We put an emphasis on student education to get them ready for an
                                        exciting digital future.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Our Vision
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Empower kids with coding, No matter what kind of employment a
                                        young person wants to pursue, they all need to learn how to code.
                                        Coding is a new form of literacy. Our lessons turn tech-addicted
                                        children into inventive, engaged creators who express themselves
                                        through coding.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Newsletter Start -->
        <div class="container-xxl bg-primary newsletter my-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-2 pt-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="text-white">Our Teaching Philosophy</h1>
                </div>
                <p class="text-white wow fadeInUp mb-5" data-wow-delay="0.1s">
                    We believe in the importance of the teacher’s role, the support of the group
                    and the power of real-time interaction to inspire kids’ creativity.
                </p>
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="about_feature">
                            <div class="justify">
                                <h4 class="mt-3 mb-2">OUR METHOD: LIVE INSTRUCTION, INSPIRING TEACHERS,
                                    SUPPORTIVE PEERS</h4>
                                <p>
                                    At STEM Zone ,
                                    we believe that most young coders learn best in small groups, supported by their
                                    peers and guided by highly qualified and attentive teachers. We believe that live
                                    interaction with such teachers, and with fellow students, provides not only the
                                    content, but also the inspiration that kids need to leverage their innate ability to
                                    learn.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="about_feature">
                            <div class="justify">
                                <h4 class="mt-3 mb-2">OUR VISION: CODING FOR EVERYONE</h4>
                                <p>
                                    At STEM Zone
                                    the only prerequisite is motivation. We design our classes to leverage the diverse
                                    needs and interests of our learners. Every child is different; some prefer to listen
                                    first and explore later, others prefer to explore first. Some are interested in
                                    sports
                                    and others are into music, some are into math and others are into gaming. When
                                    we say that coding is for everyone, we mean that young people can learn to express
                                    themselves with code, based on their personal interest.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="about_feature">
                            <div class="justify">
                                <h4 class="mt-3 mb-2">OUR TEACHING TEAM: EXPERTS IN KIDS&#39; EDUCATION</h4>
                                <p>
                                    We believe that great coding teachers, especially for young children and teens,
                                    should be teachers first. They need to know how to communicate with kids in an
                                    appropriate way to provide motivation and to build confidence. Our teachers
                                    participate in a six-month
                                    course of training, where they deepen their understanding of coding, absorb our
                                    teaching values and
                                    learn the course plan. Only those who succeed in this training are permitted to
                                    teach a STEM Zone course.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->

        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mt-2">STEM Zone Complying with SDGs</h1>
                </div>
                <div class="row mt-4 mb-5">
                    <div class="col-md-6">
                        <div class="sdgs_area wow fadeInLeft">
                            <p class="justify">Ensure inclusive and equitable quality education and promote lifelong
                                learning opportunities for all through improving the processes and quality
                                of educational institutions and address the needs and expectations of
                                those who seek technology education services.</p>
                            <p class="justify">Achieve gender equality and empower all women and girls in STEM fields,
                                we aim to eliminate bias and promote parity through recommending
                                technology education with a balanced mix of men and women to ensure
                                both sexes are treated equally when it comes to technology education
                                career opportunities.</p>
                        </div>
                    </div>
                    <div class="col-md-6 text-center mt-3 wow fadeInRight">
                        <img src="{{asset('img/sdgs.webp')}}" height="350" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mt-2">How We Communicate with Parents</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column  rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fab fa-meetup fa-3x"></i>
                            </div>
                            <h5 class="mb-3 text-center ">Parent-teacher meetings</h5>
                            <p class="justify">A few lessons after the course starts, parents are invited to a
                                parent-teacher meeting to
                                get to know the teacher and familiarize themselves with the course content</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa fa-tasks fa-3x"></i>
                            </div>
                            <h5 class="mb-3">Periodic progress messages</h5>
                            <p>During the course, parents receive emails or WhatsApp messages updating them on class
                                progress</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-solid fa-user-clock fa-3x"></i>
                            </div>
                            <h5 class="mb-3">Lesson reminders</h5>
                            <p>Parents receive emails, SMS and WhatsApp messages notifying them about their child’s
                                upcoming classes.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-regular fa-envelope fa-3x"></i>
                            </div>
                            <h5 class="mb-3">Absence alert email</h5>
                            <p>When a child doesn't show up to class, their parent receives an email update, offering
                                help if necessary</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->
        </div>

        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mt-2">Our Achievements</h1>
                </div>
                <div class="row ">
                    <div class="col-lg-12 mb-5">
                        <div class="owl-carousel achievements mb-5">
                            <div class="single_course">
                                <div class="course_head">
                                    <img class="img-fluid" src="{{asset('img/gallery/Competitions.webp')}}" alt="" />
                                </div>
                                <div class="course_content">
                                    <h4 class="mb-3 text-center">
                                        <a>Competitions</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="single_course">
                                <div class="course_head">
                                    <img class="img-fluid" src="{{asset('img/gallery/Cairo-Bots.webp')}}" alt="" />
                                </div>
                                <div class="course_content">
                                    <h4 class="mb-3 text-center">
                                        <a>Cairo-Bots</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="single_course">
                                <div class="course_head">
                                    <img class="img-fluid" src="{{asset('img/gallery/schools.webp')}}" alt="" />
                                </div>
                                <div class="course_content">
                                    <h4 class="mb-3 text-center">
                                        <a>Schools</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="single_course">
                                <div class="course_head">
                                    <img class="img-fluid" src="{{asset('img/gallery/KidZania.webp')}}" alt="" />
                                </div>
                                <div class="course_content">
                                    <h4 class="mb-3 text-center">
                                        <a>KidZania</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="single_course">
                                <div class="course_head">
                                    <img class="img-fluid" src="{{asset('img/gallery/clubs.webp')}}" alt="" />
                                </div>
                                <div class="course_content">
                                    <h4 class="mb-3 text-center">
                                        <a>Clubs</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="single_course">
                                <div class="course_head">
                                    <img class="img-fluid" src="{{asset('img/gallery/camps.webp')}}" alt="" />
                                </div>
                                <div class="course_content ">
                                    <h4 class="mb-3 text-center">
                                        <a>Camps</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->
        </div>

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer mt-5  wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-2 px-lg-5">
                <div class="row g-5 m-auto">

                    <div class="col-md-6 col-lg-5">
                        <h5 class="text-white mb-4">Our Vision</h5>
                        <p class="">Empower kids with coding, No matter what kind of employment a young person wants to
                            pursue, they
                            all need to learn how to code. Coding is a new form of literacy. Our lessons turn tech-addicted
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
                        <p class="fs-6"><i class="fa fa-map-marker-alt me-3"></i>74 Housny Mobarak, Sheraton Al Matar, El
                            Nozha, Cairo
                            Governorate, Egypt</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+20 109 383 8808</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+20 112 571 2666</p>
                        <p><i class="fa fa-envelope me-3"></i><a class="mail" href="mailto:info@stemzone.online">info@stemzone.online</a>
                        </p>
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