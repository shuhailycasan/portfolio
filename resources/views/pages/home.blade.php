@extends('layout.app')
@section('title','Home | Shuhaily Casan')


@section('content')
<div class="container px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="{{ 'assets/images/me.jpg' }}" class="d-block mx-lg-auto img-fluid rounded-circle" alt="My picture" style="height: 550px; width: 550px;" loading="lazy">
        </div>
        <div class="col-lg-6" style="border-box: 1px color:red">
            <h1 class="display-5 fw-bold lh-1 mb-3">SHUHAILY CASAN</h1>
            <h1 class="display-6  lh-1 mb-3">JR DEVELOPER</h1>
            <p class="lead">A Junior Developer focused on building simple, functional, and modern web apps using Laravel and the tools that make it fun. Djoke lang, naniwala ka rin HAHAHAHA </p>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a type="button" class="btn btn-primary btn-lg px-4 me-md-2">Download CV</a>
                <a href="{{ 'contact' }}" type="button" class="btn btn-outline-secondary btn-lg px-4">Contact Me</a>
            </div>
        </div>
    </div>
</div>
@endsection