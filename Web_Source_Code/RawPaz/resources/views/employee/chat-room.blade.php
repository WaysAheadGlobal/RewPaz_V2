@extends('employee.inner')
@section('inner')
<style>
.Appoint_list_admin .table_data .table tr td:first-child {
    white-space: initial;
}

<div class="main-panel"><style>
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

<div class="main-panel ">
  

  <div class="content-wrapper">
  <div class="row" id="proBanner">
    <div class="col-sm-12">
      <div class="dashboard_rgt">
        <div class="heading_bx">
          <h3>Chat Room</h3>
        </div>
        
        @livewire('chat.chat-room-employee')
              
        </div>
                
              
          </div>
        </div>
      </div>
  


</div>
@endsection


@section('scripts')
  <script>

function setRating(data){
  Livewire.emit('setRating', data);
}

  </script>
@endsection