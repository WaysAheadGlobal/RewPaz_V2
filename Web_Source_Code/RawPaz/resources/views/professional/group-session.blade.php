@extends('professional.inner-template')
@section('inner-template')
<style>
.datepicker-picker{
    width:100%
}
</style>
@livewire('professional-group-sesssion')
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

document.addEventListener('livewire:load', function () {
    initDatePicker();

    // $('#optValidateModal').modal('show');
    // window.addEventListener('close-modal', event => {
    // });
})





</script>
@endsection