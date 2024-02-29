@extends('admin.main')
@section('main')
            <!-- partial -->
            <div class="main-panel ">
                <div class="content-wrapper">
                    <div class="row" id="proBanner">
                        <div class="col-sm-12">
                            <div class="dashboard_rgt">
                                <div class="heading_bx">
                                    <h3>Dashboards</h3>
                                </div>
                                <div class="dasp_grap">
                                    <ul>
                                        <li>
                                            <div class="card_grap">
                                                <h3>Total Employers</h3>
                                                <div class="box_grap">
                                                    <div class="grap_txt">
                                                        <p>{{ $totalEmpr }}</p>
                                                    </div>
                                                    <div class="grap_ic">
                                                        <h1><i class="fa fa-home"></i></h1>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>
                                        <li>
                                            <div class="card_grap">
                                                <h3>Total Employees</h3>
                                                <div class="box_grap">
                                                    <div class="grap_txt">

                                                        <p>{{ $totalEmp }}</p>
                                                    </div>
                                                    <div class="grap_ic">
                                                        <h1><i class="fa fa-home"></i></h1>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>
                                        <li>
                                            <div class="card_grap">
                                                <h3>Total subscriptions</h3>
                                                <div class="box_grap">
                                                    <div class="grap_txt">

                                                        <p>{{ $totalSub }}</p>
                                                    </div>
                                                    <div class="grap_ic">
                                                       <h1><i class="fa fa-home"></i></h1>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>
                                        <li>
                                            <div class="card_grap">
                                                <h3>Number of New Employees Registered (Past 1 month)</h3>
                                                <div class="box_grap">
                                                    <div class="grap_txt">

                                                        <p>{{ $totalEmpm }}</p>
                                                    </div>
                                                    <div class="grap_ic">
                                                        <h1><i class="fa fa-home"></i></h1>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>


                                        <li>
                                            <div class="card_grap">
                                                <h3>Total Meditation Coaches</h3>
                                                <div class="box_grap">
                                                    <div class="grap_txt">

                                                        <p>{{ $totalMed }}</p>
                                                    </div>
                                                    <div class="grap_ic">
                                                        <h1><i class="fa fa-home"></i></h1>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>
                                        <li>
                                            <div class="card_grap">
                                                <h3>Total Yoga Coaches</h3>
                                                <div class="box_grap">
                                                    <div class="grap_txt">

                                                        <p>{{ $totalYog }}</p>
                                                    </div>
                                                    <div class="grap_ic">
                                                       <h1><i class="fa fa-home"></i></h1>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>

                                        <li>
                                            <div class="card_grap">
                                                <h3>Total Physiotherapy </h3>
                                                <div class="box_grap">
                                                    <div class="grap_txt">

                                                        <p>{{ $totalPhy }}</p>
                                                    </div>
                                                    <div class="grap_ic">
                                                        <h1><i class="fa fa-home"></i></h1>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>
                                        <li>
                                            <div class="card_grap">
                                                <h3>Total Dietician/Nutritionists</h3>
                                                <div class="box_grap">
                                                    <div class="grap_txt">

                                                        <p>{{ $totalDie }}</p>
                                                    </div>
                                                    <div class="grap_ic">
                                                        <h1><i class="fa fa-home"></i></h1>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>

                                        <li>
                                            <div class="card_grap">
                                                <h3>Total Support Workers</h3>
                                                <div class="box_grap">
                                                    <div class="grap_txt">

                                                        <p>{{ $totalSup }}</p>
                                                    </div>
                                                    <div class="grap_ic">
                                                       <h1><i class="fa fa-home"></i></h1>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>
                                        <li>
                                            <div class="card_grap">
                                                <h3>Total Child Care Coaches</h3>
                                                <div class="box_grap">
                                                    <div class="grap_txt">
                                                        <p>{{ $totalChi }}</p>
                                                    </div>
                                                    <div class="grap_ic">
                                                        <h1><i class="fa fa-home"></i></h1>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="card_grap">
                                                <h3>Total Wellness Coaches</h3>
                                                <div class="box_grap">
                                                    <div class="grap_txt">

                                                        <p>{{ $totalWell }}</p>
                                                    </div>
                                                    <div class="grap_ic">
                                                       <h1><i class="fa fa-home"></i></h1>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>
                                        <li>
                                            <div class="card_grap">
                                                <h3>Total Therapy Sessions</h3>
                                                <div class="box_grap">
                                                    <div class="grap_txt">

                                                        <p>{{ $totalThe }}</p>
                                                    </div>
                                                    <div class="grap_ic">
                                                        <h1><i class="fa fa-home"></i></h1>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>
                                        <li>
                                            <div class="card_grap">
                                                <h3>Total Mental Wellness Coaches</h3>
                                                <div class="box_grap">
                                                    <div class="grap_txt">
                                                        <p>{{ $totalMen }}</p>
                                                    </div>
                                                    <div class="grap_ic">
                                                        <h1><i class="fa fa-home"></i></h1>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="card_grap">
                                                <h3>Total Physical Wellness Coaches</h3>
                                                <div class="box_grap">
                                                    <div class="grap_txt">

                                                        <p>{{ $totalPhys }}</p>
                                                    </div>
                                                    <div class="grap_ic">
                                                        <h1><i class="fa fa-home"></i></h1>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="card_grap">
                                                <h3>Total Daily Sessions</h3>
                                                <div class="box_grap">
                                                    <div class="grap_txt">

                                                        <p>{{ $session }}</p>
                                                    </div>
                                                    <div class="grap_ic">
                                                        <h1><i class="fa fa-home"></i></h1>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>

                                        <li>
                                            <div class="card_grap">
                                                <h3>Total Past Month Sessions</h3>
                                                <div class="box_grap">
                                                    <div class="grap_txt">

                                                        <p>{{ $session_monthly }}</p>
                                                    </div>
                                                    <div class="grap_ic">
                                                        <h1><i class="fa fa-home"></i></h1>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>



                                    </ul>
                                    <div class="row">
                                        <div class="col-lg-10 col-md-12 col-sm-12">
                                            <h3 class="dash_heading_title"><span>user Overview</span>
                                                <span>

                                                    <ul class="grap_point2">
                                                        <li>Employer</li>
                                                        <li>Employee</li>
                                                        <li>Professional</li>
                                                    </ul>
                                                </span>
                                            </h3>
                                            <div class="grap_chat">
                                                <!-- <div class="grap_bx">
                                                    <img src="{{asset('assets/images/grap2.png')}}" alt="">


                                                </div> -->
                                                <canvas id="myChart" style="width:100%;"></canvas>

                                            </div>

                                        </div>
                                         <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="head mt-3">
                                                <h3>Subscribers Details</h3>
                                            </div>

                                            <div class="table_data mt-3">
                                                <table class="table">
                                                    <thead>
                                                       <tr>
                                                        <th>S.no</th>
                                                        <th>Member Since</th>
                                                        <th>User name</th>
                                                        <th>User Type</th>
                                                        <th>Email ID</th>
                                                        <th>Plan</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($employers as $res)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ date("j M, Y", strtotime($res->created_at)) }}</td>
                                                            <td>{{ $res->name }}</td>
                                                            <td>{{ $res->role }}</td>
                                                            <td>{{ $res->email }}</td>
                                                            <td>{{ $res->plan_name }}</td>
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



            </div>
            @php

                $profs=$totalMed+$totalYog+$totalPhy+$totalDie+$totalSup+$totalChi+$totalWell+$totalThe+$totalMen+$totalPhys;


                $bronz=array();
                foreach ($result as $count){
                    $bronz[]= $count;
                }
                $brd= implode(",", $bronz);
                //echo $bronz;
                $silver=array();
                foreach ($result1 as $count1){
                    $silver[]= $count1;
                }
                $slv= implode(",", $silver);
                //echo $bronz;
                $gold=array();
                foreach ($result2 as $count2){
                    $gold[]= $count2;
                }
                $gld= implode(",",$gold);
                //echo $bronz;


            @endphp

            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
            <script>
                const xValues = ['JAN','FAB','MAR','APR','MAY','JUN','JUL','AUG','SEP','OCT','NOV','DEC'];

                new Chart("myChart", {
                type: "line",
                data: {
                    labels: xValues,
                    datasets: [{
                    data: [<?=$brd?>],
                    borderColor: "#0068A3",
                    fill: false
                    }, {
                    data: [<?=$slv?>],
                    borderColor: "#54FF65",
                    fill: false
                    }, {
                       // data: [0,0,0,0,0,0,0,0,3,0,0,0],
                    data: [<?=$gld?>],
                    borderColor: "#FF54CF",
                    fill: false
                    }]
                },
                options: {
                    legend: {display: false}
                }
            });
        </script>

@endsection