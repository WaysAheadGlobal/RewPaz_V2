<div class="anything">
 @include('livewire.add-notes-modal')
 @include('livewire.view-journals-modal')
 @include('livewire.otp-modal')
 <style>
    span.text-danger.error{
        font-size: 14px;
        line-height: 1.2 !important;
        display: inline-block;
        margin-top: 8px;
    }
    .time_slots li:nth-child(4){
        background: none;
    }
    .time_slots li:nth-child(4)  span {
      background: #f8f7f7;
    }
 </style>
  <section class="health_calc_sect">
    <div class="left_bx">
      <div class="date_head">
        <h3>Date</h3>
        <p>{{date('d M Y', strtotime($dateSelected))}}</p>
      </div>
      <div data-date="{{date('Y-m-d', strtotime($dateSelected))}}" id="picker">
      </div>
      <div class="date_desp">
        <h3>Clients Name</h3>
        <div class="note_bx">
          <p><span>{{$customerName}}</span>
          @if ($showJournals)
            <button class="btn btn-sm btn-primary" wire:click="hideJournals()">View Notes</button>
          @else
            <button class="btn btn-sm btn-primary" wire:click="showJournals()">View Journals</button>
          @endif
          </p>
        </div>
      </div>
      <!-- <div class="date_desp">
        <h3>Clients Reply</h3>
        <div class="note_bx">
          <p><span>{{$customerName}}</span><span>
          @if ($notes)
          @if ($showJournals)
            <button class="btn btn-sm btn-primary" wire:click="hideJournals()">View Notes</button>
          @else
            <button class="btn btn-sm btn-primary" wire:click="showJournals()">View Journals</button>
          @endif
          @else
            No Notes Shared yet
          @endif
          </span></p>
        </div>
      </div> -->
    </div>
    <div class="rgt_bx prof_jopur">
      <div class="cal_heading">
        <div class="prev_btn">
          <a href="#">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15"
                fill="none">
                <path
                  d="M9.7498 0.75L10.7998 1.875L5.2498 7.5L10.7998 13.125L9.7498 14.25L2.9998 7.5L9.7498 0.75Z"
                  fill="#0068C4" />
              </svg>
            </span>
            <span>Back</span>
          </a>
        </div>
        <div class="cal_date">
          <h3>{{$customerName}} > View {{($showJournals) ? 'Journals' : 'Notes'}}</h3>
          <div class="date_txt">
            <span>
              <a href="javascript:void();" wire:click="updateDate('decrement')">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                  viewBox="0 0 15 15" fill="none">
                  <path
                    d="M9.7498 0.75L10.7998 1.875L5.2498 7.5L10.7998 13.125L9.7498 14.25L2.9998 7.5L9.7498 0.75Z"
                    fill="#0068C4" />
                </svg>
              </a>
            </span>
            <span>{{date('l, F d, Y', strtotime($dateSelected))}}</span>
            <span>
              <a href="javascript:void();" wire:click="updateDate('increment')">
                <svg
                  xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15"
                  fill="none">
                  <path
                    d="M5.2502 0.75L4.2002 1.875L9.7502 7.5L4.2002 13.125L5.2502 14.25L12.0002 7.5L5.2502 0.75Z"
                    fill="#0068C4" />
                </svg>
              </a>
            </span>
          </div>
        </div>
      </div>
      <div class="cal_data ">
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
        @if($isAuthenticatedWithOTP)
        <div class="time_slots">
          <ul>
          @php
          @endphp
          @foreach ($timeArr as $time => $dataTime)
          @if($showJournals)
          @php
            $timeMatched = false;
          @endphp
          {{--journals--}}
          @if($journals)
            @foreach ($journals as $note)
                @php
                  $noteTime = date('H:i:s', strtotime($note->journal_datetime));
                  // echo $noteTime;
                  // echo $dataTime['24hr'];
                  if($dataTime['24hr'] == $noteTime){
                    $timeMatched = true;
                    break;
                  }
                @endphp
            @endforeach
            <li>
               <span> {{$dataTime['12hr']}}</span>
               @if($timeMatched)
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalViewJournal" wire:click="openViewJournal('{{$note->uid}}')" style="background: #006ac4;padding: 5px 15px;border-radius: 5px;color: #fff;">View/Edit Journal</a>
                  @else
                  <i style="opacity:0.4; text-transform:none; font-size:10px">No Journal Added</i>
               @endif
            </li>
          @endif
          @else
          {{--notes--}}
          @php
            $timeMatched = false;
          @endphp
          @if($notes)
            @foreach ($notes as $note)
                @php
                  $noteTime = date('H:i:s', strtotime($note->notes_datetime));
                  if($dataTime['24hr'] == $noteTime){
                    $timeMatched = true;
                    break;
                  }
                @endphp
            @endforeach
            <li>
               <span> {{$dataTime['12hr']}}</span>
               @if($timeMatched)
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddNote" wire:click="openEditNote('{{$dataTime['24hr']}}')" style="    background: #006ac4;padding: 5px 15px;border-radius: 5px;color: #fff;">View/Edit Notes</a>
                  @else
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddNote" wire:click="openNote('{{$dataTime['24hr']}}', '')" style="background: #accdff;padding: 5px 15px;border-radius: 5px;color: #fff;">Add Notes</a>

               @endif
            </li>
          @endif
          @endif
          @endforeach
        </div>
        @endif

{{--
        <div class="time_slots">
          <ul>
            @foreach ($timeArr as $time => $dataTime)
            <li>
            @foreach ($notes as $note)
                @php
                  $timeMatched = false;
                  $noteTime = date('H:i:s', strtotime($note->notes_datetime));
                  if($dataTime['24hr'] == $noteTime){
                    $timeMatched = true;
                    break;
                  }
                @endphp
            @endforeach
              <span> {{$dataTime['12hr']}}</span>
              @if($timeMatched)
                @if ($showJournals)
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddNote" wire:click="openEditNote('{{$dataTime['24hr']}}')" style="    background: #006ac4;padding: 5px 15px;border-radius: 5px;color: #fff;">View Journals</a>
                  @else
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddNote" wire:click="openEditNote('{{$dataTime['24hr']}}')" style="    background: #006ac4;padding: 5px 15px;border-radius: 5px;color: #fff;">View/Edit Notes</a>
                @endif
              @else
                @if ($showJournals)
                  <span style="opacity:0.4; text-transform:none; font-size:10px">No Note Added</span>
                @else
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddNote" wire:click="openNote('{{$dataTime['24hr']}}', '')" style="background: #accdff;padding: 5px 15px;border-radius: 5px;color: #fff;">Add Notes</a>
                @endif
              @endif
            </li>
            @endforeach
          </ul>
        </div>
--}}

      </div>

    </div>
  </section>
</div>