@extends('employee.inner')
@section('inner')
<style>
.datepicker-picker {
    width: 100%;
}
input::placeholder{
  opacity:0.6 !important
}
</style>
<div class="notemainhlder">
    @php
      $serviceSeeker = $appointment->created_by;
      $appointmentId = $appointment->uid;
      $data = ['serviceSeeker' => $serviceSeeker, 'serviceProvider' => $appointment->professional_id, 'customerName' => $appointment->name, 'appoitmentId' => $appointment->uid, 'defaultAction' => $defaultAction];
    @endphp
    @livewire('employee-journals', compact('data'))
</div>


@endsection


@section('script')
<script>
    

    function initDatePicker(){
        // DatePicker.options
        const elem = document.getElementById("picker");
        const datepicker = new Datepicker(elem, {
            format: 'yy-mm-dd',
            language: "es",
            prevArrow: "❮", // &#x276e;
            nextArrow: "❯",
            disableTouchKeyboard: "true"
        });
    }
    
    $('#picker').on('click', function (e) {
        let dateSelected = e.target.dataset.date;
        const date = new Date(parseInt(dateSelected));
        const year = date.getFullYear();
        const month = date.getMonth() + 1; // Months are zero-based, so adding 1
        const day = date.getDate();
        const formattedDate = `${year}-${month < 10 ? '0' : ''}${month}-${day < 10 ? '0' : ''}${day}`;
        if(dateSelected){
            Livewire.emit('postAdded', formattedDate)
        }
    });
   

    
    window.addEventListener('initSomething', event => {
            initDatePicker();
    })

    window.addEventListener('open-otp-modal', event => {
        $('#optValidateModal').modal('show');
    })

     window.addEventListener('close-modal', event => {
        $('#modalAddNote').modal('hide');
        $('#optValidateModal').modal('hide');
    })


    document.addEventListener('livewire:load', function () {
        initDatePicker();
        // $('#optValidateModal').modal('show');
        // window.addEventListener('close-modal', event => {
        // });
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