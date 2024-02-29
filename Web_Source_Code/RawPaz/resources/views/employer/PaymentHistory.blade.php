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
                                    <h3>Payment History</h3>
                                </div>
                                <div class="dasp_grap">
                                    @foreach ($PaymentHistory as $emp)
                                        <div class="brd_btm">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-6 col-sm-12">
                                                    <div class="frm_grp">
                                                        <label for="">Subscription Plan</label>
                                                        <div class="data_txt">{{ $emp->plan_name }}</div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-6 col-sm-12">
                                                    <div class="frm_grp">
                                                        <label for="">Price</label>
                                                        <div class="data_txt">{{ $emp->plan_amt }}</div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-6 col-sm-12">
                                                    <div class="frm_grp">
                                                        <label for="">Payment Status</label>
                                                        <div class="data_txt">
                                                            @if($emp->payment_status==1)
                                                                Sucess
                                                            @else
                                                                Failed
                                                            @endif
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <div class="frm_grp">
                                                        <label for="">Payment On</label>
                                                        <div class="data_txt">{{ $emp->created_at }}</div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-6 col-sm-12">
                                                    <div class="frm_grp">
                                                        <label for="">Payment Invoice</label>
                                                        <div class="data_txt">
                                                            <a href="{{ $emp->receipt_url }}" target="blank_">View Invoice</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>

                </div>



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
            </script>
       @endsection