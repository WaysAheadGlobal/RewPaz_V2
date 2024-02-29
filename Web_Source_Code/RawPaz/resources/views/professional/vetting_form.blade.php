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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/videopopup.css')}}" media="screen" />
      <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
      <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
      <link rel="stylesheet" href="https://resources/demos/style.css">
      <!-- Google tag (gtag.js) -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-NPE02SHZTH"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());

         gtag('config', 'G-NPE02SHZTH');
      </script>
      <style>
         #ui-datepicker-div{
         z-index: 2 !important;
         }
         .text-danger{
         font-size: 13px;
         }
      </style>
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
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                           data-bs-toggle="dropdown" aria-expanded="false">
                        <span>
                        <img src="{{asset('assets/images/proff-2.png')}}">
                        </span>
                        <span> {{ $result->name }}</span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                           <!-- <li><a class="dropdown-item" href="#">Profile</a></li>
                              <li><a class="dropdown-item" href="#">Appointments</a></li>
                              <li><a class="dropdown-item" href="#">Chat room</a></li>
                              <li><a class="dropdown-item" href="#">Earnings</a></li>
                              <li><a class="dropdown-item" href="#">Notifications</a></li> -->
                           <li><a class="dropdown-item" href="{{ route('professional.logout') }}">Logout</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </nav>
      </header>
      <section class="banner_vetting">
         <img src="{{asset('assets/images/banner_vett.png')}}" alt="">
         <div class="cont_banner">
            <h3 class="text-center">Vetting Form</h3>
            <p class="text-center">Please provide the following information</p>
         </div>
      </section>
      <section class="About_vetting">
         <div class="container">
            <form action="{{route('professional.vetting')}}" method="post" enctype="multipart/form-data">
               @csrf
               <input type="hidden" name="uid" value="{{ $result->user_id }}">
               <input type="hidden" name="id" value="{{ $result->id }}">
               <div class="row">
                  <div class="col-sm-12">
                     <h3>Let us know about yourself</h3>
                  </div>
                  <div class="col-sm-12">
                     @if (session('error'))
                     <!-- <div class="alert alert-danger" role="alert"> {{session('error')}} </div> -->
                     @endif
                     @if (session('success'))
                     <!-- <div class="alert alert-success" role="alert"> {{session('success')}} </div> -->
                     @endif
                  </div>
                  <div class="col-sm-12">
                     <div class="pof_edit_sect">
                        <div class="user_pof_edit">
                           <div class="user_bx">
                              <label for="uploadfile">
                                 <img src="{{asset('assets/images/proff-1.png')}}" alt="" id="preview" >
                                 <input type="file" id="uploadfile" name="profile_pic" accept="image/*" onchange="previewImage(event)">
                                 <div class="icon_bx">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27"
                                       viewBox="0 0 27 27" fill="none">
                                       <path
                                          d="M15.9844 5.0625H10.5711L7.86448 8.22026H4.61649C4.04222 8.22026 3.49146 8.44206 3.08538 8.83685C2.6793 9.23165 2.45117 9.76711 2.45117 10.3254V19.7987C2.45117 20.3571 2.6793 20.8925 3.08538 21.2873C3.49146 21.6821 4.04222 21.9039 4.61649 21.9039H21.9391C22.5134 21.9039 23.0641 21.6821 23.4702 21.2873C23.8763 20.8925 24.1044 20.3571 24.1044 19.7987V10.3254C24.1044 9.76711 23.8763 9.23165 23.4702 8.83685C23.0641 8.44206 22.5134 8.22026 21.9391 8.22026H18.6911L15.9844 5.0625Z"
                                          stroke="white" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                       <path
                                          d="M13.2783 17.6944C15.0721 17.6944 16.5262 16.2807 16.5262 14.5367C16.5262 12.7927 15.0721 11.3789 13.2783 11.3789C11.4844 11.3789 10.0303 12.7927 10.0303 14.5367C10.0303 16.2807 11.4844 17.6944 13.2783 17.6944Z"
                                          stroke="white" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                    </svg>
                                 </div>
                              </label>
                              <script type="text/javascript">
                                 function previewImage(event) {
                                     var input = event.target;
                                     var image = document.getElementById('preview');
                                     if (input.files && input.files[0]) {
                                         var reader = new FileReader();
                                         reader.onload = function(e) {
                                         image.src = e.target.result;
                                         }
                                         reader.readAsDataURL(input.files[0]);
                                     }
                                 }
                              </script>
                           </div>
                           <!-- <style>
                              .bio_sect .box_txt {
                                  padding: 0px;
                              }
                              </style> -->
                           <div class="bio_sect" >
                              <label for="Bio">Bio</label>
                              <!-- <div class="box_txt" >
                                 <textarea name="bio" rows="6" cols="" style=" padding:5px 8px;width: 100%;height:inherit;">
                                 </textarea>
                                 </div> -->
                              <style>
                                 textarea::placeholder {
                                 color: #cfcfcf;
                                 }
                              </style>
                              <div class="col-md-12 col-sm-12">
                                 <textarea class="box_txt" name="bio" type="text" placeholder="I'm a devoted meditator with a profound energy for care and prosperity. With long stretches of individual practice and a deep faith in the extraordinary force of contemplation, I focused on offering these procedures to other people. Through a quiet and caring methodology, I guide people in developing inward harmony, lucidity, and strength."></textarea>
                              </div>
                              <div>
                                 <button class="edit_bx">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="24" viewBox="0 0 21 24" fill="none">
                                       <path
                                          d="M17.462 3.84103C17.2364 3.5744 16.9685 3.36288 16.6737 3.21858C16.3789 3.07427 16.0629 3 15.7437 3C15.4246 3 15.1086 3.07427 14.8138 3.21858C14.519 3.36288 14.2511 3.5744 14.0254 3.84103L4.63735 14.9334C4.40784 15.2048 4.23486 15.5355 4.13208 15.8994L2.97174 20.0139C2.93467 20.1459 2.92941 20.2875 2.95654 20.4228C2.98367 20.5582 3.04212 20.682 3.12537 20.7803C3.20862 20.8787 3.31337 20.9478 3.42793 20.9798C3.54249 21.0119 3.66234 21.0056 3.77407 20.9619L7.25637 19.5909C7.56437 19.4694 7.84426 19.2651 8.07394 18.9939L15.6339 10.0615L15.9678 10.456C16.1461 10.6669 16.2463 10.9528 16.2463 11.251C16.2463 11.5491 16.1461 11.835 15.9678 12.0459L14.5498 13.7199C14.4306 13.8608 14.3636 14.0518 14.3636 14.2509C14.3636 14.4501 14.4306 14.6411 14.5498 14.7819C14.6689 14.9227 14.8306 15.0019 14.9992 15.0019C15.1677 15.0019 15.3294 14.9227 15.4486 14.7819L16.8654 13.1064C17.2817 12.6142 17.5155 11.9468 17.5155 11.251C17.5155 10.5551 17.2817 9.8877 16.8654 9.39548L16.5315 9.00098L17.462 7.90299C17.6879 7.63636 17.8671 7.31976 17.9893 6.97127C18.1116 6.62278 18.1745 6.24925 18.1745 5.87201C18.1745 5.49478 18.1116 5.12124 17.9893 4.77275C17.8671 4.42427 17.6879 4.10766 17.462 3.84103ZM15.2048 8.44899C15.1915 8.46328 15.1788 8.4783 15.1667 8.49399L7.17639 17.9334C7.08611 18.0397 6.97616 18.1198 6.8552 18.1674L4.57768 19.0644L5.33685 16.3749C5.37696 16.2315 5.44476 16.101 5.5349 15.9939L14.923 4.90302C15.0308 4.77567 15.1587 4.67466 15.2996 4.60574C15.4404 4.53682 15.5913 4.50134 15.7437 4.50134C15.8962 4.50134 16.0471 4.53682 16.1879 4.60574C16.3287 4.67466 16.4567 4.77567 16.5645 4.90302C16.6723 5.03037 16.7578 5.18155 16.8161 5.34794C16.8744 5.51433 16.9044 5.69267 16.9044 5.87276C16.9044 6.05286 16.8744 6.23119 16.8161 6.39758C16.7578 6.56397 16.6723 6.71515 16.5645 6.8425L15.2048 8.44899Z"
                                          fill="#515151" />
                                    </svg>
                                 </button>
                              </div>
                           </div>
                        </div>
                        <div class="video_data">
                           <div class="img_bx">
                              <div class="video_bx" style="margin-top: 12px;">
                                 <div class="image">
                                    <img src="{{asset('assets/images/proff-1.png')}}" alt="">
                                    <div class="iconfont-wrapper" id="video1">
                                       <span class="play-btn"></span>
                                    </div>
                                 </div>
                                 <div class="vidBox" id="vidBox"
                                    style="display: none; z-index: 100001; position: fixed; inset: 0px; text-align: center; background: none;">
                                    <div class="videCont" id="videCont" style="z-index: 100002;">
                                       <video autoplay="" id="v1" loop="" controls="controls">
                                          <source
                                             src="https://www.canva.com/design/DAFsq5otjoM/-RH5J8-R2K8wfrzfnzZSFg/watch"
                                             type="video/webm">
                                          <source
                                             src="https://www.canva.com/design/DAFsq5otjoM/-RH5J8-R2K8wfrzfnzZSFg/watch">
                                       </video>
                                    </div>
                                    <div class="opct" style="background: rgb(23, 33, 42);"></div>
                                    <div class="closer_videopopup">⊗</div>
                                    <div class="opct" style="background: rgb(23, 33, 42);"></div>
                                    <div class="closer_videopopup">⊗</div>
                                 </div>
                              </div>
                           </div>
                           <p>Add Video Introduction (add one of the
                              following format mp4, avi, mov)
                           </p>
                           <div class="btn_grp">
                              <a class="btn uplo_video" href="javascript:void(0)">
                                 <!-- <input type="file" name="" id="Repla_video" class="upload_video"> -->
                                 <label for="Repla_video">Replace</label>
                              </a>
                              <a class="btn" href="javascript:void(0)">Update</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="frm_grp">
                        <label for="">Full Name*</label>
                        <input type="text" placeholder="Leslie" class="form-control" value="{{$result->name}}" readonly>
                        <span class="icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                              fill="none">
                              <path
                                 d="M20.2018 3.84103C19.9359 3.5744 19.6202 3.36288 19.2728 3.21858C18.9254 3.07427 18.553 3 18.1769 3C17.8009 3 17.4285 3.07427 17.081 3.21858C16.7336 3.36288 16.4179 3.5744 16.152 3.84103L5.08875 14.9334C4.81829 15.2048 4.61445 15.5355 4.49332 15.8994L3.12594 20.0139C3.08226 20.1459 3.07605 20.2875 3.10802 20.4228C3.14 20.5582 3.20888 20.682 3.30698 20.7803C3.40508 20.8787 3.52853 20.9478 3.66353 20.9798C3.79853 21.0119 3.93976 21.0056 4.07144 20.9619L8.1751 19.5909C8.53806 19.4694 8.86789 19.2651 9.13855 18.9939L18.0475 10.0615L18.441 10.456C18.6511 10.6669 18.7691 10.9528 18.7691 11.251C18.7691 11.5491 18.6511 11.835 18.441 12.0459L16.7699 13.7199C16.6294 13.8608 16.5505 14.0518 16.5505 14.2509C16.5505 14.4501 16.6294 14.6411 16.7699 14.7819C16.9104 14.9227 17.1009 15.0019 17.2995 15.0019C17.4981 15.0019 17.6886 14.9227 17.8291 14.7819L19.4987 13.1064C19.9893 12.6142 20.2648 11.9468 20.2648 11.251C20.2648 10.5551 19.9893 9.8877 19.4987 9.39548L19.1052 9.00098L20.2018 7.90299C20.468 7.63636 20.6791 7.31976 20.8232 6.97127C20.9673 6.62278 21.0414 6.24925 21.0414 5.87201C21.0414 5.49478 20.9673 5.12124 20.8232 4.77275C20.6791 4.42427 20.468 4.10766 20.2018 3.84103ZM17.5419 8.44899C17.5262 8.46328 17.5112 8.4783 17.497 8.49399L8.08085 17.9334C7.97447 18.0397 7.84489 18.1198 7.70235 18.1674L5.01844 19.0644L5.91307 16.3749C5.96033 16.2315 6.04023 16.101 6.14646 15.9939L17.2097 4.90302C17.3367 4.77567 17.4875 4.67466 17.6535 4.60574C17.8194 4.53682 17.9973 4.50134 18.1769 4.50134C18.3565 4.50134 18.5344 4.53682 18.7004 4.60574C18.8663 4.67466 19.0171 4.77567 19.1441 4.90302C19.2711 5.03037 19.3719 5.18155 19.4406 5.34794C19.5094 5.51433 19.5447 5.69267 19.5447 5.87276C19.5447 6.05286 19.5094 6.23119 19.4406 6.39758C19.3719 6.56397 19.2711 6.71515 19.1441 6.8425L17.5419 8.44899Z"
                                 fill="#515151" />
                           </svg>
                        </span>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="frm_grp">
                        <label for="">Email id*</label>
                        <input type="text" placeholder="leslie.meditation@gmail.com" class="form-control" value="{{$result->email}}" readonly>
                        <span class="icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none">
                              <g clip-path="url(#clip0_736_4854)">
                                 <path
                                    d="M21.3335 4H2.66683C2.31321 4 1.97407 4.14048 1.72402 4.39052C1.47397 4.64057 1.3335 4.97971 1.3335 5.33333V18.6667C1.3335 19.0203 1.47397 19.3594 1.72402 19.6095C1.97407 19.8595 2.31321 20 2.66683 20H21.3335C21.6871 20 22.0263 19.8595 22.2763 19.6095C22.5264 19.3594 22.6668 19.0203 22.6668 18.6667V5.33333C22.6668 4.97971 22.5264 4.64057 22.2763 4.39052C22.0263 4.14048 21.6871 4 21.3335 4ZM20.3068 18.6667H3.7735L8.44016 13.84L7.48016 12.9133L2.66683 17.8933V6.34667L10.9535 14.5933C11.2033 14.8417 11.5412 14.9811 11.8935 14.9811C12.2457 14.9811 12.5837 14.8417 12.8335 14.5933L21.3335 6.14V17.8067L16.4268 12.9L15.4868 13.84L20.3068 18.6667ZM3.54016 5.33333H20.2535L11.8935 13.6467L3.54016 5.33333Z"
                                    fill="#515151" />
                              </g>
                              <defs>
                                 <clipPath id="clip0_736_4854">
                                    <rect width="24" height="24" fill="white" />
                                 </clipPath>
                              </defs>
                           </svg>
                        </span>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="frm_grp">
                        <label for="">Phone*</label>
                        <input type="text" name="phone" placeholder="+18885466734" maxlength="10" class="form-control"  value="{{$result->phone}}">
                        <span class="icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                              fill="none">
                              <path
                                 d="M21.999 4.19948L21.9668 4.17942L17.8972 2.17969L13.5048 8.02111L15.5257 10.7088C15.4652 11.7224 15.0342 12.6787 14.3144 13.3966C13.5945 14.1146 12.6357 14.5444 11.6195 14.6048L8.92491 12.5891L3.06836 16.9701L5.0566 20.9952L5.07334 21.0292L5.0935 21.0613C5.1996 21.2318 5.34769 21.3724 5.52368 21.4697C5.69967 21.567 5.89769 21.6177 6.0989 21.6171H7.14899C9.1723 21.6171 11.1758 21.2196 13.0451 20.4473C14.9144 19.675 16.6129 18.5431 18.0436 17.1161C19.4743 15.6891 20.6091 13.995 21.3834 12.1305C22.1577 10.2661 22.5562 8.26777 22.5562 6.2497V5.20228C22.5569 5.0016 22.506 4.80409 22.4085 4.62856C22.3109 4.45303 22.17 4.30531 21.999 4.19948ZM21.0523 6.2497C21.0523 13.8962 14.8153 20.1171 7.14899 20.1171H6.29929L4.969 17.4235L8.92519 14.464L11.1278 16.1116H11.3784C12.8786 16.11 14.3169 15.5148 15.3777 14.4568C16.4385 13.3987 17.0351 11.9642 17.0368 10.4679V10.2179L15.3849 8.02106L18.3518 4.07536L21.0523 5.40244V6.2497Z"
                                 fill="#515151" />
                           </svg>
                        </span>
                     </div>
                     @error('phone')
                     <small class="text-danger">{{$message}}</small>
                     @enderror
                  </div>
                  <!-- <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="frm_grp">
                         <label for="">Last name*</label>
                         <input type="text" placeholder="leslie.meditation@gmail.com" class="form-control">
                         <span class="icon">
                             <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                 fill="none">
                                 <path
                                     d="M21.0915 3.84103C20.8242 3.5744 20.5069 3.36288 20.1576 3.21858C19.8084 3.07427 19.4341 3 19.0561 3C18.6781 3 18.3037 3.07427 17.9545 3.21858C17.6053 3.36288 17.2879 3.5744 17.0207 3.84103L5.89992 14.9334C5.62806 15.2048 5.42316 15.5355 5.30141 15.8994L3.92692 20.0139C3.88301 20.1459 3.87677 20.2875 3.90891 20.4228C3.94105 20.5582 4.01029 20.682 4.1089 20.7803C4.20751 20.8787 4.3316 20.9478 4.4673 20.9798C4.603 21.0119 4.74497 21.0056 4.87733 20.9619L9.0023 19.5909C9.36714 19.4694 9.69869 19.2651 9.97076 18.9939L18.926 10.0615L19.3215 10.456C19.5327 10.6669 19.6513 10.9528 19.6513 11.251C19.6513 11.5491 19.5327 11.835 19.3215 12.0459L17.6417 13.7199C17.5005 13.8608 17.4212 14.0518 17.4212 14.2509C17.4212 14.4501 17.5005 14.6411 17.6417 14.7819C17.7829 14.9227 17.9744 15.0019 18.1741 15.0019C18.3738 15.0019 18.5652 14.9227 18.7064 14.7819L20.3847 13.1064C20.8778 12.6142 21.1548 11.9468 21.1548 11.251C21.1548 10.5551 20.8778 9.8877 20.3847 9.39548L19.9892 9.00098L21.0915 7.90299C21.359 7.63636 21.5713 7.31976 21.7161 6.97127C21.8609 6.62278 21.9354 6.24925 21.9354 5.87201C21.9354 5.49478 21.8609 5.12124 21.7161 4.77275C21.5713 4.42427 21.359 4.10766 21.0915 3.84103ZM18.4177 8.44899C18.402 8.46328 18.3869 8.4783 18.3726 8.49399L8.90756 17.9334C8.80063 18.0397 8.67038 18.1198 8.52709 18.1674L5.82924 19.0644L6.72853 16.3749C6.77603 16.2315 6.85635 16.101 6.96312 15.9939L18.0839 4.90302C18.2115 4.77567 18.3631 4.67466 18.5299 4.60574C18.6967 4.53682 18.8755 4.50134 19.0561 4.50134C19.2366 4.50134 19.4154 4.53682 19.5822 4.60574C19.749 4.67466 19.9006 4.77567 20.0283 4.90302C20.156 5.03037 20.2572 5.18155 20.3263 5.34794C20.3954 5.51433 20.431 5.69267 20.431 5.87276C20.431 6.05286 20.3954 6.23119 20.3263 6.39758C20.2572 6.56397 20.156 6.71515 20.0283 6.8425L18.4177 8.44899Z"
                                     fill="#515151" />
                             </svg>
                         </span>
                     </div>

                     </div> -->
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="frm_grp select_icon">
                        <label for="">Gender*</label>
                        <select class="form-control" name="gender">
                           <option value="">--please select--</option>
                           <option value="Male" {{ ( 'Male' == old('gender')) ? 'selected' : '' }}>Male</option>
                           <option value="Female" {{ ( 'Female' == old('gender')) ? 'selected' : '' }}>Female</option>
                           <option value="Others" {{ ( 'Others' == old('gender')) ? 'selected' : '' }}>Others</option>
                        </select>
                     </div>
                     @error('gender')
                     <small class="text-danger">{{$message}}</small>
                     @enderror
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="frm_grp">
                        <label for="">DOB*</label>
                        <input type="text" placeholder="10/06/1990" class="form-control" id="datepicker" name="dob"  value="{{old('dob')}}">
                        <span class="icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                              fill="none">
                              <path d="M22.4492 4H20.2769V5.33333H22.2821V20H3.56695V5.33333H5.57214V4H3.39985C3.2436 4.0026 3.0894 4.03588 2.94605 4.09794C2.8027 4.15999 2.67301 4.24961 2.56439 4.36166C2.45577 4.47371 2.37035 4.60601 2.313 4.751C2.25565 4.89599 2.2275 5.05083 2.23015 5.20667V20.1267C2.2275 20.2825 2.25565 20.4373 2.313 20.5823C2.37035 20.7273 2.45577 20.8596 2.56439 20.9717C2.67301 21.0837 2.8027 21.1733 2.94605 21.2354C3.0894 21.2974 3.2436 21.3307 3.39985 21.3333H22.4492C22.6054 21.3307 22.7596 21.2974 22.903 21.2354C23.0463 21.1733 23.176 21.0837 23.2847 20.9717C23.3933 20.8596 23.4787 20.7273 23.5361 20.5823C23.5934 20.4373 23.6216 20.2825 23.6189 20.1267V5.20667C23.6216 5.05083 23.5934 4.89599 23.5361 4.751C23.4787 4.60601 23.3933 4.47371 23.2847 4.36166C23.176 4.24961 23.0463 4.15999 22.903 4.09794C22.7596 4.03588 22.6054 4.0026 22.4492 4Z"
                                 fill="#515151" />
                              <path d="M6.24072 9.33203H7.57752V10.6654H6.24072V9.33203Z" fill="#515151" />
                              <path d="M10.2515 9.33203H11.5883V10.6654H10.2515V9.33203Z" fill="#515151" />
                              <path d="M14.2617 9.33203H15.5985V10.6654H14.2617V9.33203Z" fill="#515151" />
                              <path d="M18.272 9.33203H19.6088V10.6654H18.272V9.33203Z" fill="#515151" />
                              <path d="M6.24072 12.668H7.57752V14.0013H6.24072V12.668Z" fill="#515151" />
                              <path d="M10.2515 12.668H11.5883V14.0013H10.2515V12.668Z" fill="#515151" />
                              <path d="M14.2617 12.668H15.5985V14.0013H14.2617V12.668Z" fill="#515151" />
                              <path d="M18.272 12.668H19.6088V14.0013H18.272V12.668Z" fill="#515151" />
                              <path d="M6.24072 16H7.57752V17.3333H6.24072V16Z" fill="#515151" />
                              <path d="M10.251 16H11.5878V17.3333H10.251V16Z" fill="#515151" />
                              <path d="M14.2617 16H15.5985V17.3333H14.2617V16Z" fill="#515151" />
                              <path d="M18.272 16H19.6088V17.3333H18.272V16Z" fill="#515151" />
                              <path d="M7.57758 6.66536C7.75485 6.66536 7.92486 6.59513 8.05021 6.4701C8.17556 6.34508 8.24598 6.17551 8.24598 5.9987V1.9987C8.24598 1.82189 8.17556 1.65232 8.05021 1.52729C7.92486 1.40227 7.75485 1.33203 7.57758 1.33203C7.40031 1.33203 7.2303 1.40227 7.10495 1.52729C6.9796 1.65232 6.90918 1.82189 6.90918 1.9987V5.9987C6.90918 6.17551 6.9796 6.34508 7.10495 6.4701C7.2303 6.59513 7.40031 6.66536 7.57758 6.66536Z"
                                 fill="#515151" />
                              <path d="M18.2719 6.66536C18.4492 6.66536 18.6192 6.59513 18.7445 6.4701C18.8699 6.34508 18.9403 6.17551 18.9403 5.9987V1.9987C18.9403 1.82189 18.8699 1.65232 18.7445 1.52729C18.6192 1.40227 18.4492 1.33203 18.2719 1.33203C18.0946 1.33203 17.9246 1.40227 17.7993 1.52729C17.6739 1.65232 17.6035 1.82189 17.6035 1.9987V5.9987C17.6035 6.17551 17.6739 6.34508 17.7993 6.4701C17.9246 6.59513 18.0946 6.66536 18.2719 6.66536Z"
                                 fill="#515151" />
                              <path d="M9.58252 4H16.2665V5.33333H9.58252V4Z" fill="#515151" />
                           </svg>
                        </span>
                     </div>
                     @error('dob')
                     <small class="text-danger">{{$message}}</small>
                     @enderror
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="frm_grp">
                        <label for="">Enter Address*</label>
                        <input type="text" placeholder="15 Rockcliffe Blvd" class="form-control" name="address"  value="{{old('address')}}">
                        <span class="icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                              fill="none">
                              <path d="M13.8318 17.4262C13.665 17.8359 13.2334 18.0666 12.8018 17.983C12.3702 17.8964 12.0336 17.5185 12.0336 17.0772V12.0002H6.96965C6.55561 12.0002 6.17697 11.6886 6.09209 11.2559C6.00721 10.8232 6.23969 10.3905 6.64682 10.2232L16.7752 6.0687C17.1176 5.92793 17.5118 6.00755 17.7736 6.27034C18.0355 6.53342 18.116 6.92862 17.9751 7.27276L13.8318 17.4262Z"
                                 fill="#515151" />
                           </svg>
                        </span>
                     </div>
                     @error('address')
                     <small class="text-danger">{{$message}}</small>
                     @enderror
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="frm_grp select_icon">
                        <label for="">Province*</label>
                        <select id="" class="form-control" name="province">
                           <option value="">--please select--</option>
                           <option value="AB" {{ ( 'AB' == old('province')) ? 'selected' : '' }}>Alberta</option>
                           <option value="BC" {{ ( 'BC' == old('province')) ? 'selected' : '' }}>British Columbia</option>
                           <option value="MB" {{ ( 'MB' == old('province')) ? 'selected' : '' }}>Manitoba</option>
                           <option value="NB" {{ ( 'NB' == old('province')) ? 'selected' : '' }}>New Brunswick</option>
                           <option value="NL" {{ ( 'NL' == old('province')) ? 'selected' : '' }}>Newfoundland and Labrador</option>
                           <option value="NS" {{ ( 'NS' == old('province')) ? 'selected' : '' }}>Nova Scotia</option>
                           <option value="NT" {{ ( 'NT' == old('province')) ? 'selected' : '' }}>Northwest Territories</option>
                           <option value="NU" {{ ( 'NU' == old('province')) ? 'selected' : '' }}>Nunavut</option>
                           <option value="ON" {{ ( 'ON' == old('province')) ? 'selected' : '' }}>Ontario</option>
                           <option value="PE" {{ ( 'PE' == old('province')) ? 'selected' : '' }}>Prince Edward Island</option>
                           <option value="QC" {{ ( 'QC' == old('province')) ? 'selected' : '' }}>Quebec</option>
                           <option value="SK" {{ ( 'SK' == old('province')) ? 'selected' : '' }}>Saskatchewan</option>
                           <option value="YT" {{ ( 'YT' == old('province')) ? 'selected' : '' }}>Yukon</option>
                        </select>
                        <!-- <span class="icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                               fill="none">
                               <path
                                   d="M11.7258 1.99609C11.9262 1.99609 12.1185 2.07511 12.2602 2.21576C12.402 2.35642 12.4816 2.54718 12.4816 2.74609V4.00009H14.4973C15.4709 4.00009 16.261 4.78409 16.261 5.75009V11.0001H18.5286C19.5022 11.0001 20.2923 11.7841 20.2923 12.7501V20.2501C20.2923 20.7142 20.1065 21.1593 19.7758 21.4875C19.445 21.8157 18.9964 22.0001 18.5286 22.0001H4.92289C4.45512 22.0001 4.00652 21.8157 3.67576 21.4875C3.345 21.1593 3.15918 20.7142 3.15918 20.2501V11.8201C3.15918 11.2011 3.48874 10.6281 4.02592 10.3131L7.19051 8.45809V5.74909C7.19078 5.28514 7.37672 4.84028 7.70745 4.5123C8.03818 4.18433 8.48663 4.00009 8.95422 4.00009H10.9699V2.74609C10.9699 2.54718 11.0495 2.35642 11.1913 2.21576C11.333 2.07511 11.5253 1.99609 11.7258 1.99609ZM8.70226 8.01809C9.51861 8.13809 10.214 8.82409 10.214 9.75209V20.4991H13.2375V12.7491C13.2375 12.3283 13.3904 11.9216 13.668 11.6035C13.9456 11.2854 14.3295 11.0772 14.7493 11.0171V5.75009C14.7493 5.68379 14.7227 5.6202 14.6755 5.57332C14.6282 5.52643 14.5641 5.50009 14.4973 5.50009H8.95422C8.8874 5.50009 8.82331 5.52643 8.77606 5.57332C8.72881 5.6202 8.70226 5.68379 8.70226 5.75009V8.01909V8.01809ZM15.0012 12.4991C14.9344 12.4991 14.8703 12.5254 14.8231 12.5723C14.7758 12.6192 14.7493 12.6828 14.7493 12.7491V20.4991H18.5286C18.5955 20.4991 18.6595 20.4728 18.7068 20.4259C18.754 20.379 18.7806 20.3154 18.7806 20.2491V12.7491C18.7806 12.6828 18.754 12.6192 18.7068 12.5723C18.6595 12.5254 18.5955 12.4991 18.5286 12.4991H15.0012ZM8.32231 9.53709L4.79489 11.6051C4.75719 11.6272 4.72593 11.6586 4.70419 11.6963C4.68245 11.734 4.67099 11.7767 4.67093 11.8201V20.2501C4.67093 20.3871 4.78381 20.5001 4.92289 20.5001H8.70226V9.75109C8.7022 9.70704 8.69041 9.66379 8.66808 9.62571C8.64576 9.58764 8.61369 9.55609 8.57512 9.53427C8.53656 9.51244 8.49286 9.50112 8.44847 9.50144C8.40407 9.50176 8.36055 9.51372 8.32231 9.53609V9.53709Z"
                                   fill="#515151" />
                           </svg>
                           </span> -->
                     </div>
                     @error('province')
                     <small class="text-danger">{{$message}}</small>
                     @enderror
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="frm_grp">
                        <label for="">Zip Code*</label>
                        <input type="text" placeholder="M6N4P8" maxlength="6" class="form-control" name="zip_code" value="{{old('zip_code')}}">
                        <span class="icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="23" height="24" viewBox="0 0 23 24"
                              fill="none">
                              <path
                                 d="M11 1.99609C11.1989 1.99609 11.3897 2.07511 11.5303 2.21576C11.671 2.35642 11.75 2.54718 11.75 2.74609V4.00009H13.75C14.716 4.00009 15.5 4.78409 15.5 5.75009V11.0001H17.75C18.716 11.0001 19.5 11.7841 19.5 12.7501V20.2501C19.5 20.7142 19.3156 21.1593 18.9874 21.4875C18.6592 21.8157 18.2141 22.0001 17.75 22.0001H4.25C3.78587 22.0001 3.34075 21.8157 3.01256 21.4875C2.68437 21.1593 2.5 20.7142 2.5 20.2501V11.8201C2.5 11.2011 2.827 10.6281 3.36 10.3131L6.5 8.45809V5.74909C6.50027 5.28514 6.68476 4.84028 7.01292 4.5123C7.34108 4.18433 7.78604 4.00009 8.25 4.00009H10.25V2.74609C10.25 2.54718 10.329 2.35642 10.4697 2.21576C10.6103 2.07511 10.8011 1.99609 11 1.99609ZM8 8.01809C8.81 8.13809 9.5 8.82409 9.5 9.75209V20.4991H12.5V12.7491C12.5 12.3283 12.6517 11.9216 12.9271 11.6035C13.2026 11.2854 13.5835 11.0772 14 11.0171V5.75009C14 5.68379 13.9737 5.6202 13.9268 5.57332C13.8799 5.52643 13.8163 5.50009 13.75 5.50009H8.25C8.1837 5.50009 8.12011 5.52643 8.07322 5.57332C8.02634 5.6202 8 5.68379 8 5.75009V8.01909V8.01809ZM14.25 12.4991C14.1837 12.4991 14.1201 12.5254 14.0732 12.5723C14.0263 12.6192 14 12.6828 14 12.7491V20.4991H17.75C17.8163 20.4991 17.8799 20.4728 17.9268 20.4259C17.9737 20.379 18 20.3154 18 20.2491V12.7491C18 12.6828 17.9737 12.6192 17.9268 12.5723C17.8799 12.5254 17.8163 12.4991 17.75 12.4991H14.25ZM7.623 9.53709L4.123 11.6051C4.08559 11.6272 4.05457 11.6586 4.033 11.6963C4.01143 11.734 4.00006 11.7767 4 11.8201V20.2501C4 20.3871 4.112 20.5001 4.25 20.5001H8V9.75109C7.99994 9.70704 7.98824 9.66379 7.96609 9.62571C7.94394 9.58764 7.91212 9.55609 7.87385 9.53427C7.83558 9.51244 7.79223 9.50112 7.74818 9.50144C7.70413 9.50176 7.66094 9.51372 7.623 9.53609V9.53709Z"
                                 fill="#515151" />
                           </svg>
                        </span>
                     </div>
                     @error('zip_code')
                     <small class="text-danger">{{$message}}</small>
                     @enderror
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="frm_grp">
                        <label for="">Qualification*</label>
                        <input type="text" placeholder="Master of Arts (MA)" class="form-control" name="qualification" value="{{old('qualification')}}">
                        <span class="icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                              fill="none">
                              <g clip-path="url(#clip0_736_4929)">
                                 <path
                                    d="M12.0593 3.65625L11.7085 3.84375L1.60965 9.09375L0.32373 9.75L1.58646 10.383V16.7108C1.13912 16.9718 0.838397 17.4458 0.838397 18C0.838397 18.3978 0.996024 18.7794 1.2766 19.0607C1.55718 19.342 1.93772 19.5 2.33452 19.5C2.73132 19.5 3.11186 19.342 3.39244 19.0607C3.67302 18.7794 3.83065 18.3978 3.83065 18C3.83065 17.4465 3.52992 16.9718 3.08258 16.7108V11.1562L4.57871 11.9295V15.75C4.57871 16.0808 4.73056 16.38 4.90636 16.5705C5.08141 16.761 5.2946 16.875 5.51378 16.992C5.95514 17.2238 6.47878 17.388 7.12661 17.5312C8.42449 17.8215 10.154 18 12.0593 18C13.9646 18 15.6949 17.8215 16.992 17.5312C17.6406 17.388 18.1635 17.2238 18.6049 16.992C18.8241 16.875 19.0372 16.761 19.213 16.5705C19.4184 16.3463 19.5347 16.0544 19.5399 15.75V11.9295L22.509 10.4062L23.7942 9.75L22.509 9.09375L12.4102 3.84375L12.0593 3.65625ZM12.0593 5.34375L20.5222 9.75L19.1891 10.4295C19.0185 10.258 18.8212 10.1157 18.6049 10.008C18.1665 9.77625 17.6399 9.612 16.992 9.46875C15.6979 9.1785 13.9736 9 12.0593 9C10.145 9 8.4215 9.1785 7.12661 9.46875C6.47804 9.612 5.95215 9.77625 5.51378 10.008C5.29745 10.1157 5.1001 10.258 4.92955 10.4295L3.5965 9.75L12.0593 5.34375ZM12.0593 10.5C13.8853 10.5 15.5281 10.6672 16.6644 10.9222C17.2314 11.0475 17.687 11.1945 17.9271 11.3198C18.0027 11.361 18.0146 11.391 18.0438 11.4142V14.2733C17.7004 14.1484 17.349 14.0467 16.992 13.9688C15.6942 13.6785 13.9646 13.5 12.0593 13.5C10.154 13.5 8.42375 13.6785 7.12661 13.9688C6.72939 14.0565 6.38752 14.1593 6.07483 14.2733V11.415C6.10475 11.3918 6.11597 11.3625 6.19153 11.3212C6.43091 11.1953 6.88723 11.0483 7.45426 10.923C8.59131 10.6673 10.2333 10.5 12.0593 10.5ZM12.0593 15C13.8741 15 15.5251 15.1672 16.6644 15.4222C17.0174 15.4965 17.362 15.6064 17.693 15.75C17.362 15.8939 17.0174 16.004 16.6644 16.0785C15.5251 16.3335 13.8741 16.5 12.0593 16.5C10.2445 16.5 8.59356 16.3328 7.45426 16.0778C7.10128 16.0035 6.75667 15.8936 6.42567 15.75C6.75664 15.6061 7.10125 15.496 7.45426 15.4215C8.59356 15.1673 10.2445 15 12.0593 15Z"
                                    fill="#515151" />
                              </g>
                              <defs>
                                 <clipPath id="clip0_736_4929">
                                    <rect width="23.938" height="24" fill="white" transform="translate(0.090332)" />
                                 </clipPath>
                              </defs>
                           </svg>
                        </span>
                     </div>
                     @error('qualification')
                     <small class="text-danger">{{$message}}</small>
                     @enderror
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="frm_grp">
                        <label for="">Expertise*</label>
                        <select class="form-control"  name="expertise">
                           <option value="">--Please Select--</option>
                           <option value="Meditation" {{ ( 'Meditation' == old('expertise')) ? 'selected' : '' }}>Meditation</option>
                           <option value="Yoga" {{ ( 'Yoga' == old('expertise')) ? 'selected' : '' }}>Yoga</option>
                           <option value="Physiotherapy" {{ ( 'Physiotherapy' == old('expertise')) ? 'selected' : '' }}>Physiotherapy</option>
                           <option value="Dietitian/ Nutritionist" {{ ( 'Dietitian/ Nutritionist' == old('expertise')) ? 'selected' : '' }}>Dietitian/ Nutritionist</option>
                           <option value="Support Workers" {{ ( 'Support Workers' == old('expertise')) ? 'selected' : '' }}>Support Workers</option>
                           <option value="Child Care" {{ ( 'Child Care' == old('expertise')) ? 'selected' : '' }}>Child Care</option>
                           <option value="Wellness Coach" {{ ( 'Wellness Coach' == old('expertise')) ? 'selected' : '' }}>Wellness Coach</option>
                           <option value="Therapy Sessions" {{ ( 'Therapy Sessions' == old('expertise')) ? 'selected' : '' }}>Therapy Sessions</option>
                           <option value="Physical Wellness" {{ ( 'Physical Wellness' == old('expertise')) ? 'selected' : '' }}>Physical Wellness</option>
                           <option value="Mental Wellness" {{ ( 'Mental Wellness' == old('expertise')) ? 'selected' : '' }}>Mental Wellness</option>
                        </select>
                        <!-- <input type="text" placeholder="Meditation" class="form-control"  name="expertise" value="{{old('expertise')}}"> -->
                        <!-- <span class="icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                               fill="none">
                               <path
                                   d="M12.9116 13.5C16.2339 13.5 18.9272 10.8137 18.9272 7.5C18.9272 4.18629 16.2339 1.5 12.9116 1.5C9.58926 1.5 6.896 4.18629 6.896 7.5C6.896 10.8137 9.58926 13.5 12.9116 13.5Z"
                                   stroke="#515151" stroke-width="1.5" stroke-linecap="round"
                                   stroke-linejoin="round" />
                               <path
                                   d="M7.63147 10.6797L3.13623 18.7506L7.21837 18.7309C7.34916 18.7303 7.47786 18.7637 7.59177 18.8278C7.70567 18.8919 7.80083 18.9845 7.86786 19.0966L9.90376 22.5006L14.055 13.3919"
                                   stroke="#515151" stroke-width="1.5" stroke-linecap="round"
                                   stroke-linejoin="round" />
                               <path
                                   d="M18.1066 10.5L22.6869 18.75L18.6048 18.7303C18.474 18.7297 18.3453 18.763 18.2314 18.8272C18.1175 18.8913 18.0223 18.9839 17.9553 19.0959L15.9194 22.5L12.9116 15.9"
                                   stroke="#515151" stroke-width="1.5" stroke-linecap="round"
                                   stroke-linejoin="round" />
                               <path
                                   d="M12.9116 10.5C14.5728 10.5 15.9194 9.15685 15.9194 7.5C15.9194 5.84315 14.5728 4.5 12.9116 4.5C11.2504 4.5 9.90381 5.84315 9.90381 7.5C9.90381 9.15685 11.2504 10.5 12.9116 10.5Z"
                                   stroke="#515151" stroke-width="1.5" stroke-linecap="round"
                                   stroke-linejoin="round" />
                           </svg>
                           </span> -->
                     </div>
                     @error('expertise')
                     <small class="text-danger">{{$message}}</small>
                     @enderror
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                           <div class="frm_grp select_icon">
                              <label for="">Photo ID*</label>
                              <select class="form-control"  name="photo_id">
                                 <option value="">--Please Select--</option>
                                 <option value="Driving licence" {{ ( 'Driving licence' == old('photo_id')) ? 'selected' : '' }}>Driving licence</option>
                                 <option value="Passport" {{ ( 'Passport' == old('photo_id')) ? 'selected' : '' }}>Passport</option>
                              </select>
                           </div>
                           @error('photo_id')
                           <small class="text-danger">{{$message}}</small>
                           @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                           <div class="frm_grp">
                              <label for="">Upload Photo ID*</label>
                              <input type="text" class="form-control" >
                              <div class="upload_vetti">
                                 <label for="upload_file">
                                 <input type="file" id="upload_file"  name="photo_id_upld">
                                 upload
                                 </label>
                              </div>
                           </div>
                           @error('photo_id_upld')
                           <small class="text-danger">{{$message}}</small>
                           @enderror
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <ul class="list-certific">
                        <li>
                           <div class="frm_grp">
                              <label for="">Upload Certification(if)</label>
                              <input type="text"  class="form-control"  >
                              <!-- <div class="upload_vetti cerf_icon"> -->
                              <div class="upload_vetti">
                                 <label for="upload_file1">
                                 <input type="file" id="upload_file1"  name="certification_upld" >
                                 upload
                                 </label>
                              </div>
                              @error('certification_upld')
                              <small class="text-danger">{{$message}}</small>
                              @enderror
                              <!-- <p class="errow_message">File size max. 10MB/ PDF, JPEG</p> -->
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="frm_grp">
                        <label for="">Upload Degree*</label>
                        <input type="text"  class="form-control">
                        <div class="upload_vetti">
                           <label for="upload_file2">
                           <input type="file" id="upload_file2" name="degree_upld">
                           upload
                           </label>
                        </div>
                        @error('degree_upld')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                        <!-- <p class="errow_message">File size max. 10MB/ PDF, JPEG</p> -->
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                           <div class="frm_grp select_icon">
                              <label for="">Experience*</label>
                              <select class="form-control" name="experience_year">
                                 <option value="">--Please Select--</option>
                                 <option value="1 Years" {{ ( '1 Years' == old('experience_year')) ? 'selected' : '' }}>1 Years</option>
                                 <option value="2 Years" {{ ( '2 Years' == old('experience_year')) ? 'selected' : '' }}>2 Years</option>
                                 <option value="3 Years" {{ ( '3 Years' == old('experience_year')) ? 'selected' : '' }}>3 Years</option>
                                 <option value="4 Years" {{ ( '4 Years' == old('experience_year')) ? 'selected' : '' }}>4 Years</option>
                                 <option value="5 Years" {{ ( '5 Years' == old('experience_year')) ? 'selected' : '' }}>5 Years</option>
                                 <option value="6 Years" {{ ( '6 Years' == old('experience_year')) ? 'selected' : '' }}>6 Years</option>
                                 <option value="7 Years" {{ ( '7 Years' == old('experience_year')) ? 'selected' : '' }}>7 Years</option>
                                 <option value="8 Years" {{ ( '8 Years' == old('experience_year')) ? 'selected' : '' }}>8 Years</option>
                                 <option value="9 Years" {{ ( '9 Years' == old('experience_year')) ? 'selected' : '' }}>9 Years</option>
                                 <option value="10 Years" {{ ( '10 Years' == old('experience_year')) ? 'selected' : '' }}>10 Years</option>
                              </select>
                           </div>
                           @error('experience_year')
                           <small class="text-danger">{{$message}}</small>
                           @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                           <div class="frm_grp select_icon">
                              <label for=""></label>
                              <select class="form-control" name="experience_month">
                                 <option value="">--Please Select--</option>
                                 <option value="0 Months" {{ ( '0 Months' == old('experience_month')) ? 'selected' : '' }}>0 Months</option>
                                 <option value="1 Months" {{ ( '1 Months' == old('experience_month')) ? 'selected' : '' }}>1 Months</option>
                                 <option value="2 Months" {{ ( '2 Months' == old('experience_month')) ? 'selected' : '' }}>2 Months</option>
                                 <option value="3 Months" {{ ( '3 Months' == old('experience_month')) ? 'selected' : '' }}>3 Months</option>
                                 <option value="4 Months" {{ ( '4 Months' == old('experience_month')) ? 'selected' : '' }}>4 Months</option>
                                 <option value="5 Months" {{ ( '5 Months' == old('experience_month')) ? 'selected' : '' }}>5 Months</option>
                                 <option value="6 Months" {{ ( '6 Months' == old('experience_month')) ? 'selected' : '' }}>6 Months</option>
                                 <option value="7 Months" {{ ( '7 Months' == old('experience_month')) ? 'selected' : '' }}>7 Months</option>
                                 <option value="8 Months" {{ ( '8 Months' == old('experience_month')) ? 'selected' : '' }}>8 Months</option>
                                 <option value="9 Months" {{ ( '9 Months' == old('experience_month')) ? 'selected' : '' }}>9 Months</option>
                                 <option value="10 Months" {{ ( '10 Months' == old('experience_month')) ? 'selected' : '' }}>10 Months</option>
                                 <option value="11 Months" {{ ( '11 Months' == old('experience_month')) ? 'selected' : '' }}>11 Months</option>
                                 <!-- <option value="">12 Months</option> -->
                              </select>
                           </div>
                           @error('experience_month')
                           <small class="text-danger">{{$message}}</small>
                           @enderror
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="frm_grp soical_fem">
                        <label for="">Linkedin link*</label>
                        <input type="text" placeholder="https://linkedin.com/" class="form-control" name="linkedin_link">
                        <span class="icon_soical">
                           <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                              fill="none">
                              <path
                                 d="M23.4375 12.5C23.4375 6.45939 18.5406 1.5625 12.5 1.5625C6.45939 1.5625 1.5625 6.45939 1.5625 12.5C1.5625 18.5406 6.45939 23.4375 12.5 23.4375C18.5406 23.4375 23.4375 18.5406 23.4375 12.5Z"
                                 fill="#1275B1" />
                              <path
                                 d="M9.85828 7.57199C9.85828 8.30211 9.22539 8.89398 8.44477 8.89398C7.66409 8.89398 7.03125 8.30211 7.03125 7.57199C7.03125 6.84188 7.66409 6.25 8.44477 6.25C9.22539 6.25 9.85828 6.84188 9.85828 7.57199Z"
                                 fill="white" />
                              <path d="M7.22461 9.86719H9.64084V17.189H7.22461V9.86719Z" fill="white" />
                              <path
                                 d="M13.531 9.86563H11.1147V17.1874H13.531C13.531 17.1874 13.531 14.8824 13.531 13.4413C13.531 12.5762 13.8264 11.7073 15.0049 11.7073C16.3368 11.7073 16.3288 12.8394 16.3226 13.7164C16.3144 14.8627 16.3338 16.0327 16.3338 17.1874H18.7501V13.3231C18.7296 10.8557 18.0866 9.71875 15.9714 9.71875C14.7152 9.71875 13.9365 10.2891 13.531 10.805V9.86563Z"
                                 fill="white" />
                           </svg>
                        </span>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="frm_grp soical_fem">
                        <label for="">Facebook Link</label>
                        <input type="text" placeholder="https://facebook.com/" class="form-control"  name="facebook_link">
                        <span class="icon_soical">
                           <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                              fill="none">
                              <path
                                 d="M12.5 23.4375C18.5406 23.4375 23.4375 18.5406 23.4375 12.5C23.4375 6.45939 18.5406 1.5625 12.5 1.5625C6.45939 1.5625 1.5625 6.45939 1.5625 12.5C1.5625 18.5406 6.45939 23.4375 12.5 23.4375Z"
                                 fill="url(#paint0_linear_741_4686)" />
                              <path
                                 d="M16.5732 15.845L17.0591 12.7579H14.0197V10.7555C14.0197 9.9107 14.4435 9.0868 15.8048 9.0868H17.1875V6.45859C17.1875 6.45859 15.9332 6.25 14.7346 6.25C12.2303 6.25 10.5951 7.72886 10.5951 10.405V12.7579H7.8125V15.845H10.5951V23.3082C11.1537 23.3937 11.7252 23.4375 12.3073 23.4375C12.8895 23.4375 13.4611 23.3937 14.0197 23.3082V15.845H16.5732Z"
                                 fill="white" />
                              <defs>
                                 <linearGradient id="paint0_linear_741_4686" x1="12.5" y1="1.5625" x2="12.5"
                                    y2="23.3727" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#18ACFE" />
                                    <stop offset="1" stop-color="#0163E0" />
                                 </linearGradient>
                              </defs>
                           </svg>
                        </span>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="frm_grp soical_fem">
                        <label for="">Instagram Link</label>
                        <input type="text" placeholder="https://instagram.com/" class="form-control" name="instagram_link">
                        <span class="icon_soical">
                           <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                              fill="none">
                              <g clip-path="url(#clip0_736_5275)">
                                 <path
                                    d="M6.33935 24.9116C4.85259 24.844 4.04494 24.5965 3.50774 24.387C2.79594 24.1099 2.28847 23.78 1.75424 23.2465C1.22002 22.713 0.889381 22.2055 0.613725 21.4937C0.404197 20.9566 0.156775 20.1489 0.089161 18.6621C0.0148602 17.055 0 16.5728 0 12.5011C0 8.42943 0.0163462 7.94796 0.088418 6.33935C0.156032 4.85259 0.40494 4.04642 0.612982 3.50774C0.890124 2.79594 1.22076 2.28847 1.7535 1.7535C2.28698 1.22002 2.79445 0.888638 3.507 0.612982C4.04419 0.403453 4.85184 0.156032 6.3386 0.088418C7.94647 0.0148602 8.42943 0 12.4996 0C16.5713 0 17.0528 0.0163462 18.6614 0.088418C20.1482 0.156032 20.9543 0.40494 21.493 0.612982C22.2048 0.888638 22.7123 1.22002 23.2465 1.7535C23.7807 2.28698 24.1099 2.7952 24.387 3.507C24.5965 4.04419 24.844 4.85184 24.9116 6.3386C24.9851 7.94722 25 8.42869 25 12.5004C25 16.5706 24.9851 17.0535 24.9116 18.6621C24.844 20.1489 24.5951 20.9566 24.387 21.4937C24.1099 22.2055 23.78 22.713 23.2465 23.2465C22.713 23.78 22.2048 24.1099 21.493 24.387C20.9558 24.5965 20.1482 24.844 18.6614 24.9116C17.0543 24.9851 16.5713 25 12.4996 25C8.42943 25 7.94647 24.9859 6.33935 24.9116Z"
                                    fill="url(#paint0_radial_736_5275)" />
                                 <path
                                    d="M6.33935 24.9116C4.85259 24.844 4.04494 24.5965 3.50774 24.387C2.79594 24.1099 2.28847 23.78 1.75424 23.2465C1.22002 22.713 0.889381 22.2055 0.613725 21.4937C0.404197 20.9566 0.156775 20.1489 0.089161 18.6621C0.0148602 17.055 0 16.5728 0 12.5011C0 8.42943 0.0163462 7.94796 0.088418 6.33935C0.156032 4.85259 0.40494 4.04642 0.612982 3.50774C0.890124 2.79594 1.22076 2.28847 1.7535 1.7535C2.28698 1.22002 2.79445 0.888638 3.507 0.612982C4.04419 0.403453 4.85184 0.156032 6.3386 0.088418C7.94647 0.0148602 8.42943 0 12.4996 0C16.5713 0 17.0528 0.0163462 18.6614 0.088418C20.1482 0.156032 20.9543 0.40494 21.493 0.612982C22.2048 0.888638 22.7123 1.22002 23.2465 1.7535C23.7807 2.28698 24.1099 2.7952 24.387 3.507C24.5965 4.04419 24.844 4.85184 24.9116 6.3386C24.9851 7.94722 25 8.42869 25 12.5004C25 16.5706 24.9851 17.0535 24.9116 18.6621C24.844 20.1489 24.5951 20.9566 24.387 21.4937C24.1099 22.2055 23.78 22.713 23.2465 23.2465C22.713 23.78 22.2048 24.1099 21.493 24.387C20.9558 24.5965 20.1482 24.844 18.6614 24.9116C17.0543 24.9851 16.5713 25 12.4996 25C8.42943 25 7.94647 24.9859 6.33935 24.9116Z"
                                    fill="url(#paint1_radial_736_5275)" />
                                 <path
                                    d="M9.43051 12.5532C9.43051 10.8435 10.8161 9.45711 12.5259 9.45711C14.2356 9.45711 15.622 10.8435 15.622 12.5532C15.622 14.263 14.2356 15.6493 12.5259 15.6493C10.8161 15.6493 9.43051 14.263 9.43051 12.5532ZM7.75681 12.5532C7.75681 15.1872 9.89192 17.3223 12.5259 17.3223C15.1598 17.3223 17.295 15.1872 17.295 12.5532C17.295 9.91926 15.1598 7.78416 12.5259 7.78416C9.89192 7.78416 7.75689 9.91912 7.75689 12.5532M16.3693 7.59506C16.3692 7.81549 16.4345 8.031 16.5569 8.21432C16.6793 8.39765 16.8533 8.54057 17.0569 8.62501C17.2605 8.70945 17.4846 8.73161 17.7008 8.68869C17.917 8.64577 18.1157 8.5397 18.2716 8.3839C18.4275 8.2281 18.5337 8.02955 18.5768 7.81337C18.6199 7.5972 18.5979 7.3731 18.5137 7.16941C18.4294 6.96573 18.2866 6.79161 18.1034 6.66907C17.9202 6.54653 17.7047 6.48108 17.4843 6.48099H17.4838C17.1884 6.48113 16.905 6.59854 16.6961 6.80742C16.4871 7.01631 16.3696 7.29959 16.3693 7.59506ZM8.77369 20.1132C7.86819 20.072 7.37602 19.9211 7.04895 19.7937C6.61533 19.6249 6.30594 19.4238 5.98065 19.099C5.65536 18.7741 5.45401 18.465 5.28594 18.0314C5.15844 17.7045 5.00761 17.2122 4.96644 16.3067C4.92142 15.3277 4.91243 15.0336 4.91243 12.5534C4.91243 10.0731 4.92216 9.77988 4.96644 8.80007C5.00768 7.89457 5.15963 7.40321 5.28594 7.07533C5.45475 6.64171 5.65581 6.33232 5.98065 6.00703C6.30549 5.68174 6.61459 5.48038 7.04895 5.31232C7.37587 5.18482 7.86819 5.03398 8.77369 4.99282C9.75268 4.9478 10.0468 4.93881 12.5259 4.93881C15.005 4.93881 15.2994 4.94839 16.2792 4.99297C17.1847 5.03421 17.676 5.18615 18.0039 5.31246C18.4376 5.48053 18.7469 5.68233 19.0722 6.00718C19.3975 6.33202 19.5981 6.64185 19.7669 7.07547C19.8944 7.4024 20.0453 7.89472 20.0864 8.80022C20.1315 9.78002 20.1405 10.0733 20.1405 12.5535C20.1405 15.0338 20.1315 15.327 20.0864 16.3068C20.0452 17.2123 19.8936 17.7045 19.7669 18.0316C19.5981 18.4652 19.3971 18.7746 19.0722 19.0991C18.7474 19.4237 18.4376 19.625 18.0039 19.7938C17.677 19.9213 17.1847 20.0722 16.2792 20.1133C15.3002 20.1584 15.0061 20.1674 12.5259 20.1674C10.0456 20.1674 9.75238 20.1584 8.77369 20.1133M8.69679 3.32187C7.70807 3.3669 7.03245 3.52367 6.44243 3.75326C5.83175 3.99036 5.3141 4.30844 4.79719 4.82453C4.28028 5.34062 3.96301 5.85835 3.72592 6.46977C3.49633 7.06017 3.33955 7.73541 3.29453 8.72414C3.24876 9.71442 3.23828 10.031 3.23828 12.5532C3.23828 15.0754 3.24876 15.392 3.29453 16.3823C3.33955 17.3711 3.49633 18.0463 3.72592 18.6367C3.96301 19.2474 4.28035 19.7661 4.79719 20.2819C5.31402 20.7978 5.83101 21.1154 6.44243 21.3532C7.03357 21.5828 7.70807 21.7396 8.69679 21.7846C9.68759 21.8296 10.0037 21.8408 12.5259 21.8408C15.0481 21.8408 15.3647 21.8304 16.355 21.7846C17.3438 21.7396 18.0189 21.5828 18.6093 21.3532C19.22 21.1154 19.7377 20.798 20.2546 20.2819C20.7715 19.7658 21.0881 19.2474 21.3259 18.6367C21.5554 18.0463 21.713 17.371 21.7572 16.3823C21.8023 15.3913 21.8127 15.0754 21.8127 12.5532C21.8127 10.031 21.8023 9.71442 21.7572 8.72414C21.7122 7.73534 21.5554 7.0598 21.3259 6.46977C21.0881 5.8591 20.7707 5.34144 20.2546 4.82453C19.7385 4.30762 19.22 3.99036 18.6101 3.75326C18.0189 3.52367 17.3437 3.36615 16.3557 3.32187C15.3653 3.27662 15.0488 3.26562 12.527 3.26562C10.0052 3.26562 9.68796 3.2761 8.69716 3.32187"
                                    fill="white" />
                              </g>
                              <defs>
                                 <radialGradient id="paint0_radial_736_5275" cx="0" cy="0" r="1"
                                    gradientUnits="userSpaceOnUse"
                                    gradientTransform="translate(1.61797 24.4523) scale(31.7407)">
                                    <stop offset="0.09" stop-color="#FA8F21" />
                                    <stop offset="0.78" stop-color="#D82D7E" />
                                 </radialGradient>
                                 <radialGradient id="paint1_radial_736_5275" cx="0" cy="0" r="1"
                                    gradientUnits="userSpaceOnUse"
                                    gradientTransform="translate(17.3166 23.6496) scale(27.9321)">
                                    <stop offset="0.64" stop-color="#8C3AAA" stop-opacity="0" />
                                    <stop offset="1" stop-color="#8C3AAA" />
                                 </radialGradient>
                                 <clipPath id="clip0_736_5275">
                                    <rect width="25" height="25" fill="white" />
                                 </clipPath>
                              </defs>
                           </svg>
                        </span>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="frm_grp select_icon">
                        <label for="">Service Offering*</label>
                        <select class="form-control"  name="service_offering">
                           <option value="">--Please Select--</option>
                           <option value="Yoga" {{ ( 'Yoga' == old('service_offering')) ? 'selected' : '' }}>Yoga</option>
                           <option value="Mindfulness services" {{ ( 'Mindfulness services' == old('service_offering')) ? 'selected' : '' }}>Mindfulness services</option>
                           <option value="Meditation" {{ ( 'Meditation' == old('service_offering')) ? 'selected' : '' }}>Meditation</option>
                           <option value="Pilates" {{ ( 'Pilates' == old('service_offering')) ? 'selected' : '' }}>Pilates</option>
                           <option value="Dietician/Nutritionist" {{ ( 'Dietician/Nutritionist' == old('service_offering')) ? 'selected' : '' }}>Dietician/Nutritionist</option>
                        </select>
                     </div>
                     @error('service_offering')
                     <small class="text-danger">{{$message}}</small>
                     @enderror
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="frm_grp">
                        <label for="">Add language*</label>
                        <select multiple data-placeholder="Selet Language(Multiple)" class="form-control"  name="language[]">
                           <option value="English">English</option>
                           <option value="Spanish">Spanish</option>
                           <option value="French">French</option>
                           <option value="German">German</option>
                           <option value="Italian">Italian</option>
                           <option value="Portuguese">Portuguese</option>
                           <option value="Dutch">Dutch</option>
                           <option value="Russian">Russian</option>
                           <option value="Chinese">Chinese</option>
                           <option value="Japanese">Japanese</option>
                           <option value="Korean">Korean</option>
                           <option value="Arabic">Arabic</option>
                           <option value="Hindi">Hindi</option>
                           <option value="Swedish">Swedish</option>
                           <option value="Norwegian">Norwegian</option>
                           <option value="Danish">Danish</option>
                           <option value="Finnish">Finnish</option>
                           <option value="Polish">Polish</option>
                           <option value="Turkish">Turkish</option>
                           <option value="Greek">Greek</option>
                        </select>
                     </div>
                     @error('language')
                     <small class="text-danger">{{$message}}</small>
                     @enderror
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="frm_grp">
                        <label for="">Hourly Fees* ($)</label>
                        <input type="text" placeholder="100.00" class="form-control"  name="hourly_fees">
                        <!-- <p class="errow_message">Lintecare Solution Inc will charge a 15% fee for every transaction
                           facilitated by the platform</p> -->
                     </div>
                     @error('hourly_fees')
                     <small class="text-danger">{{$message}}</small>
                     @enderror
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="frm_grp select_icon">
                        <label for="">Consultation Mode*</label>
                        <select class="form-control" name="consultation_mode">
                           <option value="">--Please Select--</option>
                           <option value="Virtually" {{ ( 'Virtually' == old('consultation_mode')) ? 'selected' : '' }}>Virtually</option>
                           <option value="In-Person" {{ ( 'Pilates' == old('consultation_mode')) ? 'selected' : '' }}>In- Person</option>
                           <option value="Both" {{ ( 'Both' == old('consultation_mode')) ? 'selected' : '' }}>Both</option>
                        </select>
                     </div>
                     @error('consultation_mode')
                     <small class="text-danger">{{$message}}</small>
                     @enderror
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="frm_grp">
                        <label for="">Do You Provide Group Session</label>
                        <!-- <input type="text" placeholder="Both" class="form-control" >
                           <span class="icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                               <path d="M14.06 9L15 9.94L5.92 19H5V18.08L14.06 9ZM17.66 3C17.41 3 17.15 3.1 16.96 3.29L15.13 5.12L18.88 8.87L20.71 7.04C21.1 6.65 21.1 6 20.71 5.63L18.37 3.29C18.17 3.09 17.92 3 17.66 3ZM14.06 6.19L3 17.25V21H6.75L17.81 9.94L14.06 6.19Z" fill="#515151"/>
                               </svg>
                           </span> -->
                        <select class="form-control" name="is_group_session_provided">
                           <option value="">--Please Select--</option>
                           <option value="1" {{ ( '1' == old('is_group_session_provided') ) ? 'selected' : '' }}>Yes</option>
                           <option value="0" {{ ( '0' == old('is_group_session_provided') ) ? 'selected' : '' }}>No</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="frm_grp">
                        <label for="">Group Session Hourly Fees</label>
                        <input type="text" placeholder="100.00" name="group_session_fee" class="form-control" value="{{old('group_session_fee')}}">
                        <span class="icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path d="M15 14L12 12V7M3 12C3 13.1819 3.23279 14.3522 3.68508 15.4442C4.13738 16.5361 4.80031 17.5282 5.63604 18.364C6.47177 19.1997 7.46392 19.8626 8.55585 20.3149C9.64778 20.7672 10.8181 21 12 21C13.1819 21 14.3522 20.7672 15.4442 20.3149C16.5361 19.8626 17.5282 19.1997 18.364 18.364C19.1997 17.5282 19.8626 16.5361 20.3149 15.4442C20.7672 14.3522 21 13.1819 21 12C21 10.8181 20.7672 9.64778 20.3149 8.55585C19.8626 7.46392 19.1997 6.47177 18.364 5.63604C17.5282 4.80031 16.5361 4.13738 15.4442 3.68508C14.3522 3.23279 13.1819 3 12 3C10.8181 3 9.64778 3.23279 8.55585 3.68508C7.46392 4.13738 6.47177 4.80031 5.63604 5.63604C4.80031 6.47177 4.13738 7.46392 3.68508 8.55585C3.23279 9.64778 3 10.8181 3 12Z" stroke="#515151" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                        </span>
                     </div>
                  </div>
               </div>
               <div class="slot_date_sect">
                  <h3>Availability</h3>
                  <div class="slot_list_sect">
                     <div class="slot_select selected">
                        <input type="checkbox" name="availability_days[]" id="MON" value="MON" class="custom-control-input">
                        <label for="MON">MON</label>
                     </div>
                     <div class="slot_select">
                        <input type="checkbox" name="availability_days[]" id="TUE" value="TUE" class="custom-control-input">
                        <label for="TUE">TUE</label>
                     </div>
                     <div class="slot_select">
                        <input type="checkbox" name="availability_days[]" id="WED" value="WED" class="custom-control-input">
                        <label for="WED"> WED</label>
                     </div>
                     <div class="slot_select">
                        <input type="checkbox" name="availability_days[]" id="THU" value="THU" class="custom-control-input">
                        <label for="THU">THU </label>
                     </div>
                     <div class="slot_select">
                        <input type="checkbox" name="availability_days[]" id="FRI" value="FRI" class="custom-control-input">
                        <label for="FRI"> FRI</label>
                     </div>
                     <div class="slot_select">
                        <input type="checkbox" name="availability_days[]" id="SAT" value="SAT" class="custom-control-input">
                        <label for="SAT">SAT </label>
                     </div>
                     <div class="slot_select">
                        <input type="checkbox" name="availability_days[]" id="SUN" value="SUN" class="custom-control-input">
                        <label for="SUN"> SUN</label>
                     </div>
                  </div>
               </div>
               <div class="time_slot_sect">
                  <div class="slot_select">
                     <input type="checkbox" name="availability_time[]" id="day1" value="10:00 AM - 12:00 PM" class="custom-control-input">
                     <label for="day1">10:00 AM - 12:00 PM</label>
                  </div>
                  <div class="slot_select">
                     <input type="checkbox" name="availability_time[]" id="day2" value="12:00 PM - 02:00 PM" class="custom-control-input">
                     <label for="day2"> 12:00 PM - 02:00 PM</label>
                  </div>
                  <div class="slot_select">
                     <input type="checkbox" name="availability_time[]" id="day3" value="02:00 PM - 04:00 PM" class="custom-control-input">
                     <label for="day3"> 02:00 PM - 04:00 PM</label>
                  </div>
                  <div class="slot_select">
                     <input type="checkbox" name="availability_time[]" id="day4" value="04:00 PM - 06:00 PM" class="custom-control-input">
                     <label for="day4"> 04:00 PM - 06:00 PM</label>
                  </div>
                  <div class="slot_select">
                     <input type="checkbox" name="availability_time[]" id="day5" value="06:00 PM - 08:00 PM" class="custom-control-input">
                     <label for="day5"> 06:00 PM - 08:00 PM</label>
                  </div>
               </div>
               <div class="btn_grp_dash dash_prof_btn">
                  <button class="btn">Back</button>
                  <button class="btn" type="submit">Submit</button>
               </div>
         </div>
         </form>
      </section>
      <footer class="footer">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="footer_bx">
                     <img src="{{asset('assets/images/logo.png')}}" alt="">
                     <p>
                        Our mission is to provide caregivers with the unwavering support they need to navigate this challenging journey
                     </p>
                     <ul class="ft_soical">
                        <li>
                           <a href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8261 0C12.2564 0 11.6836 0.0196285 9.88882 0.100955C8.09754 0.182982 6.87415 0.467621 5.80429 0.883366C4.69798 1.31313 3.75922 1.88873 2.82467 2.82398C1.88872 3.75923 1.31314 4.69799 0.883376 5.8043C0.467632 6.87486 0.182291 8.09755 0.100965 9.88883C0.0196392 11.6836 0 12.2564 0 16.8261C0 21.3958 0.0196392 21.9686 0.100965 23.7633C0.182992 25.5546 0.467632 26.778 0.883376 27.8479C1.31314 28.9542 1.88874 29.8929 2.82399 30.8275C3.75924 31.7634 4.69798 32.339 5.80429 32.7695C6.87485 33.1845 8.09754 33.4692 9.88882 33.5512C11.6836 33.6325 12.2564 33.6522 16.8261 33.6522C21.3958 33.6522 21.9686 33.6325 23.7634 33.5512C25.5546 33.4692 26.778 33.1846 27.8479 32.7688C28.9542 32.339 29.893 31.7634 30.8275 30.8282C31.7635 29.8929 32.3391 28.9542 32.7695 27.8479C33.1846 26.7773 33.4692 25.5546 33.5512 23.7633C33.6326 21.9686 33.6522 21.3958 33.6522 16.8261C33.6522 12.2564 33.6326 11.6836 33.5512 9.88883C33.4692 8.09755 33.1845 6.87416 32.7688 5.8043C32.339 4.69799 31.7634 3.75923 30.8282 2.82468C29.8929 1.88873 28.9542 1.31313 27.8479 0.883366C26.7773 0.467621 25.5546 0.182281 23.7634 0.100955C21.9686 0.0196285 21.3958 0 16.8261 0ZM16.8261 3.0315C21.3187 3.0315 21.8508 3.04903 23.6252 3.12966C25.2658 3.20467 26.1562 3.47879 26.75 3.70945C27.5352 4.01442 28.096 4.37899 28.685 4.9679C29.2732 5.55681 29.6377 6.11768 29.9427 6.9029C30.1741 7.49532 30.4475 8.3864 30.5225 10.0269C30.6032 11.8007 30.6207 12.3335 30.6207 16.8261C30.6207 21.3187 30.6032 21.8508 30.5225 23.6252C30.4475 25.2658 30.1734 26.1562 29.9427 26.75C29.6377 27.5352 29.2732 28.0961 28.6843 28.685C28.0954 29.2732 27.5345 29.6377 26.7493 29.9427C26.1568 30.1741 25.2658 30.4475 23.6252 30.5225C21.8515 30.6031 21.3187 30.6207 16.8261 30.6207C12.3328 30.6207 11.8007 30.6031 10.0269 30.5225C8.3864 30.4475 7.49602 30.1734 6.9022 29.9427C6.11698 29.6377 5.55611 29.2732 4.9672 28.6843C4.37898 28.0954 4.01441 27.5345 3.70944 26.7493C3.47808 26.1569 3.20466 25.2658 3.12964 23.6252C3.04902 21.8515 3.0315 21.3187 3.0315 16.8261C3.0315 12.3335 3.04902 11.8014 3.12964 10.0269C3.20466 8.3864 3.47878 7.49602 3.70944 6.9022C4.01441 6.11698 4.37899 5.55612 4.9679 4.96721C5.55681 4.37899 6.11769 4.01442 6.90291 3.70945C7.49533 3.47809 8.3864 3.20467 10.0269 3.12966C11.8007 3.04903 12.3335 3.0315 16.8261 3.0315ZM16.8261 8.18589C12.0538 8.18589 8.18589 12.0538 8.18589 16.8261C8.18589 21.5984 12.0538 25.4663 16.8261 25.4663C21.5984 25.4663 25.4663 21.5984 25.4663 16.8261C25.4663 12.0538 21.5984 8.18589 16.8261 8.18589ZM16.8261 22.4348C15.3386 22.4348 13.912 21.8439 12.8601 20.792C11.8083 19.7402 11.2174 18.3136 11.2174 16.8261C11.2174 15.3386 11.8083 13.912 12.8601 12.8601C13.912 11.8083 15.3386 11.2174 16.8261 11.2174C18.3136 11.2174 19.7402 11.8083 20.792 12.8601C21.8439 13.912 22.4348 15.3386 22.4348 16.8261C22.4348 18.3136 21.8439 19.7402 20.792 20.792C19.7402 21.8439 18.3136 22.4348 16.8261 22.4348ZM27.8268 7.84446C27.8268 8.37996 27.6141 8.89354 27.2355 9.2722C26.8568 9.65086 26.3432 9.86359 25.8077 9.86359C25.2722 9.86359 24.7586 9.65086 24.38 9.2722C24.0013 8.89354 23.7886 8.37996 23.7886 7.84446C23.7886 7.30895 24.0013 6.79538 24.38 6.41672C24.7586 6.03806 25.2722 5.82534 25.8077 5.82534C26.3432 5.82534 26.8568 6.03806 27.2355 6.41672C27.6141 6.79538 27.8268 7.30895 27.8268 7.84446Z" fill="url(#paint0_linear_688_13659)"/>
                                 <defs>
                                    <linearGradient id="paint0_linear_688_13659" x1="-14.3022" y1="-33.6522" x2="62.0062" y2="-22.8496" gradientUnits="userSpaceOnUse">
                                       <stop stop-color="#0068C4"/>
                                       <stop offset="1" stop-color="#00A7C5"/>
                                    </linearGradient>
                                 </defs>
                              </svg>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" width="34" height="27" viewBox="0 0 34 27" fill="none">
                                 <path d="M33.6522 3.13581C32.3874 3.66005 31.0499 4.0066 29.6812 4.16468C31.1252 3.34049 32.2073 2.04389 32.7267 0.515401C31.3698 1.28716 29.8844 1.83091 28.3351 2.12301C27.2996 1.05005 25.9205 0.335825 24.4143 0.0923601C22.9081 -0.151105 21.3599 0.08996 20.0126 0.777747C18.6652 1.46553 17.5949 2.56114 16.9695 3.89273C16.3441 5.22433 16.199 6.71659 16.5569 8.13549C13.8133 8.0029 11.1295 7.32035 8.68 6.13218C6.23048 4.94401 4.06997 3.27679 2.33883 1.23883C1.73164 2.25189 1.41258 3.39917 1.41339 4.56659C1.41124 5.65073 1.6897 6.71856 2.224 7.67501C2.75829 8.63146 3.53183 9.44683 4.47574 10.0485C3.37864 10.02 2.30498 9.73876 1.34609 9.22867V9.30905C1.35431 10.8281 1.91143 12.2977 2.92322 13.4695C3.93501 14.6412 5.33935 15.4431 6.89869 15.7395C6.29843 15.914 5.67523 16.0061 5.04783 16.0128C4.61353 16.0079 4.18031 15.9703 3.75222 15.9003C4.19627 17.2069 5.0556 18.3489 6.21063 19.1672C7.36566 19.9855 8.75895 20.4394 10.1966 20.4659C7.76895 22.291 4.77168 23.287 1.68261 23.2953C1.12017 23.297 0.558181 23.2648 0 23.1988C3.15393 25.1445 6.82939 26.1773 10.5836 26.1729C13.1743 26.1986 15.7444 25.7308 18.1438 24.7969C20.5431 23.863 22.7237 22.4816 24.558 20.7335C26.3924 18.9854 27.8437 16.9056 28.8274 14.6156C29.811 12.3256 30.3072 9.87127 30.287 7.39599C30.287 7.12269 30.287 6.83332 30.287 6.54395C31.6073 5.60319 32.746 4.44991 33.6522 3.13581Z" fill="url(#paint0_linear_688_13660)"/>
                                 <defs>
                                    <linearGradient id="paint0_linear_688_13660" x1="-14.3022" y1="-26.1739" x2="61.0395" y2="-12.4608" gradientUnits="userSpaceOnUse">
                                       <stop stop-color="#0068C4"/>
                                       <stop offset="1" stop-color="#00A7C5"/>
                                    </linearGradient>
                                 </defs>
                              </svg>
                           </a>
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
                           <a href="#">
                              <span>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C15.87 2 19 5.13 19 9C19 14.25 12 22 12 22C12 22 5 14.25 5 9C5 5.13 8.13 2 12 2ZM7 9C7 11.85 9.92 16.21 12 18.88C14.12 16.19 17 11.88 17 9C17 6.24 14.76 4 12 4C9.24 4 7 6.24 7 9ZM12 11.5C10.6193 11.5 9.5 10.3807 9.5 9C9.5 7.61929 10.6193 6.5 12 6.5C13.3807 6.5 14.5 7.61929 14.5 9C14.5 10.3807 13.3807 11.5 12 11.5Z" fill="#52A2E9"/>
                                 </svg>
                              </span>
                              <span>8920 WOODBINE AVENUE 304
                              MARKHAM, ON, CA, L3R 9W9</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <span>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22 6C22 4.9 21.1 4 20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6ZM20 6L12 11L4 6H20ZM20 18H4V8L12 13L20 8V18Z" fill="#52A2E9"/>
                                 </svg>
                              </span>
                              <span>contact@rewpaz.ca</span>
                           </a>
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
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- js -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="{{asset('assets/js/jquery-2.1.0.min.js')}}"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
      <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
      <script src="{{asset('assets/js/scrollreveal.min.js')}}"></script>
      <script src="{{asset('assets/js/videopopup.js')}}"></script>
      <script src="{{asset('assets/js/animate.js')}}"></script>
      <script src="{{asset('assets/js/custom.js')}}"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
      <script>
         let allFileInputs = document.querySelectorAll('input[type=file]');
         // console.log(allFileInputs);
         allFileInputs.forEach(fileInput => {
             fileInput.addEventListener('change', event =>{
                 //  console.log('meshahbaz');
                 printFileNameToggle(event);
             })
         })
         const printFileNameToggle = event =>{
             let fileText = 'Select a File';
             if(event.target.files.length){
                 fileText = event.target.files[0].name;
             }
             let appendAt = event.target.closest('.frm_grp').querySelector('input');
             appendAt.value = fileText;
         }

      </script>
      <script>
         $( function() {
              $( "#datepicker" ).datepicker({
              changeMonth: true,
              changeYear: true
              });
          } );
      </script>
      <script>
         $(function () {
             $('#vidBox').VideoPopUp({
                 backgroundColor: "#17212a",
                 opener: "video1",
                 maxweight: "640",
                 idvideo: "v1"
             });
         });

         $('.slot_select label input').click(function () {

             $(this).parents('.slot_list_sect .slot_select').addClass('selected')

         });

         $(".list-certific .add_btn").click(function () {
             $(".About_vetting .list-certific").append('<li><div class="frm_grp"><label for="">upload certification(if)</label><input type="text" placeholder="https://facebook.com/lesile" class="form-control"><div class="upload_vetti cerf_icon"> <label for="upload_file"><input type="file" id="upload_file"> upload</label></div></div></li>'
             )
         });


         $(document).ready(function() {

         var select = $('select[multiple]');
         var options = select.find('option');

         var div = $('<div />').addClass('selectMultiple');
         var active = $('<div />');
         var list = $('<ul />');
         var placeholder = select.data('placeholder');

         var span = $('<span />').text(placeholder).appendTo(active);

         options.each(function() {
         var text = $(this).text();
         if($(this).is(':selected')) {
         active.append($('<a />').html('<em>' + text + '</em><i></i>'));
         span.addClass('hide');
         } else {
         list.append($('<li />').html(text));
         }
         });

         active.append($('<div />').addClass('arrow'));
         div.append(active).append(list);

         select.wrap(div);

         $(document).on('click', '.selectMultiple ul li', function(e) {
         var select = $(this).parent().parent();
         var li = $(this);
         if(!select.hasClass('clicked')) {
         select.addClass('clicked');
         li.prev().addClass('beforeRemove');
         li.next().addClass('afterRemove');
         li.addClass('remove');
         var a = $('<a />').addClass('notShown').html('<em>' + li.text() + '</em><i></i>').hide().appendTo(select.children('div'));
         a.slideDown(400, function() {
             setTimeout(function() {
                 a.addClass('shown');
                 select.children('div').children('span').addClass('hide');
                 select.find('option:contains(' + li.text() + ')').prop('selected', true);
             }, 500);
         });
         setTimeout(function() {
             if(li.prev().is(':last-child')) {
                 li.prev().removeClass('beforeRemove');
             }
             if(li.next().is(':first-child')) {
                 li.next().removeClass('afterRemove');
             }
             setTimeout(function() {
                 li.prev().removeClass('beforeRemove');
                 li.next().removeClass('afterRemove');
             }, 200);

             li.slideUp(400, function() {
                 li.remove();
                 select.removeClass('clicked');
             });
         }, 600);
         }
         });

         $(document).on('click', '.selectMultiple > div a', function(e) {
         var select = $(this).parent().parent();
         var self = $(this);
         self.removeClass().addClass('remove');
         select.addClass('open');
         setTimeout(function() {
         self.addClass('disappear');
         setTimeout(function() {
             self.animate({
                 width: 0,
                 height: 0,
                 padding: 0,
                 margin: 0
             }, 300, function() {
                 var li = $('<li />').text(self.children('em').text()).addClass('notShown').appendTo(select.find('ul'));
                 li.slideDown(400, function() {
                     li.addClass('show');
                     setTimeout(function() {
                         select.find('option:contains(' + self.children('em').text() + ')').prop('selected', false);
                         if(!select.find('option:selected').length) {
                             select.children('div').children('span').removeClass('hide');
                         }
                         li.removeClass();
                     }, 400);
                 });
                 self.remove();
             })
         }, 300);
         }, 400);
         });

         $(document).on('click', '.selectMultiple > div .arrow, .selectMultiple > div span', function(e) {
         $(this).parent().parent().toggleClass('open');
         });

         $('body').click(function(){
         $('.selectMultiple').removeClass('open')
         });

         });

      </script>
   </body>
</html>