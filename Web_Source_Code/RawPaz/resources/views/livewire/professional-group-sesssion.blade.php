<div class="content-wrapper">
    <style>
        .loadingtrs{
            opacity:.3
        }
    </style>
  @include('livewire.group-session-approval')
  <div class="row" id="proBanner">
    <div class="col-md-12">
      <div class="dashboard_rgt">
        <div class="heading_bx">
          <h3>All Appointments</h3>
        </div>
        <div class="row align-items-end" style="margin-top:15px;margin-bottom:15px;">
            @php
                $dayArr = explode(',', $professionalDetails->availability_days);
                $timeArr = explode(',', $professionalDetails->availability_time);
            @endphp
        
            <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="frm_grp select_icon">
            <label>Sort By Day</label>
            <select wire:model="day" class="form-control">
             <option value="">Select Day</option>
             @foreach ($dayArr as $day)
                <option value="{{$day}}">{{$day}}</option>
             @endforeach
            </select>
          </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="frm_grp select_icon">
            <label >Sort By Time</label>
            <select wire:model="time" class="form-control">
              <option value="">Select Time</option>
              @foreach ($timeArr as $time)
              <option value="{{$time}}">{{$time}}</option>
             @endforeach
            </select>
      </div>
          </div>
          @if ($selectedItems)
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="btn_meeting">
            <button class="btn btn_comm" data-bs-toggle="modal" data-bs-target="#virtualMeetingModal">Send Meeting Link</button>
            </div>
          </div>
          @endif

        </div>
        <div class="table_data">
        <table class="table">
          <thead>
            <th><input type="checkbox" value="" wire:model="selectAllCheckbox" wire:change="selectAll"></th>
            <th>Name</th>
            <th>Day</th>
            <th>Time Slot</th>
            <th>Status</th>
            <th>Meeting Link</th>
            <th>Meeting Username</th>
            <th>Meeting Password</th>
            <th>Request Date</th>
          </thead>
          <tbody wire:loading.class='loadingtrs'>
            @forelse ($data as $data)
                 <tr>
                    <td><input type="checkbox" value="{{$data->id}}" wire:model="selectedItems"></td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->day}}</td>
                    <td>{{$data->time}}</td>
                    <td>
                    @if ($data->status == 0)
                        Initiated
                      @elseif ($data->status == 1)
                        Approved
                      @else
                        Rejected
                    @endif
                    </td>
                    <td>{{$data->meeting_link}}</td>
                    <td>{{$data->meeting_username}}</td>
                    <td>{{$data->meeting_password}}</td>
                    <td>{{$data->created_at}}</td>
                 </tr>
            @empty
                
            @endforelse 

          </tbody>

        </table>
        </div>
      </div>
    </div>
  </div>
</div>