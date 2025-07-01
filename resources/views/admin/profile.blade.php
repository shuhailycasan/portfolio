@extends('layouts.app')

@section('title', 'Profile')


@section('content')

    <div class="d-flex">
        @include('components.sidebar')
    </div>

    <div class="container d-flex">
    <form method="POST" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h2>Profile Settings</h2>
        {{-- Picture Upload --}}
        <div class="mb-3">
            <label class="form-label">Profile Picture</label>
            <input type="file" name="photo" class="form-control">
        </div>

        {{-- Name --}}
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}" class="form-control">
        </div>

        {{-- Bio --}}
        <div class="mb-3">
            <label class="form-label">Bio</label>
            <textarea name="bio" rows="4" class="form-control">{{ old('bio') }}</textarea>
        </div>

        <button class="btn btn-primary">Save Changes</button>
    </form>

    </div>
@endsection
