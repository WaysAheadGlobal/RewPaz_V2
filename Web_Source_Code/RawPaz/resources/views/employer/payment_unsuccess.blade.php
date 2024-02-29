@extends('employer.main')
@section('main')
<section class="bdy_cont box_messg">
    <div class="body_thnks">
        <div class="box">
          <div class="img_ic">
            <img src="{{ asset('assets/images/payment-failed.gif') }}" alt="">
          </div>
            <p class="fail_txt">Payment Failed</p>
            <h4>We're sorry, but your transaction could not be processed at this time.
                Please check your payment method and try it again</h4>
            <div class="btn_grp">
                    <button class="btn"> <a href="javascript:void(0)">try it again</a></button>
            </div>
        </div>
    </div>
  </section>

@endsection