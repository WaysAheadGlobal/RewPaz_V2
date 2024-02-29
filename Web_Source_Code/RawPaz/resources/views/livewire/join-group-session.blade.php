<form wire:submit.prevent="save" wire:loading.class="loadingclass">

  
    <div class="form-group btn_grp">
        <div style="text-align: center;
    margin: 30px 0 55px;">
            <h2>Group Sesion Schedule</h2>
            <h4>Group Session Will be Started from 20, Septemeber 2023</h4>
        </div>
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
    </div>
    <div class="form-group btn_grp" style="max-width: 80%;margin: 0 auto;">
        <div class="col-12">
            @if (session()->has('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
          @endif

           @if (session()->has('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
          @endif
        </div>
        <div class="col-12">
            <div class="row">
            
            
                <div class="col-md-4">
                    <h3 style="font-size: 22px; font-weight: 800;">Select Day</h3>
                </div>
                <div class="col-md-8">
                    <div class="">
          @php
             $availability_days =  explode(',',$professionalDetails->availability_days);

             $availability_time =  explode(',',$professionalDetails->availability_time);
             
          @endphp
@foreach ($availability_days as $days)
    
                        <div class="form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" wire:model.defer="daySelected" name="daySelected" value="{{$days}}"> {{$days}}
            </label>
          </div>
@endforeach

          </div>
                </div>


    @error('daySelected') <div class="col-12"><span class="error">{{ $message }}</span> </div> @enderror


            </div>
        </div>


        <div class="col-12" style="margin-top:25px">
            <div class="row">
                <div class="col-md-4">
                    <h3 style="font-size: 22px; font-weight: 800;">Select Time</h3>
                </div>
                

    <div class="col-md-8">
                    

 
@foreach ($availability_time as $time)
    
                        <div class="form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" wire:model.defer="timeSelected" name="timeSelected" value="{{$time}}"> {{$time}}
            </label>
          </div>
@endforeach

          </div>

 @error('timeSelected') <div class="col-12"><span class="error">{{ $message }}</span> </div> @enderror

            </div>
            
        </div>
    </div>
    <div class="form-group btn_grp text-center" style="margin:45px 0 35px">
                <button type="submit" wire:click="" class="btn_started">Book</button>
                <button type="button" style="margin-left:30px; display:inline-block" data-bs-dismiss="modal" aria-label="Close" class="btn_started">Close</button>
            </div>

    <div class="far-bottm" style="text-align: center;margin: 40px 0;">
        <div class="iagt" style="justify-content: end;">
        <div><label for="plan" class="agrtrms">
        <input type="checkbox" id="plan" checked="true" wire:model.defer="termsAccepted" required="" class="chki">
        <span class="agrchckmrk"></span>I hereby consent to, the sharing of relevant information to the professional for the purpose of providing adequate care and support.</label></div>
        </div>
    </div>


    <style>

    .loonApplt_btn .agrtrms {
    display: block;
    position: relative;
    padding-left: 30px;
    cursor: pointer;
    -webkit-user-select: none;
    user-select: none;
    color: #676767;
    font-size: 14px;
    font-weight: 400;
    text-align: center;
    line-height: normal;
}
.error{
    color:#f00
}
    </style>

</form>
