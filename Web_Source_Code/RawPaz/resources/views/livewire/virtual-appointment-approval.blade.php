<div wire:ignore.self class="modal fade success_popup" id="virtualMeetingModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="optValidateLabel" aria-hidden="true">
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
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    {{-- <div class="modal-body">
        <h5>Loading, Please wait...</h5>
      </div> --}}
      <div class="modal-body" wire:loading.class="loadingclass">
        <div class="formholder">
        <h2>Send Appointment Meeting Link</h2>
            <form wire:submit.prevent="updateStatusForVirtualAppointment">
    <div class="form-group">
        <label for="date">Meeting Link</label>
        <input type="text" class="form-control" id="" placeholder="Please enter Meeting Link" wire:model.defer="meetingLink">
        @error('meetingLink') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label for="date">Username</label>
        <input type="text" class="form-control" id="" placeholder="Please enter Meeting Username" wire:model.defer="meetingUsername">
        @error('meetingUsername') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label for="date">Password</label>
        <input type="text" class="form-control" id="" placeholder="Please enter Meeting Password" wire:model.defer="meetingPassword">
        @error('meetingPassword') <span class="text-danger">{{ $message }}</span> @enderror
    </div>


    <div class="form-group btn_grp">
                <br>
                <button type="submit" wire:click="updateStatusForVirtualAppointment()" class="btn_started">Send Appointment Meeting Link</button>
                <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn_started">Cancel</button>
                <br>
                <br>
            </div>
</form>
        </div>
         

      </div>
    </div>
  </div>


  <style>
    
    .formholder {
        max-width: 80%;
        margin: 25px auto;
    }
    .formholder h2{
        color:#000;
        margin-top:25px
    }

  </style>
</div>