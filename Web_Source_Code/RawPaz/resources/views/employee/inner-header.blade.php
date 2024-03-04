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
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;500;600;700;800;900;1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@livewireStyles
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NPE02SHZTH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-NPE02SHZTH');
</script>
</head>

<body>
    <header class="header_top inner_page">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="javascript:void(0)">
                    <img src="{{asset('assets/images/logo.png')}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <!-- <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('employee') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('employee') }}#About_tab">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('employee') }}#Services_tab">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('employee') }}#Pricing_tab">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('employee') }}#Team_tab">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('employee') }}#Testimonial_tab">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('employee') }}#FAQs_tab">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('employee.blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('employee.community') }}">Community</a>
                        </li>
                    </ul> -->
                    <div class="btn_grp wallet_grp">
                        <!--<button class="wallet_btn">
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
                         <button class="btnLogin">
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
                                <span> {{ Auth::user()->name }}</span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{ route('employee.profile') }}">Profile</a></li>
                                <li><a class="dropdown-item" href="{{ url('employee/professionals') }}">Professionals</a></li>
                                <li><a class="dropdown-item" href="{{ url('employee/appointments') }}">Appointments</a></li>
                                <li><a class="dropdown-item" href="{{ url('employee/chat-room') }}">Chats</a></li>
                                <li><a class="dropdown-item" href="{{ route('employee.tokens') }}">Credits</a></li>
                                <li><a class="dropdown-item" href="{{ route('employee.notification') }}">Notifications</a></li>
                                <li><a class="dropdown-item" href="{{ route('employee.logout') }}">Logout</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <div class="flare__grid">
        <div class="mobile_view_btn"><span><i class="fa fa-bars"></i></span></div>
            <div class="left__sidebar d-inline-block">

                <div class="page-body-wrapper">


                    <!-- partial:partials/_sidebar.html -->
                    <nav class="sidebar sidebar-offcanvas" id="sidebar">
                        <div class="user_avtar">
                            <!-- <a href="javascript:void(0)" class="navbar-toggler navbar-toggler align-self-center"
                            data-toggle="minimize">
                            <span><i class="fa fa-bars"></i></span>
                        </a> --><br>
                            <div class="user_img">
                              <svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71" fill="none">
                                 <path d="M47.3337 29.5833C47.3337 32.7217 46.0869 35.7316 43.8678 37.9508C41.6486 40.1699 38.6387 41.4167 35.5003 41.4167C32.3619 41.4167 29.3521 40.1699 27.1329 37.9508C24.9137 35.7316 23.667 32.7217 23.667 29.5833C23.667 26.4449 24.9137 23.4351 27.1329 21.2159C29.3521 18.9967 32.3619 17.75 35.5003 17.75C38.6387 17.75 41.6486 18.9967 43.8678 21.2159C46.0869 23.4351 47.3337 26.4449 47.3337 29.5833Z" fill="#DFDFDF"></path>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M34.2933 65.0598C18.5151 64.4267 5.91699 51.4337 5.91699 35.5001C5.91699 19.1612 19.1614 5.91675 35.5003 5.91675C51.8392 5.91675 65.0836 19.1612 65.0836 35.5001C65.0836 51.839 51.8392 65.0834 35.5003 65.0834C35.3652 65.0843 35.2301 65.0843 35.095 65.0834C34.8273 65.0834 34.5596 65.0746 34.2933 65.0598ZM16.5167 54.1672C16.2955 53.532 16.2202 52.8551 16.2964 52.1868C16.3726 51.5186 16.5984 50.876 16.9569 50.3069C17.3154 49.7378 17.7975 49.2568 18.3673 48.8995C18.9372 48.5422 19.5802 48.3179 20.2486 48.2431C31.7802 46.9666 39.2914 47.082 50.7668 48.2697C51.4361 48.3394 52.0807 48.561 52.6515 48.9174C53.2223 49.2739 53.7042 49.7559 54.0605 50.3268C54.4169 50.8977 54.6382 51.5423 54.7077 52.2117C54.7773 52.881 54.6931 53.5574 54.4618 54.1894C59.3799 49.2133 62.1341 42.4965 62.1253 35.5001C62.1253 20.7957 50.2047 8.87508 35.5003 8.87508C20.7959 8.87508 8.87532 20.7957 8.87532 35.5001C8.87532 42.7717 11.7908 49.3628 16.5167 54.1672Z" fill="#DFDFDF"></path>
                               </svg>
                               <!-- <img src="assets/images/team.png')}}" alt=""> -->
                            </div>
                            <h3>{{ Auth::user()->name }}</h3>

                         </div>
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('employee.profile') }}">
                                    <span class="icon-bg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <path d="M2.3335 10.5013C2.3335 9.88246 2.57933 9.28897 3.01691 8.85139C3.4545 8.4138 4.04799 8.16797 4.66683 8.16797H9.3335C9.95233 8.16797 10.5458 8.4138 10.9834 8.85139C11.421 9.28897 11.6668 9.88246 11.6668 10.5013C11.6668 10.8107 11.5439 11.1075 11.3251 11.3263C11.1063 11.5451 10.8096 11.668 10.5002 11.668H3.50016C3.19074 11.668 2.894 11.5451 2.6752 11.3263C2.45641 11.1075 2.3335 10.8107 2.3335 10.5013Z" stroke="#0068C4" stroke-width="1.5" stroke-linejoin="round"/>
                                            <path d="M7.00024 5.83398C7.96674 5.83398 8.75024 5.05048 8.75024 4.08398C8.75024 3.11749 7.96674 2.33398 7.00024 2.33398C6.03375 2.33398 5.25024 3.11749 5.25024 4.08398C5.25024 5.05048 6.03375 5.83398 7.00024 5.83398Z" stroke="#0068C4" stroke-width="1.5"/>
                                          </svg>
                                    </span>
                                    <span class="menu-title">Profile</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url('employee/professionals') }}">
                                    <span class="icon-bg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <path d="M2.3335 10.5013C2.3335 9.88246 2.57933 9.28897 3.01691 8.85139C3.4545 8.4138 4.04799 8.16797 4.66683 8.16797H9.3335C9.95233 8.16797 10.5458 8.4138 10.9834 8.85139C11.421 9.28897 11.6668 9.88246 11.6668 10.5013C11.6668 10.8107 11.5439 11.1075 11.3251 11.3263C11.1063 11.5451 10.8096 11.668 10.5002 11.668H3.50016C3.19074 11.668 2.894 11.5451 2.6752 11.3263C2.45641 11.1075 2.3335 10.8107 2.3335 10.5013Z" stroke="#0068C4" stroke-width="1.5" stroke-linejoin="round"/>
                                            <path d="M7.00024 5.83398C7.96674 5.83398 8.75024 5.05048 8.75024 4.08398C8.75024 3.11749 7.96674 2.33398 7.00024 2.33398C6.03375 2.33398 5.25024 3.11749 5.25024 4.08398C5.25024 5.05048 6.03375 5.83398 7.00024 5.83398Z" stroke="#0068C4" stroke-width="1.5"/>
                                          </svg>
                                    </span>
                                    <span class="menu-title">Professionals</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('employee.appointments')}}">
                                    <span class="icon-bg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_688_12803)">
                                              <path d="M7.00016 5.2513C8.12774 5.2513 9.04183 4.33722 9.04183 3.20964C9.04183 2.08205 8.12774 1.16797 7.00016 1.16797C5.87258 1.16797 4.9585 2.08205 4.9585 3.20964C4.9585 4.33722 5.87258 5.2513 7.00016 5.2513Z" stroke="white" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
                                              <path d="M1.16675 11.9596C1.16675 9.38218 3.51729 7.29297 6.41675 7.29297" stroke="white" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
                                              <path d="M9.91675 12.543C11.3665 12.543 12.5417 11.3677 12.5417 9.91797C12.5417 8.46822 11.3665 7.29297 9.91675 7.29297C8.467 7.29297 7.29175 8.46822 7.29175 9.91797C7.29175 11.3677 8.467 12.543 9.91675 12.543Z" stroke="white" stroke-width="1.16667"/>
                                              <path d="M9.625 9.04297V10.2096H10.7917" stroke="white" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_688_12803">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                    </span>
                                    <span class="menu-title">Appointments</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('employee/chat-room')}}">
                                    <span class="icon-bg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <path d="M2.1875 11.305L3.73975 10.0625H10.9375C11.1696 10.0625 11.3921 9.97031 11.5562 9.80622C11.7203 9.64212 11.8125 9.41956 11.8125 9.1875V3.5C11.8125 3.26794 11.7203 3.04538 11.5562 2.88128C11.3921 2.71719 11.1696 2.625 10.9375 2.625H3.0625C2.83044 2.625 2.60788 2.71719 2.44378 2.88128C2.27969 3.04538 2.1875 3.26794 2.1875 3.5V11.305ZM4.04688 10.9375L2.023 12.5563C1.95867 12.6076 1.88115 12.6398 1.79935 12.6491C1.71755 12.6584 1.63479 12.6444 1.56058 12.6087C1.48638 12.5731 1.42373 12.5172 1.37984 12.4476C1.33596 12.3779 1.31262 12.2973 1.3125 12.215V3.5C1.3125 3.03587 1.49687 2.59075 1.82506 2.26256C2.15325 1.93437 2.59837 1.75 3.0625 1.75H10.9375C11.4016 1.75 11.8467 1.93437 12.1749 2.26256C12.5031 2.59075 12.6875 3.03587 12.6875 3.5V9.1875C12.6875 9.65163 12.5031 10.0967 12.1749 10.4249C11.8467 10.7531 11.4016 10.9375 10.9375 10.9375H4.04688Z" fill="white"/>
                                            <path d="M4.8125 7H9.1875C9.47917 7 9.625 7.14583 9.625 7.4375C9.625 7.72917 9.47917 7.875 9.1875 7.875H4.8125C4.52083 7.875 4.375 7.72917 4.375 7.4375C4.375 7.14583 4.52083 7 4.8125 7ZM4.8125 4.375H9.1875C9.47917 4.375 9.625 4.52083 9.625 4.8125C9.625 5.10417 9.47917 5.25 9.1875 5.25H4.8125C4.52083 5.25 4.375 5.10417 4.375 4.8125C4.375 4.52083 4.52083 4.375 4.8125 4.375Z" fill="white"/>
                                          </svg>
                                    </span>
                                    <span class="menu-title">Chat</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('employee/suggestion/'.Auth::user()->uid) }}">
                                    <span class="icon-bg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <path d="M1.27759 9.07737C1.16203 9.07585 1.05162 9.0293 0.969903 8.94758C0.888178 8.86585 0.841599 8.75543 0.840088 8.63987V6.7207C0.840088 6.60468 0.886183 6.49338 0.968229 6.41136C1.05027 6.32929 1.16156 6.2832 1.27759 6.2832C1.39362 6.2832 1.5049 6.32929 1.58695 6.41136C1.66899 6.49338 1.71509 6.60468 1.71509 6.7207V8.63987C1.71509 8.75589 1.66899 8.86719 1.58695 8.94921C1.5049 9.03129 1.39362 9.07737 1.27759 9.07737Z" fill="white"/>
                                            <path d="M7.00009 9.91651C3.54675 9.91651 0.840088 8.21901 0.840088 6.03734C0.840088 3.85568 3.54675 2.15234 7.00009 2.15234C10.4534 2.15234 13.1543 3.85568 13.1543 6.03734C13.1543 8.21901 10.4534 9.91651 7.00009 9.91651ZM7.00009 3.02734C4.13592 3.02734 1.71509 4.40401 1.71509 6.03734C1.71509 7.67068 4.13592 9.05318 7.00009 9.05318C9.86425 9.05318 12.2793 7.67068 12.2793 6.03734C12.2793 4.40401 9.86425 3.02734 7.00009 3.02734Z" fill="white"/>
                                            <path d="M7.00011 11.8537C3.55261 11.8537 0.845947 10.1446 0.845947 7.96289C0.845947 7.84687 0.892036 7.73557 0.974088 7.65355C1.05613 7.57147 1.16741 7.52539 1.28345 7.52539C1.39948 7.52539 1.51075 7.57147 1.59281 7.65355C1.67485 7.73557 1.72095 7.84687 1.72095 7.96289C1.72095 9.59622 4.14178 10.9787 7.00011 10.9787C9.85845 10.9787 12.2151 9.65456 12.2909 8.03289V7.96289C12.2909 7.84687 12.337 7.73557 12.4191 7.65355C12.5011 7.57147 12.6124 7.52539 12.7284 7.52539C12.8445 7.52539 12.9558 7.57147 13.0378 7.65355C13.1199 7.73557 13.1659 7.84687 13.1659 7.96289V8.05622C13.0609 10.1912 10.3601 11.8537 7.00011 11.8537Z" fill="white"/>
                                            <path d="M12.7166 8.49294C12.601 8.49143 12.4906 8.44488 12.4088 8.36315C12.3271 8.28143 12.2806 8.171 12.2791 8.05544V6.03711C12.2791 5.92108 12.3251 5.8098 12.4072 5.72775C12.4892 5.6457 12.6005 5.59961 12.7166 5.59961C12.8326 5.59961 12.9439 5.6457 13.0259 5.72775C13.108 5.8098 13.1541 5.92108 13.1541 6.03711V8.05544C13.1541 8.1129 13.1427 8.16978 13.1207 8.22286C13.0988 8.27594 13.0666 8.32418 13.0259 8.36478C12.9853 8.40544 12.9371 8.43764 12.884 8.45963C12.8309 8.48163 12.774 8.49294 12.7166 8.49294Z" fill="white"/>
                                          </svg>
                                    </span>
                                    <span class="menu-title"> Suggestion </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('employee.tokens') }}">
                                    <span class="icon-bg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <path d="M1.27759 9.07737C1.16203 9.07585 1.05162 9.0293 0.969903 8.94758C0.888178 8.86585 0.841599 8.75543 0.840088 8.63987V6.7207C0.840088 6.60468 0.886183 6.49338 0.968229 6.41136C1.05027 6.32929 1.16156 6.2832 1.27759 6.2832C1.39362 6.2832 1.5049 6.32929 1.58695 6.41136C1.66899 6.49338 1.71509 6.60468 1.71509 6.7207V8.63987C1.71509 8.75589 1.66899 8.86719 1.58695 8.94921C1.5049 9.03129 1.39362 9.07737 1.27759 9.07737Z" fill="white"/>
                                            <path d="M7.00009 9.91651C3.54675 9.91651 0.840088 8.21901 0.840088 6.03734C0.840088 3.85568 3.54675 2.15234 7.00009 2.15234C10.4534 2.15234 13.1543 3.85568 13.1543 6.03734C13.1543 8.21901 10.4534 9.91651 7.00009 9.91651ZM7.00009 3.02734C4.13592 3.02734 1.71509 4.40401 1.71509 6.03734C1.71509 7.67068 4.13592 9.05318 7.00009 9.05318C9.86425 9.05318 12.2793 7.67068 12.2793 6.03734C12.2793 4.40401 9.86425 3.02734 7.00009 3.02734Z" fill="white"/>
                                            <path d="M7.00011 11.8537C3.55261 11.8537 0.845947 10.1446 0.845947 7.96289C0.845947 7.84687 0.892036 7.73557 0.974088 7.65355C1.05613 7.57147 1.16741 7.52539 1.28345 7.52539C1.39948 7.52539 1.51075 7.57147 1.59281 7.65355C1.67485 7.73557 1.72095 7.84687 1.72095 7.96289C1.72095 9.59622 4.14178 10.9787 7.00011 10.9787C9.85845 10.9787 12.2151 9.65456 12.2909 8.03289V7.96289C12.2909 7.84687 12.337 7.73557 12.4191 7.65355C12.5011 7.57147 12.6124 7.52539 12.7284 7.52539C12.8445 7.52539 12.9558 7.57147 13.0378 7.65355C13.1199 7.73557 13.1659 7.84687 13.1659 7.96289V8.05622C13.0609 10.1912 10.3601 11.8537 7.00011 11.8537Z" fill="white"/>
                                            <path d="M12.7166 8.49294C12.601 8.49143 12.4906 8.44488 12.4088 8.36315C12.3271 8.28143 12.2806 8.171 12.2791 8.05544V6.03711C12.2791 5.92108 12.3251 5.8098 12.4072 5.72775C12.4892 5.6457 12.6005 5.59961 12.7166 5.59961C12.8326 5.59961 12.9439 5.6457 13.0259 5.72775C13.108 5.8098 13.1541 5.92108 13.1541 6.03711V8.05544C13.1541 8.1129 13.1427 8.16978 13.1207 8.22286C13.0988 8.27594 13.0666 8.32418 13.0259 8.36478C12.9853 8.40544 12.9371 8.43764 12.884 8.45963C12.8309 8.48163 12.774 8.49294 12.7166 8.49294Z" fill="white"/>
                                          </svg>
                                    </span>
                                    <span class="menu-title"> Credits</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('employee.notification') }}">
                                    <span class="icon-bg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <path d="M2.91659 11.0827C2.75131 11.0827 2.61267 11.0267 2.50067 10.9147C2.38867 10.8027 2.33287 10.6642 2.33325 10.4993C2.33325 10.3341 2.38925 10.1954 2.50125 10.0834C2.61325 9.97143 2.7517 9.91563 2.91659 9.91602H3.49992V5.83268C3.49992 5.02574 3.74298 4.30863 4.22909 3.68135C4.7152 3.05407 5.34714 2.64341 6.12492 2.44935V2.04102C6.12492 1.79796 6.21009 1.59127 6.38042 1.42093C6.55075 1.2506 6.75725 1.16563 6.99992 1.16602C7.24298 1.16602 7.44967 1.25118 7.62 1.42152C7.79034 1.59185 7.87531 1.79835 7.87492 2.04102V2.44935C8.6527 2.64379 9.28464 3.05466 9.77075 3.68193C10.2569 4.30921 10.4999 5.02613 10.4999 5.83268V9.91602H11.0833C11.2485 9.91602 11.3872 9.97202 11.4992 10.084C11.6112 10.196 11.667 10.3345 11.6666 10.4993C11.6666 10.6646 11.6106 10.8033 11.4986 10.9153C11.3866 11.0273 11.2481 11.0831 11.0833 11.0827H2.91659ZM6.99992 12.8327C6.67909 12.8327 6.40434 12.7184 6.17567 12.4897C5.947 12.261 5.83286 11.9865 5.83325 11.666H8.16659C8.16659 11.9868 8.05225 12.2616 7.82359 12.4903C7.59492 12.7189 7.32036 12.8331 6.99992 12.8327ZM4.66659 9.91602H9.33325V5.83268C9.33325 5.19102 9.10478 4.64171 8.64784 4.18477C8.19089 3.72782 7.64159 3.49935 6.99992 3.49935C6.35825 3.49935 5.80895 3.72782 5.352 4.18477C4.89506 4.64171 4.66659 5.19102 4.66659 5.83268V9.91602Z" fill="white"/>
                                          </svg>
                                    </span>
                                    <span class="menu-title"> Notifications</span>
                                </a>
                            </li>



                        </ul>
                    </nav>

                </div>
            </div>

                        <!-- @if (session('error'))
                        <div class="alert alert-danger text-center" role="alert">
                            <span  style="font-size: 15px;">{{session('error')}}</span>
                        </div>
                        @endif
                        @if (session('success'))
                        <div class="alert alert-success text-center" role="alert">
                            <span style="font-size: 15px;">{{session('success')}}</span>
                        </div>
                        @endif -->