@extends('employee.inner')
@section('inner')

            <!-- partial -->
            <div class="main-panel ">
                <div class="content-wrapper">
                    <div class="row" id="proBanner">
                        <div class="col-sm-12">
                            <div class="dashboard_rgt">
                                <div class="heading_bx">
                                    <h3>Tokens</h3>
                                </div>
                                <div class="dasp_grap">
                                    <div class="table_data">
                                        <table class="table">
                                            <thead>
                                               <tr>
                                                <th>S.no</th>
                                                <th>Requested tokens</th>
                                                <th>received Tokens</th>
                                                <th>Used Tokens</th>
                                                <th>Remaining Tokens</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>{{ $data->req_tok }}</td>
                                                    <td>{{ $data->tok }}</td>
                                                    <td>{{ $data->us_tok }}</td>
                                                    <td>{{ $data->tok-$data->us_tok  }}</td>
                                                    <td>
                                                        @if ($result->tokens <= 0)
                                                        <a href="#"  data-bs-toggle="modal" data-bs-target="#Tokens_popup">Need more tokens?</a>
                                                        @else
                                                        <a   onclick="myFunction()">Need more tokens?</a>
                                                        @endif

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                                    <script>
                                                        function myFunction() {
                                                            alert("You have token so you cann't raise !!");
                                                            }
                                                    </script>
                                    </div>

                                </div>


                                </div>

                            </div>
                        </div>
                    </div>

                </div>



            </div>
        </div>
    </div>


    <div class="modal fade cust_popup cust_popup2" id="Tokens_popup" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="Token_popup">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18.707 6.70697L17.293 5.29297L12 10.586L6.70697 5.29297L5.29297 6.70697L10.586 12L5.29297 17.293L6.70697 18.707L12 13.414L17.293 18.707L18.707 17.293L13.414 12L18.707 6.70697Z"
                                    fill="#636D79" />
                            </svg>
                        </span>
                    </button>
                    <h3>Request for Tokens</h3>
                    <form action="{{ route('employee.tokens.raise') }}" method="post">
                        @csrf
                        <div class="frm_grp select_icon">
                            <label for="">Tokens counts</label>
                            <select class="form-control" name="token">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <div class="btn_grp_dash btn_last">
                            <button class="btn">Back</button>
                            <button class="btn">Send Request</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
   @endsection