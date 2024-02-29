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

<body style="background: linear-gradient(160deg, #0068C4 0%, #00A7C5 100%);
box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
">

    <!----------------------------Banner------------------------------------------->
    <section class="banner_home form_sect admin_login">
        <div class="banner_sect">
            <div class="left_banner">
                <div class="banner_circle">
                    <img src="{{asset('assets/images/circle.png')}}" alt="">
                </div>
                <div class="banner_bx">
                    <img src="{{asset('assets/images/banner_3.png')}}" alt="">
                </div>
            </div>
            <div class="admin_frm">
                <div class="card_bx">
                <div>
                    @if (session('error'))
                    <div class="alert alert-danger text-center" role="alert">
                        <span  style="font-size: 15px;">{{session('error')}}</span>
                    </div>
                    <!-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Failed!</strong> {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> -->
                    @endif
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong></strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <!-- <div class="alert alert-success text-center" role="alert">
                        <span style="font-size: 15px;">{{session('success')}}</span>
                    </div> -->
                    @endif
                </div>

                    <h3>ADMIN LOGIN</h3>
                    <form action="{{route('admin.adminLogin')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="frm_grp">
                                    <label for="">Official E-mail ID<sup>*</sup> </label>
                                    <input type="text" placeholder="E-mail ID" class="form-control" name="email" value="{{old('email')}}">

                                </div>
                                @error('email')
                                    <small class="text-danger">{{$message}}</small><br>
                                @enderror
                            </div>
                            <div class="col-sm-12">
                                <div class="frm_frog">
                                    <div class="otp_grp">
                                        <input type="text" placeholder="*" class="form-control otp-input" name="otp1" maxlength="1" value="{{old('otp1')}}">
                                        <input type="text" placeholder="*" class="form-control otp-input" name="otp2" maxlength="1" value="{{old('otp2')}}">
                                        <input type="text" placeholder="*" class="form-control otp-input" name="otp3" maxlength="1" value="{{old('otp3')}}">
                                        <input type="text" placeholder="*" class="form-control otp-input" name="otp4" maxlength="1" value="{{old('otp4')}}">
                                    </div>
                                    <div class="pass_rest">
                                        OTP :- 1234
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
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-sm-12">
                                <div class="btn_grp text-center">
                                    <button class="btn">Login</button>
                                </div>
                            </div>
                            <div class="col-sm-12">
                            <div class="text-center">
                                <a href="#"><img src="{{asset('assets/images/logo.png')}}" alt=""></a>
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