<div wire:init='openOtpModal' wire:ignore.self class="modal fade success_popup" id="optValidateModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="optValidateLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12 text-center">
            <div class="verif_popup">
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><img src="../assets/images/close_popup.png" alt=""></span>
              </button>
              <div class="icon">
                <img src="{{asset('assets/images/lock_img.png')}}" alt="">
              </div>
              <h3>Enter verification code</h3>
              <form wire:submit="submitOtp()">
              <div class="frm_frog">
                <div class="otp_grp">
                  <input type="text" name="otp1" wire:model.defer='otp.otp1' placeholder="*" class="form-control otp-input">
                  <input type="text" name="otp2" wire:model.defer='otp.otp2' placeholder="*" class="form-control otp-input">
                  <input type="text" name="otp3" wire:model.defer='otp.otp3' placeholder="*" class="form-control otp-input">
                  <input type="text" name="otp4" wire:model.defer='otp.otp4' placeholder="*" class="form-control otp-input">
                </div>
                <div class="pass_rest">
                  {{-- 00:14 <a href="#">Resend OTP</a> --}}
                  Enter : 1234<a href="#"></a>
                </div>
              </div>
               @if (session()->has('otpfailed'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert" style="max-width:500px; margin:25px auto;">
                <strong>Failed!</strong> {{ session('otpfailed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
              <div class="row">
                <div class="col-sm-12 text-center">
                  <div class="btn_grp">
                    <a class="btn" onclick="history.back()">Back </a>
                    <button class="btn" wire:click.prevent='submitOtp()'>Submit</button>
                  </div>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>