@extends('employee.main')
@section('main')
<style>
    .box_card_rgt .prof_list .card_bx .rating_bx ul li span:last-child {
     margin-left: 0px;
}
</style>

<section>
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="heading_title_bx">
               <h3>Choose your professionals</h3>
            </div>
         </div>
    @livewire('professionals')
       </div>
   </div>
</section>
@endsection