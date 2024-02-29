<div class="anything">
@include('livewire.add-feedback-modal')
<table class="table">
                <thead>
                  <tr>
                    <th>Date</th>
                    <th></th>
                    <th>Appointment ID</th>
                    <th>Professional Name</th>
                    <th>Expertise</th>
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
                    @if($data->session == 'chat')
                    <a href="{{url('employee/conversation/'.$data->uid)}}">Join</a>
                    @else
                    <a href="{{ $data->meeting_link }}" target="_blank">Join</a>
                    @endif
                    @endif
                    </td>
                    <td>
                      <p>145946437</p>
                    </td>
                    <td>
                      <p>{{$data->name}}</p>
                    </td>
                    <td>
                      <p>{{$data->expertise}}</p>
                    </td>
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
                            </div>
                          </td>
                    <td>
                    @if($data->status == 2)
                      <div class="data_del">
                        <a class="btn" href="{{url('employee/journals/notes').'/'.$data->uid}}">View Notes</a>
                        <button class="btn" data-bs-toggle="modal" wire:click="resetFeedbackForm('{{$data->uid}}')" data-bs-target="#feedback_popup">Give feedback</button>
                        <a class="btn" href="{{url('employee/journals/list').'/'.$data->uid}}">Update journals</a>
                      </div>
                    @endif
                    </td>
                  </tr>
                  @empty
                  <tr><td colspan="6"><h6 class='loading111'>No record found</h6></td></tr>
                  @endforelse
                </tbody>
              </table>


</div>