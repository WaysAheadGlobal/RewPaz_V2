<div wire:ignore.self class="modal fade cust_popup cust_popup3" id="professionalassignment-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
          <h3>Assign Professional</h3>
          <div class="Appoint_modal">
            <div class="hd_txt">
              <h3>Appointment details</h3>
            </div>
            <ul>
              <li><span>Name:</span><span>{{$serviceSeeker}}</span></li>
              <li><span>Appointment ID: </span><span> {{$appointmentCodeId}}</span></li>
              <li><span>Session Type: </span><span>{{$session}}</span></li>
              <li><span>Date & Time: </span><span>{{date(('M d Y'), strtotime($appointmentDate))}}</span></li>
            </ul>
            <br>
            <h5>Available Professionals</h5>
            <p>Click on check box to assign to available professional.</p>
          </div>
          <div wire:loading>Getting Professionals List, Please wait...</div>
          @if ($professionals)
          <div wire:loading.remove>
          @forelse ($professionals as $professional)
            <div class="MODALprof_avil_list">
            <div class="img_bx">
              {{-- <img src="{{asset('assets/images/team.png')}}" alt=""> --}}
            </div>
            <div class="us_name">
              <h3>{{$professional->name}}</h3>
            </div>
            <button class="btn available_btn"> available</button>
            <div class="check_avil">
              <div class="loonApplt_btn">
                <div class="iagt">
                  {{-- <label for="plan{{$professional->user_id}}" class="agrtrms"> --}}
                  {{-- <input type="chekbox" name="prof" value="{{$professional->user_id}}" wire:model.defer="newProfessional_id" id="plan{{$professional->user_id}}"> --}}
                  {{-- <span class="agrchckmrk"></span></label> --}}
                  <input type="radio" name="selectprof" value="{{$professional->user_id}}" wire:model.defer="newProfessional_id" id="{{$professional->user_id}}">

                </div>
              </div>
            </div>
          </div>

          @empty
            No matched found
          @endforelse


          <div class="btn_grp_dash btn_last">
            <button class="btn" wire:click="updateProfessional('456')">Confirm & Assign</button>
            <button class="btn" wire:click.prevent data-bs-dismiss="modal" aria-label="Close">Back</button>
          </div>
          </div>
          @endif

        </div>
      </div>
    </div>
  </div>
</div>