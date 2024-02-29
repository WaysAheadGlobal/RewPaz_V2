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
                                    <h3>Add Employees</h3>
                                </div>
                                <div class="dasp_grap">
                                    <div class="emp_progr brd_btm ">
                                        <div class="prigress-bar">
                                            <span class="credits_txt">You have {{ $result->tokens }} Tokens</span>
                                            <div role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="{{ $result->tokens }}" style="--value:{{ $result->left_tokens }}"></div>
                                            <span>Upgrade Now </span>
                                        </div>
                                        <button class="btn_cust" id="add_emp">
                                            + Add Employee
                                        </button>

                                    </div>
                                    <div class="brd_btm" id="emps">

                                        <form action="{{ route('employer.saveemp') }}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <div class="frm_grp">
                                                        <label for="">Employee Name</label>
                                                        <input type="text" placeholder="Employee Name" class="form-control" value="{{ old('emp_name') }}" name="emp_name">

                                                    </div>

                                                    @error('emp_name')
                                                        <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <div class="frm_grp">
                                                        <label for="">Employee Code </label>
                                                        <input type="text" placeholder="Employee Code" class="form-control" value="{{ old('emp_code') }}" name="emp_code">

                                                    </div>

                                                    @error('emp_code')
                                                        <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <div class="frm_grp">
                                                        <label for="">Employee Email ID</label>
                                                        <input type="text" placeholder="Employee Email" class="form-control" value="{{ old('emp_email') }}" name="emp_email">
                                                    </div>
                                                    @error('emp_email')
                                                        <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                                            <div class="frm_grp select_icon">
                                                                <label for="">Allocate Tokens</label>
                                                                <select class="form-control" name="token">
                                                                    <option value="">Token</option>
                                                                    <option value="1" {{ ( '1' == old('token')) ? 'selected' : '' }}>1</option>
                                                                    <option value="2" {{ ( '2' == old('token')) ? 'selected' : '' }}>2</option>
                                                                    <option value="3" {{ ( '3' == old('token')) ? 'selected' : '' }}>3</option>
                                                                    <option value="4" {{ ( '4' == old('token')) ? 'selected' : '' }}>4</option>
                                                                    <option value="5" {{ ( '5' == old('token')) ? 'selected' : '' }}>3</option>
                                                                    <option value="6" {{ ( '6' == old('token')) ? 'selected' : '' }}>6</option>
                                                                    <option value="7" {{ ( '7' == old('token')) ? 'selected' : '' }}>7</option>
                                                                    <option value="8" {{ ( '8' == old('token')) ? 'selected' : '' }}>8</option>
                                                                    <option value="9" {{ ( '9' == old('token')) ? 'selected' : '' }}>9</option>
                                                                    <option value="10" {{ ( '10' == old('token')) ? 'selected' : '' }}>10</option>
                                                                </select>
                                                            </div>
                                                            @error('token')
                                                                <small class="text-danger">{{$message}}</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                                            <div class="frm_grp select_icon">
                                                                <label for="">Department</label>
                                                                <select class="form-control" name="emp_department">
                                                                    <option value="">Select Department</option>
                                                                    @if(!empty($departments))
                                                                    @foreach($departments as $d)
                                                                    <option value="{{$d->id}}" {{ ($d->id ==  old('emp_department')) ? 'selected':'' }}>{{$d->departments}}</option>
                                                                    @endforeach
                                                                    @endif
                                                                </select>
                                                            </div>
                                                            @error('emp_department')
                                                                <small class="text-danger">{{$message}}</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                                            <div class="frm_grp select_icon">
                                                                <label for="">Country Code</label>
                                                                <select class="form-control" name="emp_c_code">
                                                                    <option value="">Select</option>
                                                                    <option value="+91" {{ ( '+91' == old('emp_c_code')) ? 'selected' : '' }}>+91</option>
                                                                    <option value="+1" {{ ( '+1' == old('emp_c_code')) ? 'selected' : '' }}>+1</option>
                                                                </select>
                                                                @error('emp_c_code')
                                                                    <small class="text-danger">{{$message}}</small>
                                                                @enderror
                                                            </div>
                                                            @error('emp_department')
                                                                <small class="text-danger">{{$message}}</small>
                                                            @enderror
                                                        </div>
                                                        <!-- <div class="col-lg-4 col-md-6 col-sm-12">

                                                        </div> -->
                                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                                            <div class="frm_grp">
                                                                <label for="">Phone </label>
                                                                <input type="text" placeholder="Employee Phone" class="form-control" value="{{ old('emp_phone') }}" name="emp_phone">
                                                            </div>
                                                            @error('emp_phone')
                                                                <small class="text-danger">{{$message}}</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-lg-9 col-md-12 col-sm-12">
                                                    <div class="row">

                                                    </div>
                                                </div> -->
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="btn_grp_dash">
                                                        <input type="hidden" name="unique_company_code" value="{{$result->unique_company_code}}">
                                                        <input type="hidden" name="user_id" value="{{$result->user_id}}">
                                                        <input type="hidden" name="company_name" value="{{$result->company_name}}">
                                                        <input type="hidden" name="company_email" value="{{$result->email}}">

                                                        <button class="btn"><a href="javascript:void(0)">Delete</a></button>
                                                        <button class="btn"><a href="javascript:void(0)">Cancel</a></button>
                                                        <button class="btn">Save & Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    @foreach ($employees as $emp)
                                        <div class="brd_btm">

                                            <div class="row">
                                                <div class="col-lg-3 col-md-6 col-sm-12">
                                                    <div class="frm_grp">
                                                        <label for="">Employee Name</label>
                                                        <div class="data_txt">{{ $emp->name }}</div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-sm-12">
                                                    <div class="frm_grp">
                                                        <label for="">Employee Code </label>
                                                        <div class="data_txt">{{ $emp->employee_id }}</div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="list_tk">
                                                    <div class="frm_grp">
                                                        <label for="">Employee Email ID</label>
                                                        <div class="data_txt">{{ $emp->email }}</div>

                                                    </div>
                                                    <div class="frm_grp">
                                                        <label for="">Action</label>
                                                        <div class="data_txt">
                                                            @if($emp->status==1)
                                                            <a href="javascript:void(0);" onclick="EmployeeStatus({{ $emp->id }},0);" class="btn btn-success" title="Click to make it Deactivate">Active</a>
                                                            @else
                                                            <a href="javascript:void(0);" onclick="EmployeeStatus({{ $emp->id }},1);" class="btn btn-danger" title="Click to make it Activate">Deactive</a>
                                                            @endif
                                                            <a href="javascript:void(0);" onclick="EmployeeTokenRevoke({{ $emp->id }},{{ $emp->revoke }});" class="btn btn-warning">
                                                                @if($emp->revoke!=1) Revoke @else Revoked @endif
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <div class="tok_list">
                                                        @php
                                                            $tkn =$emp->tokens;
                                                        @endphp
                                                        <a class="edit_pr" style="cursor: pointer;"  data-bs-toggle="modal" data-bs-target="#Profile_popup_{{$emp->uid}}"><span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                <path d="M5.83203 5.8335H4.9987C4.55667 5.8335 4.13275 6.00909 3.82019 6.32165C3.50763 6.63421 3.33203 7.05814 3.33203 7.50016V15.0002C3.33203 15.4422 3.50763 15.8661 3.82019 16.1787C4.13275 16.4912 4.55667 16.6668 4.9987 16.6668H12.4987C12.9407 16.6668 13.3646 16.4912 13.6772 16.1787C13.9898 15.8661 14.1654 15.4422 14.1654 15.0002V14.1668" stroke="#676767" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M13.3333 4.16676L15.8333 6.66676M16.9875 5.48759C17.3157 5.15938 17.5001 4.71424 17.5001 4.25009C17.5001 3.78594 17.3157 3.34079 16.9875 3.01259C16.6593 2.68438 16.2142 2.5 15.75 2.5C15.2858 2.5 14.8407 2.68438 14.5125 3.01259L7.5 10.0001V12.5001H10L16.9875 5.48759Z" stroke="#676767" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg></span><span>Update Profile</span></a>
                                                        @if ($tkn==0)
                                                            <a class="edit_pr" style="cursor: pointer;"  data-bs-toggle="modal" data-bs-target="#Tokens_popup_{{$emp->uid}}"><span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                <path d="M5.83203 5.8335H4.9987C4.55667 5.8335 4.13275 6.00909 3.82019 6.32165C3.50763 6.63421 3.33203 7.05814 3.33203 7.50016V15.0002C3.33203 15.4422 3.50763 15.8661 3.82019 16.1787C4.13275 16.4912 4.55667 16.6668 4.9987 16.6668H12.4987C12.9407 16.6668 13.3646 16.4912 13.6772 16.1787C13.9898 15.8661 14.1654 15.4422 14.1654 15.0002V14.1668" stroke="#676767" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M13.3333 4.16676L15.8333 6.66676M16.9875 5.48759C17.3157 5.15938 17.5001 4.71424 17.5001 4.25009C17.5001 3.78594 17.3157 3.34079 16.9875 3.01259C16.6593 2.68438 16.2142 2.5 15.75 2.5C15.2858 2.5 14.8407 2.68438 14.5125 3.01259L7.5 10.0001V12.5001H10L16.9875 5.48759Z" stroke="#676767" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg></span><span>Edit</span></a>
                                                        @else
                                                            <a class="edit_pr tokns" style="cursor: pointer;"><span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                <path d="M5.83203 5.8335H4.9987C4.55667 5.8335 4.13275 6.00909 3.82019 6.32165C3.50763 6.63421 3.33203 7.05814 3.33203 7.50016V15.0002C3.33203 15.4422 3.50763 15.8661 3.82019 16.1787C4.13275 16.4912 4.55667 16.6668 4.9987 16.6668H12.4987C12.9407 16.6668 13.3646 16.4912 13.6772 16.1787C13.9898 15.8661 14.1654 15.4422 14.1654 15.0002V14.1668" stroke="#676767" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M13.3333 4.16676L15.8333 6.66676M16.9875 5.48759C17.3157 5.15938 17.5001 4.71424 17.5001 4.25009C17.5001 3.78594 17.3157 3.34079 16.9875 3.01259C16.6593 2.68438 16.2142 2.5 15.75 2.5C15.2858 2.5 14.8407 2.68438 14.5125 3.01259L7.5 10.0001V12.5001H10L16.9875 5.48759Z" stroke="#676767" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg></span><span>Edit</span></a>

                                                        @endif


                                                        <!--  -->

                                                        <div class="tok_no">Tokens: {{ $tkn }}</div>
                                                    </div>
                                                </div>
                                                </div>

                                                </div>

                                            </div>
                                            <div class="modal fade cust_popup cust_popup2" id="Tokens_popup_{{$emp->uid}}" data-bs-backdrop="static" data-bs-keyboard="false"
                                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="Token_popup">
                                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M18.707 6.70697L17.293 5.29297L12 10.586L6.70697 5.29297L5.29297 6.70697L10.586 12L5.29297 17.293L6.70697 18.707L12 13.414L17.293 18.707L18.707 17.293L13.414 12L18.707 6.70697Z"
                                                                                fill="#636D79" />
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                                <h3>Approved Tokens</h3>
                                                                <form action="{{ route('employer.tokens.sent') }}" method="post">
                                                                    @csrf

                                                                    <input type="hidden" name="uid" value="{{$emp->uid}}">

                                                                    <div class="frm_grp select_icon">
                                                                        <label for="">Tokens counts</label>
                                                                        <select class="form-control" name="token">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="btn_grp_dash btn_last">
                                                                        <button class="btn">Back</button>
                                                                        <button type="submit" class="btn">Approved</button>
                                                                    </div>
                                                                </form>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="modal fade cust_popup cust_popup2" id="Profile_popup_{{$emp->uid}}" data-bs-backdrop="static" data-bs-keyboard="false"
                                                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-body">
                                                                        <div class="Token_popup">
                                                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none">
                                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                            d="M18.707 6.70697L17.293 5.29297L12 10.586L6.70697 5.29297L5.29297 6.70697L10.586 12L5.29297 17.293L6.70697 18.707L12 13.414L17.293 18.707L18.707 17.293L13.414 12L18.707 6.70697Z"
                                                                                            fill="#636D79" />
                                                                                    </svg>
                                                                                </span>
                                                                            </button>
                                                                            <h3>Edit Details</h3>
                                                                            <form action="{{ route('employer.empUpdate') }}" method="post">
                                                                                @csrf

                                                                                <input type="hidden" name="uid" value="{{$emp->uid}}">
                                                                                <div class="frm_grp">
                                                                                    <label for="">Employee Name</label>
                                                                                    <input type="text" placeholder="Employee Name" class="form-control" value="{{$emp->name}}" name="emp_name">
                                                                                </div>
                                                                                <div class="frm_grp">
                                                                                    <label for="">Employee Code</label>
                                                                                    <input type="text" placeholder="Employee Code" class="form-control" value="{{$emp->employee_id}}" name="emp_code">
                                                                                </div>
                                                                                <div class="frm_grp">
                                                                                    <label for="">Employee Email</label>
                                                                                    <input type="text" placeholder="Employee email" class="form-control" value="{{$emp->email}}" name="emp_email">
                                                                                </div>
                                                                                <div class="frm_grp select_icon">
                                                                                    <label for="">Country Code</label>
                                                                                    <select class="form-control" name="c_code">
                                                                                        <option value="+1" <?php if($emp->c_code=='+1'){ echo "selected";} ?>>+1</option>
                                                                                        <option value="+91" <?php if($emp->c_code=='+91'){ echo "selected";} ?>>+91</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="frm_grp">
                                                                                    <label for="">Employee Phone</label>
                                                                                    <input type="text" placeholder="Employee Phone" class="form-control" value="{{$emp->phone}}" name="emp_phone">
                                                                                </div>
                                                                                <div class="frm_grp select_icon">
                                                                                    <label for="">Department</label>
                                                                                    <select class="form-control" name="emp_departments">
                                                                                        <option value="">Select Department</option>
                                                                                        @if(!empty($departments))
                                                                                        @foreach($departments as $d)
                                                                                        <option value="{{$d->id}}" {{ ($d->id ==  $emp->departments) ? 'selected':'' }}>{{$d->departments}}</option>
                                                                                        @endforeach
                                                                                        @endif
                                                                                    </select>
                                                                                </div>
                                                                                <div class="btn_grp_dash btn_last">
                                                                                    <button type="submit" class="btn">Update</button>
                                                                                </div>
                                                                            </form>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                    @endforeach


                                    <!-- <div class="btn_grp_dash btn_last">
                                        <button class="btn">Cancel</button>
                                        <button class="btn">Submit</button>
                                    </div> -->
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
                function EmployeeTokenRevoke(ID,Status)
                {
                    if(Status==1)
                    {
                        alert('Already Revoked!!!.');
                    }
                    else
                    {
                        var URL = '<?php echo route('employer.EmployeeTokenRevoke'); ?>';
                        var x = confirm('Are You Sure?');
                        if(x)
                        {
                            window.location.href = URL+'?EmployeeID='+ID;
                        }
                    }
                }
            </script>
       @endsection