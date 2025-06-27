<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>@yield('title','Shuhaily Casan | Jr Developer')</title>
    @livewireStyles
</head>
<body>
    <body class="d-flex flex-column min-vh-100">
    
    <main class="mt-5">
        @include('components.nav-bar')
    </main>
    

    <main class="flex-fill container my-5">
        @yield('content')
    </main>

    @include('components.footer')
    @livewireScripts
</body>
</body>
</html>