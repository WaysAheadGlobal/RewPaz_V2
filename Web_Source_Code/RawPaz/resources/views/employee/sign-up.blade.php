<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RewPaz-Sign Up</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}"/>

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
    <style>
        .banner_bx { top: 30px }   
     </style>
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
                    <h5>Sign up</h5>
                    <p>Have an account? <a href="{{ route('employee.login') }}">Login</a></p>
                    <h6>Please choose account type:</h5>
                        <div class="tab_list_login">
                            <button class="btn "><a href="{{route('employer.signup')}}">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM10 18C5.58 18 2 14.42 2 10C2 5.58 5.58 2 10 2C14.42 2 18 5.58 18 10C18 14.42 14.42 18 10 18Z" fill="#D9D9D9"/>
                                  </svg></span>

                                <span>Employer</span>
                            </a></button>
                            <button class="btn active">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 20C7.58 20 4 16.42 4 12C4 7.58 7.58 4 12 4C16.42 4 20 7.58 20 12C20 16.42 16.42 20 12 20Z" fill="#0068C4"/>
                                        <path d="M12 17C14.7614 17 17 14.7614 17 12C17 9.23858 14.7614 7 12 7C9.23858 7 7 9.23858 7 12C7 14.7614 9.23858 17 12 17Z" fill="#0068C4"/>
                                      </svg>
                                </span>
                                <span>Employee</span>
                            </button>
                            <button class="btn"><a href="{{route('professional.signup')}}">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM10 18C5.58 18 2 14.42 2 10C2 5.58 5.58 2 10 2C14.42 2 18 5.58 18 10C18 14.42 14.42 18 10 18Z" fill="#D9D9D9"/>
                                  </svg></span>
                                <span>Professional</span>
                            </a></button>

                        </div>
                        <form action="{{ route('employee.sign-up') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="frm_grp">
                                        <label for="">Full Name <sup>*</sup> </label>
                                        <input type="text" placeholder="Name" class="form-control" value="{{ old('name') }}" name="name">

                                    </div>
                                    @error('name')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="frm_grp">
                                        <label for="">Official E-mail ID<sup>*</sup> </label>
                                        <input type="text" placeholder="E-mail ID" class="form-control" name="email" value="{{ old('email') }}">

                                    </div>
                                    @error('email')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="frm_grp">
                                        <label for="">Referral Code<sup>*</sup> </label>
                                        <input type="text" placeholder="Referral Code" class="form-control" name="referral_code" value="{{ old('referral_code') }}">

                                    </div>
                                    @error('referral_code')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="frm_grp">
                                        <label for="">Year of Birth<sup>*</sup> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <path d="M6.99984 12.8337C3.77809 12.8337 1.1665 10.2221 1.1665 7.00033C1.1665 3.77858 3.77809 1.16699 6.99984 1.16699C10.2216 1.16699 12.8332 3.77858 12.8332 7.00033C12.8332 10.2221 10.2216 12.8337 6.99984 12.8337ZM6.99984 11.667C8.23751 11.667 9.4245 11.1753 10.2997 10.3002C11.1748 9.42499 11.6665 8.238 11.6665 7.00033C11.6665 5.76265 11.1748 4.57566 10.2997 3.70049C9.4245 2.82532 8.23751 2.33366 6.99984 2.33366C5.76216 2.33366 4.57518 2.82532 3.70001 3.70049C2.82484 4.57566 2.33317 5.76265 2.33317 7.00033C2.33317 8.238 2.82484 9.42499 3.70001 10.3002C4.57518 11.1753 5.76216 11.667 6.99984 11.667ZM6.4165 4.08366H7.58317V5.25033H6.4165V4.08366ZM6.4165 6.41699H7.58317V9.91699H6.4165V6.41699Z" fill="#CCCCCC"/>
                                        </svg></label>
                                        <input type="text" placeholder="Year of Birth" class="form-control" name="birth_year" value="{{ old('birth_year') }}">


                                    </div>
                                    @error('birth_year')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="frm_grp select_icon">
                                        <label for="">Gender<sup>*</sup></label>
                                        <select class="form-control" name="gender">
                                            <option value="">--please select--</option>
                                            <option value="Male" {{ ('Male' == old('gender')) ? 'selected':'' }}>Male</option>
                                            <option value="Female" {{ ('Female' == old('gender')) ? 'selected':'' }}>Female</option>
                                            <option value="Others" {{ ('Others' == old('gender')) ? 'selected':'' }}>Others</option>

                                        </select>


                                    </div>
                                    @error('gender')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="frm_grp">
                                        <label for="">Zip Code<sup>*</sup><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <path d="M6.99984 12.8337C3.77809 12.8337 1.1665 10.2221 1.1665 7.00033C1.1665 3.77858 3.77809 1.16699 6.99984 1.16699C10.2216 1.16699 12.8332 3.77858 12.8332 7.00033C12.8332 10.2221 10.2216 12.8337 6.99984 12.8337ZM6.99984 11.667C8.23751 11.667 9.4245 11.1753 10.2997 10.3002C11.1748 9.42499 11.6665 8.238 11.6665 7.00033C11.6665 5.76265 11.1748 4.57566 10.2997 3.70049C9.4245 2.82532 8.23751 2.33366 6.99984 2.33366C5.76216 2.33366 4.57518 2.82532 3.70001 3.70049C2.82484 4.57566 2.33317 5.76265 2.33317 7.00033C2.33317 8.238 2.82484 9.42499 3.70001 10.3002C4.57518 11.1753 5.76216 11.667 6.99984 11.667ZM6.4165 4.08366H7.58317V5.25033H6.4165V4.08366ZM6.4165 6.41699H7.58317V9.91699H6.4165V6.41699Z" fill="#CCCCCC"/>
                                        </svg></label>
                                        <input type="text" placeholder="Zip Code" maxlength="6" class="form-control" name="zip_code" value="{{ old('zip_code') }}">


                                    </div>
                                    @error('zip_code')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                 <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="frm_grp select_icon">
                                        <label for="">Country Code<sup>*</sup></label>
                                        <select class="form-control" name="c_code">
                                            <option value="+1" {{ ( '+1' == old('c_code')) ? 'selected' : '' }}>+1</option>
                                            <option value="+91" {{ ( '+91' == old('c_code')) ? 'selected' : '' }}>+91</option>
                                        </select>
                                        @error('c_code')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="frm_grp">
                                        <label for="">Phone No<sup>*</sup> </label>
                                        <input type="text" placeholder="Phone No" class="form-control" name="phone" value="{{old('phone')}}">
                                        @error('phone')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="frm_grp select_icon">
                                        <label for="">Department<sup>*</sup></label>
                                        <select class="form-control" name="department">
                                            <option value="">Select Department</option>
                                            @if(!empty($departments))
                                            @foreach($departments as $d)
                                            <option value="{{$d->id}}" {{ ($d->id == old('departments')) ? 'selected':'' }}>{{$d->departments}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    @error('department')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="frm_grp">
                                        <label for="">Employee Code<sup>*</sup> </label>
                                        <input type="text" placeholder="Employee Code" class="form-control" name="employee_id" value="{{old('employee_id')}}">
                                        @error('employee_id')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <!-- <div class="col-sm-12">
                                    <div class="frm_frog">
                                        <div class="otp_grp">
                                            <input type="text" placeholder="*" class="form-control otp-input" name="otp1" maxlength="1" value="{{old('otp1')}}">
                                            <input type="text" placeholder="*" class="form-control otp-input" name="otp2" maxlength="1" value="{{old('otp2')}}">
                                            <input type="text" placeholder="*" class="form-control otp-input" name="otp3" maxlength="1" value="{{old('otp3')}}">
                                            <input type="text" placeholder="*" class="form-control otp-input" name="otp4" maxlength="1" value="{{old('otp4')}}">
                                        </div>
                                        <div class="pass_rest">
                                            OTP :- 1234
                                        </div>
                                    </div>
                                    @error('otp1')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                    @error('otp2')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                    @error('otp3')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                    @error('otp4')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div> -->
                                <div class="col-sm-12">
                                    <div class="loonApplt_btn">
                                        <div class="iagt" style="margin-bottom: 25px;">

                                            <label for="plan" class="agrtrms">
                                                <input type="checkbox" id="plan"  class="chki" name="is_agree2">
                                                <span class="agrchckmrk"></span>RewPaz Solution Inc. will collect and store your information
                                            </label>
                                        </div>
                                        <div class="iagt">

                                            <label for="plan2" class="agrtrms">
                                                <input type="checkbox" id="plan2"  class="chki" name="is_agree">
                                                <span class="agrchckmrk"></span>I agree with <a href="#">terms &amp;
                                                    conditions</a> and <a href="#">privacy policy</a> of RewPaz solutions
                                                Inc.</label>
                                        </div>
                                        <div class="btn_grp text-center">
                                            <button class="btn">Sign up</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-sm-12">
                                    <div class="more_opt">
                                        <p><span class="line">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="179" height="7" viewBox="0 0 179 7" fill="none">
                                                    <path d="M0.113249 3.26563L3 6.15238L5.88675 3.26562L3 0.378874L0.113249 3.26563ZM178.887 3.26561L176 0.378858L173.113 3.26561L176 6.15236L178.887 3.26561ZM3 3.76562L176 3.76561L176 2.76561L3 2.76562L3 3.76562Z" fill="#676767"></path>
                                                </svg>
                                            </span>Or<span class="line_un">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="179" height="7" viewBox="0 0 179 7" fill="none">
                                                    <path d="M0.113249 3.26563L3 6.15238L5.88675 3.26562L3 0.378874L0.113249 3.26563ZM178.887 3.26561L176 0.378858L173.113 3.26561L176 6.15236L178.887 3.26561ZM3 3.76562L176 3.76561L176 2.76561L3 2.76562L3 3.76562Z" fill="#676767"></path>
                                                </svg>
                                            </span></p>
                                        <ul class="social_list">
                                            <li>
                                                <div class="box">
                                                    <a href="">
                                                        <div class="icon"><img src="assets/images/colud.png')}}" alt=""></div>
                                                        <p>Sign up with SOS</p>
                                                    </a>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                        </form>
                </div>
            </div>

        </div>

    </section>
    <!----------------------------Banner- End------------------------------------------>
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