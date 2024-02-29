<form wire:submit.prevent="submit">
    <div class="form-group">
        <label for="date">Selct Appointment Date</label> <br>
        <strong style="font-size:14px">Days Availability: <span>{{$professionalDetails['availability_days']}}</span></strong>
        <input type="date" class="form-control" id="date" placeholder="Select Appointment Date" wire:model="date">
        <input wire:model="sessionType" type="hidden" id="lat-span" />
        @error('date') <span class="text-danger">{{ $message }}</span> @enderror
         @if (session()->has('dayError'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert" style="max-width:500px; margin:25px auto;">
            <strong>Failed!</strong> {{ session('dayError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    <div class="form-group">
        <label for="time">Select Appointment Time</label><br>
        <select class="form-control" wire:model="time">
        <option value="">Please Select a Time Slot</option>
        @php
             $availability_time =  explode(',', $professionalDetails['availability_time']);
        @endphp
        @foreach ($availability_time as $time)
            <option value="{{$time}}">{{$time}}</option>
        @endforeach
        </select>
        @error('time') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="form-group btn_grp">
                <br>
                <button type="submit" class="btn_started">Book Appointment</button>
                <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn_started">Back</button>
                <br>
                <br>
            </div>
</form>


<!-- Your component's view here -->

@push('scripts')
<script>
    alert('hello 123')
    // Your JS here.
</script>
@endpush