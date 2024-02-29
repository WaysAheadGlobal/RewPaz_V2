@extends('professional.inner-template')
@section('inner-template')
<div class="content-wrapper">
   <div class="row" id="proBanner">
      <div class="col-sm-12">
         <div class="dashboard_rgt">
            <div class="heading_bx">
               <h3>Widrawal / Redeem</h3>
            </div>
            <form action="{{route('professional.widrawalAmount')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="dasp_grap">
                  <div class="Vett_admin prof_dash">
                     <div class="head_Vett">
                        <div class="bio_detail">
                           <div class="head">
                              <div class="frm_grp">
                                 <label for="">Amount</label>
                                 <input type="text" placeholder="Amoun"
                                    class="form-control" name="Amount" value="" >
                              </div>
                           </div>
                           
                              <div class="btn_grp">
                                 <button class="btn btn-primary">Widrawal</button>
                              </div>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection