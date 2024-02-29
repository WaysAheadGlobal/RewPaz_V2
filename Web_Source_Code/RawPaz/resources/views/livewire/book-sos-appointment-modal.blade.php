<div wire:ignore.self class="modal fade cust_popup cust_popup3" id="sos-appointment-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    <style>

.loadingclass{
  position:relative
}
.loadingclass::after {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    background: #fffffff2;
    content: 'Loading, Please wait..';
    display: flex;
    /* align-items: flex-start; */
    justify-content: center;
    padding-top: 70px;
    font-size: 22px;
    font-weight: 800;
}
</style>
      <div class="modal-body" wire:loading.class="loadingclass">
        <div class="Token_popup">
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.707 6.70697L17.293 5.29297L12 10.586L6.70697 5.29297L5.29297 6.70697L10.586 12L5.29297 17.293L6.70697 18.707L12 13.414L17.293 18.707L18.707 17.293L13.414 12L18.707 6.70697Z" fill="#636D79" />
              </svg>
            </span>
          </button>
          <h3 style="color:#f00">Book SOS Appointment</h3>
          <div class="Appoint_modal text-center">
            {{-- <h5 style="margin: 25px 0 50px">Please Book my SOS Apoointment</h5> --}}
          </div>
        <h5 style="color:blue;font-weight:600">!! Disclamer !!</h5>
          <p style="line-height: 1.1;font-size: 13px;color: red; text-align: justify;">
            The SOS (Save Our Souls) or emergency appointment service provided herein is intended to offer immediate support to individuals experiencing urgent situations. It is crucial for employees seeking an emergency appointment to disclose the nature of their emergency to the professional facilitating the appointment. The professional retains the right to accept or reject the emergency appointment request based on the information provided and their discretion.
          </p>
          <div>

            @if (session()->has('error'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Failed!</strong> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>



        <div class="btn_grp_dash btn_last">
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" wire:model.defer="sosAppointmentType" value="chat" class="form-check-input"  name="sessType"> Chat
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="radio" value="video" class="form-check-input" wire:model.defer="sosAppointmentType"  name="sessType"> Video</label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="radio" name="sessType" value="audio" class="form-check-input" wire:model.defer="sosAppointmentType" > Audio
            </label>
          </div>
          </div>
          <div class="btn_grp_dash btn_last">
            @error('sosAppointmentType') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
          <div class="btn_grp_dash btn_last">
            <button class="btn" wire:click="bookSOSAppointment()">Send Request</button>
            <button class="btn" wire:click.prevent data-bs-dismiss="modal" aria-label="Close"> Cancel</button>
          </div>
          </div>

        </div>
      </div>
    </div>
  </div>