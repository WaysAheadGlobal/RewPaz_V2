@extends('professional.inner-template')
@section('inner-template')
<div class="content-wrapper">
   <div class="row" id="proBanner">
      <div class="col-sm-12">
         <div class="dashboard_rgt">
            <div class="heading_bx">
               <h3>Add Account Details</h3>
            </div>
            <form action="{{route('professional.addAccountDetails')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="dasp_grap">
                  <div class="Vett_admin prof_dash">
                     <div class="head_Vett">
                        <div class="bio_detail">
                           <div class="row">
                              <div class="col-lg-4 col-md-6 col-sm-12">
                              <div class="frm_grp">
                                 <label for="">Account Holder Name</label>
                                 <input type="text" placeholder="Account Holder Name"
                                    class="form-control" name="AccountHolderName" value="" >
                              </div>
                              </div>
                              <div class="col-lg-4 col-md-6 col-sm-12">
                              <div class="frm_grp">
                                 <label for="">Account Type</label>
                                 <input type="text" placeholder="Account Type"
                                    class="form-control" name="AccountType" value="" >
                              </div>
                              </div>
                              <div class="col-lg-4 col-md-6 col-sm-12">
                              <div class="frm_grp">
                                 <label for="">Account No</label>
                                 <input type="text" placeholder="Account No"
                                    class="form-control" name="AccountNo" value="" >
                              </div>
                              </div>
                              <div class="col-lg-4 col-md-6 col-sm-12">
                              <div class="frm_grp">
                                 <label for="">Routing No</label>
                                 <input type="text" placeholder="Routing No"
                                    class="form-control" name="RoutingNumber" value="" >
                              </div>
                            </div>
                           </div>

                              <div class="btn_grp">
                                 <button class="btn btn_comm">Add Account</button>
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