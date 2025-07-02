@extends('layouts.app')

@section('title', 'Dashboard')


@section('content')

    <div class="d-flex">
        @include('components.sidebar')
    </div>


    <div class="container-fluid m-4 justify-content-center border border-primary bg-light rounded">
        <p>This is your admin dashboard</p>

    </div>
@endsection
