@extends('professional.inner-template')
@section('inner-template')

<div class="content-wrapper">
  <div class="row" id="proBanner">
    <div class="col-sm-12">
      <div class="dashboard_rgt">
        <div class="heading_bx">
          <h3>Earnings 
        </div>
        <div class="btn_grp text-right">
        @if(!empty($Account))
              @if($Account->verify!=1)
                <a class="btn btn_comm" href="{{route('professional.verifyAccount')}}">Verify Account</a></h3>
              @else
                <a class="btn btn_comm" href="{{route('professional.widrawal')}}">Widrawal</a></h3>
              @endif
            @else
              <a class="btn btn_comm" href="{{route('professional.addAccount')}}">Add Account Details</a></h3>
            @endif

        </div>
        <div class="dasp_grap">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                @livewire('earnings-professional')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection