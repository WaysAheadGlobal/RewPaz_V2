<div class="anything">
  @include('livewire.professional-availability-modal')
  <div class="dasp_grap">
    <div class="Appoint_list_admin prof_avil">
      <div>
            @if (session()->has('error'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Failed!</strong> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
      <div class="table_visting table_data">
        <table class="table">
          <thead>
            <tr>
              <th>Date</th>
              <th>Appointment Id</th>
              <th>Name</th>
              <th>Session type</th>
              <th>Availability</th>
              <th>Expertise</th>
              <th>Assign Professional</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($data as $data)
            <tr>
              <td>
                <div class="day_bx">
                  <p><span>{{date(('d M'), strtotime($data->appointmentDate))}}</span> <span>{{date(('h:m a'), strtotime($data->appointmentDate))}}</span></p>
                </div>
              </td>
              <td>
                <div class="img_bx">
                  {{-- <img src="{{asset('assets/images/prof.png')}}" alt=""> --}}
                  {{$data->appointmentId}}
                </div>
              </td>
              <td>{{$data->professionalName}}</td>
              <td>
                <div class="name_txt">
                  <p>{{($data->appointmentType == 1) ? 'SOS':''}}</p>
                  <p>{{ucwords($data->session)}}</p>
                </div>
              </td>
              <td>
                @if ($data->status == 3)
                <button style="pointer-events: none;cursor: none;" class="btn not-avil">Not available</button>
                @else
                <button style="pointer-events: none;cursor: none;" class="btn available_btn">Available</button>
                @endif
              </td>
              <td>{{$data->expertise}}</td>
              <td>
              {{$i}}
                <div class="eye_btn">
                  @if ($data->status == 3)
                  <button class="btn" wire:click="openModalForUpdate('{{$data->uid}}')" data-bs-toggle="modal" data-bs-target="#professionalassignment-modal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <path d="M16.6823 8.1625C16.8868 8.39219 17 8.6906 17 9C17 9.3094 16.8868 9.60781 16.6823 9.8375C15.3875 11.25 12.4404 14 9 14C5.55961 14 2.61247 11.25 1.3177 9.8375C1.1132 9.60781 1 9.3094 1 9C1 8.6906 1.1132 8.39219 1.3177 8.1625C2.61247 6.75 5.55961 4 9 4C12.4404 4 15.3875 6.75 16.6823 8.1625Z" stroke="#25276C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M9.57143 11.5686C10.9916 11.5686 12.1429 10.4174 12.1429 8.99721C12.1429 7.57705 10.9916 6.42578 9.57143 6.42578C8.15127 6.42578 7 7.57705 7 8.99721C7 10.4174 8.15127 11.5686 9.57143 11.5686Z" stroke="#25276C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </button>
                  @else
                  <button class="btn" style="pointer-events: none;cursor: none;opacity: .4;" class="btn not-avil">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <path d="M16.6823 8.1625C16.8868 8.39219 17 8.6906 17 9C17 9.3094 16.8868 9.60781 16.6823 9.8375C15.3875 11.25 12.4404 14 9 14C5.55961 14 2.61247 11.25 1.3177 9.8375C1.1132 9.60781 1 9.3094 1 9C1 8.6906 1.1132 8.39219 1.3177 8.1625C2.61247 6.75 5.55961 4 9 4C12.4404 4 15.3875 6.75 16.6823 8.1625Z" stroke="#25276C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M9.57143 11.5686C10.9916 11.5686 12.1429 10.4174 12.1429 8.99721C12.1429 7.57705 10.9916 6.42578 9.57143 6.42578C8.15127 6.42578 7 7.57705 7 8.99721C7 10.4174 8.15127 11.5686 9.57143 11.5686Z" stroke="#25276C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </button>
                  @endif
                </div>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="6">
                <h6 class='loading111'>No record found</h6>
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>