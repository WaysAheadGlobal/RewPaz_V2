@extends('professional.inner-template')
@section('inner-template')
<div class="content-wrapper">
   <div class="row" id="proBanner">
      <div class="col-sm-12">
         <div class="dashboard_rgt">
            <div class="heading_bx">
               <h3>Verify Account Details</h3>
            </div>
            <form action="{{route('professional.verifyAccountDetails')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="dasp_grap">
                  <div class="Vett_admin prof_dash">
                     <div class="head_Vett">
                        <div class="bio_detail">
                           <div class="head">
                              <div class="frm_grp">
                                 <label for="">Amount 1</label>
                                 <input type="text" placeholder="Amount 1"
                                    class="form-control" name="Amount1" value="" >
                              </div>
                              <div class="frm_grp">
                                 <label for="">Amount 2</label>
                                 <input type="text" placeholder="Amount 2"
                                    class="form-control" name="Amount2" value="" >
                              </div>
                           </div>
                           
                              <div class="btn_grp">
                                 <button class="btn btn-primary">Verify</button>
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