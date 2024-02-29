@extends('admin.main')
@section('main')
            <!-- partial -->
            <div class="main-panel ">
                <div class="content-wrapper">
                    <div class="row" id="proBanner">
                        <div class="col-sm-12">
                            <div class="dashboard_rgt">
                                <div class="heading_bx">
                                    <h3>Vetting list > <a href="">view</a></h3>
                                </div>
                                <div class="dasp_grap">
                                    <div class="Vett_admin">
                                        <div class="head_Vett">
                                            <div class="prof_img">
                                                <div class="img_bx">
                                                    @if ($result->profile_pic)
                                                        <img src="{{ asset('/storage/app/upload/prof-doc/'.$result->profile_pic) }}" alt="" style="width: 215px;">
                                                    @else
                                                    <!-- <img src="{{asset('assets/images/prof_v.png')}}" alt=""> -->
                                                        @if ($result->gender=='Male')
                                                            <img src="{{asset('assets/images/male.png')}}" alt="" style="width: 215px;">
                                                        @elseif ($result->gender=='Female')
                                                            <img src="{{asset('assets/images/female.png')}}" alt="" style="width: 215px;">
                                                        @else
                                                            <img src="{{asset('assets/images/others.png')}}" alt="" style="width: 215px;">
                                                        @endif
                                                    @endif
                                                </div>
                                                <div class="img_bx">
                                                    <div class="video_bx">
                                                        <div class="image">
                                                        @if ($result->profile_pic)
                                                            <img src="{{ asset('/storage/app/upload/prof-doc/'.$result->profile_pic) }}" alt="" style="width: 215px;">
                                                        @else
                                                            @if ($result->gender=='Male')
                                                                <img src="{{asset('assets/images/male.png')}}" alt=""  style="width: 215px;">
                                                            @elseif ($result->gender=='Female')
                                                                <img src="{{asset('assets/images/female.png')}}" alt=""  style="width: 215px;">
                                                            @else
                                                                <img src="{{asset('assets/images/others.png')}}" alt=""  style="width: 215px;">
                                                            @endif
                                                        @endif
                                                            <div class="iconfont-wrapper" id="video1">
                                                           <span class="play-btn"></span>
                                                          </div>
                                                      </div>
                                                      <div class="vidBox" id="vidBox" style="display: none; z-index: 100001; position: fixed; inset: 0px; text-align: center; background: none;">
                                                       <div class="videCont" id="videCont" style="z-index: 100002;">
                                                          <video autoplay="" id="v1" loop="" controls="controls">
                                                         <source src="https://netteria.net/myscript/jquery/html5videopopup/video/VideoPopUpHTML5.webm" type="video/webm">
                                                         <source src="https://netteria.net/myscript/jquery/html5videopopup/video/VideoPopUpHTML5.mp4" type="video/mp4">
                                                        </video>
                                                       </div>
                                                      <div class="opct" style="background: rgb(23, 33, 42);"></div><div class="closer_videopopup">⊗</div></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bio_detail">
                                                <div class="head">
                                                <div class="frm_grp">
                                                    <label for="">Full name</label>
                                                    <input type="text" placeholder="Leslie Alexander" class="form-control" value="{{ $result->name }}"  readonly>
                                                </div>
                                                @if ($meeting_link == null)
                                                @livewire('admin.virtual-meeting-create', ['professionalId' => $result->user_id])
                                                <button data-bs-toggle="modal" data-bs-target="#sos-appointment-modal" class="Sched_btn" >Schedule meeting</button>

                                                @else

                                                @livewire('admin.virtual-meeting-create', ['professionalId' => $result->user_id])
                                                <button data-bs-toggle="modal" data-bs-target="#sos-appointment-modal" class="Sched_btn" style="padding: 12px 12px;">Schedule meeting</button>
                                                &nbsp;&nbsp;

                                                    <a href="{{ $meeting_link->meeting_link }}" class="Sched_btn" target="_blank"  style="padding: 12px 12px;">Join meeting</a>

                                                @endif


                                                </div>
                                                <div class="bio_sect">
                                                    <label for="Bio">Bio</label>
                                                    <div class="col-md-12 col-sm-12">
                                                        <textarea class="box_txt" type="text" placeholder="">{{ $result->bio }}</textarea>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                    <label for="">DOB</label>
                                                    <input type="text" placeholder="Leslie Alexander" class="form-control" value="{{$result->dob}}"  readonly>
                                                     <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <g clip-path="url(#clip0_743_8867)">
                                                          <path d="M21.4998 4H19.3332V5.33333H21.3332V20H2.66651V5.33333H4.66651V4H2.49985C2.344 4.0026 2.1902 4.03588 2.04722 4.09794C1.90425 4.15999 1.77489 4.24961 1.66655 4.36166C1.55821 4.47371 1.47301 4.60601 1.41581 4.751C1.35861 4.89599 1.33053 5.05083 1.33318 5.20667V20.1267C1.33053 20.2825 1.35861 20.4373 1.41581 20.5823C1.47301 20.7273 1.55821 20.8596 1.66655 20.9717C1.77489 21.0837 1.90425 21.1733 2.04722 21.2354C2.1902 21.2974 2.344 21.3307 2.49985 21.3333H21.4998C21.6557 21.3307 21.8095 21.2974 21.9525 21.2354C22.0954 21.1733 22.2248 21.0837 22.3331 20.9717C22.4415 20.8596 22.5267 20.7273 22.5839 20.5823C22.6411 20.4373 22.6692 20.2825 22.6665 20.1267V5.20667C22.6692 5.05083 22.6411 4.89599 22.5839 4.751C22.5267 4.60601 22.4415 4.47371 22.3331 4.36166C22.2248 4.24961 22.0954 4.15999 21.9525 4.09794C21.8095 4.03588 21.6557 4.0026 21.4998 4Z" fill="#515151"/>
                                                          <path d="M5.33398 9.33203H6.66732V10.6654H5.33398V9.33203Z" fill="#515151"/>
                                                          <path d="M9.33398 9.33203H10.6673V10.6654H9.33398V9.33203Z" fill="#515151"/>
                                                          <path d="M13.334 9.33203H14.6673V10.6654H13.334V9.33203Z" fill="#515151"/>
                                                          <path d="M17.334 9.33203H18.6673V10.6654H17.334V9.33203Z" fill="#515151"/>
                                                          <path d="M5.33398 12.668H6.66732V14.0013H5.33398V12.668Z" fill="#515151"/>
                                                          <path d="M9.33398 12.668H10.6673V14.0013H9.33398V12.668Z" fill="#515151"/>
                                                          <path d="M13.334 12.668H14.6673V14.0013H13.334V12.668Z" fill="#515151"/>
                                                          <path d="M17.334 12.668H18.6673V14.0013H17.334V12.668Z" fill="#515151"/>
                                                          <path d="M5.33301 16H6.66634V17.3333H5.33301V16Z" fill="#515151"/>
                                                          <path d="M9.33301 16H10.6663V17.3333H9.33301V16Z" fill="#515151"/>
                                                          <path d="M13.333 16H14.6663V17.3333H13.333V16Z" fill="#515151"/>
                                                          <path d="M17.333 16H18.6663V17.3333H17.333V16Z" fill="#515151"/>
                                                          <path d="M6.66667 6.66536C6.84348 6.66536 7.01305 6.59513 7.13807 6.4701C7.2631 6.34508 7.33333 6.17551 7.33333 5.9987V1.9987C7.33333 1.82189 7.2631 1.65232 7.13807 1.52729C7.01305 1.40227 6.84348 1.33203 6.66667 1.33203C6.48986 1.33203 6.32029 1.40227 6.19526 1.52729C6.07024 1.65232 6 1.82189 6 1.9987V5.9987C6 6.17551 6.07024 6.34508 6.19526 6.4701C6.32029 6.59513 6.48986 6.66536 6.66667 6.66536Z" fill="#515151"/>
                                                          <path d="M17.3327 6.66536C17.5095 6.66536 17.6791 6.59513 17.8041 6.4701C17.9291 6.34508 17.9993 6.17551 17.9993 5.9987V1.9987C17.9993 1.82189 17.9291 1.65232 17.8041 1.52729C17.6791 1.40227 17.5095 1.33203 17.3327 1.33203C17.1559 1.33203 16.9863 1.40227 16.8613 1.52729C16.7363 1.65232 16.666 1.82189 16.666 1.9987V5.9987C16.666 6.17551 16.7363 6.34508 16.8613 6.4701C16.9863 6.59513 17.1559 6.66536 17.3327 6.66536Z" fill="#515151"/>
                                                          <path d="M8.66699 4H15.3337V5.33333H8.66699V4Z" fill="#515151"/>
                                                        </g>
                                                        <defs>
                                                          <clipPath id="clip0_743_8867">
                                                            <rect width="24" height="24" fill="white"/>
                                                          </clipPath>
                                                        </defs>
                                                      </svg>
                                                    </span>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                    <label for="">Email id</label>
                                                    <input type="text" placeholder="leslie.meditation@gmail.com" class="form-control" value="{{$result->email}}"  readonly>
                                                     <span class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <g clip-path="url(#clip0_743_8859)">
                                                              <path d="M21.333 4H2.66634C2.31272 4 1.97358 4.14048 1.72353 4.39052C1.47348 4.64057 1.33301 4.97971 1.33301 5.33333V18.6667C1.33301 19.0203 1.47348 19.3594 1.72353 19.6095C1.97358 19.8595 2.31272 20 2.66634 20H21.333C21.6866 20 22.0258 19.8595 22.2758 19.6095C22.5259 19.3594 22.6663 19.0203 22.6663 18.6667V5.33333C22.6663 4.97971 22.5259 4.64057 22.2758 4.39052C22.0258 4.14048 21.6866 4 21.333 4ZM20.3063 18.6667H3.77301L8.43967 13.84L7.47967 12.9133L2.66634 17.8933V6.34667L10.953 14.5933C11.2028 14.8417 11.5408 14.9811 11.893 14.9811C12.2453 14.9811 12.5832 14.8417 12.833 14.5933L21.333 6.14V17.8067L16.4263 12.9L15.4863 13.84L20.3063 18.6667ZM3.53967 5.33333H20.253L11.893 13.6467L3.53967 5.33333Z" fill="#515151"/>
                                                            </g>
                                                            <defs>
                                                              <clipPath id="clip0_743_8859">
                                                                <rect width="24" height="24" fill="white"/>
                                                              </clipPath>
                                                            </defs>
                                                          </svg>
                                                    </span>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                    <label for="">Phone</label>
                                                    <input type="text" placeholder="+1 888 546 6734" class="form-control" value="{{$result->phone}}" readonly>
                                                     <span class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M21.0642 4.20144L21.0321 4.18138L16.9731 2.18164L12.592 8.02306L14.6076 10.7107C14.5473 11.7243 14.1175 12.6806 13.3995 13.3986C12.6815 14.1166 11.7252 14.5464 10.7116 14.6067L8.02399 12.5911L2.18262 16.9721L4.16571 20.9972L4.1824 21.0312L4.20251 21.0632C4.30834 21.2337 4.45605 21.3743 4.63158 21.4716C4.80711 21.5689 5.00462 21.6196 5.20531 21.619H6.25268C8.27075 21.619 10.2691 21.2215 12.1335 20.4492C13.998 19.677 15.692 18.545 17.119 17.118C18.546 15.691 19.678 13.9969 20.4502 12.1325C21.2225 10.268 21.62 8.26972 21.62 6.25166V5.20423C21.6206 5.00355 21.5699 4.80604 21.4726 4.63051C21.3753 4.45498 21.2348 4.30727 21.0642 4.20144ZM20.12 6.25166C20.12 13.8981 13.8991 20.119 6.25268 20.119H5.40518L4.07834 17.4254L8.02427 14.466L10.2212 16.1136H10.4711C11.9675 16.1119 13.402 15.5168 14.46 14.4587C15.5181 13.4007 16.1132 11.9661 16.1149 10.4698V10.2199L14.4673 8.02302L17.4264 4.07731L20.12 5.40439V6.25166Z" fill="#515151"/>
                                                          </svg>
                                                    </span>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp select_icon">
                                                    <label for="">Gender*</label>

                                                    <select class="form-control" name="gender" disabled>
                                                        <option value="">--please select--</option>
                                                        <option value="Male" {{ ( 'Male' == $result->gender ) ? 'selected' : '' }}>Male</option>
                                                        <option value="Female" {{ ( 'Female' == $result->gender) ? 'selected' : '' }}>Female</option>
                                                        <option value="Other" {{ ( 'Other' == $result->gender ) ? 'selected' : '' }}>Other</option>
                                                    </select>

                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                    <label for="">Address</label>
                                                    <input type="text" placeholder="15 Rockcliffe Blvd" class="form-control"  value="{{$result->address}}" readonly>
                                                     <span class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M13.7772 17.4262C13.6099 17.8359 13.1772 18.0666 12.7445 17.983C12.3118 17.8964 11.9743 17.5185 11.9743 17.0772V12.0002H6.89726C6.48215 12.0002 6.10253 11.6886 6.01743 11.2559C5.93233 10.8232 6.16541 10.3905 6.5736 10.2232L16.7283 6.0687C17.0715 5.92793 17.4667 6.00755 17.7292 6.27034C17.9918 6.53342 18.0725 6.92862 17.9312 7.27276L13.7772 17.4262Z" fill="#515151"/>
                                                          </svg>
                                                    </span>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp select_icon">
                                                    <label for="">Province*</label>
                                                    <select name="" id="" class="form-control" disabled>
                                                        <option value="">--please select--</option>
                                                        <option value="AB" {{ ( 'AB' == $result->province ) ? 'selected' : '' }}>Alberta</option>
                                                        <option value="BC" {{ ( 'BC' == $result->province ) ? 'selected' : '' }}>British Columbia</option>
                                                        <option value="MB" {{ ( 'MB' == $result->province ) ? 'selected' : '' }}>Manitoba</option>
                                                        <option value="NB" {{ ( 'NB' == $result->province ) ? 'selected' : '' }}>New Brunswick</option>
                                                        <option value="NL" {{ ( 'NL' == $result->province ) ? 'selected' : '' }}>Newfoundland and Labrador</option>
                                                        <option value="NS" {{ ( 'NS' == $result->province ) ? 'selected' : '' }}>Nova Scotia</option>
                                                        <option value="NT" {{ ( 'NT' == $result->province ) ? 'selected' : '' }}>Northwest Territories</option>
                                                        <option value="NU" {{ ( 'NU' == $result->province ) ? 'selected' : '' }}>Nunavut</option>
                                                        <option value="ON" {{ ( 'ON' == $result->province ) ? 'selected' : '' }}>Ontario</option>
                                                        <option value="PE" {{ ( 'PE' == $result->province ) ? 'selected' : '' }}>Prince Edward Island</option>
                                                        <option value="QC" {{ ( 'QC' == $result->province ) ? 'selected' : '' }}>Quebec</option>
                                                        <option value="SK" {{ ( 'SK' == $result->province ) ? 'selected' : '' }}>Saskatchewan</option>
                                                        <option value="YT" {{ ( 'YT' == $result->province ) ? 'selected' : '' }}>Yukon</option>
                                                    </select>
                                                </div>


                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                    <label for="">Zip Code</label>
                                                    <input type="text" placeholder="M6N 4P8" class="form-control" value="{{$result->zip_code}}" readonly>
                                                     <span class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="24" viewBox="0 0 23 24" fill="none">
                                                            <path d="M11 1.99609C11.1989 1.99609 11.3897 2.07511 11.5303 2.21576C11.671 2.35642 11.75 2.54718 11.75 2.74609V4.00009H13.75C14.716 4.00009 15.5 4.78409 15.5 5.75009V11.0001H17.75C18.716 11.0001 19.5 11.7841 19.5 12.7501V20.2501C19.5 20.7142 19.3156 21.1593 18.9874 21.4875C18.6592 21.8157 18.2141 22.0001 17.75 22.0001H4.25C3.78587 22.0001 3.34075 21.8157 3.01256 21.4875C2.68437 21.1593 2.5 20.7142 2.5 20.2501V11.8201C2.5 11.2011 2.827 10.6281 3.36 10.3131L6.5 8.45809V5.74909C6.50027 5.28514 6.68476 4.84028 7.01292 4.5123C7.34108 4.18433 7.78604 4.00009 8.25 4.00009H10.25V2.74609C10.25 2.54718 10.329 2.35642 10.4697 2.21576C10.6103 2.07511 10.8011 1.99609 11 1.99609ZM8 8.01809C8.81 8.13809 9.5 8.82409 9.5 9.75209V20.4991H12.5V12.7491C12.5 12.3283 12.6517 11.9216 12.9271 11.6035C13.2026 11.2854 13.5835 11.0772 14 11.0171V5.75009C14 5.68379 13.9737 5.6202 13.9268 5.57332C13.8799 5.52643 13.8163 5.50009 13.75 5.50009H8.25C8.1837 5.50009 8.12011 5.52643 8.07322 5.57332C8.02634 5.6202 8 5.68379 8 5.75009V8.01909V8.01809ZM14.25 12.4991C14.1837 12.4991 14.1201 12.5254 14.0732 12.5723C14.0263 12.6192 14 12.6828 14 12.7491V20.4991H17.75C17.8163 20.4991 17.8799 20.4728 17.9268 20.4259C17.9737 20.379 18 20.3154 18 20.2491V12.7491C18 12.6828 17.9737 12.6192 17.9268 12.5723C17.8799 12.5254 17.8163 12.4991 17.75 12.4991H14.25ZM7.623 9.53709L4.123 11.6051C4.08559 11.6272 4.05457 11.6586 4.033 11.6963C4.01143 11.734 4.00006 11.7767 4 11.8201V20.2501C4 20.3871 4.112 20.5001 4.25 20.5001H8V9.75109C7.99994 9.70704 7.98824 9.66379 7.96609 9.62571C7.94394 9.58764 7.91212 9.55609 7.87385 9.53427C7.83558 9.51244 7.79223 9.50112 7.74818 9.50144C7.70413 9.50176 7.66094 9.51372 7.623 9.53609V9.53709Z" fill="#515151"/>
                                                          </svg>
                                                    </span>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                    <label for="">Qualification</label>
                                                    <input type="text" placeholder="Master of Arts (MA)" class="form-control" value="{{$result->qualification}}" readonly>
                                                     <span class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M12.0004 3.65625L11.6486 3.84375L1.52362 9.09375L0.234375 9.75L1.50038 10.383V16.7108C1.05187 16.9718 0.750375 17.4458 0.750375 18C0.750375 18.3978 0.90841 18.7794 1.18971 19.0607C1.47102 19.342 1.85255 19.5 2.25038 19.5C2.6482 19.5 3.02973 19.342 3.31104 19.0607C3.59234 18.7794 3.75038 18.3978 3.75038 18C3.75038 17.4465 3.44887 16.9718 3.00038 16.7108V11.1562L4.50038 11.9295V15.75C4.50038 16.0808 4.65263 16.38 4.82888 16.5705C5.00438 16.761 5.21813 16.875 5.43788 16.992C5.88037 17.2238 6.40538 17.388 7.05487 17.5312C8.35612 17.8215 10.0901 18 12.0004 18C13.9106 18 15.6454 17.8215 16.9459 17.5312C17.5961 17.388 18.1204 17.2238 18.5629 16.992C18.7826 16.875 18.9964 16.761 19.1726 16.5705C19.3785 16.3463 19.4951 16.0544 19.5004 15.75V11.9295L22.4771 10.4062L23.7656 9.75L22.4771 9.09375L12.3521 3.84375L12.0004 3.65625ZM12.0004 5.34375L20.4851 9.75L19.1486 10.4295C18.9776 10.258 18.7798 10.1157 18.5629 10.008C18.1234 9.77625 17.5954 9.612 16.9459 9.46875C15.6484 9.1785 13.9196 9 12.0004 9C10.0811 9 8.35312 9.1785 7.05487 9.46875C6.40462 9.612 5.87738 9.77625 5.43788 10.008C5.22098 10.1157 5.02312 10.258 4.85213 10.4295L3.51562 9.75L12.0004 5.34375ZM12.0004 10.5C13.8311 10.5 15.4781 10.6672 16.6174 10.9222C17.1859 11.0475 17.6426 11.1945 17.8834 11.3198C17.9591 11.361 17.9711 11.391 18.0004 11.4142V14.2733C17.656 14.1484 17.3038 14.0467 16.9459 13.9688C15.6446 13.6785 13.9106 13.5 12.0004 13.5C10.0901 13.5 8.35538 13.6785 7.05487 13.9688C6.65662 14.0565 6.31388 14.1593 6.00038 14.2733V11.415C6.03038 11.3918 6.04163 11.3625 6.11738 11.3212C6.35738 11.1953 6.81487 11.0483 7.38337 10.923C8.52337 10.6673 10.1696 10.5 12.0004 10.5ZM12.0004 15C13.8199 15 15.4751 15.1672 16.6174 15.4222C16.9713 15.4965 17.3168 15.6064 17.6486 15.75C17.3168 15.8939 16.9713 16.004 16.6174 16.0785C15.4751 16.3335 13.8199 16.5 12.0004 16.5C10.1809 16.5 8.52562 16.3328 7.38337 16.0778C7.02948 16.0035 6.68398 15.8936 6.35212 15.75C6.68395 15.6061 7.02945 15.496 7.38337 15.4215C8.52562 15.1673 10.1809 15 12.0004 15Z" fill="#515151"/>
                                                          </svg>
                                                    </span>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                    <label for="">Expertise</label>
                                                    <select class="form-control"  name="expertise" disabled>
                                                        <option value="">--Please Select--</option>
                                                        <option value="Meditation" {{ ( 'Meditation' == $result->expertise) ? 'selected' : '' }}>Meditation</option>
                                                        <option value="Yoga" {{ ( 'Yoga' == $result->expertise) ? 'selected' : '' }}>Yoga</option>
                                                        <option value="Physiotherapy" {{ ( 'Physiotherapy' == $result->expertise) ? 'selected' : '' }}>Physiotherapy</option>
                                                        <option value="Dietitian/ Nutritionist" {{ ( 'Dietitian/ Nutritionist' == $result->expertise) ? 'selected' : '' }}>Dietitian/ Nutritionist</option>
                                                        <option value="Support Workers" {{ ( 'Support Workers' == $result->expertise) ? 'selected' : '' }}>Support Workers</option>
                                                        <option value="Child Care" {{ ( 'Child Care' == $result->expertise) ? 'selected' : '' }}>Child Care</option>
                                                        <option value="Wellness Coach" {{ ( 'Wellness Coach' == $result->expertise) ? 'selected' : '' }}>Wellness Coach</option>
                                                        <option value="Therapy Sessions" {{ ( 'Therapy Sessions' == $result->expertise) ? 'selected' : '' }}>Therapy Sessions</option>
                                                        <option value="Physical Wellness" {{ ( 'Physical Wellness' == old('expertise')) ? 'selected' : '' }}>Physical Wellness</option>
                                                        <option value="Mental Wellness" {{ ( 'Mental Wellness' == old('expertise')) ? 'selected' : '' }}>Mental Wellness</option>

                                                    </select>
                                                    <!-- <input type="text" placeholder="Meditation" class="form-control" value="{{$result->expertise}}">
                                                     <span class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M12 13.5C15.3137 13.5 18 10.8137 18 7.5C18 4.18629 15.3137 1.5 12 1.5C8.68629 1.5 6 4.18629 6 7.5C6 10.8137 8.68629 13.5 12 13.5Z" stroke="#515151" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M6.73359 10.6797L2.25 18.7506L6.32156 18.7309C6.45202 18.7303 6.58038 18.7637 6.69399 18.8278C6.8076 18.8919 6.90252 18.9845 6.96938 19.0966L9 22.5006L13.1405 13.3919" stroke="#515151" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M17.1816 10.5L21.75 18.75L17.6784 18.7303C17.548 18.7297 17.4196 18.763 17.306 18.8272C17.1924 18.8913 17.0975 18.9839 17.0306 19.0959L15 22.5L12 15.9" stroke="#515151" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M12 10.5C13.6569 10.5 15 9.15685 15 7.5C15 5.84315 13.6569 4.5 12 4.5C10.3431 4.5 9 5.84315 9 7.5C9 9.15685 10.3431 10.5 12 10.5Z" stroke="#515151" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                          </svg>
                                                    </span> -->
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                    <label for="">Consultation Mode</label>
                                                    <!-- <input type="text" placeholder="Both" class="form-control" >
                                                     <span class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M14.06 9L15 9.94L5.92 19H5V18.08L14.06 9ZM17.66 3C17.41 3 17.15 3.1 16.96 3.29L15.13 5.12L18.88 8.87L20.71 7.04C21.1 6.65 21.1 6 20.71 5.63L18.37 3.29C18.17 3.09 17.92 3 17.66 3ZM14.06 6.19L3 17.25V21H6.75L17.81 9.94L14.06 6.19Z" fill="#515151"/>
                                                          </svg>
                                                    </span> -->
                                                    <select class="form-control" name="consultation_mode" disabled>
                                                        <option value="">--Please Select--</option>
                                                        <option value="Virtually" {{ ( 'Virtually' == $result->consultation_mode ) ? 'selected' : '' }}>Virtually</option>
                                                        <option value="In-Person" {{ ( 'In-Person' == $result->consultation_mode ) ? 'selected' : '' }}>In- Person</option>
                                                        <option value="Both" {{ ( 'Both' == $result->consultation_mode ) ? 'selected' : '' }}>Both</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                    <label for="">Service Provide</label>
                                                    <input type="text" placeholder="Meditation" class="form-control" value="{{$result->service_offering}}"  readonly>
                                                     <span class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M2 20V10C2 9.45 2.196 8.979 2.588 8.587C2.98 8.195 3.45067 7.99934 4 8H7V6C7 5.45 7.196 4.979 7.588 4.587C7.98 4.195 8.45067 3.99934 9 4H15C15.55 4 16.021 4.196 16.413 4.588C16.805 4.98 17.0007 5.45067 17 6V8H20C20.55 8 21.021 8.196 21.413 8.588C21.805 8.98 22.0007 9.45067 22 10V20H2ZM4 18H20V15H18V16H16V15H8V16H6V15H4V18ZM4 10V13H6V12H8V13H16V12H18V13H20V10H4ZM9 8H15V6H9V8Z" fill="#515151"/>
                                                          </svg>
                                                    </span>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                    <label for="">Degree</label>
                                                    <div class="file_upload">
                                                    <!-- <input type="text" placeholder="Phd Degree.pdf" class="form-control" value="{{$result->degree_upld}}"> -->
                                                   <a href="{{ asset('/storage/app/upload/prof-doc/'.$result->degree_upld) }}" target="_blank">
                                                    
                                                   <span style="font-size: 17px;">{{$result->degree_upld}}</span></a>
</div>
                                                   <span class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M1 8.7L11.511 4.5L22.022 8.7L11.511 12.9L1 8.7Z" stroke="#6C6C6C" stroke-width="2" stroke-linejoin="round"/>
                                                            <path d="M5.77832 10.9134V17.1344C5.77832 17.1344 8.18332 19.5009 11.5108 19.5009C14.8393 19.5009 17.2443 17.1344 17.2443 17.1344V10.9134M22.0223 8.75586V13.3674V8.75586Z" stroke="#6C6C6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                          </svg>
                                                    </span>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                    <label for="">Facebook link</label>
                                                    <input type="text" placeholder="https://facebook.com/lesile" class="form-control" value="{{$result->facebook_link}}"  readonly>
                                                     <span class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M12.8947 17.4713C13.0352 17.6119 13.1142 17.8026 13.1142 18.0014C13.1142 18.2002 13.0352 18.3909 12.8947 18.5316L11.9628 19.4691C10.9773 20.4539 9.64094 21.007 8.24769 21.0065C6.85444 21.0061 5.51843 20.4522 4.53356 19.4667C3.5487 18.4812 2.99565 17.1449 2.99609 15.7516C2.99653 14.3584 3.55042 13.0224 4.53591 12.0375L6.79716 9.77626C7.74374 8.82892 9.01657 8.27914 10.3552 8.2394C11.6938 8.19967 12.997 8.67299 13.9981 9.56251C14.072 9.62801 14.1322 9.70741 14.1754 9.79619C14.2186 9.88497 14.2438 9.98139 14.2498 10.0799C14.2557 10.1785 14.2421 10.2772 14.2099 10.3705C14.1776 10.4638 14.1273 10.5499 14.0618 10.6238C13.9963 10.6976 13.9169 10.7579 13.8282 10.8011C13.7394 10.8442 13.643 10.8695 13.5444 10.8754C13.4459 10.8813 13.3471 10.8678 13.2538 10.8356C13.1605 10.8033 13.0745 10.753 13.0006 10.6875C12.2856 10.0525 11.355 9.71473 10.3992 9.74313C9.44333 9.77153 8.53446 10.164 7.85841 10.8403L5.59716 13.0988C4.89375 13.8022 4.49859 14.7562 4.49859 15.7509C4.49859 16.7457 4.89375 17.6997 5.59716 18.4031C6.30056 19.1065 7.25458 19.5017 8.24934 19.5017C9.24411 19.5017 10.1981 19.1065 10.9015 18.4031L11.8334 17.4713C11.9031 17.4015 11.9858 17.3462 12.0768 17.3085C12.1679 17.2707 12.2655 17.2513 12.364 17.2513C12.4626 17.2513 12.5602 17.2707 12.6512 17.3085C12.7423 17.3462 12.825 17.4015 12.8947 17.4713ZM19.4647 4.53376C18.479 3.55034 17.1435 2.99805 15.7512 2.99805C14.3589 2.99805 13.0234 3.55034 12.0378 4.53376L11.1059 5.46657C10.9653 5.6073 10.8864 5.79813 10.8864 5.99706C10.8865 6.196 10.9656 6.38675 11.1064 6.52736C11.2471 6.66796 11.4379 6.7469 11.6369 6.74682C11.8358 6.74673 12.0266 6.66762 12.1672 6.52689L13.099 5.59501C13.8024 4.89161 14.7565 4.49644 15.7512 4.49644C16.746 4.49644 17.7 4.89161 18.4034 5.59501C19.1068 6.29842 19.502 7.25244 19.502 8.2472C19.502 9.24196 19.1068 10.196 18.4034 10.8994L16.1422 13.1625C15.4657 13.8384 14.5567 14.2304 13.6008 14.2583C12.645 14.2862 11.7146 13.9478 11 13.3125C10.8508 13.1802 10.6552 13.1126 10.4561 13.1246C10.2571 13.1365 10.071 13.2271 9.93872 13.3763C9.80644 13.5254 9.73885 13.7211 9.7508 13.9201C9.76276 14.1191 9.85329 14.3052 10.0025 14.4375C11.0033 15.3273 12.3064 15.8009 13.645 15.7615C14.9836 15.7222 16.2566 15.1727 17.2034 14.2256L19.4647 11.9644C20.4487 10.9787 21.0013 9.6428 21.0013 8.25001C21.0013 6.85722 20.4487 5.52134 19.4647 4.53564V4.53376Z" fill="#515151"/>
                                                          </svg>
                                                    </span>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                    <label for="">Linkedin Link</label>
                                                    <input type="text" placeholder="https://linkedin.com/lesile" class="form-control" value="{{$result->linkedin_link}}" readonly>
                                                     <span class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M12.8947 17.4713C13.0352 17.6119 13.1142 17.8026 13.1142 18.0014C13.1142 18.2002 13.0352 18.3909 12.8947 18.5316L11.9628 19.4691C10.9773 20.4539 9.64094 21.007 8.24769 21.0065C6.85444 21.0061 5.51843 20.4522 4.53356 19.4667C3.5487 18.4812 2.99565 17.1449 2.99609 15.7516C2.99653 14.3584 3.55042 13.0224 4.53591 12.0375L6.79716 9.77626C7.74374 8.82892 9.01657 8.27914 10.3552 8.2394C11.6938 8.19967 12.997 8.67299 13.9981 9.56251C14.072 9.62801 14.1322 9.70741 14.1754 9.79619C14.2186 9.88497 14.2438 9.98139 14.2498 10.0799C14.2557 10.1785 14.2421 10.2772 14.2099 10.3705C14.1776 10.4638 14.1273 10.5499 14.0618 10.6238C13.9963 10.6976 13.9169 10.7579 13.8282 10.8011C13.7394 10.8442 13.643 10.8695 13.5444 10.8754C13.4459 10.8813 13.3471 10.8678 13.2538 10.8356C13.1605 10.8033 13.0745 10.753 13.0006 10.6875C12.2856 10.0525 11.355 9.71473 10.3992 9.74313C9.44333 9.77153 8.53446 10.164 7.85841 10.8403L5.59716 13.0988C4.89375 13.8022 4.49859 14.7562 4.49859 15.7509C4.49859 16.7457 4.89375 17.6997 5.59716 18.4031C6.30056 19.1065 7.25458 19.5017 8.24934 19.5017C9.24411 19.5017 10.1981 19.1065 10.9015 18.4031L11.8334 17.4713C11.9031 17.4015 11.9858 17.3462 12.0768 17.3085C12.1679 17.2707 12.2655 17.2513 12.364 17.2513C12.4626 17.2513 12.5602 17.2707 12.6512 17.3085C12.7423 17.3462 12.825 17.4015 12.8947 17.4713ZM19.4647 4.53376C18.479 3.55034 17.1435 2.99805 15.7512 2.99805C14.3589 2.99805 13.0234 3.55034 12.0378 4.53376L11.1059 5.46657C10.9653 5.6073 10.8864 5.79813 10.8864 5.99706C10.8865 6.196 10.9656 6.38675 11.1064 6.52736C11.2471 6.66796 11.4379 6.7469 11.6369 6.74682C11.8358 6.74673 12.0266 6.66762 12.1672 6.52689L13.099 5.59501C13.8024 4.89161 14.7565 4.49644 15.7512 4.49644C16.746 4.49644 17.7 4.89161 18.4034 5.59501C19.1068 6.29842 19.502 7.25244 19.502 8.2472C19.502 9.24196 19.1068 10.196 18.4034 10.8994L16.1422 13.1625C15.4657 13.8384 14.5567 14.2304 13.6008 14.2583C12.645 14.2862 11.7146 13.9478 11 13.3125C10.8508 13.1802 10.6552 13.1126 10.4561 13.1246C10.2571 13.1365 10.071 13.2271 9.93872 13.3763C9.80644 13.5254 9.73885 13.7211 9.7508 13.9201C9.76276 14.1191 9.85329 14.3052 10.0025 14.4375C11.0033 15.3273 12.3064 15.8009 13.645 15.7615C14.9836 15.7222 16.2566 15.1727 17.2034 14.2256L19.4647 11.9644C20.4487 10.9787 21.0013 9.6428 21.0013 8.25001C21.0013 6.85722 20.4487 5.52134 19.4647 4.53564V4.53376Z" fill="#515151"/>
                                                          </svg>
                                                    </span>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                    <label for="">Instagram link</label>
                                                    <input type="text" placeholder="https://instagram.com/lesile" class="form-control" value="{{$result->instagram_link}}" readonly>
                                                     <span class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M12.8947 17.4713C13.0352 17.6119 13.1142 17.8026 13.1142 18.0014C13.1142 18.2002 13.0352 18.3909 12.8947 18.5316L11.9628 19.4691C10.9773 20.4539 9.64094 21.007 8.24769 21.0065C6.85444 21.0061 5.51843 20.4522 4.53356 19.4667C3.5487 18.4812 2.99565 17.1449 2.99609 15.7516C2.99653 14.3584 3.55042 13.0224 4.53591 12.0375L6.79716 9.77626C7.74374 8.82892 9.01657 8.27914 10.3552 8.2394C11.6938 8.19967 12.997 8.67299 13.9981 9.56251C14.072 9.62801 14.1322 9.70741 14.1754 9.79619C14.2186 9.88497 14.2438 9.98139 14.2498 10.0799C14.2557 10.1785 14.2421 10.2772 14.2099 10.3705C14.1776 10.4638 14.1273 10.5499 14.0618 10.6238C13.9963 10.6976 13.9169 10.7579 13.8282 10.8011C13.7394 10.8442 13.643 10.8695 13.5444 10.8754C13.4459 10.8813 13.3471 10.8678 13.2538 10.8356C13.1605 10.8033 13.0745 10.753 13.0006 10.6875C12.2856 10.0525 11.355 9.71473 10.3992 9.74313C9.44333 9.77153 8.53446 10.164 7.85841 10.8403L5.59716 13.0988C4.89375 13.8022 4.49859 14.7562 4.49859 15.7509C4.49859 16.7457 4.89375 17.6997 5.59716 18.4031C6.30056 19.1065 7.25458 19.5017 8.24934 19.5017C9.24411 19.5017 10.1981 19.1065 10.9015 18.4031L11.8334 17.4713C11.9031 17.4015 11.9858 17.3462 12.0768 17.3085C12.1679 17.2707 12.2655 17.2513 12.364 17.2513C12.4626 17.2513 12.5602 17.2707 12.6512 17.3085C12.7423 17.3462 12.825 17.4015 12.8947 17.4713ZM19.4647 4.53376C18.479 3.55034 17.1435 2.99805 15.7512 2.99805C14.3589 2.99805 13.0234 3.55034 12.0378 4.53376L11.1059 5.46657C10.9653 5.6073 10.8864 5.79813 10.8864 5.99706C10.8865 6.196 10.9656 6.38675 11.1064 6.52736C11.2471 6.66796 11.4379 6.7469 11.6369 6.74682C11.8358 6.74673 12.0266 6.66762 12.1672 6.52689L13.099 5.59501C13.8024 4.89161 14.7565 4.49644 15.7512 4.49644C16.746 4.49644 17.7 4.89161 18.4034 5.59501C19.1068 6.29842 19.502 7.25244 19.502 8.2472C19.502 9.24196 19.1068 10.196 18.4034 10.8994L16.1422 13.1625C15.4657 13.8384 14.5567 14.2304 13.6008 14.2583C12.645 14.2862 11.7146 13.9478 11 13.3125C10.8508 13.1802 10.6552 13.1126 10.4561 13.1246C10.2571 13.1365 10.071 13.2271 9.93872 13.3763C9.80644 13.5254 9.73885 13.7211 9.7508 13.9201C9.76276 14.1191 9.85329 14.3052 10.0025 14.4375C11.0033 15.3273 12.3064 15.8009 13.645 15.7615C14.9836 15.7222 16.2566 15.1727 17.2034 14.2256L19.4647 11.9644C20.4487 10.9787 21.0013 9.6428 21.0013 8.25001C21.0013 6.85722 20.4487 5.52134 19.4647 4.53564V4.53376Z" fill="#515151"/>
                                                          </svg>
                                                    </span>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                    <label for="">Hourly Fees</label>
                                                    <input type="text" placeholder="100.00" class="form-control" value="{{$result->hourly_fees}}" readonly>
                                                     <span class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M15 14L12 12V7M3 12C3 13.1819 3.23279 14.3522 3.68508 15.4442C4.13738 16.5361 4.80031 17.5282 5.63604 18.364C6.47177 19.1997 7.46392 19.8626 8.55585 20.3149C9.64778 20.7672 10.8181 21 12 21C13.1819 21 14.3522 20.7672 15.4442 20.3149C16.5361 19.8626 17.5282 19.1997 18.364 18.364C19.1997 17.5282 19.8626 16.5361 20.3149 15.4442C20.7672 14.3522 21 13.1819 21 12C21 10.8181 20.7672 9.64778 20.3149 8.55585C19.8626 7.46392 19.1997 6.47177 18.364 5.63604C17.5282 4.80031 16.5361 4.13738 15.4442 3.68508C14.3522 3.23279 13.1819 3 12 3C10.8181 3 9.64778 3.23279 8.55585 3.68508C7.46392 4.13738 6.47177 4.80031 5.63604 5.63604C4.80031 6.47177 4.13738 7.46392 3.68508 8.55585C3.23279 9.64778 3 10.8181 3 12Z" stroke="#515151" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                          </svg>
                                                    </span>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                    <label for="">Add language*</label>
                                                    <div class="form-control">
                                                    @php
                                                        $lang=EXPLODE(',',$result->language);
                                                       // dd($lang);
                                                    @endphp
                                                    @foreach ($lang as $ln)
                                                        {{ $ln }}
                                                    @endforeach
                                                    </div>
                                                    <!-- <select multiple  class="form-control"  name="language[]" >
                                                        <option value="English" @if(in_array("English", $lang)) selected @endif>English</option>
                                                        <option value="Spanish" @if(in_array("Spanish", $lang)) selected @endif>Spanish</option>
                                                        <option value="French" @if(in_array("French", $lang)) selected @endif>French</option>
                                                        <option value="German"  @if(in_array("German", $lang)) selected @endif>German</option>
                                                        <option value="Italian"  @if(in_array("Italian", $lang)) selected @endif>Italian</option>
                                                        <option value="Portuguese"  @if(in_array("Portuguese", $lang)) selected @endif>Portuguese</option>
                                                        <option value="Dutch"  @if(in_array("Dutch", $lang)) selected @endif>Dutch</option>
                                                        <option value="Russian"  @if(in_array("Russian", $lang)) selected @endif>Russian</option>
                                                        <option value="Chinese"  @if(in_array("Chinese", $lang)) selected @endif>Chinese</option>
                                                        <option value="Japanese"  @if(in_array("Japanese", $lang)) selected @endif>Japanese</option>
                                                        <option value="Korean"  @if(in_array("Korean", $lang)) selected @endif>Korean</option>
                                                        <option value="Arabic" @if(in_array("Arabic", $lang)) selected @endif>Arabic</option>
                                                        <option value="Hindi" @if(in_array("Hindi", $lang)) selected @endif>Hindi</option>
                                                        <option value="Swedish"  @if(in_array("Swedish", $lang)) selected @endif>Swedish</option>
                                                        <option value="Norwegian"  @if(in_array("Norwegian", $lang)) selected @endif>Norwegian</option>
                                                        <option value="Danish"  @if(in_array("Danish", $lang)) selected @endif>Danish</option>
                                                        <option value="Finnish"  @if(in_array("Finnish", $lang)) selected @endif>Finnish</option>
                                                        <option value="Polish"  @if(in_array("Polish", $lang)) selected @endif>Polish</option>
                                                        <option value="Turkish"  @if(in_array("Turkish", $lang)) selected @endif>Turkish</option>
                                                        <option value="Greek" @if(in_array("Greek", $lang)) selected @endif>Greek</option>

                                                    </select> -->


                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="frm_grp select_icon">
                                                            <label for="">Experience*</label>
                                                            <select class="form-control" name="experience_year" disabled>
                                                                <option value="">--Please Select--</option>
                                                                <option value="1 Years" {{ ( '1 Years' == $result->experience_year ) ? 'selected' : '' }}>1 Years</option>
                                                                <option value="2 Years" {{ ( '2 Years' == $result->experience_year ) ? 'selected' : '' }}>2 Years</option>
                                                                <option value="3 Years" {{ ( '3 Years' == $result->experience_year ) ? 'selected' : '' }}>3 Years</option>
                                                                <option value="4 Years" {{ ( '4 Years' == $result->experience_year ) ? 'selected' : '' }}>4 Years</option>
                                                                <option value="5 Years" {{ ( '5 Years' == $result->experience_year ) ? 'selected' : '' }}>5 Years</option>
                                                                <option value="6 Years" {{ ( '6 Years' == $result->experience_year ) ? 'selected' : '' }}>6 Years</option>
                                                                <option value="7 Years" {{ ( '7 Years' == $result->experience_year ) ? 'selected' : '' }}>7 Years</option>
                                                                <option value="8 Years" {{ ( '8 Years' == $result->experience_year ) ? 'selected' : '' }}>8 Years</option>
                                                                <option value="9 Years" {{ ( '9 Years' == $result->experience_year ) ? 'selected' : '' }}>9 Years</option>
                                                                <option value="10 Years" {{ ( '10 Years' == $result->experience_year ) ? 'selected' : '' }}>10 Years</option>
                                                               </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="frm_grp select_icon">
                                                            <label for=""></label>
                                                            <select class="form-control" name="experience_month" disabled>
                                                                <option value="">--Please Select--</option>
                                                                <option value="0 Months" {{ ( '0 Months' == $result->experience_month ) ? 'selected' : '' }}>0 Months</option>
                                                                <option value="1 Months" {{ ( '1 Months' == $result->experience_month ) ? 'selected' : '' }}>1 Months</option>
                                                                <option value="2 Months" {{ ( '2 Months' == $result->experience_month ) ? 'selected' : '' }}>2 Months</option>
                                                                <option value="3 Months" {{ ( '3 Months' == $result->experience_month ) ? 'selected' : '' }}>3 Months</option>
                                                                <option value="4 Months" {{ ( '4 Months' == $result->experience_month ) ? 'selected' : '' }}>4 Months</option>
                                                                <option value="5 Months" {{ ( '5 Months' == $result->experience_month ) ? 'selected' : '' }}>5 Months</option>
                                                                <option value="6 Months" {{ ( '6 Months' == $result->experience_month ) ? 'selected' : '' }}>6 Months</option>
                                                                <option value="7 Months" {{ ( '7 Months' == $result->experience_month ) ? 'selected' : '' }}>7 Months</option>
                                                                <option value="8 Months" {{ ( '8 Months' == $result->experience_month ) ? 'selected' : '' }}>8 Months</option>
                                                                <option value="9 Months" {{ ( '9 Months' == $result->experience_month ) ? 'selected' : '' }}>9 Months</option>
                                                                <option value="10 Months" {{ ( '10 Months' == $result->experience_month ) ? 'selected' : '' }}>10 Months</option>
                                                                <option value="11 Months" {{ ( '11 Months' == $result->experience_month ) ? 'selected' : '' }}>11 Months</option>
                                                                <!-- <option value="">12 Months</option> -->
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp select_icon">
                                                    <label for="">Photo ID*</label>
                                                    <select class="form-control"  name="photo_id" disabled>
                                                        <option value="">--Please Select--</option>
                                                        <option value="Driving licence" {{ ( 'Driving licence' == $result->photo_id  ) ? 'selected' : '' }}>Driving licence</option>
                                                        <option value="Passport" {{ ( 'Passport' == $result->photo_id ) ? 'selected' : '' }}>Passport</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                
                                                    <div class="frm_grp">
                                                    <label for="">Photo ID Upload</label>
                                                    <div class="file_upload">
                                                   <a href="{{ asset('/storage/app/upload/prof-doc/'.$result->photo_id_upld) }}" target="_blank"><span style="font-size: 17px;">{{$result->photo_id_upld}}</span></a>

                                                    <!-- <input type="text" placeholder="Meditation Certificate" class="form-control" value="{{$result->certification_upld}}"> -->
                                                     </div>
                                                    <span class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M19.5 9H13.5V3H4.5V21H19.5V9ZM18.879 7.5L15 3.621V7.5H18.879ZM3.75 1.5H15L21 7.5V21.75C21 21.9489 20.921 22.1397 20.7803 22.2803C20.6397 22.421 20.4489 22.5 20.25 22.5H3.75C3.55109 22.5 3.36032 22.421 3.21967 22.2803C3.07902 22.1397 3 21.9489 3 21.75V2.25C3 2.05109 3.07902 1.86032 3.21967 1.71967C3.36032 1.57902 3.55109 1.5 3.75 1.5ZM7.5 12H16.5V13.5H7.5V12ZM7.5 7.5H11.25V9H7.5V7.5ZM7.5 16.5H16.5V18H7.5V16.5Z" fill="#515151"/>
                                                          </svg>
                                                    </span>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                    <label for="">Certification</label>
                                                    <div class="file_upload"><a href="{{ asset('/storage/app/upload/prof-doc/'.$result->certification_upld) }}" target="_blank"><span style="font-size: 17px;">{{$result->certification_upld}}</span></a>
                                                    <!-- <input type="text" placeholder="Meditation Certificate" class="form-control" value="{{$result->certification_upld}}"> -->
                                                     </div>
                                                    <span class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M19.5 9H13.5V3H4.5V21H19.5V9ZM18.879 7.5L15 3.621V7.5H18.879ZM3.75 1.5H15L21 7.5V21.75C21 21.9489 20.921 22.1397 20.7803 22.2803C20.6397 22.421 20.4489 22.5 20.25 22.5H3.75C3.55109 22.5 3.36032 22.421 3.21967 22.2803C3.07902 22.1397 3 21.9489 3 21.75V2.25C3 2.05109 3.07902 1.86032 3.21967 1.71967C3.36032 1.57902 3.55109 1.5 3.75 1.5ZM7.5 12H16.5V13.5H7.5V12ZM7.5 7.5H11.25V9H7.5V7.5ZM7.5 16.5H16.5V18H7.5V16.5Z" fill="#515151"/>
                                                          </svg>
                                                    </span>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                    <label for="">Do You Provide Group Session</label>
                                                    <!-- <input type="text" placeholder="Both" class="form-control" >
                                                     <span class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M14.06 9L15 9.94L5.92 19H5V18.08L14.06 9ZM17.66 3C17.41 3 17.15 3.1 16.96 3.29L15.13 5.12L18.88 8.87L20.71 7.04C21.1 6.65 21.1 6 20.71 5.63L18.37 3.29C18.17 3.09 17.92 3 17.66 3ZM14.06 6.19L3 17.25V21H6.75L17.81 9.94L14.06 6.19Z" fill="#515151"/>
                                                          </svg>
                                                    </span> -->
                                                    <select class="form-control" name="is_group_session_provided" disabled>
                                                        <option value="">--Please Select--</option>
                                                        <option value="Yes" {{ ( 'Yes' == $result->is_group_session_provided ) ? 'selected' : '' }}>Yes</option>
                                                        <option value="No" {{ ( 'No' == $result->is_group_session_provided ) ? 'selected' : '' }}>No</option>

                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                    <label for="">Group Session Hourly Fees</label>
                                                    <input type="text" placeholder="100.00" class="form-control" value="{{$result->group_session_fee}}" readonly>
                                                     <span class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M15 14L12 12V7M3 12C3 13.1819 3.23279 14.3522 3.68508 15.4442C4.13738 16.5361 4.80031 17.5282 5.63604 18.364C6.47177 19.1997 7.46392 19.8626 8.55585 20.3149C9.64778 20.7672 10.8181 21 12 21C13.1819 21 14.3522 20.7672 15.4442 20.3149C16.5361 19.8626 17.5282 19.1997 18.364 18.364C19.1997 17.5282 19.8626 16.5361 20.3149 15.4442C20.7672 14.3522 21 13.1819 21 12C21 10.8181 20.7672 9.64778 20.3149 8.55585C19.8626 7.46392 19.1997 6.47177 18.364 5.63604C17.5282 4.80031 16.5361 4.13738 15.4442 3.68508C14.3522 3.23279 13.1819 3 12 3C10.8181 3 9.64778 3.23279 8.55585 3.68508C7.46392 4.13738 6.47177 4.80031 5.63604 5.63604C4.80031 6.47177 4.13738 7.46392 3.68508 8.55585C3.23279 9.64778 3 10.8181 3 12Z" stroke="#515151" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                          </svg>
                                                    </span>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="slot_date_sect">
                                            <h3>Availability</h3>
                                            <div class="slot_list_sect">
                                                @php
                                                    $days=EXPLODE(',',$result->availability_days);
                                                @endphp
                                                @foreach($days as $day)
                                                    <div class="slot_select selected">
                                                        <input type="checkbox" name="availability_days[]" id="{{ $day }}" class="custom-control-input" value="{{$day}}" checked>
                                                        <label for="{{ $day }}">{{ $day }}</label>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                        <div class="time_slot_sect">
                                            @php
                                                $times=EXPLODE(',',$result->availability_time);
                                            @endphp
                                            @foreach($times as $time)
                                                <div class="slot_select">
                                                    <input type="checkbox" name="availability_time[]" id="" class="custom-control-input" value="{{$time}}" checked>
                                                    <label for="">{{ $time }}</label>
                                                </div>
                                            @endforeach

                                        </div>
                                            <form id="frm" method="post" action="{{url('admin/vettinglist/status-update')}}">
                                                @csrf
                                                <input type="hidden" name="email" id="email" value="{{$result->email}}">
                                                <input type="hidden" name="user_id" id="user_id" value="{{$result->user_id}}">
                                                <input type="hidden" name="is_new" id="is_new" value="1">
                                                <input type="hidden" name="statusUpdate" id="statusUpdate" value="">
                                                <div class="btn_grp_dash">
                                                    <button class="btn submitbtn" data-btntype="back"  id="back">Back</button>
                                                    <button class="btn submitbtn" data-btntype="reject"  id="reject">Reject</button>
                                                    <button class="btn submitbtn" data-btntype="approve" id="approve">approve</button>
                                                </div>
                                            </form>



                                    </div>


                                </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script  type="text/javascript">

                $(document).on('submit', 'form', function(event){
                    event.preventDefault();
                });
                $(document).on('click', '.submitbtn', function(event){
                    let val = event.target.dataset.btntype;
                 var status =    document.getElementById('statusUpdate').value = val
                // console.log(`vallll`, document.getElementById('statusUpdate').value);
                alert("Are you sure you want to "+status+" this service provider !!");
                    $('form').submit();
                })
            </script>
       @endsection