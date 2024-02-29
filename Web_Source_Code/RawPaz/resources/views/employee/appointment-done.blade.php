@extends('employee.main')
@section('main')


<section class="Appoint_sect">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 mrg-auto">
                <h3>Appointment Request Sent Successfully</h3>
                <img src="{{asset('assets/images/appoint.png')}}" alt="">
                <!-- <p>“Congratulations on successfully booking a appointment! We are excited to connect with you and
                    provide the care and support you need. Your link will be sent to your email <a href="#">2 hours
                    before</a> of your appointment.”
                </p> -->
                <p>Your appointment has been sent to the consultant and you will receive a mail or notification as soon
                 as the consultant confirms the same  appointment you can check the appointment status from this link
                <a href="{{url('employee/appointments')}}">Click Here !!</a></p>
            </div>
        </div>
    </div>

</section>


@endsection