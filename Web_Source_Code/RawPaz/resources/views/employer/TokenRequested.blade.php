@extends('employer.inner')
@section('inner')
            <!-- partial -->
            <div class="main-panel ">
                <div class="content-wrapper">
                    <div class="row" id="proBanner">
                        <div class="col-sm-12">
                            <div>
                                @if (session('error'))
                                <div class="alert alert-danger text-center" role="alert">
                                    <span  style="font-size: 15px;">{{session('error')}}</span>
                                </div>
                                <!-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Failed!</strong> {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div> -->
                                @endif
                                @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong></strong> {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <!-- <div class="alert alert-success text-center" role="alert">
                                    <span style="font-size: 15px;">{{session('success')}}</span>
                                </div> -->
                                @endif
                            </div>
                            <div class="dashboard_rgt">
                                <div class="heading_bx">
                                    <h3>Credit Requested</h3>
                                </div>
                                <div class="dasp_grap" >
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="frm_grp">
                                                <label for="">Date</label>
                                                <input type="date" class="form-control" id="Date">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                           <div class="mt-30">
                                           <a href="javascript:void(0);"  onclick="GetTokenRequested();" class="btn btn_comm">Search</a>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dasp_grap" id="TokenRequested">
                                   <!--  @foreach ($TokenRequested as $emp)
                                        <div class="brd_btm">

                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <div class="frm_grp">
                                                        <label for="">Employee Name</label>
                                                        <div class="data_txt">{{ $emp->username }}</div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="list_tk">
                                                    <div class="frm_grp">
                                                        <label for="">Requested On</label>
                                                        <div class="data_txt">{{ $emp->date }}</div>

                                                    </div>
                                                </div>
                                                </div>

                                                </div>

                                            </div>
                                    @endforeach -->
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>

                </div>

                <input type="hidden" id="_token" value="{{csrf_token()}}">

            </div>
            <script>
                $(document).ready(function(){
                    $("#emps").hide();
                    $("#add_emp").click(function(){
                        $("#emps").show();
                        $("#add_emp").hide();
                    });
                    $(".tokns").click(function(){
                        alert("You have Token, so we cann't add more !!");
                    });
                    GetTokenRequested();
                });
                function EmployeeStatus(ID,Status)
                {
                    var URL = '<?php echo route('employer.EmployeeStatus'); ?>';
                    var x = confirm('Are You Sure?');
                    if(x)
                    {
                        window.location.href = URL+'?EmployeeID='+ID+'&EmployeeStatus='+Status;
                    }
                }
                function GetTokenRequested()
                {
                    var _token          = $("#_token").val();
                    var Dates          = $("#Date").val();
                    var DataStr          = {'_token':_token,'Date':Dates};
                    var URL = '<?php echo route('employer.GetTokenRequested'); ?>';
                    $.ajax({
                       type: "POST",
                       url:  URL,
                       data: DataStr,
                       success: function(data) 
                       {
                           $("#TokenRequested").html(data);
                       }
                   });
                }
            </script>
       @endsection