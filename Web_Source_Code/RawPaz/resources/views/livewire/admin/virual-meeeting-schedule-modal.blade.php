<div wire:ignore.self class="modal fade cust_popup cust_popup3" id="sos-appointment-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <div class="Token_popup">
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.707 6.70697L17.293 5.29297L12 10.586L6.70697 5.29297L5.29297 6.70697L10.586 12L5.29297 17.293L6.70697 18.707L12 13.414L17.293 18.707L18.707 17.293L13.414 12L18.707 6.70697Z" fill="#636D79" />
              </svg>
            </span>
          </button>
          <h4 style="color:#FDB400;font-weight:700;">Send Virtual Meeting Details</h4>

          <form wire:submit.prevent="submit">
    <div class="form-group">
        <label for="date">Meeting Link</label>
        <input type="text" class="form-control" id="" placeholder="Please enter Meeting Link" wire:model="meetingLink">
        @error('meetingLink') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label for="date">Username</label>
        <input type="text" class="form-control" id="" placeholder="Please enter Meeting Link" wire:model="meetingUsername">
        @error('meetingUsername') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label for="date">Password</label>
        <input type="text" class="form-control" id="" placeholder="Please enter Meeting Link" wire:model="meetingPassword">
        @error('meetingPassword') <span class="text-danger">{{ $message }}</span> @enderror
    </div>


    <div class="form-group btn_grp">
                <br>
                <button type="submit" class="btn_started">Send Virtual Meeting Details</button>
                <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn_started">Cancel</button>
                <br>
                <br>
            </div>
</form>


          </div>

        </div>
      </div>
    </div>
  </div>