<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RewPaz</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css')}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;500;600;700;800;900;1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/responsive.css')}}">

</head>

<body>
<header class="header_top head_inner">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="javascript:void(0)">
                    <img src="{{asset('asset/images/logo.png')}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('employee/') }}#About_tab">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('employee/') }}#Services_tab">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('employee/') }}#Pricing_tab">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('employee/') }}#Team_tab">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('employee/') }}#Testimonial_tab">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('employee/') }}#FAQs_tab">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('employee/blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('employee/community') }}">Community</a>
                        </li>
                    </ul>
                    <!-- <div class="btn_grp">
                    <a href="{{url('/login/employer')}}"><button class="btnLogin">
                            Login
                        </button></a>
                        <a href="{{url('/signup/employer')}}">
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
                        </button>
                        </a>
                    </div> -->
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
                            <li><a class="dropdown-item" href="{{ route('employee.profile') }}#">Profile</a></li>
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
        </nav>
</header>
<!----------------------------Banner------------------------------------------->
<section class="banner_inner">
<img src="{{asset('asset/images/banner_comm.png')}}" alt="">
<div class="cont_banner">
    <h3>Welcome to our Blogs & Community Discussion</h3>
</div>
</section>
<section class="Community_sect">
<div class="container">
    <div class="row">
        <div class="col-lg-2 col-md-12 col-sm-12">
            <div class="btn_thread">
                <button class="btn">New Thread</button>
            </div>

        </div>
        <div class="col-lg-7 col-md-12 col-sm-12">
            <div class="Greetings_sect">
                <h3 class="heading_title">Greetings</h3>
                <div class="list_user_chat">
                    <div class="card_bx">
                        <div class="icon">
                            <img src="{{asset('asset/images/user_chat.png')}}" alt="">
                        </div>
                        <div class="cont_team">
                            <h3><span>Darlene Robertson</span> <span>3 day ago</span></h3>
                            <p>Keep Calm: How to keep calm during hectic day?</p>
                            <div class="btn_grp">
                                <button class="btn">Cancel</button>
                                <button class="btn"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <g clip-path="url(#clip0_2101_10111)">
                                      <path d="M4.49938 1.78352C4.98938 1.78352 5.87588 2.01802 7.31338 3.43402L8.02588 4.13552L8.72788 3.42251C9.72588 2.40851 10.7879 1.77852 11.4994 1.77852C12.4589 1.77852 13.2154 2.10651 13.9529 2.84251C14.6479 3.53552 15.0309 4.45752 15.0309 5.43802C15.0314 6.41902 14.6489 7.34151 13.9464 8.04251C13.8894 8.10051 10.8684 11.3595 8.33738 14.091C8.21838 14.2045 8.08188 14.221 8.00938 14.221C7.93788 14.221 7.80338 14.205 7.68438 14.0945C7.06788 13.4085 2.59738 8.43802 2.07788 7.91902C1.38238 7.22502 0.999381 6.30252 0.999381 5.32202C0.999381 4.34152 1.38238 3.42002 2.07838 2.72602C2.75488 2.05002 3.54688 1.78352 4.49938 1.78352ZM4.49938 0.783515C3.30338 0.783515 2.24938 1.14102 1.37188 2.01802C-0.457619 3.84251 -0.457619 6.80102 1.37188 8.62652C1.89438 9.14902 6.96338 14.788 6.96338 14.788C7.25238 15.077 7.63138 15.2205 8.00988 15.2205C8.38838 15.2205 8.76588 15.077 9.05538 14.788C9.05538 14.788 14.6004 8.80301 14.6594 8.74352C16.4879 6.91751 16.4879 3.95852 14.6594 2.13402C13.7514 1.22752 12.7369 0.778015 11.4999 0.778015C10.3179 0.778015 8.99988 1.72052 8.01538 2.72052C6.99988 1.72052 5.72288 0.783515 4.49988 0.783515H4.49938Z" fill="#D90707"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_2101_10111">
                                        <rect width="16" height="16" fill="white"/>
                                      </clipPath>
                                    </defs>
                                  </svg></span>
                                   <span>Like</span></button>
                            </div>

                        </div>

                    </div>
                    <div class="card_bx">
                        <div class="icon">
                            <img src="{{asset('asset/images/team-n1.png')}}" alt="">
                        </div>
                        <div class="cont_team">
                            <h3><span>Terry Geidt</span> <span>2 day ago</span></h3>
                            <p>Welcome. very supportive.</p>
                            <div class="btn_grp">
                                <button class="btn_rpy">
                                    <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <g clip-path="url(#clip0_2101_10122)">
                                      <path d="M14.44 15C14.351 15.0012 14.2634 14.9787 14.186 14.9348C14.1087 14.8908 14.0444 14.827 14 14.75C13.334 13.6155 12.3849 12.6735 11.2455 12.0161C10.106 11.3588 8.8154 11.0086 7.49997 11V14C7.49948 14.0987 7.46978 14.1951 7.41461 14.2769C7.35944 14.3588 7.28128 14.4225 7.18997 14.46C7.09891 14.4983 6.99856 14.5087 6.90156 14.4901C6.80457 14.4714 6.71528 14.4244 6.64497 14.355L0.644969 8.35499C0.598105 8.30851 0.560908 8.25321 0.535524 8.19228C0.510139 8.13135 0.49707 8.066 0.49707 7.99999C0.49707 7.93399 0.510139 7.86863 0.535524 7.8077C0.560908 7.74678 0.598105 7.69147 0.644969 7.64499L6.64497 1.64499C6.71528 1.57561 6.80457 1.52862 6.90156 1.50993C6.99856 1.49124 7.09891 1.5017 7.18997 1.53999C7.28128 1.5775 7.35944 1.6412 7.41461 1.72306C7.46978 1.80492 7.49948 1.90128 7.49997 1.99999V5.05499C9.56857 5.32069 11.47 6.32947 12.8499 7.89332C14.2297 9.45718 14.9939 11.4694 15 13.555C14.9988 13.8893 14.9771 14.2233 14.935 14.555C14.9225 14.659 14.8776 14.7565 14.8068 14.8336C14.7359 14.9108 14.6426 14.9637 14.54 14.985L14.44 15ZM7.24997 9.99999C8.52517 9.98168 9.78915 10.2404 10.9546 10.7584C12.12 11.2764 13.159 12.0412 14 13C13.8495 11.1862 13.0578 9.48531 11.7667 8.20248C10.4756 6.91965 8.76971 6.1388 6.95497 5.99999C6.83031 5.98873 6.71441 5.93112 6.63016 5.83854C6.54592 5.74597 6.49946 5.62516 6.49997 5.49999V3.20499L1.70497 7.99999L6.49997 12.795V10.5C6.49997 10.3674 6.55265 10.2402 6.64642 10.1464C6.74018 10.0527 6.86736 9.99999 6.99997 9.99999H7.26997H7.24997Z" fill="white"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_2101_10122">
                                        <rect width="16" height="16" fill="white"/>
                                      </clipPath>
                                    </defs>
                                  </svg></span>
                                  <span> Reply</span></button>
                                <button class="btn"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <g clip-path="url(#clip0_2101_10111)">
                                      <path d="M4.49938 1.78352C4.98938 1.78352 5.87588 2.01802 7.31338 3.43402L8.02588 4.13552L8.72788 3.42251C9.72588 2.40851 10.7879 1.77852 11.4994 1.77852C12.4589 1.77852 13.2154 2.10651 13.9529 2.84251C14.6479 3.53552 15.0309 4.45752 15.0309 5.43802C15.0314 6.41902 14.6489 7.34151 13.9464 8.04251C13.8894 8.10051 10.8684 11.3595 8.33738 14.091C8.21838 14.2045 8.08188 14.221 8.00938 14.221C7.93788 14.221 7.80338 14.205 7.68438 14.0945C7.06788 13.4085 2.59738 8.43802 2.07788 7.91902C1.38238 7.22502 0.999381 6.30252 0.999381 5.32202C0.999381 4.34152 1.38238 3.42002 2.07838 2.72602C2.75488 2.05002 3.54688 1.78352 4.49938 1.78352ZM4.49938 0.783515C3.30338 0.783515 2.24938 1.14102 1.37188 2.01802C-0.457619 3.84251 -0.457619 6.80102 1.37188 8.62652C1.89438 9.14902 6.96338 14.788 6.96338 14.788C7.25238 15.077 7.63138 15.2205 8.00988 15.2205C8.38838 15.2205 8.76588 15.077 9.05538 14.788C9.05538 14.788 14.6004 8.80301 14.6594 8.74352C16.4879 6.91751 16.4879 3.95852 14.6594 2.13402C13.7514 1.22752 12.7369 0.778015 11.4999 0.778015C10.3179 0.778015 8.99988 1.72052 8.01538 2.72052C6.99988 1.72052 5.72288 0.783515 4.49988 0.783515H4.49938Z" fill="#D90707"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_2101_10111">
                                        <rect width="16" height="16" fill="white"/>
                                      </clipPath>
                                    </defs>
                                  </svg></span>
                                   <span>Like</span></button>
                            </div>

                        </div>

                    </div>
                    <div class="chat_reply_mess">
                        <div class="descrip_text">
                            <textarea class="form-control" type="text" placeholder="Add a reply......"></textarea>

                        </div>
                        <div class="post_footer">
                            <ul>
                                <li>
                                    <div class="dropdown user_login">
                                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span>Edit
                                            </span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                                <path d="M6.61429 6.54564L9.14506 4L9.86799 4.72718L6.61429 8L3.3606 4.72718L4.08353 4L6.61429 6.54564Z" fill="black"/>
                                            </svg></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item active" href="#">Undo</a></li>
                                            <li><a class="dropdown-item" href="#">Redo</a></li>
                                            <li><a class="dropdown-item" href="#">Paste as Text</a></li>
                                            <li><a class="dropdown-item" href="#">Find and replace</a></li>
                                            <li><a class="dropdown-item" href="#">Select All</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown user_login">
                                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span>Format </span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                                <path d="M6.61429 6.54564L9.14506 4L9.86799 4.72718L6.61429 8L3.3606 4.72718L4.08353 4L6.61429 6.54564Z" fill="black"/>
                                            </svg></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item active" href="#">Bold</a></li>
                                            <li><a class="dropdown-item" href="#">Italic</a></li>
                                            <li><a class="dropdown-item" href="#">Underline</a></li>
                                            <li><a class="dropdown-item" href="#">Clear Formatting</a></li>
                                        </ul>
                                    </div>


                                </li>
                                <li>
                                    <div class="dropdown user_login">
                                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span>Table </span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                                <path d="M6.61429 6.54564L9.14506 4L9.86799 4.72718L6.61429 8L3.3606 4.72718L4.08353 4L6.61429 6.54564Z" fill="black"/>
                                            </svg></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item active" href="#">Table</a></li>
                                            <li><a class="dropdown-item" href="#">Table Properties</a></li>
                                            <li><a class="dropdown-item" href="#">Delete Table</a></li>
                                            <li><a class="dropdown-item" href="#">cell</a></li>
                                            <li><a class="dropdown-item" href="#">Row</a></li>
                                            <li><a class="dropdown-item" href="#">Column</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <label for="Attached_file">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                            <g clip-path="url(#clip0_2121_12817)">
                                              <path d="M8.3465 3.50707L7.86072 3.00938L3.82201 7.14682C3.32227 7.65877 3.32227 8.49178 3.82201 9.00378C4.0638 9.25153 4.38567 9.38794 4.72833 9.38794C5.07099 9.38794 5.39285 9.25151 5.63467 9.00378L11.0587 3.44689C11.8273 2.65934 11.8273 1.37801 11.0587 0.590511C10.29 -0.196989 9.03926 -0.196989 8.27057 0.590511L1.6757 7.34679C0.638047 8.40985 0.638047 10.1396 1.6757 11.2026C2.19454 11.7342 2.87607 11.9999 3.55759 11.9999C4.23911 11.9999 4.92063 11.7342 5.43943 11.2026L10.6488 5.86573L10.163 5.36803L4.95365 10.7049C4.18384 11.4935 2.93127 11.4935 2.16151 10.7049C1.39172 9.91629 1.39172 8.63309 2.16151 7.84446L8.75633 1.08823C9.25714 0.575182 10.0721 0.575182 10.5729 1.08823C11.0737 1.6013 11.0737 2.43614 10.5729 2.94924L5.14881 8.50613C5.03676 8.62092 4.88742 8.68416 4.7283 8.68416C4.56919 8.68416 4.41982 8.62092 4.30781 8.50613C4.07595 8.26857 4.07595 7.88203 4.30781 7.6445L8.3465 3.50707Z" fill="black"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_2121_12817">
                                                <rect width="11.7133" height="12" fill="white" transform="translate(0.409668)"/>
                                              </clipPath>
                                            </defs>
                                          </svg></span><span>Attached</span>
                                           <input type="file" style="display: none;" id="Attached_file">

                                    </label>
                                </li>
                                <li>
                                    <a href=""><span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                        <path d="M7.79137 4.23469C7.8254 4.26951 7.8524 4.31087 7.87082 4.3564C7.88924 4.40192 7.89873 4.45072 7.89873 4.5C7.89873 4.54928 7.88924 4.59808 7.87082 4.6436C7.8524 4.68913 7.8254 4.73048 7.79137 4.76531L4.86304 7.76531C4.82903 7.80015 4.78866 7.82779 4.74423 7.84665C4.69979 7.8655 4.65217 7.87521 4.60407 7.87521C4.55597 7.87521 4.50835 7.8655 4.46391 7.84665C4.41948 7.82779 4.3791 7.80015 4.3451 7.76531C4.31109 7.73047 4.28411 7.68911 4.2657 7.64359C4.2473 7.59806 4.23783 7.54927 4.23783 7.5C4.23783 7.45073 4.2473 7.40194 4.2657 7.35641C4.28411 7.31089 4.31109 7.26953 4.3451 7.23469L7.27342 4.23469C7.30742 4.19982 7.34779 4.17216 7.39223 4.15329C7.43666 4.13442 7.48429 4.1247 7.5324 4.1247C7.5805 4.1247 7.62813 4.13442 7.67257 4.15329C7.71701 4.17216 7.75738 4.19982 7.79137 4.23469ZM10.0764 1.89375C9.83845 1.64997 9.55597 1.45659 9.24508 1.32465C8.9342 1.19272 8.60099 1.12481 8.26448 1.12481C7.92797 1.12481 7.59476 1.19272 7.28387 1.32465C6.97299 1.45659 6.69051 1.64997 6.45258 1.89375L5.07718 3.30234C5.00849 3.37271 4.96991 3.46814 4.96991 3.56765C4.96991 3.66717 5.00849 3.7626 5.07718 3.83297C5.14586 3.90333 5.23902 3.94286 5.33615 3.94286C5.43329 3.94286 5.52644 3.90333 5.59513 3.83297L6.97052 2.42672C7.31501 2.08155 7.77846 1.88949 8.26031 1.89221C8.74215 1.89493 9.20351 2.09221 9.54426 2.44124C9.88501 2.79027 10.0777 3.26289 10.0804 3.75652C10.0831 4.25016 9.89575 4.72499 9.55889 5.07797L8.18303 6.48703C8.11435 6.55733 8.07574 6.65271 8.0757 6.75218C8.07565 6.85164 8.11418 6.94706 8.18281 7.01742C8.25143 7.08779 8.34453 7.12734 8.44162 7.12739C8.53871 7.12743 8.63184 7.08796 8.70053 7.01766L10.0764 5.60625C10.3143 5.36249 10.5031 5.0731 10.6319 4.7546C10.7607 4.43611 10.827 4.09474 10.827 3.75C10.827 3.40526 10.7607 3.06389 10.6319 2.74539C10.5031 2.4269 10.3143 2.13751 10.0764 1.89375ZM6.54134 8.16656L5.16594 9.57562C4.99668 9.75292 4.79478 9.89405 4.57191 9.99086C4.34905 10.0877 4.10965 10.1382 3.86758 10.1396C3.62552 10.1409 3.38559 10.0931 3.1617 9.99881C2.93781 9.90453 2.73439 9.76568 2.56324 9.59031C2.39209 9.41493 2.25659 9.20652 2.1646 8.97713C2.07261 8.74774 2.02595 8.50193 2.02733 8.25394C2.0287 8.00595 2.07809 7.76071 2.17262 7.5324C2.26715 7.3041 2.40494 7.09727 2.57803 6.92391L3.95297 5.51531C4.02166 5.44495 4.06024 5.34951 4.06024 5.25C4.06024 5.15049 4.02166 5.05505 3.95297 4.98469C3.88429 4.91432 3.79113 4.87479 3.694 4.87479C3.59687 4.87479 3.50371 4.91432 3.43503 4.98469L2.06009 6.39375C1.57954 6.88606 1.30957 7.55377 1.30957 8.25C1.30957 8.94623 1.57954 9.61394 2.06009 10.1062C2.54063 10.5986 3.19239 10.8751 3.87199 10.8751C4.55158 10.8751 5.20334 10.5986 5.68389 10.1062L7.05929 8.69672C7.12791 8.62635 7.16644 8.53094 7.1664 8.43147C7.16636 8.33201 7.12774 8.23663 7.05906 8.16633C6.99038 8.09602 6.89724 8.05655 6.80015 8.0566C6.70306 8.05664 6.60996 8.0962 6.54134 8.16656Z" fill="black"/>
                                      </svg></span><span>Link</span></a>
                                </li>
                            </ul>
                            <button class="btn_rpy">
                                Reply
                            </button>

                        </div>
                        </div>
                        <div class="card_bx">
                            <div class="icon">
                                <img src="{{asset('asset/images/team.png')}}" alt="">
                            </div>
                            <div class="cont_team">
                                <h3><span>Phillip Lipshutz</span> <span>2 day ago</span></h3>
                                <p>Hello! Welcome to the Community.</p>
                                <div class="btn_grp">
                                    <button class="btn_rpy">
                                        <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_2101_10122)">
                                          <path d="M14.44 15C14.351 15.0012 14.2634 14.9787 14.186 14.9348C14.1087 14.8908 14.0444 14.827 14 14.75C13.334 13.6155 12.3849 12.6735 11.2455 12.0161C10.106 11.3588 8.8154 11.0086 7.49997 11V14C7.49948 14.0987 7.46978 14.1951 7.41461 14.2769C7.35944 14.3588 7.28128 14.4225 7.18997 14.46C7.09891 14.4983 6.99856 14.5087 6.90156 14.4901C6.80457 14.4714 6.71528 14.4244 6.64497 14.355L0.644969 8.35499C0.598105 8.30851 0.560908 8.25321 0.535524 8.19228C0.510139 8.13135 0.49707 8.066 0.49707 7.99999C0.49707 7.93399 0.510139 7.86863 0.535524 7.8077C0.560908 7.74678 0.598105 7.69147 0.644969 7.64499L6.64497 1.64499C6.71528 1.57561 6.80457 1.52862 6.90156 1.50993C6.99856 1.49124 7.09891 1.5017 7.18997 1.53999C7.28128 1.5775 7.35944 1.6412 7.41461 1.72306C7.46978 1.80492 7.49948 1.90128 7.49997 1.99999V5.05499C9.56857 5.32069 11.47 6.32947 12.8499 7.89332C14.2297 9.45718 14.9939 11.4694 15 13.555C14.9988 13.8893 14.9771 14.2233 14.935 14.555C14.9225 14.659 14.8776 14.7565 14.8068 14.8336C14.7359 14.9108 14.6426 14.9637 14.54 14.985L14.44 15ZM7.24997 9.99999C8.52517 9.98168 9.78915 10.2404 10.9546 10.7584C12.12 11.2764 13.159 12.0412 14 13C13.8495 11.1862 13.0578 9.48531 11.7667 8.20248C10.4756 6.91965 8.76971 6.1388 6.95497 5.99999C6.83031 5.98873 6.71441 5.93112 6.63016 5.83854C6.54592 5.74597 6.49946 5.62516 6.49997 5.49999V3.20499L1.70497 7.99999L6.49997 12.795V10.5C6.49997 10.3674 6.55265 10.2402 6.64642 10.1464C6.74018 10.0527 6.86736 9.99999 6.99997 9.99999H7.26997H7.24997Z" fill="white"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_2101_10122">
                                            <rect width="16" height="16" fill="white"/>
                                          </clipPath>
                                        </defs>
                                      </svg></span>
                                      <span> Reply</span></button>
                                    <button class="btn"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_2101_10111)">
                                          <path d="M4.49938 1.78352C4.98938 1.78352 5.87588 2.01802 7.31338 3.43402L8.02588 4.13552L8.72788 3.42251C9.72588 2.40851 10.7879 1.77852 11.4994 1.77852C12.4589 1.77852 13.2154 2.10651 13.9529 2.84251C14.6479 3.53552 15.0309 4.45752 15.0309 5.43802C15.0314 6.41902 14.6489 7.34151 13.9464 8.04251C13.8894 8.10051 10.8684 11.3595 8.33738 14.091C8.21838 14.2045 8.08188 14.221 8.00938 14.221C7.93788 14.221 7.80338 14.205 7.68438 14.0945C7.06788 13.4085 2.59738 8.43802 2.07788 7.91902C1.38238 7.22502 0.999381 6.30252 0.999381 5.32202C0.999381 4.34152 1.38238 3.42002 2.07838 2.72602C2.75488 2.05002 3.54688 1.78352 4.49938 1.78352ZM4.49938 0.783515C3.30338 0.783515 2.24938 1.14102 1.37188 2.01802C-0.457619 3.84251 -0.457619 6.80102 1.37188 8.62652C1.89438 9.14902 6.96338 14.788 6.96338 14.788C7.25238 15.077 7.63138 15.2205 8.00988 15.2205C8.38838 15.2205 8.76588 15.077 9.05538 14.788C9.05538 14.788 14.6004 8.80301 14.6594 8.74352C16.4879 6.91751 16.4879 3.95852 14.6594 2.13402C13.7514 1.22752 12.7369 0.778015 11.4999 0.778015C10.3179 0.778015 8.99988 1.72052 8.01538 2.72052C6.99988 1.72052 5.72288 0.783515 4.49988 0.783515H4.49938Z" fill="#D90707"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_2101_10111">
                                            <rect width="16" height="16" fill="white"/>
                                          </clipPath>
                                        </defs>
                                      </svg></span>
                                       <span>Like</span></button>
                                </div>

                            </div>

                        </div>
                        <div class="card_bx">
                            <div class="icon">
                                <img src="{{asset('asset/images/team2.png')}}" alt="">
                            </div>
                            <div class="cont_team">
                                <h3><span>Jacob Jones</span> <span>2 day ago</span></h3>
                                <p>Hello! Welcome to the Community.</p>
                                <div class="btn_grp">
                                    <button class="btn_rpy">
                                        <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_2101_10122)">
                                          <path d="M14.44 15C14.351 15.0012 14.2634 14.9787 14.186 14.9348C14.1087 14.8908 14.0444 14.827 14 14.75C13.334 13.6155 12.3849 12.6735 11.2455 12.0161C10.106 11.3588 8.8154 11.0086 7.49997 11V14C7.49948 14.0987 7.46978 14.1951 7.41461 14.2769C7.35944 14.3588 7.28128 14.4225 7.18997 14.46C7.09891 14.4983 6.99856 14.5087 6.90156 14.4901C6.80457 14.4714 6.71528 14.4244 6.64497 14.355L0.644969 8.35499C0.598105 8.30851 0.560908 8.25321 0.535524 8.19228C0.510139 8.13135 0.49707 8.066 0.49707 7.99999C0.49707 7.93399 0.510139 7.86863 0.535524 7.8077C0.560908 7.74678 0.598105 7.69147 0.644969 7.64499L6.64497 1.64499C6.71528 1.57561 6.80457 1.52862 6.90156 1.50993C6.99856 1.49124 7.09891 1.5017 7.18997 1.53999C7.28128 1.5775 7.35944 1.6412 7.41461 1.72306C7.46978 1.80492 7.49948 1.90128 7.49997 1.99999V5.05499C9.56857 5.32069 11.47 6.32947 12.8499 7.89332C14.2297 9.45718 14.9939 11.4694 15 13.555C14.9988 13.8893 14.9771 14.2233 14.935 14.555C14.9225 14.659 14.8776 14.7565 14.8068 14.8336C14.7359 14.9108 14.6426 14.9637 14.54 14.985L14.44 15ZM7.24997 9.99999C8.52517 9.98168 9.78915 10.2404 10.9546 10.7584C12.12 11.2764 13.159 12.0412 14 13C13.8495 11.1862 13.0578 9.48531 11.7667 8.20248C10.4756 6.91965 8.76971 6.1388 6.95497 5.99999C6.83031 5.98873 6.71441 5.93112 6.63016 5.83854C6.54592 5.74597 6.49946 5.62516 6.49997 5.49999V3.20499L1.70497 7.99999L6.49997 12.795V10.5C6.49997 10.3674 6.55265 10.2402 6.64642 10.1464C6.74018 10.0527 6.86736 9.99999 6.99997 9.99999H7.26997H7.24997Z" fill="white"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_2101_10122">
                                            <rect width="16" height="16" fill="white"/>
                                          </clipPath>
                                        </defs>
                                      </svg></span>
                                      <span> Reply</span></button>
                                    <button class="btn"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_2101_10111)">
                                          <path d="M4.49938 1.78352C4.98938 1.78352 5.87588 2.01802 7.31338 3.43402L8.02588 4.13552L8.72788 3.42251C9.72588 2.40851 10.7879 1.77852 11.4994 1.77852C12.4589 1.77852 13.2154 2.10651 13.9529 2.84251C14.6479 3.53552 15.0309 4.45752 15.0309 5.43802C15.0314 6.41902 14.6489 7.34151 13.9464 8.04251C13.8894 8.10051 10.8684 11.3595 8.33738 14.091C8.21838 14.2045 8.08188 14.221 8.00938 14.221C7.93788 14.221 7.80338 14.205 7.68438 14.0945C7.06788 13.4085 2.59738 8.43802 2.07788 7.91902C1.38238 7.22502 0.999381 6.30252 0.999381 5.32202C0.999381 4.34152 1.38238 3.42002 2.07838 2.72602C2.75488 2.05002 3.54688 1.78352 4.49938 1.78352ZM4.49938 0.783515C3.30338 0.783515 2.24938 1.14102 1.37188 2.01802C-0.457619 3.84251 -0.457619 6.80102 1.37188 8.62652C1.89438 9.14902 6.96338 14.788 6.96338 14.788C7.25238 15.077 7.63138 15.2205 8.00988 15.2205C8.38838 15.2205 8.76588 15.077 9.05538 14.788C9.05538 14.788 14.6004 8.80301 14.6594 8.74352C16.4879 6.91751 16.4879 3.95852 14.6594 2.13402C13.7514 1.22752 12.7369 0.778015 11.4999 0.778015C10.3179 0.778015 8.99988 1.72052 8.01538 2.72052C6.99988 1.72052 5.72288 0.783515 4.49988 0.783515H4.49938Z" fill="#D90707"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_2101_10111">
                                            <rect width="16" height="16" fill="white"/>
                                          </clipPath>
                                        </defs>
                                      </svg></span>
                                       <span>Like</span></button>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


        <div class="col-lg-3 col-md-12 col-sm-12">
            <div class="releated_post">
               <h3>Blogs</h3>
               <div class="list_post">
                <div class="card_bx">
                    <div class="cont_bx">
                        <p>Tips to Help You Design
                            Your Mental Health
                            Benefits Support
                        </p>
                    </div>
                    <div class="post_img">
                        <img src="{{asset('asset/images/post1.png')}}" alt="">
                    </div>

                </div>
                <div class="card_bx">
                    <div class="cont_bx">
                        <p>The Transformative
                            Power of Meditation:
                            Cultivating Inner Harmony
                        </p>
                    </div>
                    <div class="post_img">
                        <img src="{{asset('asset/images/post2.png')}}" alt="">
                    </div>

                </div>
                <div class="card_bx">
                    <div class="cont_bx">
                        <p>Empower Your Journey:
                            The Path to Self-Help
                            and Personal Growth
                        </p>
                    </div>
                    <div class="post_img">
                        <img src="{{asset('asset/images/post3.png')}}" alt="">
                    </div>

                </div>

               </div>

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
                  <img src="{{asset('asset/images/logo.png')}}" alt="">
                  <p>
                    Our mission is to provide caregivers with the unwavering support they need to navigate this challenging journey
                  </p>
                  <ul class="ft_soical">
                    <li>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8261 0C12.2564 0 11.6836 0.0196285 9.88882 0.100955C8.09754 0.182982 6.87415 0.467621 5.80429 0.883366C4.69798 1.31313 3.75922 1.88873 2.82467 2.82398C1.88872 3.75923 1.31314 4.69799 0.883376 5.8043C0.467632 6.87486 0.182291 8.09755 0.100965 9.88883C0.0196392 11.6836 0 12.2564 0 16.8261C0 21.3958 0.0196392 21.9686 0.100965 23.7633C0.182992 25.5546 0.467632 26.778 0.883376 27.8479C1.31314 28.9542 1.88874 29.8929 2.82399 30.8275C3.75924 31.7634 4.69798 32.339 5.80429 32.7695C6.87485 33.1845 8.09754 33.4692 9.88882 33.5512C11.6836 33.6325 12.2564 33.6522 16.8261 33.6522C21.3958 33.6522 21.9686 33.6325 23.7634 33.5512C25.5546 33.4692 26.778 33.1846 27.8479 32.7688C28.9542 32.339 29.893 31.7634 30.8275 30.8282C31.7635 29.8929 32.3391 28.9542 32.7695 27.8479C33.1846 26.7773 33.4692 25.5546 33.5512 23.7633C33.6326 21.9686 33.6522 21.3958 33.6522 16.8261C33.6522 12.2564 33.6326 11.6836 33.5512 9.88883C33.4692 8.09755 33.1845 6.87416 32.7688 5.8043C32.339 4.69799 31.7634 3.75923 30.8282 2.82468C29.8929 1.88873 28.9542 1.31313 27.8479 0.883366C26.7773 0.467621 25.5546 0.182281 23.7634 0.100955C21.9686 0.0196285 21.3958 0 16.8261 0ZM16.8261 3.0315C21.3187 3.0315 21.8508 3.04903 23.6252 3.12966C25.2658 3.20467 26.1562 3.47879 26.75 3.70945C27.5352 4.01442 28.096 4.37899 28.685 4.9679C29.2732 5.55681 29.6377 6.11768 29.9427 6.9029C30.1741 7.49532 30.4475 8.3864 30.5225 10.0269C30.6032 11.8007 30.6207 12.3335 30.6207 16.8261C30.6207 21.3187 30.6032 21.8508 30.5225 23.6252C30.4475 25.2658 30.1734 26.1562 29.9427 26.75C29.6377 27.5352 29.2732 28.0961 28.6843 28.685C28.0954 29.2732 27.5345 29.6377 26.7493 29.9427C26.1568 30.1741 25.2658 30.4475 23.6252 30.5225C21.8515 30.6031 21.3187 30.6207 16.8261 30.6207C12.3328 30.6207 11.8007 30.6031 10.0269 30.5225C8.3864 30.4475 7.49602 30.1734 6.9022 29.9427C6.11698 29.6377 5.55611 29.2732 4.9672 28.6843C4.37898 28.0954 4.01441 27.5345 3.70944 26.7493C3.47808 26.1569 3.20466 25.2658 3.12964 23.6252C3.04902 21.8515 3.0315 21.3187 3.0315 16.8261C3.0315 12.3335 3.04902 11.8014 3.12964 10.0269C3.20466 8.3864 3.47878 7.49602 3.70944 6.9022C4.01441 6.11698 4.37899 5.55612 4.9679 4.96721C5.55681 4.37899 6.11769 4.01442 6.90291 3.70945C7.49533 3.47809 8.3864 3.20467 10.0269 3.12966C11.8007 3.04903 12.3335 3.0315 16.8261 3.0315ZM16.8261 8.18589C12.0538 8.18589 8.18589 12.0538 8.18589 16.8261C8.18589 21.5984 12.0538 25.4663 16.8261 25.4663C21.5984 25.4663 25.4663 21.5984 25.4663 16.8261C25.4663 12.0538 21.5984 8.18589 16.8261 8.18589ZM16.8261 22.4348C15.3386 22.4348 13.912 21.8439 12.8601 20.792C11.8083 19.7402 11.2174 18.3136 11.2174 16.8261C11.2174 15.3386 11.8083 13.912 12.8601 12.8601C13.912 11.8083 15.3386 11.2174 16.8261 11.2174C18.3136 11.2174 19.7402 11.8083 20.792 12.8601C21.8439 13.912 22.4348 15.3386 22.4348 16.8261C22.4348 18.3136 21.8439 19.7402 20.792 20.792C19.7402 21.8439 18.3136 22.4348 16.8261 22.4348ZM27.8268 7.84446C27.8268 8.37996 27.6141 8.89354 27.2355 9.2722C26.8568 9.65086 26.3432 9.86359 25.8077 9.86359C25.2722 9.86359 24.7586 9.65086 24.38 9.2722C24.0013 8.89354 23.7886 8.37996 23.7886 7.84446C23.7886 7.30895 24.0013 6.79538 24.38 6.41672C24.7586 6.03806 25.2722 5.82534 25.8077 5.82534C26.3432 5.82534 26.8568 6.03806 27.2355 6.41672C27.6141 6.79538 27.8268 7.30895 27.8268 7.84446Z" fill="url(#paint0_linear_688_13659)"/>
                            <defs>
                              <linearGradient id="paint0_linear_688_13659" x1="-14.3022" y1="-33.6522" x2="62.0062" y2="-22.8496" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#0068C4"/>
                                <stop offset="1" stop-color="#00A7C5"/>
                              </linearGradient>
                            </defs>
                          </svg></a>
                    </li>
                    <li>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="34" height="27" viewBox="0 0 34 27" fill="none">
                            <path d="M33.6522 3.13581C32.3874 3.66005 31.0499 4.0066 29.6812 4.16468C31.1252 3.34049 32.2073 2.04389 32.7267 0.515401C31.3698 1.28716 29.8844 1.83091 28.3351 2.12301C27.2996 1.05005 25.9205 0.335825 24.4143 0.0923601C22.9081 -0.151105 21.3599 0.08996 20.0126 0.777747C18.6652 1.46553 17.5949 2.56114 16.9695 3.89273C16.3441 5.22433 16.199 6.71659 16.5569 8.13549C13.8133 8.0029 11.1295 7.32035 8.68 6.13218C6.23048 4.94401 4.06997 3.27679 2.33883 1.23883C1.73164 2.25189 1.41258 3.39917 1.41339 4.56659C1.41124 5.65073 1.6897 6.71856 2.224 7.67501C2.75829 8.63146 3.53183 9.44683 4.47574 10.0485C3.37864 10.02 2.30498 9.73876 1.34609 9.22867V9.30905C1.35431 10.8281 1.91143 12.2977 2.92322 13.4695C3.93501 14.6412 5.33935 15.4431 6.89869 15.7395C6.29843 15.914 5.67523 16.0061 5.04783 16.0128C4.61353 16.0079 4.18031 15.9703 3.75222 15.9003C4.19627 17.2069 5.0556 18.3489 6.21063 19.1672C7.36566 19.9855 8.75895 20.4394 10.1966 20.4659C7.76895 22.291 4.77168 23.287 1.68261 23.2953C1.12017 23.297 0.558181 23.2648 0 23.1988C3.15393 25.1445 6.82939 26.1773 10.5836 26.1729C13.1743 26.1986 15.7444 25.7308 18.1438 24.7969C20.5431 23.863 22.7237 22.4816 24.558 20.7335C26.3924 18.9854 27.8437 16.9056 28.8274 14.6156C29.811 12.3256 30.3072 9.87127 30.287 7.39599C30.287 7.12269 30.287 6.83332 30.287 6.54395C31.6073 5.60319 32.746 4.44991 33.6522 3.13581Z" fill="url(#paint0_linear_688_13660)"/>
                            <defs>
                              <linearGradient id="paint0_linear_688_13660" x1="-14.3022" y1="-26.1739" x2="61.0395" y2="-12.4608" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#0068C4"/>
                                <stop offset="1" stop-color="#00A7C5"/>
                              </linearGradient>
                            </defs>
                          </svg></a>
                    </li>
                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                                <path d="M31.8013 0H1.85087C1.35999 0 0.889213 0.195002 0.542107 0.542107C0.195002 0.889213 0 1.35999 0 1.85087V31.8013C0 32.0444 0.0478743 32.285 0.140889 32.5096C0.233904 32.7342 0.370238 32.9382 0.542107 33.1101C0.713976 33.2819 0.918015 33.4183 1.14257 33.5113C1.36713 33.6043 1.60781 33.6522 1.85087 33.6522H17.9703V20.612H13.5955V15.5641H17.9703V11.7783C17.8796 10.8894 17.9846 9.99154 18.2777 9.14756C18.5708 8.30359 19.0451 7.53396 19.6671 6.89266C20.2892 6.25136 21.044 5.75392 21.8787 5.43523C22.7133 5.11654 23.6076 4.98431 24.4988 5.04783C25.8084 5.03977 27.1174 5.10718 28.4193 5.24974V9.79278H25.7439C23.6238 9.79278 23.22 10.8023 23.22 12.2662V15.5137H28.2678L27.6116 20.5615H23.22V33.6522H31.8013C32.0444 33.6522 32.285 33.6043 32.5096 33.5113C32.7342 33.4183 32.9382 33.2819 33.1101 33.1101C33.2819 32.9382 33.4183 32.7342 33.5113 32.5096C33.6043 32.285 33.6522 32.0444 33.6522 31.8013V1.85087C33.6522 1.60781 33.6043 1.36713 33.5113 1.14257C33.4183 0.918015 33.2819 0.713976 33.1101 0.542107C32.9382 0.370238 32.7342 0.233904 32.5096 0.140889C32.285 0.0478743 32.0444 0 31.8013 0Z" fill="url(#paint0_linear_688_13661)"/>
                                <defs>
                                  <linearGradient id="paint0_linear_688_13661" x1="-14.3022" y1="-33.6522" x2="62.0062" y2="-22.8496" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#0068C4"/>
                                    <stop offset="1" stop-color="#00A7C5"/>
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
                            <a href="#"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C15.87 2 19 5.13 19 9C19 14.25 12 22 12 22C12 22 5 14.25 5 9C5 5.13 8.13 2 12 2ZM7 9C7 11.85 9.92 16.21 12 18.88C14.12 16.19 17 11.88 17 9C17 6.24 14.76 4 12 4C9.24 4 7 6.24 7 9ZM12 11.5C10.6193 11.5 9.5 10.3807 9.5 9C9.5 7.61929 10.6193 6.5 12 6.5C13.3807 6.5 14.5 7.61929 14.5 9C14.5 10.3807 13.3807 11.5 12 11.5Z" fill="#52A2E9"/>
                              </svg></span><span>8920 WOODBINE AVENUE 304
MARKHAM, ON, CA, L3R 9W9</span></a>
                        </li>
                        <li>
                            <a href="#"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22 6C22 4.9 21.1 4 20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6ZM20 6L12 11L4 6H20ZM20 18H4V8L12 13L20 8V18Z" fill="#52A2E9"/>
                              </svg></span><span>contact@rewpaz.ca</span></a>
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
                <!-- <p>Copyright @ <a href="#">WaysAhead global Pvt.Ltd.</a></p> -->
            </div>
        </div>
    </div>
    </div>

</footer>

    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('asset/js/jquery-2.1.0.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/js/owl-carousel.js')}}"></script>
    <script src="{{asset('asset/js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('asset/js/custom.js')}}"></script>

</body>

</html>