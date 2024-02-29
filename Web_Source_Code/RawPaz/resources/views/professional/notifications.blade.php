@extends('professional.inner-template')
@section('inner-template')
            <!-- partial -->
            <div class="main-panel ">
                <div class="content-wrapper">
                    <div class="row" id="proBanner">
                        <div class="col-sm-12">
                            <div class="dashboard_rgt">
                                <div class="heading_bx">
                                    <h3>Notifications</h3>
                                </div>
                                <div class="dasp_grap">

                                        <div class="tab_notif brd_btm">
                                            <div class="list_tab">
                                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">all</button>
                                                    </li>
                                                    <!-- <li class="nav-item" role="presentation">
                                                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">unread</button>
                                                    </li> -->

                                                  </ul>
                                            </div>
                                            <!-- <div class="search_bar">
                                              <label for="Search">Search</label>
                                                    <input type="text" class="form-control" placeholder="Search">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" viewBox="0 0 19 20" fill="none">
                                                    <path d="M14.994 14.1715L19 18.1765L17.6765 19.5L13.6715 15.494C12.1813 16.6887 10.3278 17.3384 8.41784 17.3357C3.77119 17.3357 0 13.5645 0 8.91784C0 4.27119 3.77119 0.5 8.41784 0.5C13.0645 0.5 16.8357 4.27119 16.8357 8.91784C16.8384 10.8278 16.1887 12.6813 14.994 14.1715ZM13.1178 13.4775C14.3048 12.2568 14.9677 10.6205 14.965 8.91784C14.965 5.30004 12.0347 2.37063 8.41784 2.37063C4.80004 2.37063 1.87063 5.30004 1.87063 8.91784C1.87063 12.5347 4.80004 15.465 8.41784 15.465C10.1205 15.4677 11.7568 14.8048 12.9775 13.6178L13.1178 13.4775Z" fill="#828282"/>
                                                  </svg></span>


                                            </div> -->
                                        </div>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                <div class="prof_box nofi_bx">

                                                    <!-- <h3>Today</h3> -->
                                                    @if (!empty($result))
                                                        @foreach ($result as $res)
                                                            <div class="crd_bx">
                                                                <div class="mnth_emp">
                                                                    <div class="day_bx">
                                                                    {{ date("j M",strtotime($res->created_at)) }}
                                                                    </div>
                                                                    <div class="title_cont">
                                                                        <h3>{{ $res->msg }}</h3>
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="data_del">
                                                                <button class="btn">View Details</button>
                                                                </div> -->
                                                            </div>
                                                        @endforeach
                                                    @else
                                                    <div class="crd_bx">
                                                    <div class="mnth_emp">
                                                     <div class="day_bx">
                                                         dd MMM
                                                     </div>
                                                     <div class="title_cont">
                                                         <h3>Your have not any notification</h3>
                                                     </div>
                                                    </div>
                                                    @endif
                                        </div>

                                            </div>
                                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Unread</div>

                                          </div>





                                </div>


                                </div>

                            </div>
                        </div>
                    </div>

                </div>



            </div>
        @endsection