@extends('professional.inner-template')
@section('inner-template')

<div class="content-wrapper">
  <div class="row" id="proBanner">
    <div class="col-sm-12">
      <div class="dashboard_rgt">
        <div class="heading_bx">
          <h3>Tokens</h3>
        </div>
        <div class="dasp_grap">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                @livewire('tokens-professional')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection