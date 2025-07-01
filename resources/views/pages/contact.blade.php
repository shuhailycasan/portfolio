@extends('layout.app')
@section('title','Contact | Shuhaily Casan')


@section('content')
<div class="container px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">

        <div data-aos="zoom-out-right" class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3">Contact me</h1>
            <p class="col-lg-10 fs-4">
                Have a question, project idea, or just want to say hi? Fill out the form and I’ll get back to you as soon as I can.
            </p>
        </div>

    <div class="col-md-10 mx-auto col-lg-5" data-aos="flip-left" data-aos-once="true">
        @livewire('contact-form')
        </div>

    </div>

</div>
@endsection