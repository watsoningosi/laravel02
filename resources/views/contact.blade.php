@extends('layout')
@section('content')
    <div class="container">
        <div class="row">

            <div class="mb-10"> </div>
            <div class="col-md-10 mb-5">
                <div class="mail_section">
                    <h1 class="contact_taital">Contact us</h1>
                    <input type="" class="email_text" placeholder="Name" name="Name">
                    <input type="" class="email_text" placeholder="Phone" name="Phone">
                    <input type="" class="email_text" placeholder="Email" name="Email">
                    <textarea class="massage_text" placeholder="Message" rows="5" id="comment" name="Message"></textarea>
                    <div class="send_bt"><a href="#">send</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
