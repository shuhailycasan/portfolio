@extends('layout.app')
@section('title', 'Home | Shuhaily Casan')


@section('content')
    <div class="container px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">

            <div class="col-12 col-lg-6 d-flex justify-content-center  mb-lg-0">
                <img src="{{ asset('assets/images/me.jpg') }}" class="img-fluid rounded-circle mx-auto d-block transition"
                    x-data="{ show: false }" x-init="setTimeout(() => show = true, 400)"
                    x-bind:class="show ? 'scale-100 opacity-100' : 'scale-75 opacity-0'" style="transition: all 0.7s ease; "
                    id="profileImage" loading="lazy">
            </div>

            <div class="col-lg-6 text-center text-lg-start">
                <h1 data-aos="fade-right" data-aos-delay="100" class="display-5 fw-bold lh-1 mb-3">SHUHAILY CASAN</h1>
                <h2 data-aos="fade-right" class="display-6 lh-1 mb-3">JR DEVELOPER</h2>
                <p data-aos="fade-right" class="lead">A Junior Developer focused on building simple, functional, and
                    modern web apps using Laravel and the tools that make it fun.
                    Djoke lang, naniwala ka rin HAHAHAHA </p>

                <div
                    class="d-grid gap-2 d-md-flex justify-content-center-md-start d-lg-flex justify-content-lg-start justify-content-center">
                    <a type="button" class="btn btn-primary btn-lg px-4 me-md-2">Download CV</a>
                    <a href="{{ 'contact' }}" type="button" class="btn btn-outline-secondary btn-lg px-4">Contact
                        Me</a>
                </div>
            </div>
        </div>
    </div>
@endsection
