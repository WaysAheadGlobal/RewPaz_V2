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
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
                <a class="navbar-brand" href="index.html">
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
                            <a class="nav-link" aria-current="page" href="{{ route('employer') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('employer') }}#About_tab">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('employer') }}#Services_tab">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('employer') }}#Pricing_tab">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('employer') }}#Team_tab">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('employer') }}#Testimonial_tab">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('employer') }}#FAQs_tab">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('employer.blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('employer.community') }}">Community</a>
                        </li>
                    </ul> -->
                    <div class="btn_grp">
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
                                   <img src="{{asset('assets/images/profile.png')}}" alt="">

                                    </svg>
                                </span>
                                <span> {{ Auth::user()->name }}</span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{ route('employer.dashboard') }}">Dashboard</a></li>
                                <li><a class="dropdown-item" href="{{ route('employer.profile') }}">Company profile</a></li>
                                <li><a class="dropdown-item" href="{{ route('employer.addemp') }}">Add employee</a></li>
                                <li><a class="dropdown-item" href="{{ route('employer.notification') }}">Notification</a></li>
                                <li><a class="dropdown-item" href="{{ route('employer.subscription') }}">My Subscription</a></li>
                                <li><a class="dropdown-item" href="{{ route('employer.subscription_plan') }}">Subscription Plans</a></li>
                                <li><a class="dropdown-item" href="{{ route('employer.logout') }}">Logout</a></li>
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
                            </a> -->
                            <br>

                            <div class="user_img">
                                <img src="{{asset('assets/images/profile.png')}}" alt="">
                                <!-- <img src="{{asset('assets/images/team.png')}}" alt=""> -->
                            </div>
                            <h3>{{ Auth::user()->name }}</h3>
                            <!-- <p>Human Resource</p> -->
                        </div>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('employer.dashboard') }}">
                                    <span class="icon-bg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 14 14" fill="none">
                                            <path
                                                d="M10.2767 3.48125L11.1243 2.63367L11.9491 3.4585L11.1016 4.30608C11.8441 5.23541 12.249 6.38935 12.25 7.57889C12.251 8.76843 11.848 9.92304 11.107 10.8536C10.366 11.7842 9.33095 12.4355 8.1714 12.7009C7.01185 12.9663 5.79654 12.8301 4.72454 12.3145C3.65253 11.7989 2.7874 10.9346 2.27084 9.86306C1.75429 8.79153 1.61693 7.57634 1.88128 6.41655C2.14563 5.25675 2.79602 4.22111 3.72589 3.47927C4.65577 2.73742 5.81001 2.33335 6.99955 2.33325C8.23913 2.33325 9.37838 2.76258 10.2767 3.48125ZM6.99955 11.6666C7.53578 11.6666 8.06676 11.561 8.56217 11.3558C9.05759 11.1506 9.50773 10.8498 9.8869 10.4706C10.2661 10.0914 10.5669 9.64129 10.7721 9.14587C10.9773 8.65046 11.0829 8.11948 11.0829 7.58325C11.0829 7.04702 10.9773 6.51604 10.7721 6.02063C10.5669 5.52521 10.2661 5.07507 9.8869 4.6959C9.50773 4.31673 9.05759 4.01595 8.56217 3.81074C8.06676 3.60554 7.53578 3.49992 6.99955 3.49992C5.91658 3.49992 4.87797 3.93013 4.1122 4.6959C3.34642 5.46167 2.91622 6.50028 2.91622 7.58325C2.91622 8.66622 3.34642 9.70483 4.1122 10.4706C4.87797 11.2364 5.91658 11.6666 6.99955 11.6666ZM6.41622 4.66658H7.58288V8.16658H6.41622V4.66658ZM4.66622 0.583252H9.33288V1.74992H4.66622V0.583252Z"
                                                fill="#0068C4" />
                                        </svg>
                                    </span>
                                    <span class="menu-title">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('employer.profile') }}">
                                    <span class="icon-bg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                            viewBox="0 0 15 15" fill="none">
                                            <g clip-path="url(#clip0_688_10617)">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M12.5 1.875C12.8315 1.875 13.1495 2.0067 13.3839 2.24112C13.6183 2.47554 13.75 2.79348 13.75 3.125V11.875C13.75 12.2065 13.6183 12.5245 13.3839 12.7589C13.1495 12.9933 12.8315 13.125 12.5 13.125H2.5C2.16848 13.125 1.85054 12.9933 1.61612 12.7589C1.3817 12.5245 1.25 12.2065 1.25 11.875V3.125C1.25 2.79348 1.3817 2.47554 1.61612 2.24112C1.85054 2.0067 2.16848 1.875 2.5 1.875H12.5ZM12.5 3.125H2.5V11.875H12.5V3.125ZM10.625 9.375C10.7843 9.37518 10.9375 9.43617 11.0534 9.54553C11.1692 9.65489 11.2389 9.80435 11.2482 9.96337C11.2576 10.1224 11.2058 10.279 11.1036 10.4011C11.0013 10.5233 10.8563 10.6018 10.6981 10.6206L10.625 10.625H4.375C4.2157 10.6248 4.06248 10.5638 3.94664 10.4545C3.83081 10.3451 3.7611 10.1957 3.75177 10.0366C3.74243 9.8776 3.79417 9.72101 3.89642 9.59886C3.99866 9.4767 4.14369 9.39819 4.30187 9.37937L4.375 9.375H10.625ZM6.25 4.375C6.58152 4.375 6.89946 4.5067 7.13388 4.74112C7.3683 4.97554 7.5 5.29348 7.5 5.625V6.875C7.5 7.20652 7.3683 7.52446 7.13388 7.75888C6.89946 7.9933 6.58152 8.125 6.25 8.125H5C4.66848 8.125 4.35054 7.9933 4.11612 7.75888C3.8817 7.52446 3.75 7.20652 3.75 6.875V5.625C3.75 5.29348 3.8817 4.97554 4.11612 4.74112C4.35054 4.5067 4.66848 4.375 5 4.375H6.25ZM10.625 6.875C10.7908 6.875 10.9497 6.94085 11.0669 7.05806C11.1842 7.17527 11.25 7.33424 11.25 7.5C11.25 7.66576 11.1842 7.82473 11.0669 7.94194C10.9497 8.05915 10.7908 8.125 10.625 8.125H8.75C8.58424 8.125 8.42527 8.05915 8.30806 7.94194C8.19085 7.82473 8.125 7.66576 8.125 7.5C8.125 7.33424 8.19085 7.17527 8.30806 7.05806C8.42527 6.94085 8.58424 6.875 8.75 6.875H10.625ZM6.25 5.625H5V6.875H6.25V5.625ZM10.625 4.375C10.7843 4.37518 10.9375 4.43617 11.0534 4.54553C11.1692 4.65489 11.2389 4.80435 11.2482 4.96337C11.2576 5.1224 11.2058 5.27899 11.1036 5.40115C11.0013 5.5233 10.8563 5.60181 10.6981 5.62063L10.625 5.625H8.75C8.5907 5.62482 8.43748 5.56383 8.32164 5.45447C8.20581 5.34511 8.1361 5.19565 8.12677 5.03663C8.11743 4.8776 8.16917 4.72101 8.27142 4.59885C8.37366 4.4767 8.51869 4.39819 8.67688 4.37937L8.75 4.375H10.625Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_688_10617">
                                                    <rect width="15" height="15" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span class="menu-title">Company Profile</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('employer.addemp') }}">
                                    <span class="icon-bg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                            viewBox="0 0 15 15" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.375 5C4.375 3.96447 5.21447 3.125 6.25 3.125C7.28556 3.125 8.125 3.96447 8.125 5C8.125 6.03553 7.28556 6.875 6.25 6.875C5.21447 6.875 4.375 6.03553 4.375 5ZM8.44125 7.228C9.01762 6.66106 9.375 5.87228 9.375 5C9.375 3.27411 7.97587 1.875 6.25 1.875C4.52411 1.875 3.125 3.27411 3.125 5C3.125 5.87392 3.48372 6.66406 4.06196 7.23119C2.34339 7.83537 1.25 9.14119 1.25 10.625C1.25 10.9702 1.52983 11.25 1.875 11.25C2.22018 11.25 2.5 10.9702 2.5 10.625C2.5 9.54381 3.70671 8.125 6.25 8.125C7.47137 8.125 8.40963 8.46569 9.03619 8.937C9.312 9.14444 9.70387 9.08906 9.91131 8.81319C10.1188 8.53737 10.0634 8.1455 9.78756 7.938C9.40194 7.648 8.95037 7.40688 8.44125 7.228ZM11.875 9.0625C12.2202 9.0625 12.5 9.34231 12.5 9.6875V11.25H14.0625C14.4077 11.25 14.6875 11.5298 14.6875 11.875C14.6875 12.2202 14.4077 12.5 14.0625 12.5H12.5V14.0625C12.5 14.4077 12.2202 14.6875 11.875 14.6875C11.5298 14.6875 11.25 14.4077 11.25 14.0625V12.5H9.6875C9.34231 12.5 9.0625 12.2202 9.0625 11.875C9.0625 11.5298 9.34231 11.25 9.6875 11.25H11.25V9.6875C11.25 9.34231 11.5298 9.0625 11.875 9.0625Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                    <span class="menu-title"> Add Employees</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('employer.notification') }}">
                                    <span class="icon-bg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                            viewBox="0 0 15 15" fill="none">
                                            <path
                                                d="M3.125 11.875C2.94792 11.875 2.79938 11.815 2.67938 11.695C2.55938 11.575 2.49959 11.4267 2.5 11.25C2.5 11.0729 2.56 10.9244 2.68 10.8044C2.8 10.6844 2.94834 10.6246 3.125 10.625H3.75V6.25C3.75 5.38542 4.01042 4.61708 4.53125 3.945C5.05209 3.27292 5.72917 2.83292 6.5625 2.625V2.1875C6.5625 1.92708 6.65375 1.70563 6.83625 1.52313C7.01875 1.34063 7.24 1.24958 7.5 1.25C7.76042 1.25 7.98188 1.34125 8.16438 1.52375C8.34688 1.70625 8.43792 1.9275 8.4375 2.1875V2.625C9.27084 2.83333 9.94792 3.27354 10.4688 3.94563C10.9896 4.61771 11.25 5.38583 11.25 6.25V10.625H11.875C12.0521 10.625 12.2006 10.685 12.3206 10.805C12.4406 10.925 12.5004 11.0733 12.5 11.25C12.5 11.4271 12.44 11.5756 12.32 11.6956C12.2 11.8156 12.0517 11.8754 11.875 11.875H3.125ZM7.5 13.75C7.15625 13.75 6.86188 13.6275 6.61688 13.3825C6.37188 13.1375 6.24959 12.8433 6.25 12.5H8.75C8.75 12.8438 8.6275 13.1381 8.3825 13.3831C8.1375 13.6281 7.84334 13.7504 7.5 13.75ZM5 10.625H10V6.25C10 5.5625 9.75521 4.97396 9.26563 4.48438C8.77604 3.99479 8.1875 3.75 7.5 3.75C6.8125 3.75 6.22396 3.99479 5.73438 4.48438C5.24479 4.97396 5 5.5625 5 6.25V10.625Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                    <span class="menu-title"> Notifications</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('employer.TokenUtilization') }}">
                                    <span class="icon-bg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                            viewBox="0 0 15 15" fill="none">
                                            <path
                                                d="M2.5 13.75C2.15625 13.75 1.86188 13.6275 1.61688 13.3825C1.37188 13.1375 1.24958 12.8433 1.25 12.5V6.25C1.25 5.90625 1.3725 5.61188 1.6175 5.36687C1.8625 5.12188 2.15667 4.99958 2.5 5H12.5C12.8438 5 13.1381 5.1225 13.3831 5.3675C13.6281 5.6125 13.7504 5.90667 13.75 6.25V12.5C13.75 12.8438 13.6275 13.1381 13.3825 13.3831C13.1375 13.6281 12.8433 13.7504 12.5 13.75H2.5ZM2.5 12.5H12.5V6.25H2.5V12.5ZM6.25 11.875L10 9.375L6.25 6.875V11.875ZM2.5 4.375V3.125H12.5V4.375H2.5ZM4.375 2.5V1.25H10.625V2.5H4.375Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                    <span class="menu-title">Credit Utilization</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('employer.TokenRequested') }}">
                                    <span class="icon-bg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                            viewBox="0 0 15 15" fill="none">
                                            <path
                                                d="M2.5 13.75C2.15625 13.75 1.86188 13.6275 1.61688 13.3825C1.37188 13.1375 1.24958 12.8433 1.25 12.5V6.25C1.25 5.90625 1.3725 5.61188 1.6175 5.36687C1.8625 5.12188 2.15667 4.99958 2.5 5H12.5C12.8438 5 13.1381 5.1225 13.3831 5.3675C13.6281 5.6125 13.7504 5.90667 13.75 6.25V12.5C13.75 12.8438 13.6275 13.1381 13.3825 13.3831C13.1375 13.6281 12.8433 13.7504 12.5 13.75H2.5ZM2.5 12.5H12.5V6.25H2.5V12.5ZM6.25 11.875L10 9.375L6.25 6.875V11.875ZM2.5 4.375V3.125H12.5V4.375H2.5ZM4.375 2.5V1.25H10.625V2.5H4.375Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                    <span class="menu-title">Credit Requested</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('employer.TokenAssigned') }}">
                                    <span class="icon-bg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                            viewBox="0 0 15 15" fill="none">
                                            <path
                                                d="M2.5 13.75C2.15625 13.75 1.86188 13.6275 1.61688 13.3825C1.37188 13.1375 1.24958 12.8433 1.25 12.5V6.25C1.25 5.90625 1.3725 5.61188 1.6175 5.36687C1.8625 5.12188 2.15667 4.99958 2.5 5H12.5C12.8438 5 13.1381 5.1225 13.3831 5.3675C13.6281 5.6125 13.7504 5.90667 13.75 6.25V12.5C13.75 12.8438 13.6275 13.1381 13.3825 13.3831C13.1375 13.6281 12.8433 13.7504 12.5 13.75H2.5ZM2.5 12.5H12.5V6.25H2.5V12.5ZM6.25 11.875L10 9.375L6.25 6.875V11.875ZM2.5 4.375V3.125H12.5V4.375H2.5ZM4.375 2.5V1.25H10.625V2.5H4.375Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                    <span class="menu-title">Credit Assigned</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('employer.PaymentHistory') }}">
                                    <span class="icon-bg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                            viewBox="0 0 15 15" fill="none">
                                            <path
                                                d="M2.5 13.75C2.15625 13.75 1.86188 13.6275 1.61688 13.3825C1.37188 13.1375 1.24958 12.8433 1.25 12.5V6.25C1.25 5.90625 1.3725 5.61188 1.6175 5.36687C1.8625 5.12188 2.15667 4.99958 2.5 5H12.5C12.8438 5 13.1381 5.1225 13.3831 5.3675C13.6281 5.6125 13.7504 5.90667 13.75 6.25V12.5C13.75 12.8438 13.6275 13.1381 13.3825 13.3831C13.1375 13.6281 12.8433 13.7504 12.5 13.75H2.5ZM2.5 12.5H12.5V6.25H2.5V12.5ZM6.25 11.875L10 9.375L6.25 6.875V11.875ZM2.5 4.375V3.125H12.5V4.375H2.5ZM4.375 2.5V1.25H10.625V2.5H4.375Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                    <span class="menu-title">Payment History</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('employer.subscription') }}">
                                    <span class="icon-bg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                            viewBox="0 0 15 15" fill="none">
                                            <path
                                                d="M2.5 13.75C2.15625 13.75 1.86188 13.6275 1.61688 13.3825C1.37188 13.1375 1.24958 12.8433 1.25 12.5V6.25C1.25 5.90625 1.3725 5.61188 1.6175 5.36687C1.8625 5.12188 2.15667 4.99958 2.5 5H12.5C12.8438 5 13.1381 5.1225 13.3831 5.3675C13.6281 5.6125 13.7504 5.90667 13.75 6.25V12.5C13.75 12.8438 13.6275 13.1381 13.3825 13.3831C13.1375 13.6281 12.8433 13.7504 12.5 13.75H2.5ZM2.5 12.5H12.5V6.25H2.5V12.5ZM6.25 11.875L10 9.375L6.25 6.875V11.875ZM2.5 4.375V3.125H12.5V4.375H2.5ZM4.375 2.5V1.25H10.625V2.5H4.375Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                    <span class="menu-title"> My Subscription</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('employer.subscription_plan') }}">
                                    <span class="icon-bg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                            viewBox="0 0 15 15" fill="none">
                                            <path
                                                d="M2.5 13.75C2.15625 13.75 1.86188 13.6275 1.61688 13.3825C1.37188 13.1375 1.24958 12.8433 1.25 12.5V6.25C1.25 5.90625 1.3725 5.61188 1.6175 5.36687C1.8625 5.12188 2.15667 4.99958 2.5 5H12.5C12.8438 5 13.1381 5.1225 13.3831 5.3675C13.6281 5.6125 13.7504 5.90667 13.75 6.25V12.5C13.75 12.8438 13.6275 13.1381 13.3825 13.3831C13.1375 13.6281 12.8433 13.7504 12.5 13.75H2.5ZM2.5 12.5H12.5V6.25H2.5V12.5ZM6.25 11.875L10 9.375L6.25 6.875V11.875ZM2.5 4.375V3.125H12.5V4.375H2.5ZM4.375 2.5V1.25H10.625V2.5H4.375Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                    <span class="menu-title">Subscriptions Plan</span>
                                </a>
                            </li>


                        </ul>
                    </nav>

                </div>
            </div>
