<div class="content-wrapper">
    <div class="row" id="proBanner">
      <div class="col-lg-9 col-md-12 col-sm-12">
        <div class="dashboard_rgt">
          <div class="heading_bx">
            <h3>All Appointments</h3>
          </div>
          <div class="dasp_grap">
            <div class="Appoint_list_admin prof_appoint_list">
              <div class="admin_appon_tab">
                <div class="admin_navbar">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link {{(!$showNew) ? 'active': '' }}" wire:click="$set('showNew', false)"  id="All-tab" data-bs-toggle="tab" data-bs-target="#All-Chats" type="button" role="tab" aria-controls="#All-Chats" aria-selected="true"> All </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link {{($showNew) ? 'active': '' }}" id="New-tab1" wire:click="$set('showNew', true)" data-bs-toggle="tab" data-bs-target="#New-nab1" type="button" role="tab" aria-controls="#New-nab1" aria-selected="false" tabindex="-1">
                      New
                      </button>
                    </li>
                  </ul>
                </div>
                <div class="admin_navbar">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" onclick="alert('coming soon')" id="All-appoin-tab" data-bs-toggle="tab" data-bs-target="#All-appoin" type="button" role="tab" aria-controls="#All-appoin" aria-selected="true">
                      All
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="Virtual-tab" onclick="alert('coming soon')" data-bs-toggle="tab" data-bs-target="#Virtual" type="button" role="tab" aria-controls="Virtual" aria-selected="false" tabindex="-1">
                      Virtual
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="In-Person-tab" onclick="alert('coming soon')" data-bs-toggle="tab" data-bs-target="#In-Person" type="button" role="tab" aria-controls="In-Person" aria-selected="false" tabindex="-1">
                      In-Person
                      </button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show" id="All-Chats" role="tabpanel" aria-labelledby="All-tab">
                  <div class="table_visting table_data mt-5">

                  <div>
                      @if (session()->has('message_failed'))
                          <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Failed!</strong> {{ session('message_failed') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                      @endif
                      @if (session()->has('message_success'))
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> {{ session('message_success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                      @endif
                  </div>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th></th>
                          <th></th>
                          <th>Name</th>
                          <th>Appointment ID</th>
                          <th>session mode</th>
                          {{-- <th>Availability</th> --}}
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($data as $data)
                        <tr>
                          <td>
                            <div class="day_bx">
                              <p><span>{{date(('d M'), strtotime($data->appointmentDate))}}</span>
                              <span>{{date(('h:m a'), strtotime($data->appointmentDate))}}</span></p>
                            </div>
                          </td>
                          <td>
                            @if($data->status == 2)
                            <a href="{{url('professional/conversation/'.$data->uid)}}">Join</a>
                            @endif
                          </td>
                          <td>
                            <div class="img_bx">
                              <img src="../assets/images/user_bydef.png" alt="">
                            </div>
                          </td>

                          <td>
                            <div class="name_txt">
                              <p>{{$data->name}}</p>
                              @if($data->status == 0)
                              <div class="notif">
                                New
                              </div>
                              @endif
                            </div>
                          </td>
                          <td>{{$data->appointmentId}}</td>
                          <td>{{ucwords($data->session)}}</td>
                          <td>
                            <div class="Avail_dots">
                              @if($data->status == 0)
                              <span>---</span>
                              @elseif($data->status == 1)
                              <span>---</span>
                              @elseif($data->status == 2)
                              <span>Available</span>
                              @elseif($data->status == 3)
                              <span>Not-Available</span>
                              @endif
                              @if($data->status == 0)
                              {{-- <span>
                                <div class="dropdown user_login">
                                  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="5" height="23" viewBox="0 0 5 23" fill="none">
                                      <circle cx="2.5" cy="2.5" r="2.5" fill="black"/>
                                      <circle cx="2.5" cy="11.5" r="2.5" fill="black"/>
                                      <circle cx="2.5" cy="20.5" r="2.5" fill="black"/>
                                    </svg>
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" wire:click = "updateStatus(2, '{{$data->uid}}')" data-status='available' href="#">Available</a></li>
                                    <li><a class="dropdown-item" wire:click = "updateStatus(3, '{{$data->uid}}')"  data-status='not available' href="#">Not Available</a></li>
                                  </ul>
                                </div>
                              </span> --}}
                              @endif
                            </div>
                          </td>
                        </tr>
                        @empty
                        <tr><td colspan="6"><h6 class='loading111'>No record found</h6></td></tr>
                        @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="tab-pane fade " id="New-nab1" role="tabpanel" aria-labelledby="New-nab1"><br>
                  <p class="loading111">Loading Please wait..</p></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-12 col-sm-12">
        <div class="prof_calc_appoint">
          <div class="date_head">
            <h3>Date</h3>
            <p>{{date('d M Y', strtotime($calendarDate))}}</p>
          </div>
          <div data-date="{{date('Y-m-d', strtotime($calendarDate))}}" id="picker">
          </div>
        </div>
      </div>
    </div>
  </div>