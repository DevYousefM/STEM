<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>STEM ZONE</title>
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
    </div>
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
        @include("components.header")
    </div>
    <div class="container-xxl py-5 hero-header mb-5">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="text-white mb-4 animated zoomIn">Future begins with STEM education</h1>
                    <p class="text-white pb-3 animated zoomIn">We teach coding, computational thinking and digital
                        expression, in small online classes led by inspiring and caring teachers.</p>
                    <a href="{{route("courses")}}" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">
                        Courses</a>
                    <a href="{{route("contact")}}" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact
                        Us</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid" src="{{asset('img/stem copy.webp')}}" alt="">
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
                    <div class="section-title position-relative mb-4 pb-2">
                        <h6 class="position-relative text-primary ps-4">About Us</h6>
                        <h2 class="mt-2">Live instruction, inspirational teachers and encouraging peers</h2>
                    </div>
                    <p class="mb-2">Kids learn best when they have caring teachers and supportive peers.</p>
                    <p>Live interaction online with teachers and fellow classmates provides the inspiration our students
                        need to succeed in coding</p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Award Winning</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Professional Staff</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>24/7 Learning Community</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Recorded Lessons</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <a class="btn btn-primary rounded-pill px-4 me-3" target="_blank" href="{{route("about")}}">Read
                            More</a>
                        <a class="btn btn-outline-primary btn-square me-3" target="_blank" href="https://www.facebook.com/Stemzone2022"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" target="_blank" href="https://api.whatsapp.com/message/6BRILOY7YHMTJ1?autoload=1&app_absent=0"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" target="_blank" href="https://instagram.com/stem_zone?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square" target="_blank" href="https://www.linkedin.com/company/stem-zone/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="{{asset('img/online.webp')}}">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- courses start -->
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mt-2">Our Popular Courses</h1>
            </div>
            <div class="row">
                <!-- single course -->
                <div class="col-lg-12">
                    <div class="owl-carousel active_course">
                        @foreach($courses as $i)
                        <div class="single_course">
                            <div class="course_head">
                                <img class="img-fluid" height="259px" src="{{asset($i->image_1)}}" alt="" />
                            </div>
                            <div class="course_content">
                                <span class="price">%30</span>
                                <span class="tag mb-4 d-inline-block">{{$i->category}}</span>
                                <h4 class="mb-3">
                                    <a href="{{route('courses',$i->id)}}">{{$i->course}}</a>
                                </h4>
                                <p>
                                    {{$i->short_desc}}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row justify-content-center my-3">
                <div class="text-center">
                    <a href="{{route("courses")}}" class="courses-button btn btn-primary rounded-pill py-3 px-5">View all
                        courses</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter Start -->
    <div class="container-xxl bg-primary newsletter my-5">
        <div class="container px-lg-5">
            <div class="row">
                <div class="col-lg-6 align-items-center">
                    <div class="col-12 pt-5 wow animated slideInLeft">
                        <h3 class="text-white">LEADERS IN ONLINE EDUCATION</h3>
                        <div class="text-white position-relative w-100 mt-3">
                            <p> Teacher group develops human-centered education technology and has provided live
                                instruction
                                courses online since 2018. Is one of the company's successful virtual schools, teaching
                                kids
                                coding, robotics and digital art.</p>
                        </div>
                    </div>
                    <div class="row pb-5">
                        <div class="col clockinner wow fadeInUp" data-wow-delay="0.4s">
                            <h1>
                                <script>
                                    document.write((new Date().getFullYear()) - 2018)
                                </script>
                            </h1>
                            <span class="smalltext">years of experience </span>
                        </div>
                        <div class="col clockinner wow fadeInUp" data-wow-delay="0.6s">
                            <h1>50</h1>
                            <span class="smalltext">employees</span>
                        </div>
                        <div class="col clockinner wow fadeInUp" data-wow-delay="0.8s">
                            <h1>25</h1>
                            <span class="smalltext">countries</span>
                        </div>
                        <div class="col clockinner wow fadeInUp" data-wow-delay="0.9s">
                            <h1>20K</h1>
                            <span class="smalltext">graduates</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center d-md-block wow animated slideInRight">
                    <img class="img-fluid rounded my-5" src="{{asset('img/child.webp')}}">
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mt-2">Our Core Teaching Principles</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-duotone fa-file-code fa-3x"></i>
                        </div>
                        <h5 class="mb-3">LEARNING BY DOING</h5>
                        <p>Kids learn best by doing. Most of our class time is dedicated to gaining hands-on
                            experience while working on coding projects. Working on projects encourages our students
                            to express themselves with code. Classes are not rushed, we allow students to progress
                            at their own pace</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-regular fa-compass fa-3x"></i>
                        </div>
                        <h5 class="mb-3">GUIDED LEARNING</h5>
                        <p>The teacher is leading the learning process, creating engagement and motivation. Students
                            are encouraged to ask questions, there are no wrong answers! Older, experienced students
                            (teaching assistants) support the classroom teachers,allowing groups with a range of
                            abilities to study together</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item d-flex flex-column text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-regular fa-gamepad fa-3x"></i>
                        </div>
                        <h5 class="mb-3">A PLAYFUL APPROACH TO LEARNING</h5>
                        <p>Class projects are based on students’ interests, to inspire imagination. Class atmosphere
                            encourages informal participation, role play of real-world scenarios and creative
                            exploration. No homework! We believe students should practice what they learned when
                            they are motivated to do it, not forced.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
    </div>

    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mt-2">Our Programs Based On</h1>
            </div>
            <div class="row text-center mt-4">
                <div class="col-lg-12 py-4 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="{{asset('img/programBasedOn.webp')}}" class="img-fluid " alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Start -->
    <div class="container-xxl bg-primary testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-2 px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="mt-2 text-white">Client say about us</h2>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item bg-transparent border rounded text-white p-4">
                    <i class="fa fa-quote-left fa-2x mb-3"></i>
                    <p class="text-end">مساء النور
                        كورس ال App بجد اكثر من رائع وبشمهندس على ممتاز ف الشرح واسلوبه جميل جدا مع الاولاد تميم
                        بيحب
                        الكورس جدا وبيستنى يوم السيشن بحماس وبيكون
                        متشوق يتعلم كل مره حاجات جديده
                        ومعنديش اى كومنت ابدا على الكورس بالعكس احنا
                        هنزعل جدا لما يخلص</p>
                </div>
                <div class="testimonial-item bg-transparent border rounded text-white p-4">
                    <i class="fa fa-quote-left fa-2x mb-3"></i>
                    <p class="text-end">
                        مساء النور بيتهيالى انا شهادتى مجروحه فيكم لان احنا مع بعض 3 سنين وان شاء الله مكملين معاكم
                        وكفايه ان فهد بعد ما كان بيقضى وقته على الموبيل بقى مشغول بالبرمجه ولاب توب وبشمهندسه حنان
                        وبشمهندس على ربنا يبارك في توصيل المعلومه وبيفضل بتابع وكل فترة يعملوا مراجعه لي فات وبلغى
                        شكرى
                        لادارة ودايما من نجاح لنجاح يا رب وتبقى اكبر مؤسسه برمجه فى العالم وشكرا لى كل
                        لى بتقدموا لاولاد من تشجيع وتحفيز ليهم</p>
                </div>
                <div class="testimonial-item bg-transparent border rounded text-white p-4">
                    <i class="fa fa-quote-left fa-2x mb-3"></i>
                    <p class="text-end">
                        مساء النور الحمد لله تمام
                        بصراحة ممتاز جداً وديمة متفاعلة اوووي والمس مريم ممتازة وبتشرح كويس اوووي وبتعيد كثير وبتشجع
                        الاولاد
                        انا حابة اعرف لو فيه مسابقات ينفع ديمة تشارك فيها</p>
                </div>
                <div class="testimonial-item bg-transparent border rounded text-white p-4">
                    <i class="fa fa-quote-left fa-2x mb-3"></i>
                    <p class="text-end">
                        الكورس جميل جدا رودينا بنتي اتغيرت للأحسن بفضل
                        ربنا اولا و الكورس ثانيا
                        الكورس ممتع جدا و کمان میس اسراء مش بتحسس
                        الولاد بالملل أبدا
                        بل بالعكس لو متأخرين في التاسك بتاعهم بيعملو بسرعه علشان هي ماشاء الله عليها جميله و محترفه
                        في
                        توصيل
                        python المعلومه للولاد اللي في سنهم كمان بشكر الاداره ان حضراتكم مختلفين مش زي غيركم فوقت
                        قصير
                        بتوصلوا الولاد ان يكون معاهم لغه زي لغه</p>

                </div>
                <div class="testimonial-item bg-transparent border rounded text-white p-4">
                    <i class="fa fa-quote-left fa-2x mb-3"></i>
                    <p> Nice communications and replies on time. Interactive courses and great trainers. Very useful
                        and
                        highly recommended.
                    </p>

                </div>
                <div class="testimonial-item bg-transparent border rounded text-white p-4">
                    <i class="fa fa-quote-left fa-2x mb-3"></i>
                    <p class="text-end">
                        مساء النور الولاد مبسوطين من كورس الاسكراتش الحمد لله متحمسين يكملوا معاكم كل الكورسات ان
                        شاء
                        الله
                    </p>
                </div>
                <div class="testimonial-item bg-transparent border rounded text-white p-4">
                    <i class="fa fa-quote-left fa-2x mb-3"></i>
                    <p class="text-end">
                        الكورس كويس جدا الحمد لله و بشمهندسه حنان ما شاء الله بتتعامل مع الولاد بالراحه وبتشرح كل
                        حاجه
                        وبتشجعهم وان شاء الله مكملين مع بعض
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Partner -->
    <div class="container-xxl py-5">
        <div class="container px-lg-5 text-center">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="mt-2">Our Accreditation</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="position-relative rounded">
                        <img class="img-fluid w-50" src="{{asset('img/partners/stemtech.webp')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="position-relative rounded ">
                        <img class="img-fluid w-50" src="{{asset('img/partners/STEM-Accred-300x300-1.webp')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6   wow zoomIn" data-wow-delay="0.1s">
                    <div class="position-relative rounded ">
                        <img class="img-fluid w-50" src="{{asset('img/partners/FIRST_Logo.webp')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="position-relative rounded">
                        <img class="img-fluid w-70" src="{{asset('img/partners/cce.webp')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="position-relative rounded ">
                        <img class="img-fluid w-50" src="{{asset('img/partners/code.webp')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="position-relative rounded ">
                        <img class="img-fluid w-70" src="{{asset('img/partners/academuOfScientific.webp')}}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="mt-2">Partners</h2>
            </div>
            <div class="wow fadeInUp" data-wow-delay="0.3s">
                <p>We are proud to be supported by a unique collaboration of professional institutions and education
                    companies who are dedicated to raising students' achievement, engagement and aspirations in STEM
                    subjects and careers.</p>
            </div>
            <div class="owl-carousel partners mb-5 wow fadeInUp" id="partners" data-wow-delay="0.3s">
                <img class="img-fluid" src="{{asset('img/partners/edraaak.webp')}} " alt="" />
                <img class="img-fluid" src="{{asset('img/partners/kidzania.webp')}}" alt="" />
                <img class="img-fluid" src="{{asset('img/partners/smt.webp')}}" alt="" />
                <img class="img-fluid" src="{{asset('img/partners/first.webp')}}" alt="" />
                <img class="img-fluid" src="{{asset('img/partners/t3lom.webp')}}" alt="" />
                <img class="img-fluid" src="{{asset('img/partners/madrstne.webp')}}" alt="" />
                <img class="img-fluid" src="{{asset('img/partners/egyCode.webp')}}" alt="" />
                <img class="img-fluid" src="{{asset('img/partners/nutty scientist logo.webp')}}" alt="" />
                <img class="img-fluid" src="{{asset('img/partners/wzart.webp')}}" alt="" />
                <img class="img-fluid" src="{{asset('img/partners/frc.webp')}}" alt="" />
                <img class="img-fluid" src="{{asset('img/partners/stem hub.webp')}}" alt="" />
                <img class="img-fluid" src="{{asset('img/partners/steam preschool.webp')}}" alt="" />
                <img class="img-fluid" src="{{asset('img/partners/malern.webp')}}" alt="" />
                <img class="img-fluid" src="{{asset('img/partners/code.webp')}}" alt="" />
                <img class="img-fluid" src="{{asset('img/partners/sts.webp')}}" alt="" />
                <img class="img-fluid" src="{{asset('img/partners/STEM-Accred-300x300-1.webp')}}" alt="" />
            </div>
        </div>
    </div>
    <!-- Portfolio Start -->
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">Gallery</h6>
                <h2 class="mt-2">Recently Launched Activities</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.1s">
                    <div class="position-relative rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('img/gallery/2.webp')}}" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-light" href="{{asset('img/gallery/2.webp')}}" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                            <div class="mt-auto">
                                <a class="h5 d-block text-white mt-1 mb-0" href="">FLL Challenge</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.3s">
                    <div class="position-relative rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('img/gallery/4.webp')}}" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-light" href="{{asset('img/gallery/4.webp')}}" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                            <div class="mt-auto">
                                <a class="h5 d-block text-white mt-1 mb-0" href="">RoboCup</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.6s">
                    <div class="position-relative rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('img/gallery/1.webp')}}" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-light" href="{{asset('img/gallery/1.webp')}}" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                            <div class="mt-auto">
                                <a class="h5 d-block text-white mt-1 mb-0" href="">FLL Challenge</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.1s">
                    <div class="position-relative rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('img/gallery/7.webp')}}" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-light" href="{{asset('img/gallery/7.webp')}}" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                            <div class="mt-auto">
                                <a class="h5 d-block text-white mt-1 mb-0" href="">Cairo bot</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.3s">
                    <div class="position-relative rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('img/gallery/5.webp')}}" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-light" href="{{asset('img/gallery/5.webp')}}" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                            <div class="mt-auto">
                                <a class="h5 d-block text-white mt-1 mb-0" href="">Fll Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.6s">
                    <div class="position-relative rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('img/gallery/10.webp')}}" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-light" href="{{asset('img/gallery/10.webp')}}" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                            <div class="mt-auto">
                                <a class="h5 d-block text-white mt-1 mb-0" href="">FLL Training</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio End -->

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