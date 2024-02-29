@extends('employee.inner')
@section('inner')
            <!-- partial -->
            <div class="main-panel ">
                <div class="content-wrapper">
                    <div class="row" id="proBanner">
                        <div class="col-sm-12">
                            <div class="dashboard_rgt">
                                <div class="heading_bx">
                                    <h3>Profile</h3>
                                </div>
                                <form action="{{ route('employee.profile.update') }}" method="post">
                                    @csrf
                                    <div class="dasp_grap">
                                        <div class="pof_edit_sect">
                                            <div class="user_pof_edit">
                                                <div class="user_bx">
                                                    <label for="uploadfile">
                                                        <img src="{{asset('assets/images/by_def.png')}}" alt="">
                                                        <input type="file" id="uploadfile">
                                                        <div class="icon_bx">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path d="M14.5 4H9.5L7 7H4C3.46957 7 2.96086 7.21071 2.58579 7.58579C2.21071 7.96086 2 8.46957 2 9V18C2 18.5304 2.21071 19.0391 2.58579 19.4142C2.96086 19.7893 3.46957 20 4 20H20C20.5304 20 21.0391 19.7893 21.4142 19.4142C21.7893 19.0391 22 18.5304 22 18V9C22 8.46957 21.7893 7.96086 21.4142 7.58579C21.0391 7.21071 20.5304 7 20 7H17L14.5 4Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M12 16C13.6569 16 15 14.6569 15 13C15 11.3431 13.6569 10 12 10C10.3431 10 9 11.3431 9 13C9 14.6569 10.3431 16 12 16Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                        </div>
                                                    </label>


                                                </div>
                                                <div class="bx_prof">
                                                    <label for="">Full Name</label>
                                                    <input type="text" value="{{ $result->name }}" disabled="" readonly="" >
                                                </div>

                                            </div>
                                            <div class="btn_grp">
                                                <button class="btn">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <path d="M5.83398 5.8335H5.00065C4.55862 5.8335 4.1347 6.00909 3.82214 6.32165C3.50958 6.63421 3.33398 7.05814 3.33398 7.50016V15.0002C3.33398 15.4422 3.50958 15.8661 3.82214 16.1787C4.1347 16.4912 4.55862 16.6668 5.00065 16.6668H12.5007C12.9427 16.6668 13.3666 16.4912 13.6792 16.1787C13.9917 15.8661 14.1673 15.4422 14.1673 15.0002V14.1668" stroke="#676767" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M13.3333 4.16676L15.8333 6.66676M16.9875 5.48759C17.3157 5.15938 17.5001 4.71424 17.5001 4.25009C17.5001 3.78594 17.3157 3.34079 16.9875 3.01259C16.6593 2.68438 16.2142 2.5 15.75 2.5C15.2858 2.5 14.8407 2.68438 14.5125 3.01259L7.5 10.0001V12.5001H10L16.9875 5.48759Z" stroke="#676767" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    </span>
                                                    <span>Edit</span>
                                                </button>
                                                <button class="btn">Save & Update</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                    <label for="">Employee Code  </label>
                                                    <input type="text" class="form-control" value="{{ $result->employee_id }}" disabled="" readonly="">

                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                    <label for="">Official E-mail ID  </label>
                                                    <input type="text" class="form-control" value="{{ $result->email }}" disabled="" readonly="">

                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                    <label for="">Year of Birth </label>
                                                    <input type="text"  class="form-control" value="{{$employee->birth_year}}" name="birth_year" required>

                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                    <label for="">Phone Number </label>
                                                    <input type="text" class="form-control" name="phone" maxlength="10" value="{{ $result->phone }}" required>

                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                    <label for="">Gender </label>
                                                    <!-- <input type="text"  class="form-control" > -->
                                                    <select class="form-control" name="gender">
                                                        <option value="">--please select--</option>
                                                        <option value="Male"  {{ ('Male' == $employee->gender) ? 'selected':'' }}>Male</option>
                                                        <option value="Female" {{ ('Female' == $employee->gender) ? 'selected':'' }}>Female</option>

                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                    <label for="">Address </label>
                                                    <input type="text"  class="form-control" name="address" value="{{$employee->address}}" required>

                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                    <label for="">Country</label>
                                                    <!-- <input type="text"  class="form-control"> -->
                                                    <select class="form-control" name="country">
                                                        <option value="">--please select--</option>
                                                        <option value="Canada"  {{ ('Canada' == $employee->country) ? 'selected':'' }}>Canada</option>
                                                        <option value="Other" {{ ('Other' == $employee->country) ? 'selected':'' }}>Other</option>

                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp select_icon">
                                                    <label for="">Department<sup>*</sup></label>
                                                    <select class="form-control" name="department">
                                                        <option value="">Select Department</option>
                                                        @if(!empty($departments))
                                                        @foreach($departments as $d)
                                                        <option value="{{$d->id}}" {{ ($d->id == $employee->department) ? 'selected':'' }}>{{$d->departments}}</option>
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                                @error('department')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                            <div class="btn_acc mt-5">
                                                <button class="btn_delete">Delete Account</button>
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