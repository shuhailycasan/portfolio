@extends('layouts.app')

@section('title', 'Education | Settings')


@section('content')

    <div class="d-flex">
        @include('components.sidebar')
    </div>

    <div class="container-fluid m-4 justify-content-center bg-light rounded">
        <form method="POST"action="{{ route('admin.education.update') }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h1 class="lead text-uppercase text-center font-bold m-2">Educational Settings</h1>


            {{-- Name --}}
            <div class="mb-3">
                <label class="form-label">School</label>
                <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}" class="form-control">
            </div>

            {{-- Bio --}}
            <div class="mb-3">
                <label class="form-label">Course</label>
                <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}" class="form-control">
            </div>

            <div class=" mb-3">
                <label class="form-label">Year</label>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-sm-6">
                        <label for="startDate">Start</label>
                        <input id="startDate" class="form-control" type="date" />
                        <span id="startDateSelected"></span>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <label for="endDate">End</label>
                        <input id="endDate" class="form-control" type="date" />
                        <span id="endDateSelected"></span>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary">Save Changes</button>
        </form>


        <script>
            let startDate = document.getElementById('startDate')
            let endDate = document.getElementById('endDate')

            startDate.addEventListener('change', (e) => {
                let startDateVal = e.target.value
                document.getElementById('startDateSelected').innerText = startDateVal
            })

            endDate.addEventListener('change', (e) => {
                let endDateVal = e.target.value
                document.getElementById('endDateSelected').innerText = endDateVal
            })
        </script>
    </div>
@endsection
