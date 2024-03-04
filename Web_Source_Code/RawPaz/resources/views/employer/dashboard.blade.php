@extends('employer.inner')
@section('inner')
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
                                                <h3>Total Register Employees</h3>
                                                <div class="box_grap">
                                                    <div class="grap_txt">
                                                        <p>{{ $total_emp }}</p>
                                                    </div>
                                                    <div class="grap_ic">
                                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="76" height="62"
                                                            viewBox="0 0 76 62" fill="none">
                                                            <path
                                                                d="M73.958 13.7792L63.8036 26.1947C63.0392 27.1293 61.5454 26.8601 61.1554 25.7174L60.6431 24.2165C60.1389 22.7392 58.0094 22.8642 57.6814 24.3903L55.7309 33.4671C55.3708 35.143 52.9536 35.0643 52.7032 33.3686L48.203 2.88888C47.9535 1.19871 45.5472 1.11261 45.1775 2.78062L39.3155 29.2272C38.9674 30.7979 36.7468 30.8489 36.3268 29.2959L32.0629 13.5287C31.6451 11.984 29.4403 12.0232 29.0777 13.5817L25.6448 28.3387L20.4699 51.158L17.9121 58.6421C17.3756 60.212 15.077 59.9391 14.9229 58.2872L11.6752 23.4554C11.5388 21.993 9.62692 21.5341 8.84172 22.7754L5.84666 27.51C5.13345 28.6375 3.42151 28.3857 3.06313 27.1006L1.61246 21.8989"
                                                                stroke="#00A389" stroke-width="3.07853"></path>
                                                        </svg> -->
                                                        <h1><i class="fa fa-users"></i></h1>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>
                                        <li>
                                            <div class="card_grap">
                                                <h3>Active Employees</h3>
                                                <div class="box_grap">
                                                    <div class="grap_txt">
                                                        <p>{{ $active_emp }}</p>
                                                    </div>
                                                    <div class="grap_ic">
                                                        <h1><i class="fa fa-users"></i></h1>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>
                                        <li>
                                            <div class="card_grap">
                                                <h3>Number of Sessions (This week)</h3>
                                                <div class="box_grap">
                                                    <div class="grap_txt">

                                                        <p>{{ $session }}</p>
                                                    </div>
                                                    <div class="grap_ic">
                                                        <h1><i class="fa fa-gear"></i></h1>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>
                                        <li>
                                            <div class="card_grap">
                                                <h3>Number of Sessions (Next week)</h3>
                                                <div class="box_grap">
                                                    <div class="grap_txt">

                                                        <p>{{ $session_next }}</p>
                                                    </div>
                                                    <div class="grap_ic">
                                                        <h1><i class="fa fa-gear"></i></h1>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>
                                        <li>
                                            <div class="card_grap">
                                                <h3>Total Number of Credits</h3>
                                                <div class="box_grap">
                                                    <div class="grap_txt">

                                                        <p>{{ $result->tokens }}</p>
                                                    </div>
                                                    <div class="grap_ic">
                                                        <h1><i class="fa fa-money"></i></h1>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>
                                        <li>
                                            <div class="card_grap">
                                                <h3>Available Credits</h3>
                                                <div class="box_grap">
                                                    <div class="grap_txt">

                                                        <p>{{ $result->left_tokens }}</p>
                                                    </div>
                                                    <div class="grap_ic">
                                                        <h1><i class="fa fa-money"></i></h1>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-lg-10 col-md-12 col-sm-12">
                                            <h3 class="dash_heading_title"><span>wellness program Overview</span>
                                                <span>Monthly - Weekly</span>
                                            </h3>
                                            <div class="grap_chat">
                                                <div class="session_txt">
                                                    <p>SESSION</p>
                                                </div>
                                                <!-- <div class="grap_bx">
                                                    <img src="{{asset('assets/images/grap3.png')}}" alt="">
                                                    <div class="month_txt">
                                                        <p>JULY 2023</p>
                                                    </div>

                                                </div> -->
                                                <canvas id="myChart" style="width:100%;"></canvas>

                                            </div>

                                        </div>
                                        <!-- <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="row">
                                                <div class="col-lg-7 col-md-12 col-sm-12">
                                                    <div class="head">
                                                        <h3>type of sessions</h3>
                                                    </div>
                                                    <ul class="list_sess">
                                                        <li>
                                                            Yoga
                                                        </li>
                                                        <li>
                                                            Mindfulness services
                                                        </li>
                                                        <li>
                                                            Meditation
                                                        </li>
                                                        <li>
                                                            Pilates
                                                        </li>
                                                        <li>
                                                            Dietician/Nutritionist
                                                        </li>
                                                    </ul>

                                                </div>
                                                <div class="col-lg-5 col-md-12 col-sm-12">
                                                    <div class="funnel">
                                                        <ul>
                                                            <li>
                                                                <div class="box_funnel">

                                                                    <div class="funlly"><span>15</span></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="box_funnel">

                                                                    <div class="funlly"><span>12</span></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="box_funnel">

                                                                    <div class="funlly"><span>9</span></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="box_funnel">
                                                                    <div class="funlly"><span>6</span></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="box_funnel">
                                                                    <div class="funlly"><span>3</span></div>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>


                                            </div>
                                        </div> -->


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>



            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
            <script>
                const xValues = ['JAN','FAB','MAR','APR','MAY','JUN','JUL','AUG','SEP','OCT','NOV','DEC'];

                new Chart("myChart", {
                type: "line",
                data: {
                    labels: xValues,
                    datasets: [{
                    data: [0,0,0,0,0,0,0,0, <?= $session ?>],
                    borderColor: "#0068A3",
                    fill: false
                    }, ]
                },
                options: {
                    legend: {display: false}
                }
            });
        </script>
    @endsection
