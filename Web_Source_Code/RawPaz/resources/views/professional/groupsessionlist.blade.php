
@extends('professional.inner-template')
@section('inner-template')

        <div class="content-wrapper">
            <div class="row" id="proBanner">
                <div class="col-sm-12">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert" >
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session()->has('error'))
                        <div class="alert alert-error alert-dismissible fade show" role="alert" >
                        <strong>Error!</strong> {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="dashboard_rgt">
                        <div class="heading_bx">
                            <h3>Group Session Status</h3>
                        </div>
                        <div class="dasp_grap">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="table_visting table_data">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Photo</th>
                                                    <th>Name</th>
                                                    <th>Time Slot</th>
                                                    <th>Day</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($result)
                                                @foreach ( $result as $res)

                                                <tr>
                                                    <td>
                                                        @if ($res->profile_pic)
                                                            <img src="{{ asset('/storage/app/upload/prof-doc/'.$res->profile_pic) }}" alt="" style="width: 25px;height:25px;">
                                                        @else
                                                            @if ($res->gender=='Male')
                                                                <img src="{{asset('assets/images/male.png')}}" alt="" style="width: 25px;height:25px;">
                                                            @elseif ($res->gender=='Female')
                                                                <img src="{{asset('assets/images/female.png')}}" alt="" style="width: 25px;height:25px;">
                                                            @else
                                                                <img src="{{asset('assets/images/others.png')}}" alt="" style="width: 25px;height:25px;">
                                                            @endif
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="name_txt">
                                                            <p>{{ $res->name }}</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        {{ $res->time }}
                                                    </td>
                                                    <td>
                                                        {{ $res->day }}
                                                    </td>
                                                    <td>
                                                        {{ $res->date }}
                                                    </td>
                                                    <td>
                                                        <div class="btn_grp">
                                                            @if($res->sts==0)
                                                            <button class="btn">Pending</button>
                                                            @else
                                                            <button class="btn btn_done">Present</button>
                                                            @endif
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @else
                                                <tr>
                                                    <td colspan="5">No Data Avaible !!</td>
                                                </tr>
                                                @endif
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script type="text/javascript">


</script>
@endsection