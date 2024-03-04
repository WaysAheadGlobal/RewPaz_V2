@extends('employer.main')
@section('main')

<section class="Subscrip_sect invdi_sect">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="box_plan">
                    <h3>Payment Method</h3>
                    <p class="brd_underline">Select your payment method and enter your payment information.</p>
                    <form action="{{ route('employer.transcation') }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="PaymentForm">
                        @csrf
                        <input type="hidden" name="plan_id" value="{{$result->id}}">
                        <div class="row">
                            <div class="col-lg-7 col-md-12 col-sm-12">
                                <div class="credit_card_bx mt-3">
                                    <ul>
                                    <li><span class="fa fa-credit-card"></span> net banking </li>
                                    <li><span class="fa fa-credit-card"></span> credit/debit card
                                    </li>
                                    <li><span class="fa fa-credit-card"></span> Add New Card </li>
                                    </ul>
                                <h3>Card Number</h3>
                                <div class="frm_grp">
                                    <label class="label_nrm" for="">Enter the 16- digit card number</label>
                                    <input type="text" placeholder="xxxx xxxx xxxx xxxx" class="form-control" name="number" id="number" value="4111 1111 1111 1111" maxlength="19" minlength="19">
                                    <span class="icon_bx">
                                        <img src="{{asset('assets/images/master.png')}}" alt="">
                                        <img src="{{asset('assets/images/check_vef.png')}}" alt="">

                                    </span>
                                    @error('number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <h3>Card Holder Name</h3>
                                <div class="frm_grp">
                                    <label class="label_nrm" for="">Enter Card holder name </label>
                                    <input type="text" placeholder="Maria Barrymore" class="form-control"  name="name" id="name" value="{{$result->name}}">
                                    <span class="icon_bx"><img src="{{asset('assets/images/check_vef.png')}}" alt=""></span>
                                    @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                </div>
                                <div class="grp_sect mb-3">
                                <div class="lft_bx">
                                    <h3>CVV Number</h3>
                                    <label class="label_nrm" for="">Enter the 4- digit number</label>
                                </div>
                                <div class="lft_bx">
                                    <input type="text" class="form-control" name="cvc" id="cvc" value="123">
                                </div>
                                @error('cvc')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                </div>
                                <div class="grp_sect">
                                    <div class="lft_bx">
                                    <h3>Expiry Date</h3>
                                    <label class="label_nrm" for="">Enter the Expiration date of the card</label>
                                    </div>
                                    <div class="rgt_bx">
                                    <input type="text" class="form-control" value="12"  name="month" id="month">
                                    <span>/</span>
                                    <input type="text" class="form-control"  value="2025"  name="year" id="year">
                                    @error('month')
                                            <span class="text-danger">{{ $message }}</span><br>
                                    @enderror
                                    @error('year')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="btn_grp">
                                    <button type="submit" class="btn w-100 primary-btn" id="SubmitBtn">Confirm & Pay</button>
                                </div>
                                </div>

                            </div>
                            <div class="col-lg-5 col-md-12 col-sm-12">
                                <div class="paym_card">

                                    <div class="crd_details">
                                        <div class="crd_img_wif">
                                            <img src="{{asset('assets/images/crd_wif.png')}}" alt="">
                                        </div>
                                        <h3>{{ $result->name }}</h3>
                                        <p><img src="{{asset('assets/images/dot_crd.png')}}" alt=""><span id="lastNoCard"> 4242</span></p>
                                        <div class="crd_det">
                                            <h3><span id="monthPrint">12</span>/<span id="yearPrint">2025</span></h3>
                                            <div class="crd_name ">
                                                <img src="{{asset('assets/images/master.png')}}" alt="">
                                                <p>Master card</p>
                                            </div>
                                        </div>

                                    </div>
                                    <p><span>Category</span><span> {{ $plan['title'] }} Package</span></p>
                                    <p><span>Subscription Plan</span><span class="price">$ {{ $plan['price'] }}</span></p>
                                    <p><span>Credits Count</span><span>{{ $plan['tokens'] }} Credits</span></p>
                                    <div class="pay__bx">
                                        <p><span>You have to pay</span> <span>$ {{ $plan['price'] }}</span></p>
                                    </div>
                                </div>
                                <input type="hidden" name="plan_id" value="{{ $plan['id'] }}">
                                <input type="hidden" name="plan_name" value="{{ $plan['title'] }}">
                                <input type="hidden" name="plan_amt" value="{{ $plan['price'] }}">
                                <input type="hidden" name="plan_description" value="{{ $plan['tokens'] }}">
                                <input type="hidden" name="user_id" value="{{ $result->id}}">
                                <input type="hidden" name="uid" value="{{ $result->uid}}">

                            </div>
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
                        var Amount  = <?php echo $plan['price']; ?>;
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
</section>
<script>
    $('#cardNo').on('keyup', function(e){
        var val = $(this).val();
        var newval = '';
        val = val.replace(/\s/g, '');
        for(var i=0; i < val.length; i++) {
            if(i%4 == 0 && i > 0) newval = newval.concat(' ');
            newval = newval.concat(val[i]);
        }
        $(this).val(newval);
    })
    $(document).ready(function (){
        $(document).on('keyup', '#cardNo', (e) => {
            let val = $(e.target).val();
            if(val.length >= 16){
                val = val.slice(-4);
                $('#lastNoCard').html(val);
            }else{
                $('#lastNoCard').html('xxxx');
            }
        })

        $(document).on('keyup', '#cardHolderName', (e) => {
            let val = $(e.target).val();
            if(val.length){
                $('#cardholderNamePrint').html(val);
            }else{
                $('#cardholderNamePrint').html('Card Holder Name');
            }
        })
        $(document).on('keyup', '#expiryMonth', (e) => {
            let val = $(e.target).val();
            if(val.length){
                $('#monthPrint').html(val);
            }else{
                $('#monthPrint').html('Y');
            }
        })
        $(document).on('keyup', '#expiryYear', (e) => {
            let val = $(e.target).val();
            if(val.length){
                $('#yearPrint').html(val);
            }else{
                $('#yearPrint').html('M');
            }
        })
    })
</script>
 @endsection