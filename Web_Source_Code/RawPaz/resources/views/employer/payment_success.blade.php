@extends('employer.main')
@section('main')

<section class="bdy_cont box_messg">
    <div class="body_thnks ">
        <div class="box succ_box">
          <div class="img_ic">
            <img src="{{ asset('assets/images/payment-successful.gif') }}" alt="">
          </div>
           <p class="succ_txt">Payment Successful</p>
            <h4 > Congratulations! Your payment has been successfully processed.</h4>
            <h6>We appreciate your business and want to thank you for choosing our services.</h6>
            <hr>
            <h5>Go to <a href="{{ route('employer.dashboard') }}">Dashboard</a> to add employees  </h5>

        </div>
    </div>
  </section>

  @endsection