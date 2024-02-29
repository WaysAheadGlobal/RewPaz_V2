@extends('employer.inner')
@section('inner')

            <!-- partial -->
            <div class="main-panel ">
                <div class="content-wrapper">
                    <div class="row" id="proBanner">
                        <div class="col-sm-12">
                            <div class="dashboard_rgt">
                                <div class="heading_bx">
                                    <h3>Pay For {{$result->name}} ${{$result->price}}</h3>
                                </div>
                                <div class="dasp_grap">
                                    <div class="prof_box messg_employ">
                                    <form action="{{url('/employer/CreateOrder')}}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="PaymentForm">
                                        <div class="row">
                                           <h3>Add Card Details</h3>


                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                              <input type="hidden" name="plan_id" value="{{$result->id}}">
                                              <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                  <label for="">Name On card:</label>
                                                  <input type="text" id="name" class="form-control" name="name" value="Test">
                                                </div>
                                              </div>
                                              <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                  <label for="">Number On card:</label>
                                                    <input type="text" class="form-control" id="number" name="number" value="4111111111111111">
                                                </div>
                                              </div>
                                              <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                  <label for="">CVC On card:</label>
                                                  <input type="text" class="form-control" id="cvc" name="cvc" value="123">
                                                </div>
                                              </div>
                                              <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                  <label for="">Exp Month:</label>
                                                  <input type="text" class="form-control" id="month" name="month" value="12">
                                                </div>
                                              </div>
                                              <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="frm_grp">
                                                  <label for="">Exp Year:</label>
                                                  <input type="text" class="form-control" id="year" name="year" value="2024">
                                                </div>
                                              </div>

                                             </div>
                                             <div class="btn_grp">
                                                <button type="submit" class="btn" id="SubmitBtn" style="background: linear-gradient(160deg, #0068C4 0%, #00A7C5 100%);
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    color: #fff;
    border: 0;
    padding: 12px 35px;
    border-radius: 0;">Submit</button>
                                              </div>
                                        </form>
                                        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
                                        <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
                                        <script src="https://js.stripe.com/v2/"></script>
                                        <script>
                                            var stripe = Stripe('<?php echo env('STRIPE_KEY'); ?>');
                                            jQuery(function($) {
                                            $("#PaymentForm").validate({
                                              rules: {
                                                name:'required',
                                                number:'required',
                                                cvc:'required',
                                                month:'required',
                                                year:'required'
                                              },
                                              messages: {
                                                name:"Please enter name.",
                                                number:"Please enter number.",
                                                cvc:"Enter cvc.",
                                                month:"Enter month.",
                                                year:"Enter year."
                                              },
                                              submitHandler: function(form){
                                                $('#SubmitBtn').prop("disabled",true);
                                                $('#SubmitBtn').html('Loading..');
                                                $.ajax({
                                                  url : "{{url('/employer/CheckOrderStatus')}}",
                                                  type: "GET",
                                                  dataType: 'json',
                                                  data : {plan_id:1},
                                                  success:function(a){
                                                    if(a.status==1){
                                                      Stripe.setPublishableKey('<?php echo env('STRIPE_KEY'); ?>');
                                                      Stripe.createToken({
                                                        number: $('#number').val(),
                                                        cvc: $('#cvc').val(),
                                                        exp_month: $('#month').val(),
                                                        exp_year: $('#year').val()
                                                      }, stripeResponseHandler);
                                                    }else{
                                                      $('#SubmitBtn').prop("disabled",false);
                                                      $('#SubmitBtn').html('Reserve');
                                                      alert(a.ErrorMsg);
                                                    }
                                                  }
                                                });

                                              }
                                            });
                                          });

                                          function stripeResponseHandler(status, response){
                                            var Amount  = <?php echo $result->price; ?>;
                                            var $form   = $("#PaymentForm");
                                            if (response.error) {
                                              alert(response.error.message);
                                              $('#SubmitBtn').prop("disabled",false);
                                              $('#SubmitBtn').html('Reserve');
                                            } else {
                                              var token = response['id'];
                                              $form.find('input[type=text]').empty();
                                              $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                                              $form.append("<input type='hidden' name='Amount' value='" + Amount + "'/>");
                                              $form.get(0).submit();
                                            }
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

@endsection
