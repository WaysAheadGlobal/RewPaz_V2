@extends('superadmin.main')
@section('main')
<!-- partial -->
<div class="main-panel ">
  <div class="content-wrapper">
    <div class="row" id="proBanner">
      <div class="col-sm-12">
        <div class="dashboard_rgt">
            @livewire('appointments-admin')
        </div>
      </div>
    </div>
  </div>
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

    initDatePicker()

        window.addEventListener('initSomething', event => {
            initDatePicker()
        })


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
</script>
@endsection