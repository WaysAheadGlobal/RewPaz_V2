@extends('professional.inner-template')
@section('inner-template')
<style>
  .chat_sect_bx {
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
          <h3>Chat Room</h3>
        </div>
        
        @livewire('chat.chat-room')
              
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

</script>
@endsection
