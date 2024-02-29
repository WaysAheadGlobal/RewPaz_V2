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
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

</head>

<body>
    <header class="header_top inner_page">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="{{asset('assets/images/logo.png')}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <!-- <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#About_tab">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Services_tab">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Pricing_tab">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Team_tab">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Testimonial_tab">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#FAQs_tab">FAQs</a>
                        </li> -->
                    </ul>
                    <div class="btn_grp wallet_grp">
                        <button class="wallet_btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                fill="none">
                                <path
                                    d="M25.3333 26.6663H6.66667C5.95942 26.6663 5.28115 26.3854 4.78105 25.8853C4.28095 25.3852 4 24.7069 4 23.9997V11.9997C4 11.2924 4.28095 10.6142 4.78105 10.1141C5.28115 9.61396 5.95942 9.33301 6.66667 9.33301H25.3333C26.0406 9.33301 26.7189 9.61396 27.219 10.1141C27.719 10.6142 28 11.2924 28 11.9997V23.9997C28 24.7069 27.719 25.3852 27.219 25.8853C26.7189 26.3854 26.0406 26.6663 25.3333 26.6663Z"
                                    stroke="#1BA261" stroke-width="1.5" />
                                <path
                                    d="M21.9997 18.6663C21.8229 18.6663 21.6533 18.5961 21.5283 18.4711C21.4032 18.3461 21.333 18.1765 21.333 17.9997C21.333 17.8229 21.4032 17.6533 21.5283 17.5283C21.6533 17.4032 21.8229 17.333 21.9997 17.333C22.1765 17.333 22.3461 17.4032 22.4711 17.5283C22.5961 17.6533 22.6663 17.8229 22.6663 17.9997C22.6663 18.1765 22.5961 18.3461 22.4711 18.4711C22.3461 18.5961 22.1765 18.6663 21.9997 18.6663Z"
                                    fill="black" stroke="#1BA261" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M24 9.33328V7.47061C23.9999 7.06195 23.9059 6.65878 23.7252 6.29224C23.5445 5.92569 23.2819 5.60558 22.9578 5.35663C22.6338 5.10767 22.2568 4.93653 21.8561 4.85642C21.4553 4.77632 21.0415 4.78938 20.6467 4.89461L5.98 8.80528C5.41207 8.95662 4.91005 9.29136 4.55199 9.75745C4.19392 10.2235 3.99987 10.7949 4 11.3826V11.9999"
                                    stroke="#1BA261" stroke-width="1.5" />
                            </svg>
                        </button>
                        <!-- <button class="btnLogin">
                            Login
                        </button>
                        <button class="btn_join">
                            <span> JOIN US </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="10" viewBox="0 0 12 10"
                                    fill="none">
                                    <g clip-path="url(#clip0_688_13911)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 5C0 4.81059 0.079009 4.62895 0.219646 4.49502C0.360282 4.36109 0.551026 4.28584 0.749916 4.28584H9.43845L6.21831 1.22068C6.07749 1.08658 5.99838 0.904705 5.99838 0.715059C5.99838 0.525414 6.07749 0.343536 6.21831 0.209436C6.35912 0.0753365 6.5501 0 6.74925 0C6.94839 0 7.13937 0.0753365 7.28019 0.209436L11.7797 4.49438C11.8495 4.56072 11.9049 4.63952 11.9427 4.72629C11.9805 4.81305 12 4.90606 12 5C12 5.09394 11.9805 5.18695 11.9427 5.27371C11.9049 5.36048 11.8495 5.43928 11.7797 5.50562L7.28019 9.79056C7.13937 9.92466 6.94839 10 6.74925 10C6.5501 10 6.35912 9.92466 6.21831 9.79056C6.07749 9.65646 5.99838 9.47459 5.99838 9.28494C5.99838 9.0953 6.07749 8.91342 6.21831 8.77932L9.43845 5.71416H0.749916C0.551026 5.71416 0.360282 5.63892 0.219646 5.50499C0.079009 5.37106 0 5.18941 0 5Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_688_13911">
                                            <rect width="12" height="10" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                        </button> -->
                        <div class="dropdown user_login">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span>
                                    <!-- <img src="{{asset('assets/images/user_img.png')}}" alt=""> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                        fill="none">
                                        <path
                                            d="M21.3337 13.3333C21.3337 14.7478 20.7718 16.1044 19.7716 17.1046C18.7714 18.1048 17.4148 18.6667 16.0003 18.6667C14.5858 18.6667 13.2293 18.1048 12.2291 17.1046C11.2289 16.1044 10.667 14.7478 10.667 13.3333C10.667 11.9188 11.2289 10.5623 12.2291 9.5621C13.2293 8.5619 14.5858 8 16.0003 8C17.4148 8 18.7714 8.5619 19.7716 9.5621C20.7718 10.5623 21.3337 11.9188 21.3337 13.3333Z"
                                            fill="#DFDFDF" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M15.4563 29.3228C8.34499 29.0374 2.66699 23.1814 2.66699 16.0001C2.66699 8.63608 8.63632 2.66675 16.0003 2.66675C23.3643 2.66675 29.3337 8.63608 29.3337 16.0001C29.3337 23.3641 23.3643 29.3334 16.0003 29.3334C15.9394 29.3338 15.8785 29.3338 15.8177 29.3334C15.697 29.3334 15.5763 29.3294 15.4563 29.3228ZM7.44432 24.4134C7.34463 24.1271 7.3107 23.8221 7.34505 23.5209C7.37939 23.2197 7.48113 22.9301 7.64271 22.6736C7.80429 22.4171 8.02157 22.2003 8.27841 22.0393C8.53525 21.8782 8.82506 21.7771 9.12632 21.7434C14.3237 21.1681 17.709 21.2201 22.881 21.7554C23.1827 21.7868 23.4732 21.8867 23.7304 22.0473C23.9877 22.208 24.2049 22.4253 24.3655 22.6826C24.5261 22.9398 24.6259 23.2304 24.6572 23.5321C24.6885 23.8338 24.6506 24.1386 24.5463 24.4234C26.7629 22.1807 28.0043 19.1534 28.0003 16.0001C28.0003 9.37275 22.6277 4.00008 16.0003 4.00008C9.37299 4.00008 4.00033 9.37275 4.00033 16.0001C4.00033 19.2774 5.31433 22.2481 7.44432 24.4134Z"
                                            fill="#DFDFDF" />
                                    </svg>
                                </span>
                                <span> {{ $result->name }}</span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item active" href="#">Profile</a></li>
                                <!-- <li><a class="dropdown-item" href="#">Appointments</a></li>
                                <li><a class="dropdown-item" href="#">Chats</a></li>
                                <li><a class="dropdown-item" href="#">Tokens</a></li>
                                <li><a class="dropdown-item" href="#">Notifications</a></li> -->
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- partial -->
 <div class="container">
    <div class="row">
    <div class="col-sm-12">
        <div class="dashboard_rgt">
            <div class="caregivers_sect">
                <h3 class="heading_title">Help us match you to the <span>right professionals</span></h3>
                <form action="{{route('employee.save.suggestion')}}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{$result->id}}">
                <div class="row">
                    <div class="col-lg-9 mrg-auto">
                        <div class="step_list">
                            <div class="role_steps">
                                <div class="step" id="Step-1">
                                    <div class="bx_head">
                                        <div class="bx_hd_title">
                                            <p>How many family members in the household?</p>
                                        </div>
                                        <div class="select_bx select_icon">
                                            <select class="form-control"  name="total_family_member">
                                            <option value="">--Please Select--</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="button_row">
                                        <ul>
                                            <li>
                                                <button class="btn js-btn-prev-start"
                                                    type="button">back</button>
                                            </li>
                                            <li>
                                                <button class="btn btn_blue js-btn-next"
                                                    type="button">Next</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="step" id="Step-2">
                                    <div class="bx_head">
                                        <div class="bx_hd_title">
                                            <p>Do you work remotely?</p>
                                        </div>
                                        <div class="list_chk">
                                            <div class="check_boxgrp_step ">
                                                <div class="custom-control custom-radio_step selected">
                                                    <input type="radio" class="custom-control-input" id="ryes" name="remotely_work" value="Yes" checked="">
                                                    <label class="custom-control-label" for="ryes">Yes
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="radio" class="custom-control-input" id="rno" name="remotely_work" value="No">
                                                    <label class="custom-control-label" for="rno">No
                                                    </label>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="button_row">
                                        <ul>
                                            <li>
                                                <button class="btn js-btn-prev"
                                                    type="button">back</button>
                                            </li>
                                            <li>
                                                <button class="btn js-btn-next"
                                                    type="button">Next</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="step" id="Step-3">
                                    <div class="bx_head">
                                        <div class="bx_hd_title">
                                            <p>Are you seeking help for?</p>
                                        </div>
                                        <div class="list_chk">
                                            <div class="check_boxgrp_step">
                                            <div class="custom-control custom-radio_step selected">
                                                    <input type="radio" class="custom-control-input" id="rIndividual" name="seeking_help" value="Individual" checked="">
                                                    <label class="custom-control-label" for="rIndividual">Individual
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step selected">
                                                    <input type="radio" class="custom-control-input" id="rSelf" name="seeking_help" value="Self" checked="">
                                                    <label class="custom-control-label" for="rSelf">Self
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="radio" class="custom-control-input" id="rCouple" name="seeking_help" value="Couple">
                                                    <label class="custom-control-label" for="rCouple">Couple
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="radio" class="custom-control-input" id="rFamily" name="seeking_help" value="Family">
                                                    <label class="custom-control-label" for="rFamily">Family
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="radio" class="custom-control-input" id="rDependant" name="seeking_help" value="Child or Dependant">
                                                    <label class="custom-control-label" for="rDependant">Child or Dependant
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="button_row">
                                        <ul>
                                            <li>
                                                <button class="btn js-btn-prev"
                                                    type="button">back</button>
                                            </li>
                                            <li>
                                                <button class="btn js-btn-next"
                                                    type="button">Next</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="step" id="Step-4">
                                    <div class="bx_head">
                                        <div class="bx_hd_title">
                                            <p>Do they suffer from any illness/disability?</p>
                                        </div>
                                        <div class="list_chk">
                                            <div class="check_boxgrp_step">
                                                <div class="custom-control custom-radio_step selected">
                                                    <input type="radio" class="custom-control-input" id="ryes55" name="illness_disablity" value="Yes" checked="">
                                                    <label class="custom-control-label" for="ryes55">Yes
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="radio" class="custom-control-input" id="Rno55" name="illness_disablity" value="No">
                                                    <label class="custom-control-label" for="Rno55">No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="button_row">
                                        <ul>
                                            <li>
                                                <button class="btn js-btn-prev"
                                                    type="button">back</button>
                                            </li>
                                            <li>
                                                <button class="btn js-btn-next"
                                                    type="button">Next</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="step" id="Step-5">
                                    <div class="bx_head">
                                        <div class="bx_hd_title">
                                            <p>Who are you providing care to?</p>
                                        </div>
                                        <div class="list_chk">
                                            <div class="check_boxgrp_step">
                                                <div class="custom-control custom-radio_step selected">
                                                    <input type="radio" class="custom-control-input" id="rSenior" name="providing_care" value="Senior (Parent/Grandparent/etc.)" checked="">
                                                    <label class="custom-control-label" for="rSenior">Senior (Parent/Grandparent/etc.)
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step">
                                                    <input type="radio" class="custom-control-input" id="RPartner" name="providing_care" value="Partner">
                                                    <label class="custom-control-label" for="RPartner">Partner
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step">
                                                    <input type="radio" class="custom-control-input" id="RDependent" name="providing_care" value="Child or Dependent">
                                                    <label class="custom-control-label" for="RDependent">Child or Dependent
                                                    </label>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="button_row">
                                        <ul>
                                            <li>
                                                <button class="btn js-btn-prev"
                                                    type="button">back</button>
                                            </li>
                                            <li>
                                                <button class="btn js-btn-next"
                                                    type="button">Next</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="step" id="Step-6">
                                    <p class="title_sub">What are some of the symptoms you are experiencing?</p>
                                    <div class="bx_head">
                                        <div class="bx_hd_title">
                                            <p>Mental Symptoms</p>
                                        </div>
                                        <div class="list_chk">
                                            <div class="check_boxgrp_step ">
                                                <div class="custom-control custom-radio_step selected">
                                                    <input type="checkbox" class="custom-control-input" id="ryes12" name="mental_wellness[]" value="Feeling Anxious" checked="">
                                                    <label class="custom-control-label" for="ryes12">Feeling Anxious
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="checkbox" class="custom-control-input" id="rno13" name="mental_wellness[]" value="Feeling Restlessness">
                                                    <label class="custom-control-label" for="rno13">Feeling Restlessness
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="checkbox" class="custom-control-input" id="rno14" name="mental_wellness[]" value="memory problems">
                                                    <label class="custom-control-label" for="rno14">Memory Problems
                                                    </label>
                                                </div>
                                                <!-- <div class="custom-control custom-radio_step ">
                                                    <input type="checkbox" class="custom-control-input" id="rno15" name="mental_wellness[]" value="Feeling Anxious">
                                                    <label class="custom-control-label" for="rno15">Feeling Anxious
                                                    </label>
                                                </div> -->
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="checkbox" class="custom-control-input" id="rno16" name="mental_wellness[]" value="Feeling Depressed">
                                                    <label class="custom-control-label" for="rno16">Feeling Depressed
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="checkbox" class="custom-control-input" id="rno17" name="mental_wellness[]" value="Feeling Grief">
                                                    <label class="custom-control-label" for="rno17">Feeling Grief
                                                    </label>
                                                </div>
                                            </div>

                                        </div>

                                    </div>


                                    <div class="bx_head">
                                        <div class="bx_hd_title">
                                            <p>Physical Symptoms</p>
                                        </div>
                                        <div class="list_chk">
                                            <div class="check_boxgrp_step ">
                                                <div class="custom-control custom-radio_step selected">
                                                    <input type="checkbox" class="custom-control-input" id="ryes21" name="physical_wellness[]" value="Stiff Muscles/Body Pain" checked="">
                                                    <label class="custom-control-label" for="ryes21">Stiff Muscles/Body Pain
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="checkbox" class="custom-control-input" id="rno22" name="physical_wellness[]" value="Stomach Aches">
                                                    <label class="custom-control-label" for="rno22">Stomach Aches
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="checkbox" class="custom-control-input" id="rno23" name="physical_wellness[]" value="Fatigue & Dizziness">
                                                    <label class="custom-control-label" for="rno23">Fatigue & Dizziness
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="checkbox" class="custom-control-input" id="rno24" name="physical_wellness[]" value="Feeling Light-Headed or Dizzy">
                                                    <label class="custom-control-label" for="rno24">Feeling Light-Headed or Dizzy
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="checkbox" class="custom-control-input" id="rno25" name="physical_wellness[]" value="Weakness & Nmbness">
                                                    <label class="custom-control-label" for="rno25">Weakness & Nmbness
                                                    </label>
                                                </div>
                                                <!-- <div class="custom-control custom-radio_step ">
                                                    <input type="radio" class="custom-control-input" id="rno26" name="physical_wellness[]" value="">
                                                    <label class="custom-control-label" for="rno26">trouble breathing
                                                    </label>
                                                </div> -->
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="checkbox" class="custom-control-input" id="rno27" name="physical_wellness[]" value="Trouble Breathing">
                                                    <label class="custom-control-label" for="rno27">Trouble Breathing
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="checkbox" class="custom-control-input" id="rno28" name="physical_wellness[]" value="Changes in Vision">
                                                    <label class="custom-control-label" for="rno28">Changes in Vision
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="checkbox" class="custom-control-input" id="rno29" name="physical_wellness[]" value="Trembling/Shaking">
                                                    <label class="custom-control-label" for="rno29">Trembling/Shaking
                                                    </label>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <p class="title_sub">What are you looking for in terms of Support?</p>
                                    <div class="bx_head">
                                        <div class="bx_hd_title">
                                            <p>Household Services</p>
                                        </div>
                                        <div class="list_chk">
                                            <div class="check_boxgrp_step ">
                                                <div class="custom-control custom-radio_step selected">
                                                    <input type="checkbox" class="custom-control-input" id="ryes31" name="household_service[]" value="Meditation" checked="">
                                                    <label class="custom-control-label" for="ryes31">Meditation
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="checkbox" class="custom-control-input" id="rno32" name="household_service[]" value="Yoga">
                                                    <label class="custom-control-label" for="rno32">Yoga
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="checkbox" class="custom-control-input" id="rno33" name="household_service[]" value="Physiotherapy">
                                                    <label class="custom-control-label" for="rno33">Physiotherapy
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="checkbox" class="custom-control-input" id="rno34" name="household_service[]" value="Dietitian/ Nutritionist">
                                                    <label class="custom-control-label" for="rno34">Dietitian/ Nutritionist
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="checkbox" class="custom-control-input" id="rno35" name="household_service[]" value="Support Workers">
                                                    <label class="custom-control-label" for="rno35">Support Workers
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="checkbox" class="custom-control-input" id="rno36" name="household_service[]" value="Child Care">
                                                    <label class="custom-control-label" for="rno36">Child Care
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="checkbox" class="custom-control-input" id="rno37" name="household_service[]" value="Wellness Coach">
                                                    <label class="custom-control-label" for="rno37">Wellness Coach
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="checkbox" class="custom-control-input" id="rno38" name="household_service[]" value="Therapy Sessions">
                                                    <label class="custom-control-label" for="rno38">Therapy Sessions
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="checkbox" class="custom-control-input" id="rno39" name="household_service[]" value="Physical Wellness">
                                                    <label class="custom-control-label" for="rno39">Physical Wellness
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="checkbox" class="custom-control-input" id="rno40" name="household_service[]" value="Mental Wellness">
                                                    <label class="custom-control-label" for="rno40">Mental Wellness
                                                    </label>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="button_row">
                                        <ul>
                                            <li>
                                                <button class="btn js-btn-prev"
                                                    type="button">back</button>
                                            </li>
                                            <li>
                                                <button class="btn js-btn-next"
                                                    type="button">Next</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="step" id="Step-7">
                                   <div class="bx_head">
                                        <div class="bx_hd_title">
                                            <p>What is your preferred language? </p>
                                        </div>
                                        <div class="list_chk">
                                            <div class="check_boxgrp_step ">
                                                <div class="custom-control custom-radio_step selected">
                                                    <input type="radio" class="custom-control-input" id="ryes41" name="language_preferred" value="English" checked="">
                                                    <label class="custom-control-label" for="ryes41">English
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="radio" class="custom-control-input" id="ryes411" name="language_preferred" value="Spanish">
                                                    <label class="custom-control-label" for="ryes411">Spanish
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="radio" class="custom-control-input" id="rno42" name="language_preferred" value="French">
                                                    <label class="custom-control-label" for="rno42">French
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="radio" class="custom-control-input" id="rno43" name="language_preferred" value="German">
                                                    <label class="custom-control-label" for="rno43">German
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="radio" class="custom-control-input" id="rno44" name="language_preferred" value="Italian">
                                                    <label class="custom-control-label" for="rno44">Italian
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="radio" class="custom-control-input" id="rno444" name="language_preferred" value="Portuguese">
                                                    <label class="custom-control-label" for="rno444">Portuguese
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="radio" class="custom-control-input" id="rno445" name="language_preferred" value="Dutch">
                                                    <label class="custom-control-label" for="rno445">Dutch
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="radio" class="custom-control-input" id="rno446" name="language_preferred" value="Russian">
                                                    <label class="custom-control-label" for="rno446">Russian
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="radio" class="custom-control-input" id="rno447" name="language_preferred" value="Chinese">
                                                    <label class="custom-control-label" for="rno447">Chinese
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="radio" class="custom-control-input" id="rno448" name="language_preferred" value="Japanese">
                                                    <label class="custom-control-label" for="rno448">Japanese
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="radio" class="custom-control-input" id="rno449" name="language_preferred" value="Korean">
                                                    <label class="custom-control-label" for="rno449">Korean
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="radio" class="custom-control-input" id="rno45" name="language_preferred" value="Hindi">
                                                    <label class="custom-control-label" for="rno45">Hindi
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="radio" class="custom-control-input" id="rno46" name="language_preferred" value="Arabic">
                                                    <label class="custom-control-label" for="rno46">Arabic
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="radio" class="custom-control-input" id="rno47" name="language_preferred" value="Swedish">
                                                    <label class="custom-control-label" for="rno47">Swedish
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="radio" class="custom-control-input" id="rno471" name="language_preferred" value="Norwegian">
                                                    <label class="custom-control-label" for="rno471">Norwegian
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="radio" class="custom-control-input" id="rno472" name="language_preferred" value="Danish">
                                                    <label class="custom-control-label" for="rno472">Danish
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="radio" class="custom-control-input" id="rno473" name="language_preferred" value="Finnish">
                                                    <label class="custom-control-label" for="rno473">Finnish
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="radio" class="custom-control-input" id="rno474" name="language_preferred" value="Polish">
                                                    <label class="custom-control-label" for="rno474">Polish
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="radio" class="custom-control-input" id="rno475" name="language_preferred" value="Turkish">
                                                    <label class="custom-control-label" for="rno475">Turkish
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio_step ">
                                                    <input type="radio" class="custom-control-input" id="rno476" name="language_preferred" value="Greek">
                                                    <label class="custom-control-label" for="rno476">Greek
                                                    </label>
                                                </div>
                                            </div>

                                        </div>

                                    </div>


                                    <div class="button_row">
                                        <ul>
                                            <li>
                                                <button class="btn js-btn-prev"
                                                    type="button">back</button>
                                            </li>
                                            <li>
                                                <button class="btn js-btn-next"
                                                    type="button">Next</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="step" id="Step-8">
                                    <div class="bx_head">
                                        <div class="bx_hd_title">
                                            <p>What time of the week do you prefer? </p>
                                        </div>
                                        <div class="list_chk">
                                        <div class="select_bx select_icon">
                                            <select class="form-control" name="preferred_appointment">
                                                <option value="">-- Please Select --</option>
                                                <option value="Weekdays">Weekdays</option>
                                                <option value="Weekend">Weekend</option>
                                            </select>
                                        </div>
                                        <!-- <div class="check_boxgrp_step ">
                                            <div class="custom-control custom-radio_step selected">
                                                <input type="radio" class="custom-control-input" id="ryes51" name="toggler10" checked="">
                                                <label class="custom-control-label" for="ryes51">Weekdays
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio_step ">
                                                <input type="radio" class="custom-control-input" id="rno52" name="toggler10">
                                                <label class="custom-control-label" for="rno52">Weekend
                                                </label>
                                            </div>
                                        </div> -->

                                         </div>
                                    </div>


                                    <div class="bx_head">
                                        <div class="bx_hd_title">
                                            <p>Please select suitable day.</p>
                                        </div>
                                        <div class="list_chk">
                                        <div class="check_boxgrp_step ">
                                            <div class="custom-control custom-radio_step ">
                                                <input type="checkbox" class="custom-control-input" id="ryes61" name="suitable_day[]" value="SUN" checked="">
                                                <label class="custom-control-label" for="ryes61">Sunday
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio_step ">
                                                <input type="checkbox" class="custom-control-input" id="rno62" name="suitable_day[]" value="MON">
                                                <label class="custom-control-label" for="rno62">Monday
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio_step ">
                                                <input type="checkbox" class="custom-control-input" id="rno63" name="suitable_day[]" value="TUE">
                                                <label class="custom-control-label" for="rno63">Tuesday
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio_step ">
                                                <input type="checkbox" class="custom-control-input" id="rno64" name="suitable_day[]" value="WED">
                                                <label class="custom-control-label" for="rno64">Wednesday
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio_step ">
                                                <input type="checkbox" class="custom-control-input" id="rno65" name="suitable_day[]" value="THU">
                                                <label class="custom-control-label" for="rno65">Thursday
                                                </label>
                                            </div>

                                            <div class="custom-control custom-radio_step ">
                                                <input type="checkbox" class="custom-control-input" id="rno66" name="suitable_day[]" value="FRI">
                                                <label class="custom-control-label" for="rno66">Friday
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio_step ">
                                                <input type="checkbox" class="custom-control-input" id="rno67" name="suitable_day[]" value="SAT">
                                                <label class="custom-control-label" for="rno67">Saturday
                                                </label>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bx_head">
                                        <div class="bx_hd_title">
                                            <p>Please select preferred time.</p>
                                        </div>
                                        <div class="list_chk">
                                        <div class="check_boxgrp_step ">
                                            <div class="custom-control custom-radio_step ">
                                                <input type="radio" class="custom-control-input" id="ryes70" name="preferred_time" value="Morning" checked="">
                                                <label class="custom-control-label" for="ryes70">Morning
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio_step ">
                                                <input type="radio" class="custom-control-input" id="rno71" name="preferred_time" value="Afternoon">
                                                <label class="custom-control-label" for="rno71">Afternoon
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio_step ">
                                                <input type="radio" class="custom-control-input" id="rno72" name="preferred_time" value="Evening">
                                                <label class="custom-control-label" for="rno72">Evening
                                                </label>
                                            </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="bx_head">
                                        <div class="bx_hd_title">
                                            <p>What is the preferred time slot?</p>
                                        </div>
                                        <div class="list_chk">
                                        <!-- <div class="select_bx select_icon">
                                            <select class="form-control">
                                                <option value="2">-- Please Select --</option>
                                            </select>
                                        </div> -->
                                        <div class="check_boxgrp_step ">
                                            <div class="custom-control custom-radio_step ">
                                                <input type="checkbox" class="custom-control-input" id="ryes80" name="preferred_time_slot[]" value="10:00 AM - 12:00 PM" checked="">
                                                <label class="custom-control-label" for="ryes80">10:00 AM - 12:00 PM
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio_step ">
                                                <input type="checkbox" class="custom-control-input" id="rno81" name="preferred_time_slot[]" value="12:00 PM - 02:00 PM">
                                                <label class="custom-control-label" for="rno81">12:00 PM - 02:00 PM
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio_step ">
                                                <input type="checkbox" class="custom-control-input" id="rno82" name="preferred_time_slot[]" value="02:00 PM - 04:00 PM">
                                                <label class="custom-control-label" for="rno82">02:00 PM - 04:00 PM
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio_step ">
                                                <input type="checkbox" class="custom-control-input" id="rno83" name="preferred_time_slot[]" value="04:00 PM - 06:00 PM">
                                                <label class="custom-control-label" for="rno83">04:00 PM - 06:00 PM
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio_step ">
                                                <input type="checkbox" class="custom-control-input" id="rno84" name="preferred_time_slot[]" value="06:00 PM - 08:00 PM">
                                                <label class="custom-control-label" for="rno84">06:00 PM - 08:00 PM
                                                </label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="button_row">
                                        <ul>
                                            <li>
                                                <button class="btn js-btn-prev"
                                                    type="button">back</button>
                                            </li>
                                            <li>
                                                <button class="btn js-btn-end" type="submit">Find Professionals</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>
                </div>
            </form>
            </div>




        </div>

    </div>
 </div>
</div>
    </div>



    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('assets/js/jquery-2.1.0.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('assets/js/animate.js')}}"></script>
    <script src="{{asset('assets/js/dash_custom.js')}}"></script>

    <script>
        $('.button_row button.js-btn-next').click(function () {
            $(this).parents('.role_steps .step').hide();
            var activeRstep = $(this).parents('.role_steps .step').next('.step').attr('id')
            $('.role_steps .step#' + activeRstep).show();
        });
        $('.button_row button.js-btn-prev').click(function () {
            $(this).parents('.role_steps .step').hide();
            var activeRstep = $(this).parents('.role_steps .step').prev('.step').attr('id')
            $('.role_steps .step#' + activeRstep).show();
        });


        $('.check_boxgrp_step .custom-control-input').click(function () {
          $('.custom-radio_step').removeClass('selected');
           $(this).parents('.custom-radio_step').addClass('selected')

          });
    </script>
</body>

</html>