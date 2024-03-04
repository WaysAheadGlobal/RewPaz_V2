@extends('superadmin.main')
@section('main')
            <!-- partial -->
            <div class="main-panel ">
                <div class="content-wrapper">
                    <div class="row" id="proBanner">
                        <div class="col-sm-12">
                            <div class="dashboard_rgt">
                                <div class="heading_bx">
                                    <h3>Payments</h3>
                                </div>
                                <div class="dasp_grap">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="table_visting table_data">
                                                <table class="table">
                                                   <thead>
                                                    <tr>
                                                        <th>S.no</th>
                                                        <th>User</th>
                                                        <th>Plan/service/charges</th>
                                                        <th>Payment</th>
                                                        <th>Total Credits</th>
                                                        <th>Payment Date</th>

                                                    </tr>
                                                   </thead>
                                                   <tbody>
                                                    @if (!empty($result))
                                                    @foreach ($result as $res)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $res->name }}</td>
                                                        <td>{{ $res->plan_name }}</td>
                                                        <td>{{ $res->plan_amt }}</td>

                                                        <td>{{ $res->plan_description }}</td>
                                                        <td>{{ date("Y-m-d",strtotime($res->created_at)) }}</td>
                                                    </tr>
                                                    @endforeach

                                                    @else
                                                    <tr>
                                                        <td colspan="4">No Record Found</td>

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

                </div>

        @endsection