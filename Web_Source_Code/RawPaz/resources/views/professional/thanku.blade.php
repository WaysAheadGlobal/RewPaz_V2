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
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <span>
                                    <!-- <img src="{{asset('assets/images/user_img.png')}}" alt=""> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                        <path d="M21.3337 13.3333C21.3337 14.7478 20.7718 16.1044 19.7716 17.1046C18.7714 18.1048 17.4148 18.6667 16.0003 18.6667C14.5858 18.6667 13.2293 18.1048 12.2291 17.1046C11.2289 16.1044 10.667 14.7478 10.667 13.3333C10.667 11.9188 11.2289 10.5623 12.2291 9.5621C13.2293 8.5619 14.5858 8 16.0003 8C17.4148 8 18.7714 8.5619 19.7716 9.5621C20.7718 10.5623 21.3337 11.9188 21.3337 13.3333Z" fill="#DFDFDF"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.4563 29.3228C8.34499 29.0374 2.66699 23.1814 2.66699 16.0001C2.66699 8.63608 8.63632 2.66675 16.0003 2.66675C23.3643 2.66675 29.3337 8.63608 29.3337 16.0001C29.3337 23.3641 23.3643 29.3334 16.0003 29.3334C15.9394 29.3338 15.8785 29.3338 15.8177 29.3334C15.697 29.3334 15.5763 29.3294 15.4563 29.3228ZM7.44432 24.4134C7.34463 24.1271 7.3107 23.8221 7.34505 23.5209C7.37939 23.2197 7.48113 22.9301 7.64271 22.6736C7.80429 22.4171 8.02157 22.2003 8.27841 22.0393C8.53525 21.8782 8.82506 21.7771 9.12632 21.7434C14.3237 21.1681 17.709 21.2201 22.881 21.7554C23.1827 21.7868 23.4732 21.8867 23.7304 22.0473C23.9877 22.208 24.2049 22.4253 24.3655 22.6826C24.5261 22.9398 24.6259 23.2304 24.6572 23.5321C24.6885 23.8338 24.6506 24.1386 24.5463 24.4234C26.7629 22.1807 28.0043 19.1534 28.0003 16.0001C28.0003 9.37275 22.6277 4.00008 16.0003 4.00008C9.37299 4.00008 4.00033 9.37275 4.00033 16.0001C4.00033 19.2774 5.31433 22.2481 7.44432 24.4134Z" fill="#DFDFDF"/>
                                      </svg>
                                </span>
                                   <span> {{ $result->name }}</span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="{{ route('professional.logout') }}">Logout</a></li>

                            </ul>
                          </div>

                    </div>
                </div>
            </div>
        </nav>
</header>
<section class="Appoint_sect thank_prof">
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                @if (session('error'))
                <div class="alert alert-danger" role="alert"> {{session('error')}} </div>
                @endif
                @if (session('success'))
                <div class="alert alert-success" role="alert"> {{session('success')}} </div>
                @endif
            </div>
            <div class="col-sm-7 mrg-auto">

                <img src="{{asset('assets/images/Thank-bx.gif')}}" alt="">
                <h3>Thank you for choosing<br>
                    RewPaz Solution Inc.</h3>
                    <p>You’ll get notified when, your profile will be approved.</p>
            </div>
        </div>
    </div>

</section>


    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('assets/js/jquery-2.1.0.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('assets/js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('assets/js/animate.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>

</body>

</html>