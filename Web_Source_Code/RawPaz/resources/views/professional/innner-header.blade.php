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
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/videopopup.css')}}" media="screen" />
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css">
    @livewireStyles()
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
                <a class="navbar-brand" href="{{url('professional/profile')}}">
                    <img src="{{asset('assets/images/logo.png')}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">

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
                                    @if (Auth::user()->profile_pic)
            <img src="{{ asset('/storage/app/upload/prof-doc/'.Auth::user()->profile_pic) }}" alt="" style="width:30px;height:30px">

              @else
              <img src="{{asset('assets/images/proff-2.png')}}" alt=""  style="width:30px;height:30px">
            @endif

                                    </span>
                                    <span> {{ Auth::user()->name }}</span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="{{ route('professional.profile') }}">Profile</a></li>
                                    <li><a class="dropdown-item" href="{{ route('professional.appointments') }}">Appointments</a></li>
                                    <li><a class="dropdown-item" href="{{route('professional.chatroom')}}">Chat room</a></li>
                                    <li><a class="dropdown-item" href="{{route('professional.tokens')}}">Tokens</a></li>
                                    <li><a class="dropdown-item" href="{{route('professional.earning')}}">Earnings</a></li>
                                    <li><a class="dropdown-item" href="{{route('professional.feedbacks')}}">Feedbacks</a></li>
                                    <li><a class="dropdown-item" href="{{ route('professional.notification') }}">Notifications</a></li>
                                    <li><a class="dropdown-item" href="{{ route('professional.logout') }}">Logout</a></li>
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
         <br>
          <div class="user_img">
            @if (Auth::user()->profile_pic)
            <img src="{{ asset('/storage/app/upload/prof-doc/'.Auth::user()->profile_pic) }}" alt="" style="width:71px;height:71px">

              @else
              <img src="{{asset('assets/images/proff-2.png')}}" alt=""  style="width:71px;height:71px">
            @endif
          </div>
          <h3>{{Auth::user()->name}}</h3>
        </div>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('professional.profile')}}">
              <span class="icon-bg">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                  <path d="M2.33398 10.4974C2.33398 9.87856 2.57982 9.28506 3.0174 8.84748C3.45499 8.4099 4.04848 8.16406 4.66732 8.16406H9.33398C9.95282 8.16406 10.5463 8.4099 10.9839 8.84748C11.4215 9.28506 11.6673 9.87856 11.6673 10.4974C11.6673 10.8068 11.5444 11.1036 11.3256 11.3224C11.1068 11.5411 10.8101 11.6641 10.5007 11.6641H3.50065C3.19123 11.6641 2.89449 11.5411 2.67569 11.3224C2.4569 11.1036 2.33398 10.8068 2.33398 10.4974Z" stroke="white" stroke-width="1.5" stroke-linejoin="round"/>
                  <path d="M7 5.83203C7.9665 5.83203 8.75 5.04853 8.75 4.08203C8.75 3.11553 7.9665 2.33203 7 2.33203C6.0335 2.33203 5.25 3.11553 5.25 4.08203C5.25 5.04853 6.0335 5.83203 7 5.83203Z" stroke="white" stroke-width="1.5"/>
                </svg>
              </span>
              <span class="menu-title">Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('professional.appointments')}}">
              <span class="icon-bg">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                  <g clip-path="url(#clip0_688_9422)">
                    <path d="M6.9987 5.2513C8.12628 5.2513 9.04036 4.33722 9.04036 3.20964C9.04036 2.08205 8.12628 1.16797 6.9987 1.16797C5.87112 1.16797 4.95703 2.08205 4.95703 3.20964C4.95703 4.33722 5.87112 5.2513 6.9987 5.2513Z" stroke="white" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M1.16602 11.9596C1.16602 9.38218 3.51656 7.29297 6.41602 7.29297" stroke="white" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9.91602 12.543C11.3658 12.543 12.541 11.3677 12.541 9.91797C12.541 8.46822 11.3658 7.29297 9.91602 7.29297C8.46627 7.29297 7.29102 8.46822 7.29102 9.91797C7.29102 11.3677 8.46627 12.543 9.91602 12.543Z" stroke="white" stroke-width="1.16667"/>
                    <path d="M9.625 9.04297V10.2096H10.7917" stroke="white" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
                  </g>
                  <defs>
                    <clipPath id="clip0_688_9422">
                      <rect width="14" height="14" fill="white"/>
                    </clipPath>
                  </defs>
                </svg>
              </span>
              <span class="menu-title">Appointments</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('professional.groupSession')}}">
              <span class="icon-bg">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                  <g clip-path="url(#clip0_688_9422)">
                    <path d="M6.9987 5.2513C8.12628 5.2513 9.04036 4.33722 9.04036 3.20964C9.04036 2.08205 8.12628 1.16797 6.9987 1.16797C5.87112 1.16797 4.95703 2.08205 4.95703 3.20964C4.95703 4.33722 5.87112 5.2513 6.9987 5.2513Z" stroke="white" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M1.16602 11.9596C1.16602 9.38218 3.51656 7.29297 6.41602 7.29297" stroke="white" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9.91602 12.543C11.3658 12.543 12.541 11.3677 12.541 9.91797C12.541 8.46822 11.3658 7.29297 9.91602 7.29297C8.46627 7.29297 7.29102 8.46822 7.29102 9.91797C7.29102 11.3677 8.46627 12.543 9.91602 12.543Z" stroke="white" stroke-width="1.16667"/>
                    <path d="M9.625 9.04297V10.2096H10.7917" stroke="white" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
                  </g>
                  <defs>
                    <clipPath id="clip0_688_9422">
                      <rect width="14" height="14" fill="white"/>
                    </clipPath>
                  </defs>
                </svg>
              </span>
              <span class="menu-title">Group Session</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('professional.grooupsessionlist') }}">
              <span class="icon-bg">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                  <path d="M12.0252 3.13672C12.9393 3.13672 13.6867 3.85028 13.7408 4.75077L13.744 4.85547V10.1711C13.744 11.0852 13.0304 11.8326 12.1299 11.8868L12.0252 11.8899H2.97656C2.06248 11.8899 1.31506 11.1763 1.26095 10.2758L1.25781 10.1711V4.85547C1.25781 3.94139 1.97138 3.19397 2.87186 3.13986L2.97656 3.13672H12.0252ZM12.8059 6.87047H2.19469L2.19531 10.1711C2.19531 10.5757 2.50273 10.9084 2.89668 10.9484L2.97656 10.9524H12.0252C12.4297 10.9524 12.7624 10.645 12.8024 10.251L12.8065 10.1711L12.8059 6.87047ZM11.409 9.06128C11.6679 9.06128 11.8777 9.27114 11.8777 9.53003C11.8777 9.76734 11.7014 9.96346 11.4726 9.9945L11.409 9.99878H9.84647C9.58759 9.99878 9.37772 9.78891 9.37772 9.53003C9.37772 9.29272 9.55407 9.09659 9.78287 9.06556L9.84647 9.06128H11.409ZM12.0252 4.07422H2.97656C2.57206 4.07422 2.23935 4.38164 2.19935 4.77559L2.19531 4.85547L2.19469 5.93297H12.8059L12.8065 4.85547C12.8065 4.45096 12.499 4.11826 12.1051 4.07825L12.0252 4.07422Z" fill="white"/>
                </svg>
              </span>
              <span class="menu-title">Group Session Status</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('professional.chatroom')}}">
              <span class="icon-bg">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                  <path d="M2.91602 10.5V12.6968L3.79977 12.1666L6.5776 10.5H9.33268C9.9761 10.5 10.4993 9.97675 10.4993 9.33333V4.66667C10.4993 4.02325 9.9761 3.5 9.33268 3.5H2.33268C1.68927 3.5 1.16602 4.02325 1.16602 4.66667V9.33333C1.16602 9.97675 1.68927 10.5 2.33268 10.5H2.91602ZM2.33268 4.66667H9.33268V9.33333H6.25443L4.08268 10.6365V9.33333H2.33268V4.66667Z" fill="white"/>
                  <path d="M11.6667 1.16797H4.66667C4.02325 1.16797 3.5 1.69122 3.5 2.33464H10.5C11.1434 2.33464 11.6667 2.85789 11.6667 3.5013V8.16797C12.3101 8.16797 12.8333 7.64472 12.8333 7.0013V2.33464C12.8333 1.69122 12.3101 1.16797 11.6667 1.16797Z" fill="white"/>
                </svg>
              </span>
              <span class="menu-title"> Chat Room</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('professional.tokens') }}">
              <span class="icon-bg">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                  <path d="M12.0252 3.13672C12.9393 3.13672 13.6867 3.85028 13.7408 4.75077L13.744 4.85547V10.1711C13.744 11.0852 13.0304 11.8326 12.1299 11.8868L12.0252 11.8899H2.97656C2.06248 11.8899 1.31506 11.1763 1.26095 10.2758L1.25781 10.1711V4.85547C1.25781 3.94139 1.97138 3.19397 2.87186 3.13986L2.97656 3.13672H12.0252ZM12.8059 6.87047H2.19469L2.19531 10.1711C2.19531 10.5757 2.50273 10.9084 2.89668 10.9484L2.97656 10.9524H12.0252C12.4297 10.9524 12.7624 10.645 12.8024 10.251L12.8065 10.1711L12.8059 6.87047ZM11.409 9.06128C11.6679 9.06128 11.8777 9.27114 11.8777 9.53003C11.8777 9.76734 11.7014 9.96346 11.4726 9.9945L11.409 9.99878H9.84647C9.58759 9.99878 9.37772 9.78891 9.37772 9.53003C9.37772 9.29272 9.55407 9.09659 9.78287 9.06556L9.84647 9.06128H11.409ZM12.0252 4.07422H2.97656C2.57206 4.07422 2.23935 4.38164 2.19935 4.77559L2.19531 4.85547L2.19469 5.93297H12.8059L12.8065 4.85547C12.8065 4.45096 12.499 4.11826 12.1051 4.07825L12.0252 4.07422Z" fill="white"/>
                </svg>
              </span>
              <span class="menu-title">Tokens</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('professional.earning') }}">
              <span class="icon-bg">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                  <path d="M12.0252 3.13672C12.9393 3.13672 13.6867 3.85028 13.7408 4.75077L13.744 4.85547V10.1711C13.744 11.0852 13.0304 11.8326 12.1299 11.8868L12.0252 11.8899H2.97656C2.06248 11.8899 1.31506 11.1763 1.26095 10.2758L1.25781 10.1711V4.85547C1.25781 3.94139 1.97138 3.19397 2.87186 3.13986L2.97656 3.13672H12.0252ZM12.8059 6.87047H2.19469L2.19531 10.1711C2.19531 10.5757 2.50273 10.9084 2.89668 10.9484L2.97656 10.9524H12.0252C12.4297 10.9524 12.7624 10.645 12.8024 10.251L12.8065 10.1711L12.8059 6.87047ZM11.409 9.06128C11.6679 9.06128 11.8777 9.27114 11.8777 9.53003C11.8777 9.76734 11.7014 9.96346 11.4726 9.9945L11.409 9.99878H9.84647C9.58759 9.99878 9.37772 9.78891 9.37772 9.53003C9.37772 9.29272 9.55407 9.09659 9.78287 9.06556L9.84647 9.06128H11.409ZM12.0252 4.07422H2.97656C2.57206 4.07422 2.23935 4.38164 2.19935 4.77559L2.19531 4.85547L2.19469 5.93297H12.8059L12.8065 4.85547C12.8065 4.45096 12.499 4.11826 12.1051 4.07825L12.0252 4.07422Z" fill="white"/>
                </svg>
              </span>
              <span class="menu-title">Earnings</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('professional.feedbacks') }}">
              <span class="icon-bg">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                  <path d="M12.0252 3.13672C12.9393 3.13672 13.6867 3.85028 13.7408 4.75077L13.744 4.85547V10.1711C13.744 11.0852 13.0304 11.8326 12.1299 11.8868L12.0252 11.8899H2.97656C2.06248 11.8899 1.31506 11.1763 1.26095 10.2758L1.25781 10.1711V4.85547C1.25781 3.94139 1.97138 3.19397 2.87186 3.13986L2.97656 3.13672H12.0252ZM12.8059 6.87047H2.19469L2.19531 10.1711C2.19531 10.5757 2.50273 10.9084 2.89668 10.9484L2.97656 10.9524H12.0252C12.4297 10.9524 12.7624 10.645 12.8024 10.251L12.8065 10.1711L12.8059 6.87047ZM11.409 9.06128C11.6679 9.06128 11.8777 9.27114 11.8777 9.53003C11.8777 9.76734 11.7014 9.96346 11.4726 9.9945L11.409 9.99878H9.84647C9.58759 9.99878 9.37772 9.78891 9.37772 9.53003C9.37772 9.29272 9.55407 9.09659 9.78287 9.06556L9.84647 9.06128H11.409ZM12.0252 4.07422H2.97656C2.57206 4.07422 2.23935 4.38164 2.19935 4.77559L2.19531 4.85547L2.19469 5.93297H12.8059L12.8065 4.85547C12.8065 4.45096 12.499 4.11826 12.1051 4.07825L12.0252 4.07422Z" fill="white"/>
                </svg>
              </span>
              <span class="menu-title">Feedbacks</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('professional.notification') }}">
              <span class="icon-bg">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                  <path d="M3.125 11.875C2.94792 11.875 2.79938 11.815 2.67938 11.695C2.55938 11.575 2.49959 11.4267 2.5 11.25C2.5 11.0729 2.56 10.9244 2.68 10.8044C2.8 10.6844 2.94834 10.6246 3.125 10.625H3.75V6.25C3.75 5.38542 4.01042 4.61708 4.53125 3.945C5.05209 3.27292 5.72917 2.83292 6.5625 2.625V2.1875C6.5625 1.92708 6.65375 1.70563 6.83625 1.52313C7.01875 1.34063 7.24 1.24958 7.5 1.25C7.76042 1.25 7.98188 1.34125 8.16438 1.52375C8.34688 1.70625 8.43792 1.9275 8.4375 2.1875V2.625C9.27084 2.83333 9.94792 3.27354 10.4688 3.94563C10.9896 4.61771 11.25 5.38583 11.25 6.25V10.625H11.875C12.0521 10.625 12.2006 10.685 12.3206 10.805C12.4406 10.925 12.5004 11.0733 12.5 11.25C12.5 11.4271 12.44 11.5756 12.32 11.6956C12.2 11.8156 12.0517 11.8754 11.875 11.875H3.125ZM7.5 13.75C7.15625 13.75 6.86188 13.6275 6.61688 13.3825C6.37188 13.1375 6.24959 12.8433 6.25 12.5H8.75C8.75 12.8438 8.6275 13.1381 8.3825 13.3831C8.1375 13.6281 7.84334 13.7504 7.5 13.75ZM5 10.625H10V6.25C10 5.5625 9.75521 4.97396 9.26563 4.48438C8.77604 3.99479 8.1875 3.75 7.5 3.75C6.8125 3.75 6.22396 3.99479 5.73438 4.48438C5.24479 4.97396 5 5.5625 5 6.25V10.625Z" fill="#5793C9"/>
                </svg>
              </span>
              <span class="menu-title"> Notification</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
<div class="main-panel">