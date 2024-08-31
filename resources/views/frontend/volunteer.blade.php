@extends('layouts.frontend_master')

@section('content')


<div class="container">
    
<div class="row">
    <div class="col-lg-12 col-12 mb-5 mt-5">
        <div class="contact__form">
            <h4 class="mb-4">Become A Volunteer</h4>
            <form class="d-flex flex-wrap justify-content-between" action="{{ route('volunteer.post') }}" id="contact-form" method="POST">
                @csrf
                <input type="text" placeholder="Your Name" id="name" name="name" required="required">
                <input type="text" placeholder="Your Email" id="email" name="email" required>
                <input class="w-100" type="text" placeholder="Phone" id="phone" name="phone" required>
                <input class="w-100" type="text" placeholder="address" id="address" name="address" required>
                <button type="submit" class="default-btn move-right"><span>submit</span></button>
            </form>
            {{-- <p class="form-message"></p>  --}}
        </div> 
    </div>
</div>
</div>


@endsection