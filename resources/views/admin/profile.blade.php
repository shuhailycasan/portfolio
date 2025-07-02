@php
    $hero = App\Models\Home::find(1);
@endphp

@extends('layouts.app')

@section('title', 'Profile')


@section('content')

    <div class="d-flex">
        @include('components.sidebar')
    </div>

    <div class="container-fluid m-4 justify-content-center bg-light rounded">
    <form method="POST" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
        @csrf
        <h2>Profile Settings</h2>

        {{-- Name --}}
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" value="{{ $hero->name }}" class="form-control">
        </div>

        {{-- title --}}
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" value="{{ $hero->title }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="desc" rows="4" class="form-control">{{ $hero->desc }}</textarea>
        </div>

        {{-- Picture Upload --}}
{{--        <div class="mb-3">--}}
{{--            <label class="form-label">Picture</label>--}}
{{--            <input type="file" name="photo" class="form-control">--}}
{{--        </div>--}}

        <button class="btn btn-primary">Save Changes</button>

    </form>

    </div>
@endsection
