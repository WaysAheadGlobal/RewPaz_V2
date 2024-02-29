@extends('professional.inner-template')
@section('inner-template')
<style>
  .chat_sect_bx {
  width: 500px;
  max-width: 100%;
  margin: 0 auto;
  }
  .chat_sect_right {
  max-width: 100%;
  flex: 1;
  }
  .chat_sect_right .chat_footer .chat-foot {
  width: calc(100% - 20px);
  left: 10px;
  bottom: 5px;
  }
  .chat_sect_bx .chat-mss.rply-mss ul li p span {
    background: none;
  }
  .chat-box form button{
    position:absolute;
    right:0;
    top:5px;
    border:none;
    right:15px
  }
</style>
<div class="content-wrapper">
  <div class="row" id="proBanner">
    <div class="col-sm-12">
      <div class="dashboard_rgt">
        <div class="heading_bx">
          <h3>Chat With your Consultant</h3>
        </div>


                  @php
                    $serviceSeeker = $appointment->created_by;
                    $serviceProvider = $appointment->professional_id;
                    $data = [
                              'serviceSeeker' => $serviceSeeker,
                              'serviceProvider' => $serviceProvider,
                              'senderName' => $appointment->name,
                              'senderRole' => $appointment->role,
                              'appoitmentId' => $appointment->uid
                            ];
                  @endphp

                 @livewire('messages', compact('data'))

                </div>


          </div>
        </div>
      </div>

@endsection

@section('script')
<script>


window.addEventListener('initSomething', event => {
  // $('#optValidateModal').modal('show');
})


window.addEventListener('open-otp-modal', event => {
    $('#optValidateModal').modal('show');
    // alert('yes')
})

window.addEventListener('close-modal', event => {
    $('#optValidateModal').modal('hide');
})

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
@endsection
