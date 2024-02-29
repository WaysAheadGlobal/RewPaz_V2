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

    <!----------------------------Banner------------------------------------------->
    <section class="banner_home form_sect">
        <div class="banner_sect">
            <div class="left_banner">
                <div class="logo_head">
                    <img src="{{asset('assets/images/logo.png')}}" alt="">
                </div>
                <div class="banner_circle">
                    <img src="{{asset('assets/images/circle.png')}}" alt="">
                </div>
                <div class="banner_bx">
                    <img src="{{asset('assets/images/banner_3.png')}}" alt="">
                </div>
            </div>
            <div class="sign_form">

                <div class="sign_scrller">
                    <h4 class="heading_sign"><a href="{{ url('/') }}">Home</a></h4>
                    <h5>Login</h5>
                    <p>Don’t have an account?  <a href="{{ route('employer.signup') }}">Sign up</a></p>
                    <h6>Please choose account type:</h5>
                        <div class="tab_list_login">
                            <button class="btn active">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 20C7.58 20 4 16.42 4 12C4 7.58 7.58 4 12 4C16.42 4 20 7.58 20 12C20 16.42 16.42 20 12 20Z" fill="#0068C4"/>
                                        <path d="M12 17C14.7614 17 17 14.7614 17 12C17 9.23858 14.7614 7 12 7C9.23858 7 7 9.23858 7 12C7 14.7614 9.23858 17 12 17Z" fill="#0068C4"/>
                                      </svg>
                                </span>
                                <span>Employer</span>
                            </button>
                            <button class="btn"><a href="{{route('employee.login')}}">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM10 18C5.58 18 2 14.42 2 10C2 5.58 5.58 2 10 2C14.42 2 18 5.58 18 10C18 14.42 14.42 18 10 18Z" fill="#D9D9D9"/>
                                  </svg></span>
                                <span>Employee</span>
                            </a></button>
                           <button class="btn"> <a href="{{route('professional.login')}}">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM10 18C5.58 18 2 14.42 2 10C2 5.58 5.58 2 10 2C14.42 2 18 5.58 18 10C18 14.42 14.42 18 10 18Z" fill="#D9D9D9"/>
                                  </svg></span>
                                <span>Professional</span>
                            </a></button>

                        </div>

                        @if (session('error'))
                        <div class="alert alert-danger text-center" role="alert">
                            <span  style="font-size: 15px;">{{session('error')}}</span>
                        </div>
                        @endif
                        @if (session('success'))
                        <div class="alert alert-success text-center" role="alert">
                            <span style="font-size: 15px;">{{session('success')}}</span>
                        </div>
                        @endif
                        <form action="{{ route('employer.emprLogin') }}" method="post">
                            @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="frm_grp">
                                            <label for="">Phone No*<sup>*</sup> </label>
                                            <input type="text" placeholder="Phone No" class="form-control" name="phone"  id="phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="frm_grp frm_grp_btn">
                                            <a onclick="SendOTP();" class="btn btn-primary">Send OTP</a>
                                        </div>
                                    </div>
                                </div>
                                @error('email')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="col-sm-12">
                                <div class="frm_frog">
                                    <div class="otp_grp" id="OTPDiv" style="display:none;">
                                        <input type="text" placeholder="*" class="form-control otp-input" name="otp1" maxlength="1" value="{{old('otp1')}}">
                                        <input type="text" placeholder="*" class="form-control otp-input" name="otp2" maxlength="1" value="{{old('otp2')}}">
                                        <input type="text" placeholder="*" class="form-control otp-input" name="otp3" maxlength="1" value="{{old('otp3')}}">
                                        <input type="text" placeholder="*" class="form-control otp-input" name="otp4" maxlength="1" value="{{old('otp4')}}">
                                    </div>
                                    <div class="pass_rest">
                                        <!-- OTP :- 1234 -->
                                        <!-- 00:14 <a href="#">Resend OTP</a> -->
                                    </div>
                                </div>
                                @error('otp1')
                                    <small class="text-danger">{{$message}}</small><br>
                                @enderror
                                @error('otp2')
                                    <small class="text-danger">{{$message}}</small><br>
                                @enderror
                                @error('otp3')
                                    <small class="text-danger">{{$message}}</small><br>
                                @enderror
                                @error('otp4')
                                    <small class="text-danger">{{$message}}</small><br>
                                @enderror
                            </div>
                            <div class="loonApplt_btn" id="LoginDiv" style="display:none;">
                                <div class="btn_grp text-center">
                                    <button class="btn">Login</button>
                                </div>
                            </div>


                            <div class="col-sm-12">
                                <div class="more_opt">
                                    <p><span class="line">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="179" height="7"
                                                viewBox="0 0 179 7" fill="none">
                                                <path
                                                    d="M0.113249 3.26563L3 6.15238L5.88675 3.26562L3 0.378874L0.113249 3.26563ZM178.887 3.26561L176 0.378858L173.113 3.26561L176 6.15236L178.887 3.26561ZM3 3.76562L176 3.76561L176 2.76561L3 2.76562L3 3.76562Z"
                                                    fill="#676767" />
                                            </svg>
                                        </span>Or sign in with<span class="line_un">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="179" height="7"
                                                viewBox="0 0 179 7" fill="none">
                                                <path
                                                    d="M0.113249 3.26563L3 6.15238L5.88675 3.26562L3 0.378874L0.113249 3.26563ZM178.887 3.26561L176 0.378858L173.113 3.26561L176 6.15236L178.887 3.26561ZM3 3.76562L176 3.76561L176 2.76561L3 2.76562L3 3.76562Z"
                                                    fill="#676767" />
                                            </svg>
                                        </span></p>
                                        <ul class="social_list2">
                                            <!-- <li>
                                                <div class="box">
                                                    <a href="">
                                                    <div class="icon"><img src="{{asset('assets/images/colud.png')}}" alt=""></div>
                                                    <p>SSO</p></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="box">
                                                    <a href="">
                                                    <div class="icon"><img src="{{asset('assets/images/apple_ic.png')}}" alt=""></div>
                                                    <p>Apple</p></a>
                                                </div>
                                            </li> -->
                                            <li>
                                                <div class="box">
                                                    <a href="{{ url('Honey/test.php') }}">
                                                    <div class="icon"><img src="{{asset('assets/images/Google_Icons.png')}}" alt=""></div>
                                                    <p>Google</p></a>
                                                </div>
                                            </li>
                                            <!-- <li>
                                                <div class="box">
                                                    <a href="">
                                                    <div class="icon"><img src="{{asset('assets/images/outlook.png')}}" alt=""></div>
                                                    <p>Outlook</p></a>
                                                </div>
                                            </li> -->
                                        </ul>
                                </div>
                            </div>
                        </div>
                        </form>
                </div>
            </div>

        </div>

    </section>
    <!----------------------------Banner- End------------------------------------------>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>

        var otpInputs = document.querySelectorAll('.otp-input');

        otpInputs.forEach(function(input, index) {
            input.addEventListener('input', function() {
            if (this.value.length >= 1) {
                if (index < otpInputs.length - 1) {
                otpInputs[index + 1].focus();
                }
            }
            });

            input.addEventListener('keydown', function(event) {
            if (event.key === 'Backspace' && this.value.length === 0) {
                if (index > 0) {
                otpInputs[index - 1].focus();
                }
            }
            });
        });

        function SendOTP()
        {
            var phone = $('#phone').val();
            if(phone=='')
            {
                alert('Enter Phone No.');
            }
            else if(phone!="")
            {
                 if(!validateNumber(phone))
                 {
                     alert('Enter Valid Phone.');
                 }
                 else
                 {

                    $.ajax({
                      url : "{{url('/employer/SendOTP')}}"+'/'+phone,
                      type: "GET",
                      dataType: 'json',
                      data : {},
                      success:function(a){
                        if(a.status==1){
                            $('#OTPDiv').show();
                            $('#LoginDiv').show();
                        }else{
                          alert(a.ErrorMsg);
                        }
                      }
                    });
                    
                 }
            }
            
        }
        function validateNumber(phone)
         {
             var re = /^\d+$/;
             return re.test(phone);
         }
        function validateEmail(email)
         {
             var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
             return re.test(email);
         }
    </script>

    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('assets/js/jquery-2.1.0.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('assets/js/animate.js')}}"></script>
    <script src="{{asset('assets/js/dash_custom.js')}}"></script>

</body>

</html>