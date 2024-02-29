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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css">
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

<body style="background: rgba(236, 243, 250, 0.42);;">
<header class="header_top inner_page">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="../assets/images/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                                    <!-- <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" aria-current="page" href="#About_tab">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#Services_tab">Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#Pricing_tab">Pricing</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#Team_tab">Team</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#Testimonial_tab">Testimonials</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#FAQs_tab">FAQs</a>
                                        </li>
                                    </ul> -->

                        <div class="btn_grp wallet_grp">
                            <button class="wallet_btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M20.7002 16.4906C20.147 15.5344 19.4814 13.7156 19.4814 10.5V9.83438C19.4814 5.68125 16.1533 2.27813 12.0564 2.25H12.0002C11.0165 2.25123 10.0427 2.4462 9.13435 2.82378C8.22601 3.20135 7.40094 3.75414 6.70624 4.45058C6.01154 5.14702 5.46082 5.97347 5.08552 6.88275C4.71022 7.79202 4.51769 8.76632 4.51892 9.75V10.5C4.51892 13.7156 3.8533 15.5344 3.30017 16.4906C3.1664 16.7185 3.0952 16.9777 3.09377 17.2419C3.09235 17.5061 3.16075 17.7661 3.29205 17.9954C3.42335 18.2247 3.6129 18.4152 3.84151 18.5477C4.07012 18.6803 4.32968 18.75 4.59392 18.75H8.25017C8.25017 19.7446 8.64526 20.6984 9.34852 21.4016C10.0518 22.1049 11.0056 22.5 12.0002 22.5C12.9947 22.5 13.9486 22.1049 14.6518 21.4016C15.3551 20.6984 15.7502 19.7446 15.7502 18.75H19.4064C19.6706 18.7517 19.9305 18.6831 20.1595 18.5513C20.3884 18.4196 20.5783 18.2293 20.7095 18C20.8397 17.7694 20.9073 17.5088 20.9056 17.2441C20.904 16.9793 20.8332 16.7196 20.7002 16.4906ZM12.0002 21C11.4042 20.9975 10.8333 20.7597 10.4119 20.3383C9.99048 19.9168 9.75264 19.346 9.75017 18.75H14.2502C14.2477 19.346 14.0099 19.9168 13.5884 20.3383C13.167 20.7597 12.5961 20.9975 12.0002 21ZM4.59392 17.25C5.2408 16.125 6.01892 14.0531 6.01892 10.5V9.75C6.01645 8.96295 6.16934 8.18316 6.46882 7.45532C6.7683 6.72747 7.20849 6.06589 7.76414 5.50849C8.3198 4.95109 8.98 4.50884 9.70691 4.20708C10.4338 3.90533 11.2131 3.75 12.0002 3.75H12.047C15.3189 3.76875 17.9814 6.50625 17.9814 9.83438V10.5C17.9814 14.0531 18.7595 16.125 19.4064 17.25H4.59392Z" fill="#DFDFDF"/>
                                    <circle cx="17" cy="4" r="3.5" fill="#FF0000" stroke="white"/>
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
                                        <!-- <img src="../assets/images/user_img.png" alt=""> -->
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
                                    <span> Super Admin</span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="{{ route('super.admin.logout') }}">Logout</a></li>

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
                                <svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71"
                                    fill="none">
                                    <path
                                        d="M47.3337 29.5833C47.3337 32.7217 46.0869 35.7316 43.8678 37.9508C41.6486 40.1699 38.6387 41.4167 35.5003 41.4167C32.3619 41.4167 29.3521 40.1699 27.1329 37.9508C24.9137 35.7316 23.667 32.7217 23.667 29.5833C23.667 26.4449 24.9137 23.4351 27.1329 21.2159C29.3521 18.9967 32.3619 17.75 35.5003 17.75C38.6387 17.75 41.6486 18.9967 43.8678 21.2159C46.0869 23.4351 47.3337 26.4449 47.3337 29.5833Z"
                                        fill="#DFDFDF"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M34.2933 65.0598C18.5151 64.4267 5.91699 51.4337 5.91699 35.5001C5.91699 19.1612 19.1614 5.91675 35.5003 5.91675C51.8392 5.91675 65.0836 19.1612 65.0836 35.5001C65.0836 51.839 51.8392 65.0834 35.5003 65.0834C35.3652 65.0843 35.2301 65.0843 35.095 65.0834C34.8273 65.0834 34.5596 65.0746 34.2933 65.0598ZM16.5167 54.1672C16.2955 53.532 16.2202 52.8551 16.2964 52.1868C16.3726 51.5186 16.5984 50.876 16.9569 50.3069C17.3154 49.7378 17.7975 49.2568 18.3673 48.8995C18.9372 48.5422 19.5802 48.3179 20.2486 48.2431C31.7802 46.9666 39.2914 47.082 50.7668 48.2697C51.4361 48.3394 52.0807 48.561 52.6515 48.9174C53.2223 49.2739 53.7042 49.7559 54.0605 50.3268C54.4169 50.8977 54.6382 51.5423 54.7077 52.2117C54.7773 52.881 54.6931 53.5574 54.4618 54.1894C59.3799 49.2133 62.1341 42.4965 62.1253 35.5001C62.1253 20.7957 50.2047 8.87508 35.5003 8.87508C20.7959 8.87508 8.87532 20.7957 8.87532 35.5001C8.87532 42.7717 11.7908 49.3628 16.5167 54.1672Z"
                                        fill="#DFDFDF"></path>
                                </svg>
                                <!-- <img src="{{asset('assets/images/team.png')}}" alt=""> -->
                            </div>
                            <h3>Super Admin</h3>

                        </div>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('superadmin.dashboard') }}">
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
                                <a class="nav-link" href="{{ route('superadmin.appointments') }}">
                                    <span class="icon-bg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                            <path d="M11.25 3.125V1.875C11.25 1.70924 11.1842 1.55027 11.0669 1.43306C10.9497 1.31585 10.7908 1.25 10.625 1.25C10.4592 1.25 10.3003 1.31585 10.1831 1.43306C10.0658 1.55027 10 1.70924 10 1.875V3.125H5V1.875C5 1.70924 4.93415 1.55027 4.81694 1.43306C4.69973 1.31585 4.54076 1.25 4.375 1.25C4.20924 1.25 4.05027 1.31585 3.93306 1.43306C3.81585 1.55027 3.75 1.70924 3.75 1.875V3.125H1.25V13.125H13.75V3.125H11.25ZM12.5 11.875H2.5V4.375H12.5V11.875ZM7.5 7.5C7.68542 7.5 7.86668 7.44502 8.02085 7.342C8.17502 7.23899 8.29518 7.09257 8.36614 6.92127C8.43709 6.74996 8.45566 6.56146 8.41949 6.3796C8.38331 6.19775 8.29402 6.0307 8.16291 5.89959C8.0318 5.76848 7.86475 5.67919 7.6829 5.64301C7.50104 5.60684 7.31254 5.62541 7.14123 5.69636C6.96993 5.76732 6.82351 5.88748 6.7205 6.04165C6.61748 6.19582 6.5625 6.37708 6.5625 6.5625C6.5625 6.81114 6.66127 7.0496 6.83709 7.22541C7.0129 7.40123 7.25136 7.5 7.5 7.5ZM9.375 8.88125C8.82154 8.50642 8.16844 8.30608 7.5 8.30608C6.83156 8.30608 6.17846 8.50642 5.625 8.88125V10H9.375V8.88125Z" fill="white"/>
                                          </svg>
                                    </span>
                                    <span class="menu-title">All appointments</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('superadmin.payments') }}">
                                    <span class="icon-bg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                            <path d="M12.0242 3.13867C12.9383 3.13867 13.6857 3.85224 13.7398 4.75272L13.743 4.85742V10.1731C13.743 11.0872 13.0294 11.8346 12.1289 11.8887L12.0242 11.8918H2.97559C2.0615 11.8918 1.31408 11.1783 1.25997 10.2778L1.25684 10.1731V4.85742C1.25684 3.94334 1.9704 3.19592 2.87088 3.14181L2.97559 3.13867H12.0242ZM12.805 6.87242H2.19371L2.19434 10.1731C2.19434 10.5776 2.50176 10.9103 2.89571 10.9503L2.97559 10.9543H12.0242C12.4287 10.9543 12.7614 10.6469 12.8014 10.253L12.8055 10.1731L12.805 6.87242ZM11.408 9.06323C11.6669 9.06323 11.8767 9.2731 11.8767 9.53198C11.8767 9.76929 11.7004 9.96541 11.4716 9.99645L11.408 10.0007H9.8455C9.58661 10.0007 9.37675 9.79086 9.37675 9.53198C9.37675 9.29467 9.55309 9.09855 9.78189 9.06751L9.8455 9.06323H11.408ZM12.0242 4.07617H2.97559C2.57108 4.07617 2.23838 4.38359 2.19837 4.77754L2.19434 4.85742L2.19371 5.93492H12.805L12.8055 4.85742C12.8055 4.45292 12.4981 4.12021 12.1041 4.08021L12.0242 4.07617Z" fill="white"/>
                                          </svg>
                                    </span>
                                    <span class="menu-title">Transaction History</span>
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('superadmin.notification') }}">
                                    <span class="icon-bg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                            <path d="M3.125 11.875C2.94792 11.875 2.79938 11.815 2.67938 11.695C2.55938 11.575 2.49959 11.4267 2.5 11.25C2.5 11.0729 2.56 10.9244 2.68 10.8044C2.8 10.6844 2.94834 10.6246 3.125 10.625H3.75V6.25C3.75 5.38542 4.01042 4.61708 4.53125 3.945C5.05209 3.27292 5.72917 2.83292 6.5625 2.625V2.1875C6.5625 1.92708 6.65375 1.70563 6.83625 1.52313C7.01875 1.34063 7.24 1.24958 7.5 1.25C7.76042 1.25 7.98188 1.34125 8.16438 1.52375C8.34688 1.70625 8.43792 1.9275 8.4375 2.1875V2.625C9.27084 2.83333 9.94792 3.27354 10.4688 3.94563C10.9896 4.61771 11.25 5.38583 11.25 6.25V10.625H11.875C12.0521 10.625 12.2006 10.685 12.3206 10.805C12.4406 10.925 12.5004 11.0733 12.5 11.25C12.5 11.4271 12.44 11.5756 12.32 11.6956C12.2 11.8156 12.0517 11.8754 11.875 11.875H3.125ZM7.5 13.75C7.15625 13.75 6.86188 13.6275 6.61688 13.3825C6.37188 13.1375 6.24959 12.8433 6.25 12.5H8.75C8.75 12.8438 8.6275 13.1381 8.3825 13.3831C8.1375 13.6281 7.84334 13.7504 7.5 13.75ZM5 10.625H10V6.25C10 5.5625 9.75521 4.97396 9.26563 4.48438C8.77604 3.99479 8.1875 3.75 7.5 3.75C6.8125 3.75 6.22396 3.99479 5.73438 4.48438C5.24479 4.97396 5 5.5625 5 6.25V10.625Z" fill="white"/>
                                          </svg>
                                    </span>
                                    <span class="menu-title">Notifications</span>
                                </a>
                            </li> -->



                        </ul>
                    </nav>

                </div>
            </div>