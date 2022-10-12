@extends('layout')
@section('content')
    <div class="container">
        <div class="row">

            <div class="mb-10"> </div>
            <div class="col-md-10 mb-5">
                <div class="mail_section">
                    <h1 class="contact_taital">Contact us</h1>
                    <form method="post" action="/contact">

                        @method('GET')

                        <input type="" class="email_text" placeholder="Name" name="name">
                        <input type="" class="email_text" placeholder="Phone" name="phone">
                        <input type="" class="email_text" placeholder="Email" name="email">
                        <textarea class="massage_text" placeholder="Message" rows="5" id="comment" name="message"></textarea>
                        <br>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
