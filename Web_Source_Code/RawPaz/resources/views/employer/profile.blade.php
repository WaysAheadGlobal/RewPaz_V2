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
                                @endif
                                @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong></strong> {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                            <div class="dashboard_rgt">
                                <div class="heading_bx">
                                    <h3>Company Profile</h3>
                                </div>
                                <form action="{{ route('employer.profile.update') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                <div class="dasp_grap">
                                   <div class="pof_edit_sect">
                                    <div class="user_pof_edit">
                                        <div class="user_bx">
                                            <label for="uploadfile">
                                                @if ( $result->profile_pic)
                                                <img src="{{ asset('/storage/app/upload/prof-doc/'.$result->profile_pic) }}" alt="" id="preview" >
                                                @else
                                                <img src="../assets/images/profile.png" alt="" id="preview" >
                                                @endif

                                                <input type="file" id="uploadfile" name="profile_pic" accept="image/*" onchange="previewImage(event)">
                                                <div class="icon_bx">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M14.5 4H9.5L7 7H4C3.46957 7 2.96086 7.21071 2.58579 7.58579C2.21071 7.96086 2 8.46957 2 9V18C2 18.5304 2.21071 19.0391 2.58579 19.4142C2.96086 19.7893 3.46957 20 4 20H20C20.5304 20 21.0391 19.7893 21.4142 19.4142C21.7893 19.0391 22 18.5304 22 18V9C22 8.46957 21.7893 7.96086 21.4142 7.58579C21.0391 7.21071 20.5304 7 20 7H17L14.5 4Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M12 16C13.6569 16 15 14.6569 15 13C15 11.3431 13.6569 10 12 10C10.3431 10 9 11.3431 9 13C9 14.6569 10.3431 16 12 16Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                </div>
                                            </label>
                                            <script type="text/javascript">
                                                function previewImage(event) {
                                                    var input = event.target;
                                                    var image = document.getElementById('preview');
                                                    if (input.files && input.files[0]) {
                                                        var reader = new FileReader();
                                                        reader.onload = function(e) {
                                                        image.src = e.target.result;
                                                        }
                                                        reader.readAsDataURL(input.files[0]);
                                                    }
                                                }
                                            </script>


                                        </div>
                                        <div class="bx_prof">
                                            <label for="">Company Name</label>
                                            <input type="text" value="{{ $result->company_name }}" readonly>
                                        </div>

                                    </div>
                                    <div class="btn_grp">
                                        <!-- <button class="btn" type="button">
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M5.83398 5.8335H5.00065C4.55862 5.8335 4.1347 6.00909 3.82214 6.32165C3.50958 6.63421 3.33398 7.05814 3.33398 7.50016V15.0002C3.33398 15.4422 3.50958 15.8661 3.82214 16.1787C4.1347 16.4912 4.55862 16.6668 5.00065 16.6668H12.5007C12.9427 16.6668 13.3666 16.4912 13.6792 16.1787C13.9917 15.8661 14.1673 15.4422 14.1673 15.0002V14.1668" stroke="#676767" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13.3333 4.16676L15.8333 6.66676M16.9875 5.48759C17.3157 5.15938 17.5001 4.71424 17.5001 4.25009C17.5001 3.78594 17.3157 3.34079 16.9875 3.01259C16.6593 2.68438 16.2142 2.5 15.75 2.5C15.2858 2.5 14.8407 2.68438 14.5125 3.01259L7.5 10.0001V12.5001H10L16.9875 5.48759Z" stroke="#676767" stroke-linecap="round" stroke-linejoin="round"/>
                                              </svg>
                                            </span>
                                            <span>Edit</span>
                                        </button> -->
                                        <button class="btn">Save & Update</button>
                                    </div>
                                   </div>
                                   <div class="row">
                                    
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="frm_grp">
                                            <label for="">Phone </label>
                                            <input type="text" class="form-control" value="{{ $user->phone }}" readonly>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="frm_grp">
                                            <label for="">Full Name </label>
                                            <input type="text" name="name" class="form-control" value="{{ $result->name }}" required>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="frm_grp">
                                            <label for="">Official E-mail ID  </label>
                                            <input type="text" placeholder="E-mail ID" class="form-control" value="{{ $result->email }}" readonly>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="frm_grp">
                                            <label for="">Job Role  </label>
                                            <!-- <input type="text" placeholder="Job Role" class="form-control" value="{{ $result->job_role }}"> -->
                                            <select class="form-control" name="job_role">
                                            <option value="">--please select--</option>
                                            <option value="Human Resource" {{ ( 'Human Resource' == $result->job_role) ? 'selected' : '' }}>Human Resource</option>
                                            <option value="Owner" {{ ( 'Owner' == $result->job_role) ? 'selected' : '' }}>Owner</option>
                                            <option value="HR" {{ ( 'HR' == $result->job_role) ? 'selected' : '' }}>HR</option>
                                            <option value="Finance Team" {{ ( 'Finance Team' == $result->job_role) ? 'selected' : '' }}>Finance Team</option>

                                        </select>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="frm_grp">
                                            <label for="">Unique ID  </label>
                                            <input type="text" placeholder="Unique ID" class="form-control" value="{{ $result->unique_company_code }}" readonly>

                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="frm_grp">
                                            <label for="">Company Domain </label>
                                            <input type="text" name="company_domain" class="form-control" value="{{ $result->company_domain }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="frm_grp">
                                            <label for="">Company Registration No </label>
                                            <input type="text" name="company_registration_no" class="form-control" value="{{ $result->company_registration_no }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="frm_grp">
                                            <label for="">Company License No </label>
                                            <input type="text" name="company_license_no" class="form-control" value="{{ $result->company_license_no }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="frm_grp">
                                            <label for="">No Of Employee</label>
                                            <input type="text" name="no_of_employee" class="form-control" value="{{ $result->no_of_employee }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="frm_grp">
                                            <label for="">Company Phone </label>
                                            <input type="text" name="company_phone" class="form-control" value="{{ $result->company_phone }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="frm_grp">
                                            <label for="">Company Address </label>
                                            <input type="text" name="company_address" class="form-control" value="{{ $result->company_address }}" required>
                                        </div>
                                    </div>

                                    <div class="btn_acc">
                                        <button class="btn_delete" type="button" >Delete Account</button>
                                    </div>
                                   </div>

                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>



            </div>
        @endsection