<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RewPaz-sign Up</title>
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
                    <p>Have an account? <a href="{{ route('employer.login') }}">Login</a></p>
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
                            <button class="btn"><a href="{{route('employee.signup')}}">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM10 18C5.58 18 2 14.42 2 10C2 5.58 5.58 2 10 2C14.42 2 18 5.58 18 10C18 14.42 14.42 18 10 18Z" fill="#D9D9D9"/>
                                  </svg></span>
                                <span>Employee</span>
                            </a></button>
                            <button class="btn"><a href="{{route('professional.signup')}}">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM10 18C5.58 18 2 14.42 2 10C2 5.58 5.58 2 10 2C14.42 2 18 5.58 18 10C18 14.42 14.42 18 10 18Z" fill="#D9D9D9"/>
                                  </svg></span>
                                <span>Professional</span>
                            </a></button>

                        </div>
                        <form action="{{ route('employer.sign-up') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="frm_grp">
                                        <label for="">Company Name <sup>*</sup> </label>
                                        <input type="text" placeholder="Company Name" class="form-control" value="{{ old('company_name') }}" name="company_name">
                                        @error('company_name')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="frm_grp">
                                        <label for="">Official E-mail ID<sup>*</sup> </label>
                                        <input type="text" placeholder="E-mail ID" class="form-control" name="email" value="{{old('email')}}">
                                        @error('email')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="frm_grp">
                                        <label for="">Full Name<sup>*</sup> </label>
                                        <input type="text" placeholder="Full Name" class="form-control" name="name" value="{{old('name')}}">
                                        @error('name')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="frm_grp select_icon">
                                        <label for="">Company size<sup>*</sup></label>
                                        <select class="form-control" name="company_size">
                                            <option value="">--please select--</option>
                                            <option value="1-25"  {{ ( '1-25' == old('company_size')) ? 'selected' : '' }}>1-25</option>
                                            <option value="25-100"  {{ ( '25-100' == old('company_size')) ? 'selected' : '' }}>25-100</option>
                                            <option value="100-250"  {{ ( '100-250' == old('company_size')) ? 'selected' : '' }}>100-250</option>

                                        </select>
                                        @error('company_size')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="frm_grp upl_file">
                                        <label for="">Company License<sup>*</sup></label>
                                        <div class="frm_grp">
                                            <div class="input-group">
                                                <input type="text" class="form-control PostImages hasvalue" placeholder="Please select file" style="padding-left: 108px;">
                                                <label class="input-group-btn label_nrm">
                                                    <span class="btn btn-primary">Choose File
                                                        <input type="file" name="company_licence" style="display: none;"></span>
                                                </label>
                                                @error('company_licence')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="frm_grp select_icon">
                                        <label for="">Job Role<sup>*</sup></label>
                                        <select class="form-control" name="job_role">
                                            <option value="">--please select--</option>
                                            <option value="Human Resource" {{ ( 'Human Resource' == old('job_role')) ? 'selected' : '' }}>Human Resource</option>
                                            <option value="Owner" {{ ( 'Owner' == old('job_role')) ? 'selected' : '' }}>Owner</option>
                                            <option value="HR" {{ ( 'HR' == old('job_role')) ? 'selected' : '' }}>HR</option>
                                            <option value="Finance Team" {{ ( 'Finance Team' == old('job_role')) ? 'selected' : '' }}>Finance Team</option>

                                        </select>
                                        @error('job_role')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
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
                                </div> -->
                                <div class="col-sm-12">
                                    <div class="loonApplt_btn">
                                        <div class="iagt">

                                            <label for="plan" class="agrtrms">
                                                <input type="checkbox" id="plan"  class="chki" name="is_agree" value="1">
                                                <span class="agrchckmrk"></span>I agree with <a href="#">terms &amp;
                                                    conditions</a> and <a href="javascript:void(0)">privacy policy</a> of RewPaz solutions
                                                Inc.</label>
                                        </div>
                                        <div class="btn_grp text-center">
                                            <!-- <input type="submit" name="" value="submit"> -->
                                            <button class="btn" >Sign up</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
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
                                                    <div class="icon"><img src="{{asset('assets/images/colud.png')}}" alt=""></div>
                                                    <p>Sign up with SOS</p>
                                                </a>
                                            </div>
                                        </li>

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