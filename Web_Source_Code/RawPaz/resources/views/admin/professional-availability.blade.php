@extends('admin.main')
@section('main')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row" id="proBanner">
      <div class="col-sm-12">
        <div class="dashboard_rgt">
          <div class="heading_bx">
            <h3>Professional Availability</h3>
          </div>
           @livewire('admin-professional-availability')
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')

<script>

     window.addEventListener('close-modal', event => {
        $('#professionalassignment-modal').modal('hide');
    })
</script>

@endsection