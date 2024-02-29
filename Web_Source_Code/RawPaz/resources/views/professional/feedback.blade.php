@extends('professional.inner-template')
@section('inner-template')

<div class="content-wrapper">
  <div class="row" id="proBanner">
    <div class="col-sm-12">
      <div class="dashboard_rgt">
        <div class="heading_bx">
          <h3>Feedbacks</h3>
        </div>
        <div class="dasp_grap">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="table_visting table_data">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>S.no</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Ratings</th>
                        <th>Reviews</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($feedbacks as $feed)

                      <tr>
                        <td>
                          {{$loop->iteration}}
                        </td>
                        <td>
                        @if ($feed->profile_pic)
                        <img src="{{ asset('/storage/app/upload/prof-doc/'.$feed->profile_pic) }}" alt=""style="weight:30px;height:30px;" >

                     @else
                        @if ($feed->gender=='Male')
                              <img src="{{asset('assets/images/male.png')}}" alt="" style="weight:30px;height:30px;" >
                        @elseif ($feed->gender=='Female')
                              <img src="{{asset('assets/images/female.png')}}" alt="" style="weight:30px;height:30px;" >
                        @else
                           <img src="{{asset('assets/images/others.png')}}" alt="" style="weight:30px;height:30px;" >

                        @endif
                     @endif
                        </td>
                        <td>{{$feed->name}}</td>
                        <td>{{$feed->rating}}</td>
                        <td>{{ $feed->description }}</td>
                      </tr>
                    @endforeach

                    </tbody>
                  </table>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection