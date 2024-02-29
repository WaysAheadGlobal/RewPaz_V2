@extends('admin.main')
@section('main')
            <!-- partial -->
            <div class="main-panel ">
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
                                    <h3>Vetting list</h3>
                                </div>
                                <div class="dasp_grap mb-5">
                                    <div class="visting_list">
                                        <div class="table_visting">
                                            <table class="table">
                                               <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <!-- <th></th> -->
                                                    <th>Name</th>
                                                    <th>Expertise</th>
                                                    <th>Status</th>
                                                </tr>
                                               </thead>
                                               <tbody>
                                                @if (!empty($results))
                                                @foreach ( $results as $res)
                                                <form method="post">
                                                @csrf

                                                <input type="hidden" name="uid" value="{{ $res->uid }}">
                                                <input type="hidden" name="id" value="{{$res->id}}">
                                                <input type="hidden" name="is_read" value="1">
                                                        </form>
                                                <tr>


                                                    <td>
                                                        <div class="day_bx">
                                                        {{ date("d M",strtotime($res->created_at)) }}

                                                        </div>
                                                    </td>
                                                    <!-- <td>
                                                        <div class="img_bx">
                                                             <img src="../assets/images/prof.png" alt="">

                                                        </div>
                                                    </td> -->
                                                    <td>
                                                        <div class="name_txt">
                                                            <p>{{ $res->name }}</p>


                                                                @if($res->is_new==0)
                                                                <div class="notif">
                                                                    New
                                                                </div>
                                                                @else

                                                                @endif

                                                        </div>
                                                    </td>
                                                    <td>
                                                        {{ $res->expertise }}
                                                    </td>
                                                    <td>
                                                        <div class="btn_grp">
                                                            @if($res->status==0)
                                                            <a onclick="ProfessionalStatusChange('<?php echo  $res->id; ?>',1);" href="javascript:void(0);" class="btn">Pending</a>
                                                            @else
                                                            <a onclick="ProfessionalStatusChange('<?php echo  $res->id; ?>',0);" href="javascript:void(0);" class="btn btn_done">Done</a>
                                                            @endif
                                                            <button class="btn is_read" id="is_read{{$loop->iteration}}">
                                                                <a class="" href="{{url('admin/vettinglist/'.$res->uid)}}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                                <path d="M16.6823 8.1625C16.8868 8.39219 17 8.6906 17 9C17 9.3094 16.8868 9.60781 16.6823 9.8375C15.3875 11.25 12.4404 14 9 14C5.55961 14 2.61247 11.25 1.3177 9.8375C1.1132 9.60781 1 9.3094 1 9C1 8.6906 1.1132 8.39219 1.3177 8.1625C2.61247 6.75 5.55961 4 9 4C12.4404 4 15.3875 6.75 16.6823 8.1625Z" stroke="#25276C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M9.57143 11.5686C10.9916 11.5686 12.1429 10.4174 12.1429 8.99721C12.1429 7.57705 10.9916 6.42578 9.57143 6.42578C8.15127 6.42578 7 7.57705 7 8.99721C7 10.4174 8.15127 11.5686 9.57143 11.5686Z" stroke="#25276C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                              </svg>
                                                                </a>
                                                            </button>

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
                                <div class="pagenation_bx">
                                <div class="frm_grp ">
                                    <!--<div class="frm_grp select_icon">
                                         <select class="form-control">
                                            <option value="">10 Per Page</option>
                                            <option value="">20 Per Page</option>
                                            <option value="">30 Per Page</option>
                                            <option value="">40 Per Page</option>
                                            <option value="">50 Per Page</option>

                                        </select> -->


                                    </div>
                                    <div class="pagena_no">
                                        <style>
                                            nav svg{
                                                max-width: 20px;
                                            }
                                        </style>
                                        {{ $results->links() }}
                                        <!-- <ul>
                                            <li><a href="" class="active">1</a></li>
                                            <li><a href="">2</a></li>
                                            <li><a href="">3</a></li>
                                            <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="20" viewBox="0 0 12 20" fill="none">
                                                <path d="M-1.22392e-07 2.8L7 9.8L-7.34351e-07 16.8L1.4 19.6L11.2 9.8L1.4 6.11959e-08L-1.22392e-07 2.8Z" fill="#515151"/>
                                              </svg>
                                            </a>
                                            </li>
                                        </ul> -->
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script type="text/javascript">
    function ProfessionalStatusChange(id,status)
    {
        let _token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ url('admin/ProfessionalStatusChange') }}",
            type:'POST',
            data: {'_token':_token, 'id':id, 'status':status},
            success: function(data) {
                location.reload(true);
            }
        });
    }
    // $(document).ready(function() {
    //      let count =1;
    //     // for(count>0; count=1;  count++){
    //         $("#is_read").click(function(e){

    //             let _token = $("input[name='_token']").val();
    //             let user_id = $("input[name='id']").val();
    //             var is_read = $("input[name='is_read']").val();
    //         // alert("Do you want to view profile of "+ name+ " !!!");
    //             let text = "Do you want to view this profile?";
    //             if (confirm(text) == true) {
    //                 text = "You pressed OK!";
    //                 $.ajax({
    //                     url: "{{ url('admin/vettingread') }}",
    //                     type:'POST',
    //                     data: {_token:_token, user_id:user_id, is_read:is_read},
    //                     success: function(data) {
    //                         if($.isEmptyObject(data.error)){
    //                             alert(data.success);
    //                         }else{
    //                             printErrorMsg(data.error);
    //                         }
    //                     }
    //                 });
    //             } else {
    //                 text = "You canceled!";
    //                 e.preventDefault();
    //             }

    //         });

        //};

   // });
    </script>
    @endsection