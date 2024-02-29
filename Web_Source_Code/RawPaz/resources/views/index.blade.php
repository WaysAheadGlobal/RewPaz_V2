<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RewPaz</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;500;600;700;800;900;1000&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/Home/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Home/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Home/css/owl.carousel.css')}}">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css'>
    <link rel="stylesheet" href="{{asset('assets/Home/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Home/css/responsive.css')}}">
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-NPE02SHZTH');
    </script>
</head>

<body>
    <header class="header_top">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('assets/Home/images/logo.svg')}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#About_tab">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}#Services_tab">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}#Pricing_tab">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}#Team_tab">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}#Testimonial_tab">Testimonials</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}#FAQs_tab">FAQs</a>
                        </li>
                    </ul>
                    <div class="btn_grp">
                        @auth
                        @if (Auth::user()->role=='Admin')
                        <button class="btnLogin"><a href="{{url('admin/dashboard')}}">
                            Login</a>
                        </button>
                        <button class="btn_join">
                            <a href="{{url('admin/dashboard')}}" style="color:#fff;"><span> JOIN US </span></a>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="10" viewBox="0 0 12 10"
                                    fill="none">
                                    <g clip-path="url(#clip0_688_13911)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5C0 4.81059 0.079009 4.62895 0.219646 4.49502C0.360282 4.36109 0.551026 4.28584 0.749916 4.28584H9.43845L6.21831 1.22068C6.07749 1.08658 5.99838 0.904705 5.99838 0.715059C5.99838 0.525414 6.07749 0.343536 6.21831 0.209436C6.35912 0.0753365 6.5501 0 6.74925 0C6.94839 0 7.13937 0.0753365 7.28019 0.209436L11.7797 4.49438C11.8495 4.56072 11.9049 4.63952 11.9427 4.72629C11.9805 4.81305 12 4.90606 12 5C12 5.09394 11.9805 5.18695 11.9427 5.27371C11.9049 5.36048 11.8495 5.43928 11.7797 5.50562L7.28019 9.79056C7.13937 9.92466 6.94839 10 6.74925 10C6.5501 10 6.35912 9.92466 6.21831 9.79056C6.07749 9.65646 5.99838 9.47459 5.99838 9.28494C5.99838 9.0953 6.07749 8.91342 6.21831 8.77932L9.43845 5.71416H0.749916C0.551026 5.71416 0.360282 5.63892 0.219646 5.50499C0.079009 5.37106 0 5.18941 0 5Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_688_13911">
                                            <rect width="12" height="10" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                        </button>
                        @elseif (Auth::user()->role=='Superadmin')
                        <button class="btnLogin"><a href="{{url('super-admin/dashboard')}}">
                            Login</a>
                        </button>
                        <button class="btn_join">
                            <a href="{{url('super-admin/dashboard')}}" style="color:#fff;"><span> JOIN US </span></a>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="10" viewBox="0 0 12 10"
                                    fill="none">
                                    <g clip-path="url(#clip0_688_13911)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5C0 4.81059 0.079009 4.62895 0.219646 4.49502C0.360282 4.36109 0.551026 4.28584 0.749916 4.28584H9.43845L6.21831 1.22068C6.07749 1.08658 5.99838 0.904705 5.99838 0.715059C5.99838 0.525414 6.07749 0.343536 6.21831 0.209436C6.35912 0.0753365 6.5501 0 6.74925 0C6.94839 0 7.13937 0.0753365 7.28019 0.209436L11.7797 4.49438C11.8495 4.56072 11.9049 4.63952 11.9427 4.72629C11.9805 4.81305 12 4.90606 12 5C12 5.09394 11.9805 5.18695 11.9427 5.27371C11.9049 5.36048 11.8495 5.43928 11.7797 5.50562L7.28019 9.79056C7.13937 9.92466 6.94839 10 6.74925 10C6.5501 10 6.35912 9.92466 6.21831 9.79056C6.07749 9.65646 5.99838 9.47459 5.99838 9.28494C5.99838 9.0953 6.07749 8.91342 6.21831 8.77932L9.43845 5.71416H0.749916C0.551026 5.71416 0.360282 5.63892 0.219646 5.50499C0.079009 5.37106 0 5.18941 0 5Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_688_13911">
                                            <rect width="12" height="10" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                        </button>
                        @elseif (Auth::user()->role=='Employer')
                        <button class="btnLogin"><a href="{{url('employer/dashboard')}}">
                            Login</a>
                        </button>
                        <button class="btn_join">
                            <a href="{{url('employer/dashboard')}}" style="color:#fff;"><span> JOIN US </span></a>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="10" viewBox="0 0 12 10"
                                    fill="none">
                                    <g clip-path="url(#clip0_688_13911)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5C0 4.81059 0.079009 4.62895 0.219646 4.49502C0.360282 4.36109 0.551026 4.28584 0.749916 4.28584H9.43845L6.21831 1.22068C6.07749 1.08658 5.99838 0.904705 5.99838 0.715059C5.99838 0.525414 6.07749 0.343536 6.21831 0.209436C6.35912 0.0753365 6.5501 0 6.74925 0C6.94839 0 7.13937 0.0753365 7.28019 0.209436L11.7797 4.49438C11.8495 4.56072 11.9049 4.63952 11.9427 4.72629C11.9805 4.81305 12 4.90606 12 5C12 5.09394 11.9805 5.18695 11.9427 5.27371C11.9049 5.36048 11.8495 5.43928 11.7797 5.50562L7.28019 9.79056C7.13937 9.92466 6.94839 10 6.74925 10C6.5501 10 6.35912 9.92466 6.21831 9.79056C6.07749 9.65646 5.99838 9.47459 5.99838 9.28494C5.99838 9.0953 6.07749 8.91342 6.21831 8.77932L9.43845 5.71416H0.749916C0.551026 5.71416 0.360282 5.63892 0.219646 5.50499C0.079009 5.37106 0 5.18941 0 5Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_688_13911">
                                            <rect width="12" height="10" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                        </button>
                        @elseif (Auth::user()->role=='Employee')
                        <button class="btnLogin"><a href="{{url('employee/profile')}}">
                            Login</a>
                        </button>
                        <button class="btn_join">
                            <a href="{{url('employee/profile')}}" style="color:#fff;"><span> JOIN US </span></a>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="10" viewBox="0 0 12 10"
                                    fill="none">
                                    <g clip-path="url(#clip0_688_13911)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5C0 4.81059 0.079009 4.62895 0.219646 4.49502C0.360282 4.36109 0.551026 4.28584 0.749916 4.28584H9.43845L6.21831 1.22068C6.07749 1.08658 5.99838 0.904705 5.99838 0.715059C5.99838 0.525414 6.07749 0.343536 6.21831 0.209436C6.35912 0.0753365 6.5501 0 6.74925 0C6.94839 0 7.13937 0.0753365 7.28019 0.209436L11.7797 4.49438C11.8495 4.56072 11.9049 4.63952 11.9427 4.72629C11.9805 4.81305 12 4.90606 12 5C12 5.09394 11.9805 5.18695 11.9427 5.27371C11.9049 5.36048 11.8495 5.43928 11.7797 5.50562L7.28019 9.79056C7.13937 9.92466 6.94839 10 6.74925 10C6.5501 10 6.35912 9.92466 6.21831 9.79056C6.07749 9.65646 5.99838 9.47459 5.99838 9.28494C5.99838 9.0953 6.07749 8.91342 6.21831 8.77932L9.43845 5.71416H0.749916C0.551026 5.71416 0.360282 5.63892 0.219646 5.50499C0.079009 5.37106 0 5.18941 0 5Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_688_13911">
                                            <rect width="12" height="10" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                        </button>
                        @elseif (Auth::user()->role=='Professional')
                        <button class="btnLogin"><a href="{{url('professional/profile')}}">
                            Login</a>
                        </button>
                        <button class="btn_join">
                            <a href="{{url('professional/profile')}}" style="color:#fff;"><span> JOIN US </span></a>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="10" viewBox="0 0 12 10"
                                    fill="none">
                                    <g clip-path="url(#clip0_688_13911)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5C0 4.81059 0.079009 4.62895 0.219646 4.49502C0.360282 4.36109 0.551026 4.28584 0.749916 4.28584H9.43845L6.21831 1.22068C6.07749 1.08658 5.99838 0.904705 5.99838 0.715059C5.99838 0.525414 6.07749 0.343536 6.21831 0.209436C6.35912 0.0753365 6.5501 0 6.74925 0C6.94839 0 7.13937 0.0753365 7.28019 0.209436L11.7797 4.49438C11.8495 4.56072 11.9049 4.63952 11.9427 4.72629C11.9805 4.81305 12 4.90606 12 5C12 5.09394 11.9805 5.18695 11.9427 5.27371C11.9049 5.36048 11.8495 5.43928 11.7797 5.50562L7.28019 9.79056C7.13937 9.92466 6.94839 10 6.74925 10C6.5501 10 6.35912 9.92466 6.21831 9.79056C6.07749 9.65646 5.99838 9.47459 5.99838 9.28494C5.99838 9.0953 6.07749 8.91342 6.21831 8.77932L9.43845 5.71416H0.749916C0.551026 5.71416 0.360282 5.63892 0.219646 5.50499C0.079009 5.37106 0 5.18941 0 5Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_688_13911">
                                            <rect width="12" height="10" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                        </button>
                        @endif
                        @else
                        <button class="btnLogin"><a href="{{url('login/employer')}}">
                            Login</a>
                        </button>
                        <button class="btn_join">
                            <a href="{{url('signup/employer')}}" style="color:#fff;"><span> JOIN US </span></a>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="10" viewBox="0 0 12 10"
                                    fill="none">
                                    <g clip-path="url(#clip0_688_13911)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5C0 4.81059 0.079009 4.62895 0.219646 4.49502C0.360282 4.36109 0.551026 4.28584 0.749916 4.28584H9.43845L6.21831 1.22068C6.07749 1.08658 5.99838 0.904705 5.99838 0.715059C5.99838 0.525414 6.07749 0.343536 6.21831 0.209436C6.35912 0.0753365 6.5501 0 6.74925 0C6.94839 0 7.13937 0.0753365 7.28019 0.209436L11.7797 4.49438C11.8495 4.56072 11.9049 4.63952 11.9427 4.72629C11.9805 4.81305 12 4.90606 12 5C12 5.09394 11.9805 5.18695 11.9427 5.27371C11.9049 5.36048 11.8495 5.43928 11.7797 5.50562L7.28019 9.79056C7.13937 9.92466 6.94839 10 6.74925 10C6.5501 10 6.35912 9.92466 6.21831 9.79056C6.07749 9.65646 5.99838 9.47459 5.99838 9.28494C5.99838 9.0953 6.07749 8.91342 6.21831 8.77932L9.43845 5.71416H0.749916C0.551026 5.71416 0.360282 5.63892 0.219646 5.50499C0.079009 5.37106 0 5.18941 0 5Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_688_13911">
                                            <rect width="12" height="10" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                        </button>

                        @endauth


                    </div>
                </div>
            </div>
        </nav>
    </header>
    <button class="talktous"><span><img src="assets/images/Bot.png" alt=""></span> TALK TO US </button>
    <!----------------------------Banner------------------------------------------->
    <section class="banner_sect">
    <div class="bnnr_cntnt">
        <h4>REWPAZ</h4>
        <h3>Let’s Re-Energize
            <span> Your Body and Mind!</span>
        </h3>
        <p>“Meet the most comprehensive wellness platform for you”.</p>
        <button class="btn">GET STARTED</button>
    </div>
    <div class="owl-carousel owl-theme">
        <div class="item">
            <div class="inr_bnnr_section">
                <img class="media_img" src="assets/Home/images/banner01.png" alt="">
            </div>
        </div>
        <div class="item">
            <div class="inr_bnnr_section">
                <img class="media_img" src="assets/Home/images/banner02.png" alt="">
            </div>
        </div>
    </div>
  </section>
    <section class="moment_sect ">
        <div class="container">
            <div class="heading_bx">
                <h3>Your <span>Mental Health</span> is <b>Our Priority</b>  </h3>
            </div>
            <div class="moment_list">
                <div class="mnt_card">
                    <div class="inner_bx">
                        <div class="icon">
                            <img src="assets/Home/images/VideoConference.png" alt="">
                        </div>
                        <div class="mnt_cnt">
                            <h3>Online Sessions</h3>
                            <p>We offer virtual sessions ensuring convenient engagement, flexibility and accessibility to our resources and support from any location.</p>
                        </div>
                    </div>

                </div>
                <div class="mnt_card">
                    <div class="inner_bx">
                        <div class="icon">
                            <img src="assets/Home/images/Union.png" alt="">
                        </div>
                        <div class="mnt_cnt">
                            <h3>Mental & Physical  <span>Wellbeing</span></h3>
                            <p>Our Experts can help you to maintain your holistic wellbeing through the services we provide including 1-on-1 consultations, group sessions and more.</p>
                        </div>
                    </div>

                </div>
                <div class="mnt_card">
                    <div class="inner_bx">
                        <div class="icon">
                            <img src="assets/Home/images/Layers.png" alt="">
                        </div>
                        <div class="mnt_cnt">
                            <h3>Multi-Lingual Support</h3>
                            <p>We assist caregivers in their preferred languages, delivering services in over seven languages for enhanced accessibility and comfort.

                            </p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <section class="about_home" id="About_tab">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="about_left">
                        <div class="head">
                            <h3>About Us </h3>
                            <p>RewPaz</p>
                        </div>
                        <p class="descrip"> This is a comprehensive wellness platform designed by experts with
                            years of experience working with medical facilities and families having
                            caregiving responsibilities. We offer personalized support to help
                            caregivers manage their health and well-being while providing respite
                            with everyday activities when needed .</p>
                        <div class="btn_grp">
                            <button class="btn">KNOW MORE</button>

                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="about_rgt">
                        <div class="media_img">
                            <img src="assets/Home/images/about.png" alt="">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="Services_home" id="Services_tab">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="head">
                        <h3>Our </h3>
                        <p> Services</p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="line_grp">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="media_img">
                        <img src="assets/Home/images/service.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="service_list">
                        <div class="item_crd">
                            <div class="icon">
                                <img src="assets/Home/images/icon01.png" alt="">
                            </div>
                            <div class="item_cnt">
                                <h3>Psychiatric Services</h3>
                                <p>Caregivers are offered services encompassing diagnostic assessments, treatment plans, medication management and more.</p>
                            </div>
                        </div>
                        <div class="item_crd">
                            <div class="icon">
                                <img src="assets/Home/images/icon02.png" alt="">
                            </div>
                            <div class="item_cnt">
                                <h3>Group Therapy Sessions</h3>
                                <p>You can participate in group therapy sessions facilitated by professionals and build a resilient support system.</p>
                            </div>
                        </div>
                        <div class="item_crd">
                            <div class="icon">
                                <img src="assets/Home/images/icon03.png" alt="">
                            </div>
                            <div class="item_cnt">
                                <h3>One-on-One Consultations</h3>
                                <p>You can book appointments for private sessions with Psychologists and Behavioral Technicians for more comprehensive guidance.</p>
                            </div>
                        </div>
                        <div class="item_crd">
                            <div class="icon">
                                <img src="assets/Home/images/icon04.png" alt="">
                            </div>
                            <div class="item_cnt">
                                <h3>Customizable Selfcare</h3>
                                <p>Caregivers can access professional services for yoga, meditation, pilates, and more through curated affiliated providers for wellness improvement.

                                </p>
                            </div>
                        </div>
                        <div class="item_crd">
                            <div class="icon">
                                <img src="assets/Home/images/icon05.png" alt="">
                            </div>
                            <div class="item_cnt">
                                <h3>Dedicated Home Support Workers</h3>
                                <p>You can hire a professional to tend to the needs of a sick family member. They can also book support for childcare, cooking and other household chores etc.  </p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="plan_sect " id="Pricing_tab">
        <div class="heading_bx">
            <div class="line_grp">
                <span></span>
            </div>
            <h3>Plan for your <b>Business</b>
                <span>the right way</span>
            </h3>
            <p>Choose from our well curated packages for your caregivers. And boost their well-being.
                <span> You can access our plans and consultation services on a subscription and enjoy the premium
                    experience.</span>
            </p>
        </div>
        <div class="container">
            <div class="plan_wrapp">
                <div class="paln_inner">
                    <div class="plan_card active">
                        <div class="icon">
                            <img src="assets/Home/images/plan01.png" alt="">
                        </div>
                        <div class="head_title">
                            <h3>Bronze</h3>
                            <h4>$7,500</h4>
                            <p> 100 Tokens
                                <span>$75 / Token</span>
                            </p>
                        </div>
                        <ul>
                            <li> Group Therapy Sessions </li>
                            <li>1-on-1 Consultations </li>
                            <li>24x7 access to Self Help Tools </li>
                            <li>Customizable Selfcare </li>
                            <li>Home Support Workers </li>
                            <li>24x7 on-call help </li>
                            <li>Counselling Guide </li>
                        </ul>
                        <div class="btn_grp">
                            <button class="btn">Select Plan</button>
                        </div>
                    </div>
                    <div class="plan_card">
                        <div class="icon">
                            <img src="assets/Home/images/plan01.png" alt="">
                        </div>
                        <div class="head_title">
                            <h3>Silver</h3>
                            <h4>$15,000</h4>
                            <p> 250 Tokens
                                <span>$60 / Token</span>
                            </p>
                        </div>
                        <ul>
                            <li> Group Therapy Sessions </li>
                            <li>1-on-1 Consultations </li>
                            <li>24x7 access to Self Help Tools </li>
                            <li>Customizable Selfcare </li>
                            <li>Home Support Workers </li>
                            <li>24x7 on-call help </li>
                            <li>Counselling Guide </li>
                        </ul>
                        <div class="btn_grp">
                            <button class="btn">Select Plan</button>
                        </div>
                    </div>
                    <div class="plan_card">
                        <div class="icon">
                            <img src="assets/Home/images/plan01.png" alt="">
                        </div>
                        <div class="head_title">
                            <h3>Gold</h3>
                            <h4>$37,500</h4>
                            <p> 750 Tokens
                                <span>$50 / Token</span>
                            </p>
                        </div>
                        <ul>
                            <li> Group Therapy Sessions </li>
                            <li>1-on-1 Consultations </li>
                            <li>24x7 access to Self Help Tools </li>
                            <li>Customizable Selfcare </li>
                            <li>Home Support Workers </li>
                            <li>24x7 on-call help </li>
                            <li>Counselling Guide </li>
                        </ul>
                        <div class="btn_grp">
                            <button class="btn">Select Plan</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="Testimonials_sect" id="Testimonial_tab">
        <div class="container">
            <div class="heading_bx">
                <h3>What People Say About <span> RewPaz</span></h3>
                <p>These are some reviews of our service and product quality from previous clients.</p>
            </div>
            </div>
            <div class="testi_list slick">
                <div class="card_bx">
                    <div class="inner_bt">
                        <div class="icon">
                            <img src="assets/Home/images/team0.png" alt="">
                        </div>
                        <div class="cont_testi">
                            <p>
                                Finding the right support felt elusive until I discovered this platform. Abundant
                                empathetic
                                approach and guidance I received from here helped me navigate my anxiety. I finally feel
                                understood and supported in my journey to mental well-being .
                            </p>
                        </div>
                        <div class="testi_name">
                            <h3>Amelia Cooper</h3>
                            <p>Wangsheng Director</p>
                        </div>
                    </div>
                </div>
                <div class="card_bx">
                    <div class="inner_bt">
                    <div class="icon">
                        <img src="assets/Home/images/team04.png" alt="">
                    </div>
                    <div class="cont_testi">
                        <p>
                            Finding connection in therapy seemed distant until Melissa. Her guidance navigated my
                            mindfulness struggles, granting validation to my feelings. Gratitude fills me for her
                            invaluable support and understanding.
                        </p>
                    </div>
                    <div class="testi_name">
                        <h3>Paul Aberston</h3>
                        <p>Senior Exceutive</p>
                    </div>
                </div>
                </div>
                <div class="card_bx">
                    <div class="inner_bt">
                        <div class="icon">
                            <img src="assets/Home/images/team03.png" alt="">
                        </div>
                        <div class="cont_testi">
                            <p>
                                Finding connection in therapy seemed distant until Melissa. Her guidance navigated my
                                mindfulness struggles, granting validation to my feelings. Gratitude fills me for her
                                invaluable support and understanding.
                            </p>
                        </div>
                        <div class="testi_name">
                            <h3>Leslie Alexander</h3>
                            <p>Wangsheng Director </p>
                        </div>
                    </div>
                </div>
                <div class="card_bx">
                    <div class="inner_bt">
                        <div class="icon">
                            <img src="assets/Home/images/team06.png" alt="">
                        </div>
                        <div class="cont_testi">
                            <p>
                                Having tried counseling before, connecting was challenging until I found Michael. His
                                guidance transformed my mindfulness struggles, validating my emotions. Grateful for his
                                support and understanding, fostering genuine progress and healing
                            </p>
                        </div>
                        <div class="testi_name">
                            <h3>Sarah Karisgen
                            </h3>
                            <p>Business Owner</p>
                        </div>
                    </div>
                </div>
                <div class="card_bx">
                    <div class="inner_bt">
                        <div class="icon">
                            <img src="assets/Home/images/team05.png" alt="">
                        </div>
                        <div class="cont_testi">
                            <p>
                                Prior therapy attempts left me disconnected until I found Melissa. Her adeptness in
                                addressing my mindfulness challenges fostered a safe space, validating my emotions.
                                Grateful
                                for her guidance, it's been transformative.
                            </p>
                        </div>
                        <div class="testi_name">
                            <h3>Leonard Westin </h3>
                            <p>Senior Executive </p>
                        </div>
                    </div>
                </div>
                <div class="card_bx">
                    <div class="inner_bt">
                        <div class="icon">
                            <img src="assets/Home/images/team05.png" alt="">
                        </div>
                        <div class="cont_testi">
                            <p>
                                Finding the right support felt elusive until I discovered this platform. Abundant
                                empathetic
                                approach and guidance I received from here helped me navigate my anxiety. I finally feel
                                understood and supported in my journey to mental well-being .
                            </p>
                        </div>
                        <div class="testi_name">
                            <h3>Amelia Cooper</h3>
                            <p>Wangsheng Director</p>
                        </div>
                    </div>
                </div>
                <div class="card_bx">
                    <div class="inner_bt">
                    <div class="icon">
                        <img src="assets/Home/images/team04.png" alt="">
                    </div>
                    <div class="cont_testi">
                        <p>
                            Finding connection in therapy seemed distant until Melissa. Her guidance navigated my
                            mindfulness struggles, granting validation to my feelings. Gratitude fills me for her
                            invaluable support and understanding.
                        </p>
                    </div>
                    <div class="testi_name">
                        <h3>Paul Aberston</h3>
                        <p>Senior Exceutive</p>
                    </div>
                </div>
                </div>
                <div class="card_bx">
                    <div class="inner_bt">
                        <div class="icon">
                            <img src="assets/Home/images/team03.png" alt="">
                        </div>
                        <div class="cont_testi">
                            <p>
                                Finding connection in therapy seemed distant until Melissa. Her guidance navigated my
                                mindfulness struggles, granting validation to my feelings. Gratitude fills me for her
                                invaluable support and understanding.
                            </p>
                        </div>
                        <div class="testi_name">
                            <h3>Leslie Alexander</h3>
                            <p>Wangsheng Director </p>
                        </div>
                    </div>
                </div>
                <div class="card_bx">
                    <div class="inner_bt">
                        <div class="icon">
                            <img src="assets/Home/images/team06.png" alt="">
                        </div>
                        <div class="cont_testi">
                            <p>
                                Having tried counseling before, connecting was challenging until I found Michael. His
                                guidance transformed my mindfulness struggles, validating my emotions. Grateful for his
                                support and understanding, fostering genuine progress and healing
                            </p>
                        </div>
                        <div class="testi_name">
                            <h3>Sarah Karisgen
                            </h3>
                            <p>Business Owner</p>
                        </div>
                    </div>
                </div>
                <div class="card_bx">
                    <div class="inner_bt">
                        <div class="icon">
                            <img src="assets/Home/images/team05.png" alt="">
                        </div>
                        <div class="cont_testi">
                            <p>
                                Prior therapy attempts left me disconnected until I found Melissa. Her adeptness in
                                addressing my mindfulness challenges fostered a safe space, validating my emotions.
                                Grateful
                                for her guidance, it's been transformative.
                            </p>
                        </div>
                        <div class="testi_name">
                            <h3>Leonard Westin </h3>
                            <p>Senior Executive </p>
                        </div>
                    </div>
                </div>



            </div>

        </div>

    </section>

    <section class="Faq_sect" id="FAQs_tab">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="line_grp">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="head">
                        <h3>Read our <span>FAQ’s</span></h3>
                    </div>
                </div>
            </div>
            <div class="faq_rgt">
                <div class="tab_query">

                    <div class="accordion" id="accordionExample">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <span> Which services can be customised?</span>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Our services including Home Support for Workers, Physiotherapy, Meditation, Yoga, Pilates, Dieticians, or Nutritionist can be customised to suit your prefernces.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            What happens in a one-on-one consultation?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>In such a consult, we discuss concerns, set goals and build rapport. Therapist gathers info, explores issues, plans sessions, creating a safe, supportive space for understanding and progress.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Can I view the earlier messages the therapist sent?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        <p>Yes. You may always log in to your account and read all of the communications that your therapist has sent to you. This may aid in your ability to reflect on and recall some of the advice and input you have received. This is one of the key benefits of e-therapy.
                                      </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            With my therapist, how will I communicate?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        <p>
                                        There are four ways to receive therapy:

                                        <ul  style="margin-left: 30px; font-size:17px;">
                                            <li >Message exchange with your therapist.</li>
                                            <li>Have a live chat with your therapist.</li>
                                            <li>Talking to your therapist on the phone.</li>
                                            <li>meeting your therapist through video conference.</li>
                                        </ul>

                                   <p>
                                    Based on your requirements, resources, and convenience, you are free to employ various methods at various times.

                                </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            Which Affiliate Service do you Provide?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        <p>
                                  Our website provides Home Support Workers, Physiotherapy, Meditation, Yoga, Pilates, Dieticians, or Nutritionist.
                                    </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                            aria-expanded="false" aria-controls="collapseSix">
                                            With my therapist, how will I communicate?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse"
                                        aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        <p>
                                        There are four ways to receive therapy:

                                        <ul  style="margin-left: 30px; font-size:17px;">
                                            <li >Message exchange with your therapist.</li>
                                            <li>Have a live chat with your therapist.</li>
                                            <li>Talking to your therapist on the phone.</li>
                                            <li>meeting your therapist through video conference.</li>
                                        </ul>

                                   <p>
                                    Based on your requirements, resources, and convenience, you are free to employ various methods at various times.

                                </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

            </div>

        </div>
    </section>
    <section class="team_sect" id="Team_tab">
        <div class="container">
            <div class="head">
                <h3>Meet Our <span> Founders </span></h3>
                <p><span>the creative team</span> behind the doors</p>
            </div>
            <div class="bg_team">
                <div class="team_list">
                    <div class="card_bx">
                        <div class="icon_bx">
                            <img src="assets/Home/images/team02.png" alt="">
                        </div>
                        <div class="cont_team">
                            <h3>Dr. Paulina Troncoso</h3>
                            <p>Founder</p>
                            <div class="list_social">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_688_13717)">
                                                    <path
                                                        d="M18.4683 4.71376C17.8321 4.99517 17.1574 5.17999 16.4666 5.26209C17.1947 4.82662 17.7397 4.14127 17.9999 3.33376C17.3166 3.74043 16.5674 4.02543 15.7866 4.17959C15.2621 3.61841 14.5669 3.24623 13.8091 3.12091C13.0512 2.9956 12.2732 3.12417 11.596 3.48664C10.9187 3.84911 10.3802 4.42516 10.0642 5.12525C9.74812 5.82534 9.67221 6.61024 9.84826 7.35793C8.46251 7.28847 7.10687 6.92836 5.86933 6.30098C4.63179 5.6736 3.54003 4.79297 2.66492 3.71626C2.35516 4.2483 2.19238 4.85312 2.19326 5.46876C2.19326 6.67709 2.80826 7.74459 3.74326 8.36959C3.18993 8.35217 2.64878 8.20274 2.16492 7.93376V7.97709C2.16509 8.78184 2.44356 9.56177 2.95313 10.1846C3.46269 10.8075 4.17199 11.235 4.96076 11.3946C4.4471 11.5338 3.90851 11.5543 3.38576 11.4546C3.60814 12.1473 4.04159 12.7531 4.62542 13.1872C5.20924 13.6213 5.9142 13.8619 6.64159 13.8754C5.91866 14.4432 5.0909 14.8629 4.20566 15.1106C3.32041 15.3582 2.39503 15.429 1.48242 15.3188C3.0755 16.3433 4.93 16.8872 6.82409 16.8854C13.2349 16.8854 16.7408 11.5746 16.7408 6.96876C16.7408 6.81876 16.7366 6.66709 16.7299 6.51876C17.4123 6.02557 18.0013 5.41461 18.4691 4.71459L18.4683 4.71376Z"
                                                        fill="white"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_688_13717">
                                                        <rect width="20" height="20" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_688_13722)">
                                                    <path
                                                        d="M9.99984 1.66699C5.39734 1.66699 1.6665 5.39783 1.6665 10.0003C1.6665 14.1595 4.714 17.607 8.69817 18.2328V12.4087H6.5815V10.0003H8.69817V8.16449C8.69817 6.07616 9.9415 4.92283 11.8457 4.92283C12.7573 4.92283 13.7107 5.08533 13.7107 5.08533V7.13533H12.6607C11.6248 7.13533 11.3023 7.77783 11.3023 8.43699V10.0003H13.6132L13.244 12.4087H11.3023V18.2328C15.2857 17.6078 18.3332 14.1587 18.3332 10.0003C18.3332 5.39783 14.6023 1.66699 9.99984 1.66699Z"
                                                        fill="white"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_688_13722">
                                                        <rect width="20" height="20" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg></a>
                                    </li>
                                    <li>
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_688_13749)">
                                                    <path
                                                        d="M15.2792 15.2825H13.0583V11.8017C13.0583 10.9717 13.0417 9.90333 11.9 9.90333C10.7425 9.90333 10.5658 10.8067 10.5658 11.7408V15.2825H8.34417V8.125H10.4775V9.1H10.5067C10.805 8.53833 11.53 7.94417 12.6133 7.94417C14.8633 7.94417 15.28 9.42583 15.28 11.3533V15.2825H15.2792ZM5.83583 7.14583C5.6663 7.14605 5.49838 7.11281 5.34172 7.04801C5.18506 6.9832 5.04272 6.88812 4.92288 6.7682C4.80304 6.64828 4.70804 6.50588 4.64334 6.34918C4.57864 6.19247 4.5455 6.02454 4.54583 5.855C4.546 5.59986 4.62182 5.3505 4.7637 5.13846C4.90558 4.92641 5.10716 4.76119 5.34294 4.66371C5.57872 4.56623 5.83811 4.54085 6.08832 4.59078C6.33852 4.64072 6.5683 4.76373 6.74859 4.94426C6.92888 5.12478 7.0516 5.35472 7.10121 5.60498C7.15082 5.85525 7.12511 6.11461 7.02732 6.35026C6.92953 6.58592 6.76406 6.78728 6.55183 6.92889C6.33959 7.0705 6.09014 7.146 5.835 7.14583H5.83583ZM6.94917 15.2825H4.72167V8.125H6.95V15.2825H6.94917ZM16.3917 2.5H3.6075C2.99417 2.5 2.5 2.98333 2.5 3.58083V16.4192C2.5 17.0167 2.995 17.5 3.60667 17.5H16.3883C17 17.5 17.5 17.0167 17.5 16.4192V3.58083C17.5 2.98333 17 2.5 16.3883 2.5H16.3908H16.3917Z"
                                                        fill="white"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_688_13749">
                                                        <rect width="20" height="20" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card_bx">
                        <div class="icon_bx">
                            <img src="assets/Home/images/team01.jpg" alt="">
                        </div>
                        <div class="cont_team">
                            <h3>Dr. Mohit Gupta</h3>
                            <p>Co-Founder</p>
                            <div class="list_social">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_688_13717)">
                                                    <path
                                                        d="M18.4683 4.71376C17.8321 4.99517 17.1574 5.17999 16.4666 5.26209C17.1947 4.82662 17.7397 4.14127 17.9999 3.33376C17.3166 3.74043 16.5674 4.02543 15.7866 4.17959C15.2621 3.61841 14.5669 3.24623 13.8091 3.12091C13.0512 2.9956 12.2732 3.12417 11.596 3.48664C10.9187 3.84911 10.3802 4.42516 10.0642 5.12525C9.74812 5.82534 9.67221 6.61024 9.84826 7.35793C8.46251 7.28847 7.10687 6.92836 5.86933 6.30098C4.63179 5.6736 3.54003 4.79297 2.66492 3.71626C2.35516 4.2483 2.19238 4.85312 2.19326 5.46876C2.19326 6.67709 2.80826 7.74459 3.74326 8.36959C3.18993 8.35217 2.64878 8.20274 2.16492 7.93376V7.97709C2.16509 8.78184 2.44356 9.56177 2.95313 10.1846C3.46269 10.8075 4.17199 11.235 4.96076 11.3946C4.4471 11.5338 3.90851 11.5543 3.38576 11.4546C3.60814 12.1473 4.04159 12.7531 4.62542 13.1872C5.20924 13.6213 5.9142 13.8619 6.64159 13.8754C5.91866 14.4432 5.0909 14.8629 4.20566 15.1106C3.32041 15.3582 2.39503 15.429 1.48242 15.3188C3.0755 16.3433 4.93 16.8872 6.82409 16.8854C13.2349 16.8854 16.7408 11.5746 16.7408 6.96876C16.7408 6.81876 16.7366 6.66709 16.7299 6.51876C17.4123 6.02557 18.0013 5.41461 18.4691 4.71459L18.4683 4.71376Z"
                                                        fill="white"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_688_13717">
                                                        <rect width="20" height="20" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_688_13722)">
                                                    <path
                                                        d="M9.99984 1.66699C5.39734 1.66699 1.6665 5.39783 1.6665 10.0003C1.6665 14.1595 4.714 17.607 8.69817 18.2328V12.4087H6.5815V10.0003H8.69817V8.16449C8.69817 6.07616 9.9415 4.92283 11.8457 4.92283C12.7573 4.92283 13.7107 5.08533 13.7107 5.08533V7.13533H12.6607C11.6248 7.13533 11.3023 7.77783 11.3023 8.43699V10.0003H13.6132L13.244 12.4087H11.3023V18.2328C15.2857 17.6078 18.3332 14.1587 18.3332 10.0003C18.3332 5.39783 14.6023 1.66699 9.99984 1.66699Z"
                                                        fill="white"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_688_13722">
                                                        <rect width="20" height="20" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg></a>
                                    </li>
                                    <li>
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_688_13749)">
                                                    <path
                                                        d="M15.2792 15.2825H13.0583V11.8017C13.0583 10.9717 13.0417 9.90333 11.9 9.90333C10.7425 9.90333 10.5658 10.8067 10.5658 11.7408V15.2825H8.34417V8.125H10.4775V9.1H10.5067C10.805 8.53833 11.53 7.94417 12.6133 7.94417C14.8633 7.94417 15.28 9.42583 15.28 11.3533V15.2825H15.2792ZM5.83583 7.14583C5.6663 7.14605 5.49838 7.11281 5.34172 7.04801C5.18506 6.9832 5.04272 6.88812 4.92288 6.7682C4.80304 6.64828 4.70804 6.50588 4.64334 6.34918C4.57864 6.19247 4.5455 6.02454 4.54583 5.855C4.546 5.59986 4.62182 5.3505 4.7637 5.13846C4.90558 4.92641 5.10716 4.76119 5.34294 4.66371C5.57872 4.56623 5.83811 4.54085 6.08832 4.59078C6.33852 4.64072 6.5683 4.76373 6.74859 4.94426C6.92888 5.12478 7.0516 5.35472 7.10121 5.60498C7.15082 5.85525 7.12511 6.11461 7.02732 6.35026C6.92953 6.58592 6.76406 6.78728 6.55183 6.92889C6.33959 7.0705 6.09014 7.146 5.835 7.14583H5.83583ZM6.94917 15.2825H4.72167V8.125H6.95V15.2825H6.94917ZM16.3917 2.5H3.6075C2.99417 2.5 2.5 2.98333 2.5 3.58083V16.4192C2.5 17.0167 2.995 17.5 3.60667 17.5H16.3883C17 17.5 17.5 17.0167 17.5 16.4192V3.58083C17.5 2.98333 17 2.5 16.3883 2.5H16.3908H16.3917Z"
                                                        fill="white"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_688_13749">
                                                        <rect width="20" height="20" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card_bx">
                        <div class="icon_bx">
                            <img src="assets/Home/images/team08.png" alt="">
                        </div>
                        <div class="cont_team">
                            <h3>Dr. Mauricio Gabrielli</h3>
                            <p>Co-Founder</p>
                            <div class="list_social">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_688_13717)">
                                                    <path
                                                        d="M18.4683 4.71376C17.8321 4.99517 17.1574 5.17999 16.4666 5.26209C17.1947 4.82662 17.7397 4.14127 17.9999 3.33376C17.3166 3.74043 16.5674 4.02543 15.7866 4.17959C15.2621 3.61841 14.5669 3.24623 13.8091 3.12091C13.0512 2.9956 12.2732 3.12417 11.596 3.48664C10.9187 3.84911 10.3802 4.42516 10.0642 5.12525C9.74812 5.82534 9.67221 6.61024 9.84826 7.35793C8.46251 7.28847 7.10687 6.92836 5.86933 6.30098C4.63179 5.6736 3.54003 4.79297 2.66492 3.71626C2.35516 4.2483 2.19238 4.85312 2.19326 5.46876C2.19326 6.67709 2.80826 7.74459 3.74326 8.36959C3.18993 8.35217 2.64878 8.20274 2.16492 7.93376V7.97709C2.16509 8.78184 2.44356 9.56177 2.95313 10.1846C3.46269 10.8075 4.17199 11.235 4.96076 11.3946C4.4471 11.5338 3.90851 11.5543 3.38576 11.4546C3.60814 12.1473 4.04159 12.7531 4.62542 13.1872C5.20924 13.6213 5.9142 13.8619 6.64159 13.8754C5.91866 14.4432 5.0909 14.8629 4.20566 15.1106C3.32041 15.3582 2.39503 15.429 1.48242 15.3188C3.0755 16.3433 4.93 16.8872 6.82409 16.8854C13.2349 16.8854 16.7408 11.5746 16.7408 6.96876C16.7408 6.81876 16.7366 6.66709 16.7299 6.51876C17.4123 6.02557 18.0013 5.41461 18.4691 4.71459L18.4683 4.71376Z"
                                                        fill="white"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_688_13717">
                                                        <rect width="20" height="20" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_688_13722)">
                                                    <path
                                                        d="M9.99984 1.66699C5.39734 1.66699 1.6665 5.39783 1.6665 10.0003C1.6665 14.1595 4.714 17.607 8.69817 18.2328V12.4087H6.5815V10.0003H8.69817V8.16449C8.69817 6.07616 9.9415 4.92283 11.8457 4.92283C12.7573 4.92283 13.7107 5.08533 13.7107 5.08533V7.13533H12.6607C11.6248 7.13533 11.3023 7.77783 11.3023 8.43699V10.0003H13.6132L13.244 12.4087H11.3023V18.2328C15.2857 17.6078 18.3332 14.1587 18.3332 10.0003C18.3332 5.39783 14.6023 1.66699 9.99984 1.66699Z"
                                                        fill="white"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_688_13722">
                                                        <rect width="20" height="20" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg></a>
                                    </li>
                                    <li>
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_688_13749)">
                                                    <path
                                                        d="M15.2792 15.2825H13.0583V11.8017C13.0583 10.9717 13.0417 9.90333 11.9 9.90333C10.7425 9.90333 10.5658 10.8067 10.5658 11.7408V15.2825H8.34417V8.125H10.4775V9.1H10.5067C10.805 8.53833 11.53 7.94417 12.6133 7.94417C14.8633 7.94417 15.28 9.42583 15.28 11.3533V15.2825H15.2792ZM5.83583 7.14583C5.6663 7.14605 5.49838 7.11281 5.34172 7.04801C5.18506 6.9832 5.04272 6.88812 4.92288 6.7682C4.80304 6.64828 4.70804 6.50588 4.64334 6.34918C4.57864 6.19247 4.5455 6.02454 4.54583 5.855C4.546 5.59986 4.62182 5.3505 4.7637 5.13846C4.90558 4.92641 5.10716 4.76119 5.34294 4.66371C5.57872 4.56623 5.83811 4.54085 6.08832 4.59078C6.33852 4.64072 6.5683 4.76373 6.74859 4.94426C6.92888 5.12478 7.0516 5.35472 7.10121 5.60498C7.15082 5.85525 7.12511 6.11461 7.02732 6.35026C6.92953 6.58592 6.76406 6.78728 6.55183 6.92889C6.33959 7.0705 6.09014 7.146 5.835 7.14583H5.83583ZM6.94917 15.2825H4.72167V8.125H6.95V15.2825H6.94917ZM16.3917 2.5H3.6075C2.99417 2.5 2.5 2.98333 2.5 3.58083V16.4192C2.5 17.0167 2.995 17.5 3.60667 17.5H16.3883C17 17.5 17.5 17.0167 17.5 16.4192V3.58083C17.5 2.98333 17 2.5 16.3883 2.5H16.3908H16.3917Z"
                                                        fill="white"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_688_13749">
                                                        <rect width="20" height="20" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg_getstarter">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="getstart_bx">
                        <h3>Get started with <span>RewPaz</span></h3>
                        <p>Get pricing quotes from us that are incredibly enticing, <span> and find a residence quickly, by subscribing.</span></p>
                        <button class="btn">Get Started</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="footer_bx">
                        <img src="{{asset('assets/Home/images/logo.svg')}}" alt="">
                        <p>
                            Our mission is to provide caregivers with the unwavering support they need to navigate this
                            challenging journey
                        </p>
                        <ul class="ft_soical">
                            <li>
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="34" height="34"
                                        viewBox="0 0 34 34" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M16.8261 0C12.2564 0 11.6836 0.0196285 9.88882 0.100955C8.09754 0.182982 6.87415 0.467621 5.80429 0.883366C4.69798 1.31313 3.75922 1.88873 2.82467 2.82398C1.88872 3.75923 1.31314 4.69799 0.883376 5.8043C0.467632 6.87486 0.182291 8.09755 0.100965 9.88883C0.0196392 11.6836 0 12.2564 0 16.8261C0 21.3958 0.0196392 21.9686 0.100965 23.7633C0.182992 25.5546 0.467632 26.778 0.883376 27.8479C1.31314 28.9542 1.88874 29.8929 2.82399 30.8275C3.75924 31.7634 4.69798 32.339 5.80429 32.7695C6.87485 33.1845 8.09754 33.4692 9.88882 33.5512C11.6836 33.6325 12.2564 33.6522 16.8261 33.6522C21.3958 33.6522 21.9686 33.6325 23.7634 33.5512C25.5546 33.4692 26.778 33.1846 27.8479 32.7688C28.9542 32.339 29.893 31.7634 30.8275 30.8282C31.7635 29.8929 32.3391 28.9542 32.7695 27.8479C33.1846 26.7773 33.4692 25.5546 33.5512 23.7633C33.6326 21.9686 33.6522 21.3958 33.6522 16.8261C33.6522 12.2564 33.6326 11.6836 33.5512 9.88883C33.4692 8.09755 33.1845 6.87416 32.7688 5.8043C32.339 4.69799 31.7634 3.75923 30.8282 2.82468C29.8929 1.88873 28.9542 1.31313 27.8479 0.883366C26.7773 0.467621 25.5546 0.182281 23.7634 0.100955C21.9686 0.0196285 21.3958 0 16.8261 0ZM16.8261 3.0315C21.3187 3.0315 21.8508 3.04903 23.6252 3.12966C25.2658 3.20467 26.1562 3.47879 26.75 3.70945C27.5352 4.01442 28.096 4.37899 28.685 4.9679C29.2732 5.55681 29.6377 6.11768 29.9427 6.9029C30.1741 7.49532 30.4475 8.3864 30.5225 10.0269C30.6032 11.8007 30.6207 12.3335 30.6207 16.8261C30.6207 21.3187 30.6032 21.8508 30.5225 23.6252C30.4475 25.2658 30.1734 26.1562 29.9427 26.75C29.6377 27.5352 29.2732 28.0961 28.6843 28.685C28.0954 29.2732 27.5345 29.6377 26.7493 29.9427C26.1568 30.1741 25.2658 30.4475 23.6252 30.5225C21.8515 30.6031 21.3187 30.6207 16.8261 30.6207C12.3328 30.6207 11.8007 30.6031 10.0269 30.5225C8.3864 30.4475 7.49602 30.1734 6.9022 29.9427C6.11698 29.6377 5.55611 29.2732 4.9672 28.6843C4.37898 28.0954 4.01441 27.5345 3.70944 26.7493C3.47808 26.1569 3.20466 25.2658 3.12964 23.6252C3.04902 21.8515 3.0315 21.3187 3.0315 16.8261C3.0315 12.3335 3.04902 11.8014 3.12964 10.0269C3.20466 8.3864 3.47878 7.49602 3.70944 6.9022C4.01441 6.11698 4.37899 5.55612 4.9679 4.96721C5.55681 4.37899 6.11769 4.01442 6.90291 3.70945C7.49533 3.47809 8.3864 3.20467 10.0269 3.12966C11.8007 3.04903 12.3335 3.0315 16.8261 3.0315ZM16.8261 8.18589C12.0538 8.18589 8.18589 12.0538 8.18589 16.8261C8.18589 21.5984 12.0538 25.4663 16.8261 25.4663C21.5984 25.4663 25.4663 21.5984 25.4663 16.8261C25.4663 12.0538 21.5984 8.18589 16.8261 8.18589ZM16.8261 22.4348C15.3386 22.4348 13.912 21.8439 12.8601 20.792C11.8083 19.7402 11.2174 18.3136 11.2174 16.8261C11.2174 15.3386 11.8083 13.912 12.8601 12.8601C13.912 11.8083 15.3386 11.2174 16.8261 11.2174C18.3136 11.2174 19.7402 11.8083 20.792 12.8601C21.8439 13.912 22.4348 15.3386 22.4348 16.8261C22.4348 18.3136 21.8439 19.7402 20.792 20.792C19.7402 21.8439 18.3136 22.4348 16.8261 22.4348ZM27.8268 7.84446C27.8268 8.37996 27.6141 8.89354 27.2355 9.2722C26.8568 9.65086 26.3432 9.86359 25.8077 9.86359C25.2722 9.86359 24.7586 9.65086 24.38 9.2722C24.0013 8.89354 23.7886 8.37996 23.7886 7.84446C23.7886 7.30895 24.0013 6.79538 24.38 6.41672C24.7586 6.03806 25.2722 5.82534 25.8077 5.82534C26.3432 5.82534 26.8568 6.03806 27.2355 6.41672C27.6141 6.79538 27.8268 7.30895 27.8268 7.84446Z"
                                            fill="url(#paint0_linear_688_13659)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_688_13659" x1="-14.3022" y1="-33.6522"
                                                x2="62.0062" y2="-22.8496" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#0068C4" />
                                                <stop offset="1" stop-color="#00A7C5" />
                                            </linearGradient>
                                        </defs>
                                    </svg></a>
                            </li>
                            <li>
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="34" height="27"
                                        viewBox="0 0 34 27" fill="none">
                                        <path
                                            d="M33.6522 3.13581C32.3874 3.66005 31.0499 4.0066 29.6812 4.16468C31.1252 3.34049 32.2073 2.04389 32.7267 0.515401C31.3698 1.28716 29.8844 1.83091 28.3351 2.12301C27.2996 1.05005 25.9205 0.335825 24.4143 0.0923601C22.9081 -0.151105 21.3599 0.08996 20.0126 0.777747C18.6652 1.46553 17.5949 2.56114 16.9695 3.89273C16.3441 5.22433 16.199 6.71659 16.5569 8.13549C13.8133 8.0029 11.1295 7.32035 8.68 6.13218C6.23048 4.94401 4.06997 3.27679 2.33883 1.23883C1.73164 2.25189 1.41258 3.39917 1.41339 4.56659C1.41124 5.65073 1.6897 6.71856 2.224 7.67501C2.75829 8.63146 3.53183 9.44683 4.47574 10.0485C3.37864 10.02 2.30498 9.73876 1.34609 9.22867V9.30905C1.35431 10.8281 1.91143 12.2977 2.92322 13.4695C3.93501 14.6412 5.33935 15.4431 6.89869 15.7395C6.29843 15.914 5.67523 16.0061 5.04783 16.0128C4.61353 16.0079 4.18031 15.9703 3.75222 15.9003C4.19627 17.2069 5.0556 18.3489 6.21063 19.1672C7.36566 19.9855 8.75895 20.4394 10.1966 20.4659C7.76895 22.291 4.77168 23.287 1.68261 23.2953C1.12017 23.297 0.558181 23.2648 0 23.1988C3.15393 25.1445 6.82939 26.1773 10.5836 26.1729C13.1743 26.1986 15.7444 25.7308 18.1438 24.7969C20.5431 23.863 22.7237 22.4816 24.558 20.7335C26.3924 18.9854 27.8437 16.9056 28.8274 14.6156C29.811 12.3256 30.3072 9.87127 30.287 7.39599C30.287 7.12269 30.287 6.83332 30.287 6.54395C31.6073 5.60319 32.746 4.44991 33.6522 3.13581Z"
                                            fill="url(#paint0_linear_688_13660)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_688_13660" x1="-14.3022" y1="-26.1739"
                                                x2="61.0395" y2="-12.4608" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#0068C4" />
                                                <stop offset="1" stop-color="#00A7C5" />
                                            </linearGradient>
                                        </defs>
                                    </svg></a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34"
                                        fill="none">
                                        <path
                                            d="M31.8013 0H1.85087C1.35999 0 0.889213 0.195002 0.542107 0.542107C0.195002 0.889213 0 1.35999 0 1.85087V31.8013C0 32.0444 0.0478743 32.285 0.140889 32.5096C0.233904 32.7342 0.370238 32.9382 0.542107 33.1101C0.713976 33.2819 0.918015 33.4183 1.14257 33.5113C1.36713 33.6043 1.60781 33.6522 1.85087 33.6522H17.9703V20.612H13.5955V15.5641H17.9703V11.7783C17.8796 10.8894 17.9846 9.99154 18.2777 9.14756C18.5708 8.30359 19.0451 7.53396 19.6671 6.89266C20.2892 6.25136 21.044 5.75392 21.8787 5.43523C22.7133 5.11654 23.6076 4.98431 24.4988 5.04783C25.8084 5.03977 27.1174 5.10718 28.4193 5.24974V9.79278H25.7439C23.6238 9.79278 23.22 10.8023 23.22 12.2662V15.5137H28.2678L27.6116 20.5615H23.22V33.6522H31.8013C32.0444 33.6522 32.285 33.6043 32.5096 33.5113C32.7342 33.4183 32.9382 33.2819 33.1101 33.1101C33.2819 32.9382 33.4183 32.7342 33.5113 32.5096C33.6043 32.285 33.6522 32.0444 33.6522 31.8013V1.85087C33.6522 1.60781 33.6043 1.36713 33.5113 1.14257C33.4183 0.918015 33.2819 0.713976 33.1101 0.542107C32.9382 0.370238 32.7342 0.233904 32.5096 0.140889C32.285 0.0478743 32.0444 0 31.8013 0Z"
                                            fill="url(#paint0_linear_688_13661)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_688_13661" x1="-14.3022" y1="-33.6522"
                                                x2="62.0062" y2="-22.8496" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#0068C4" />
                                                <stop offset="1" stop-color="#00A7C5" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </a>
                            </li>
                        </ul>

                    </div>

                </div>
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <div class="footer_bx">
                        <h3 class="heading_ft">Menu</h3>
                        <ul>
                            <li>
                                <a href="#">About us</a>
                            </li>
                            <li>
                                <a href="#">Pricing plans</a>
                            </li>
                            <li>
                                <a href="#">Our team</a>
                            </li>
                            <li>
                                <a href="#">Group therapy</a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <div class="footer_bx">
                        <h3 class="heading_ft">Company</h3>
                        <ul>
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#"> Our services</a>
                            </li>
                            <li>
                                <a href="#"> FAQs</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="footer_bx">
                        <h3 class="heading_ft">Contact us</h3>
                        <ul class="list_ic">
                            <li>
                                <a href="#"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12 2C15.87 2 19 5.13 19 9C19 14.25 12 22 12 22C12 22 5 14.25 5 9C5 5.13 8.13 2 12 2ZM7 9C7 11.85 9.92 16.21 12 18.88C14.12 16.19 17 11.88 17 9C17 6.24 14.76 4 12 4C9.24 4 7 6.24 7 9ZM12 11.5C10.6193 11.5 9.5 10.3807 9.5 9C9.5 7.61929 10.6193 6.5 12 6.5C13.3807 6.5 14.5 7.61929 14.5 9C14.5 10.3807 13.3807 11.5 12 11.5Z"
                                                fill="#52A2E9" />
                                        </svg></span><span>8920 WOODBINE AVENUE 304
MARKHAM, ON, CA, L3R 9W9</span></a>
                            </li>
                            <li>
                                <a href="#"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M22 6C22 4.9 21.1 4 20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6ZM20 6L12 11L4 6H20ZM20 18H4V8L12 13L20 8V18Z"
                                                fill="#52A2E9" />
                                        </svg></span><span>contact@rewpaz.ca</span></a>
                            </li>
                            <li>
                                <a href="#"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M6.54 5C6.6 5.89 6.75 6.76 6.99 7.59L5.79 8.79C5.38 7.59 5.12 6.32 5.03 5H6.54ZM16.4 17.02C17.25 17.26 18.12 17.41 19 17.47V18.96C17.68 18.87 16.41 18.61 15.2 18.21L16.4 17.02ZM7.5 3H4C3.45 3 3 3.45 3 4C3 13.39 10.61 21 20 21C20.55 21 21 20.55 21 20V16.51C21 15.96 20.55 15.51 20 15.51C18.76 15.51 17.55 15.31 16.43 14.94C16.33 14.9 16.22 14.89 16.12 14.89C15.86 14.89 15.61 14.99 15.41 15.18L13.21 17.38C10.38 15.93 8.06 13.62 6.62 10.79L8.82 8.59C9.1 8.31 9.18 7.92 9.07 7.57C8.7 6.45 8.5 5.25 8.5 4C8.5 3.45 8.05 3 7.5 3Z"
                                                fill="#52A2E9" />
                                        </svg></span><span>+1 386-688-3295</span></a>
                            </li>

                        </ul>

                    </div>
                </div>

            </div>


        </div>
        <div class="footer_btm">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                         <p>Copyright @ <a href="#">RewPaz Solution Inc.</a></p>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="{{asset('assets/Home/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/Home/js/owl.carousel.min.js')}}"></script>
    <script src='https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js'></script>
    <script src="{{asset('assets/Home/js/scrollreveal.min.js')}}"></script>

    <script>
       $('.banner_sect .owl-carousel').owlCarousel({
  loop: true,
  margin: 30,
  nav: false,
  autoplay: true,
  autoplayTimeout:3000,
  dots:false,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
})
        $('.Testimonials_sect .slick').
            on('init', () => {
                $('.slick-slide[data-slick-index="-2"]').addClass('lt2');
                $('.slick-slide[data-slick-index="-1"]').addClass('lt1');
                $('.slick-slide[data-slick-index="1"]').addClass('gt1');
                $('.slick-slide[data-slick-index="2"]').addClass('gt2');
            }).
            slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: 0,
                autoplay:true,
                loop:false,
                dots: true,
                center: true,
                autoplaySpeed: 2000,
                responsive: [
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            }).
            on('beforeChange', (event, slick, current, next) => {
                $('.slick-slide.gt2').removeClass('gt2');
                $('.slick-slide.gt1').removeClass('gt1');
                $('.slick-slide.lt1').removeClass('lt1');
                $('.slick-slide.lt2').removeClass('lt2');

                const lt2 = current < next && current > 0 ? current - 1 : next - 2;
                const lt1 = current < next && current > 0 ? current : next - 1;
                const gt1 = current < next || next === 0 ? next + 1 : current;
                const gt2 = current < next || next === 0 ? next + 2 : current + 1;

                $(`.slick-slide[data-slick-index="${lt2}"]`).addClass('lt2');
                $(`.slick-slide[data-slick-index="${lt1}"]`).addClass('lt1');
                $(`.slick-slide[data-slick-index="${gt1}"]`).addClass('gt1');
                $(`.slick-slide[data-slick-index="${gt2}"]`).addClass('gt2');

                // Clone processing when moving from 5 to 0
                if (current === 5 && next === 0) {
                    $(`.slick-slide[data-slick-index="${current - 1}"]`).addClass('lt2');
                    $(`.slick-slide[data-slick-index="${current}"]`).addClass('lt1');
                    $(`.slick-slide[data-slick-index="${current + 2}"]`).addClass('gt1');
                    $(`.slick-slide[data-slick-index="${current + 3}"]`).addClass('gt2');
                }

                // Clone processing when moving from 0 to 5
                if (current === 0 && next === 5) {
                    $(`.slick-slide[data-slick-index="${current - 1}"]`).addClass('gt2');
                    $(`.slick-slide[data-slick-index="${current}"]`).addClass('gt1');
                    $(`.slick-slide[data-slick-index="${current - 2}"]`).addClass('lt1');
                    $(`.slick-slide[data-slick-index="${current - 3}"]`).addClass('lt2');
                }


            });

    </script>
</body>

</html>