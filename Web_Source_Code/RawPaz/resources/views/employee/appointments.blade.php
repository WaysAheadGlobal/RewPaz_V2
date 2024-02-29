@extends('employee.inner')
@section('inner')
<style>
.Appoint_list_admin .table_data .table tr td:first-child {
    white-space: initial;
}
.table_data .table tr td p span {
    display: inline-block;
}
.table_data .table tr td p span:last-child {
    display: block;
    color: #888;
    font-size: 11px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    text-transform: uppercase;
}
.table_data .table tr td .day_bx{
  color: #515151;
  text-align: center;
  font-size: 16px;
  width: 75px;
  white-space: normal;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  line-height: 22px;
  font-weight: 600;
  border-radius: 5px;
  background: #F0E9F4;
  height: 60px;
  }
  .table_data .table {
    overflow: auto;
}

</style>
<div class="main-panel ">
  <div class="content-wrapper">
    <div class="row" id="proBanner">
      <div class="col-sm-12">
        <div class="dashboard_rgt">
          <div class="heading_bx">
            <h3>appointments</h3>
          </div>
          <div class="dasp_grap table_visting">
            <div class="table_data">
              @livewire('appointments-employee')
            </div>
          </div>
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