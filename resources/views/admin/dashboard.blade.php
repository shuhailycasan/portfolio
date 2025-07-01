@extends('layouts.app')

@section('title', 'Dashboard')


@section('content')

    <div class="d-flex">
        @include('components.sidebar')
    </div>


    <div class="container-fluid justify-content-center border border-primary">
        <p>This is your admin dashboard</p>

    </div>
@endsection
