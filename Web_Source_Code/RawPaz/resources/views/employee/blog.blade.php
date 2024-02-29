<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RewPaz</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css')}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;500;600;700;800;900;1000&display=swap"
        rel="stylesheet">
    <link rel='stylesheet' href='asset/css/froala_editor.pkgd.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_style.min.css'>

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
                            <a class="nav-link" aria-current="page" href="{{ url('employee/') }}#About_tab">About</a>
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
                                <li><a class="dropdown-item" href="{{ route('employee.tokens') }}">Tokens</a></li>
                                <li><a class="dropdown-item" href="{{ route('employee.notification') }}">Notifications</a></li>
                                <li><a class="dropdown-item" href="{{ route('employee.logout') }}">Logout</a></li>
                            </ul>
                        </div>
                </div>
            </div>
        </nav>
</header>
<!----------------------------Banner------------------------------------------->
<section class="blog_sect">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>THINGS TO READ</h3>
                <h4>Tips to Help You Design Your Mental Health <br>
                    Benefits Support</h4>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="blog_details">
                    <div class="img_post">
                        <img src="{{asset('asset/images/blog_banner.png')}}" alt="">
                    </div>
                    <div class="date_post">
                       <p><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.08333C6.53183 2.08333 2.08333 6.53183 2.08333 12C2.08333 17.4682 6.53183 21.9167 12 21.9167C17.4682 21.9167 21.9167 17.4682 21.9167 12C21.9167 6.53183 17.4682 2.08333 12 2.08333ZM12 23.6667C5.567 23.6667 0.333332 18.433 0.333332 12C0.333332 5.567 5.567 0.333328 12 0.333328C18.433 0.333328 23.6667 5.567 23.6667 12C23.6667 18.433 18.433 23.6667 12 23.6667Z" fill="#6C6C6C"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.0031 16.3078C15.8502 16.3078 15.6962 16.2682 15.5551 16.1853L11.1567 13.5615C10.8931 13.4028 10.7297 13.117 10.7297 12.809V7.15302C10.7297 6.67002 11.1217 6.27802 11.6047 6.27802C12.0889 6.27802 12.4797 6.67002 12.4797 7.15302V12.312L16.4522 14.6804C16.8664 14.9289 17.0029 15.4655 16.7556 15.8808C16.5911 16.155 16.3006 16.3078 16.0031 16.3078Z" fill="#6C6C6C"/>
                      </svg></span><span>16, Aug 2023</span></p>


                    </div>
                    <div class="head_subtitle">
                        <p>Supporting caregiver emotional well-being and prosperity today requests another degree of figuring out, receptiveness, and purposefulness.</p>

                    </div>
                    <div class="head_post">
                        <h3>Perceive association is important for their psychological prosperity (and it additionally drives commitment)</h3>
                    </div>
                    <div class="post_descrip">
                        <p>With remote/hybrid work, a great deal of representatives are longing for association at this moment. Depression is a developing psychological well-being issue. Numerous representatives used to get the greater part of their social associations in the work environment. It's critical to perceive that building social association is likewise essential for guaranteeing representative mental prosperity.</p>

                    </div>
                    <div class="head_post">
                        <h3>Look past your EAP with regards to supporting emotional well-being in the work environment</h3>
                    </div>
                    <div class="post_descrip">
                        <p>By and large, EAPs have never felt adequate. Indeed, even trying to say the word EAP, it's difficult to get purchases from representatives. Conventional EAPs are underutilized yet need to find more imaginative arrangements. There are some phenomenal raised EAPs on the lookout and you can add preventive sites like RewPaz to supplement your EAP and drive higher commitment to your psychological wellness assets.</p>

                    </div>
                    <div class="head_post">
                        <h3>Deliver mental well-being for the whole employee life experience</h3>
                    </div>
                    <div class="post_descrip">
                        <p>It's not just about viewing at your labor force overall, yet also considering every person to be an entire individual. At RewPaz, we're assisting clients with grasping the entire experience of representatives: their social determinants of wellbeing and every one of the variables that might be adding or reducing their prosperity.</p>

                    </div>


                </div>

            </div>
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="blog_list">
                    <div class="card_bx active">
                        <div class="img_bx">
                            <img src="{{asset('asset/images/blog_thump.png')}}" alt="">
                        </div>
                        <div class="cont_bx">
                            <h3>Tips to Help You Design Your Mental Health Benefits Support</h3>
                            <p>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.08334C6.53181 2.08334 2.08331 6.53184 2.08331 12C2.08331 17.4682 6.53181 21.9167 12 21.9167C17.4681 21.9167 21.9166 17.4682 21.9166 12C21.9166 6.53184 17.4681 2.08334 12 2.08334ZM12 23.6667C5.56698 23.6667 0.333313 18.433 0.333313 12C0.333313 5.56701 5.56698 0.333344 12 0.333344C18.433 0.333344 23.6666 5.56701 23.6666 12C23.6666 18.433 18.433 23.6667 12 23.6667Z" fill="#6C6C6C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.003 16.3078C15.8502 16.3078 15.6962 16.2682 15.555 16.1853L11.1567 13.5615C10.893 13.4028 10.7297 13.117 10.7297 12.809V7.15302C10.7297 6.67002 11.1217 6.27802 11.6047 6.27802C12.0888 6.27802 12.4797 6.67002 12.4797 7.15302V12.312L16.4522 14.6804C16.8663 14.9289 17.0028 15.4655 16.7555 15.8808C16.591 16.155 16.3005 16.3078 16.003 16.3078Z" fill="#6C6C6C"/>
                              </svg></span>
                              <span>16, Aug 2023</span></p>

                        </div>

                    </div>
                    <div class="card_bx">
                        <div class="img_bx">
                            <img src="{{asset('asset/images/blog_thump1.png')}}" alt="">
                        </div>
                        <div class="cont_bx">
                            <h3>The Transformative Power of Meditation: Cultivating Inner Harmony</h3>
                            <p>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.08334C6.53181 2.08334 2.08331 6.53184 2.08331 12C2.08331 17.4682 6.53181 21.9167 12 21.9167C17.4681 21.9167 21.9166 17.4682 21.9166 12C21.9166 6.53184 17.4681 2.08334 12 2.08334ZM12 23.6667C5.56698 23.6667 0.333313 18.433 0.333313 12C0.333313 5.56701 5.56698 0.333344 12 0.333344C18.433 0.333344 23.6666 5.56701 23.6666 12C23.6666 18.433 18.433 23.6667 12 23.6667Z" fill="#6C6C6C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.003 16.3078C15.8502 16.3078 15.6962 16.2682 15.555 16.1853L11.1567 13.5615C10.893 13.4028 10.7297 13.117 10.7297 12.809V7.15302C10.7297 6.67002 11.1217 6.27802 11.6047 6.27802C12.0888 6.27802 12.4797 6.67002 12.4797 7.15302V12.312L16.4522 14.6804C16.8663 14.9289 17.0028 15.4655 16.7555 15.8808C16.591 16.155 16.3005 16.3078 16.003 16.3078Z" fill="#6C6C6C"/>
                              </svg></span>
                              <span>16, Aug 2023</span></p>

                        </div>

                    </div>
                    <div class="card_bx">
                        <div class="img_bx">
                            <img src="{{asset('asset/images/blog_thump2.png')}}" alt="">
                        </div>
                        <div class="cont_bx">
                            <h3>Empower Your Journey: The Path to Self-Help and Personal Growth</h3>
                            <p>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.08334C6.53181 2.08334 2.08331 6.53184 2.08331 12C2.08331 17.4682 6.53181 21.9167 12 21.9167C17.4681 21.9167 21.9166 17.4682 21.9166 12C21.9166 6.53184 17.4681 2.08334 12 2.08334ZM12 23.6667C5.56698 23.6667 0.333313 18.433 0.333313 12C0.333313 5.56701 5.56698 0.333344 12 0.333344C18.433 0.333344 23.6666 5.56701 23.6666 12C23.6666 18.433 18.433 23.6667 12 23.6667Z" fill="#6C6C6C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.003 16.3078C15.8502 16.3078 15.6962 16.2682 15.555 16.1853L11.1567 13.5615C10.893 13.4028 10.7297 13.117 10.7297 12.809V7.15302C10.7297 6.67002 11.1217 6.27802 11.6047 6.27802C12.0888 6.27802 12.4797 6.67002 12.4797 7.15302V12.312L16.4522 14.6804C16.8663 14.9289 17.0028 15.4655 16.7555 15.8808C16.591 16.155 16.3005 16.3078 16.003 16.3078Z" fill="#6C6C6C"/>
                              </svg></span>
                              <span>16, Aug 2023</span></p>

                        </div>

                    </div>

                </div>


            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="btn_back">
                    <button class="btn">Back</button>

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
                        <!-- <li>
                            <a href="#"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.54 5C6.6 5.89 6.75 6.76 6.99 7.59L5.79 8.79C5.38 7.59 5.12 6.32 5.03 5H6.54ZM16.4 17.02C17.25 17.26 18.12 17.41 19 17.47V18.96C17.68 18.87 16.41 18.61 15.2 18.21L16.4 17.02ZM7.5 3H4C3.45 3 3 3.45 3 4C3 13.39 10.61 21 20 21C20.55 21 21 20.55 21 20V16.51C21 15.96 20.55 15.51 20 15.51C18.76 15.51 17.55 15.31 16.43 14.94C16.33 14.9 16.22 14.89 16.12 14.89C15.86 14.89 15.61 14.99 15.41 15.18L13.21 17.38C10.38 15.93 8.06 13.62 6.62 10.79L8.82 8.59C9.1 8.31 9.18 7.92 9.07 7.57C8.7 6.45 8.5 5.25 8.5 4C8.5 3.45 8.05 3 7.5 3Z" fill="#52A2E9"/>
                              </svg></span><span>+1 386-688-3295</span></a>
                        </li> -->

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery-2.1.0.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/js/owl-carousel.js')}}"></script>
    <script src="{{asset('asset/js/scrollreveal.min.js')}}"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/js/froala_editor.pkgd.min.js'></script>



    <script src="{{asset('asset/js/custom.js')}}"></script>
    <script>

        $(function () { $('.text_area').froalaEditor() });
        (function ($) {
          // Add an option for your plugin.
          $.FroalaEditor.DEFAULTS = $.extend($.FroalaEditor.DEFAULTS, {
            myOption: false
          });

          // Define the plugin.
          // The editor parameter is the current instance.
          $.FroalaEditor.PLUGINS.myPlugin = function (editor) {
            // Private variable visible only inside the plugin scope.
            var private_var = 'My awesome plugin';

            // Private method that is visible only inside plugin scope.
            function _privateMethod() {
              console.log(private_var);
            }

            // Public method that is visible in the instance scope.
            function publicMethod() {
              console.log(_privateMethod());
            }

            // The start point for your plugin.
            function _init() {
              // You can access any option from documentation or your custom options.
              console.log(editor.opts.myOption);

              console.log("whatsup!!");

              // Call any method from documentation.
              // editor.methodName(params);

              // You can listen to any event from documentation.
              // editor.events.add('contentChanged', function (params) {});
            }

            // Expose public methods. If _init is not public then the plugin won't be initialized.
            // Public method can be accessed through the editor API:
            // $('.selector').froalaEditor('myPlugin.publicMethod');
            return {
              _init: _init,
              publicMethod: publicMethod
            }
          }
        })(jQuery);
      </script>
</body>

</html>