@extends('layout.app')
@section('title','Projects | Shuhaily Casan')


@section('content')
<main role="main">

    <section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">My Projects</h1>
        <p class="lead text-muted">Here are some of the personal and academic projects I’ve built to sharpen my development skills, 
            explore new technologies, and bring ideas to life. 
            Each project reflects hands-on experience with tools like Laravel, Livewire, Alpine.js, and Bootstrap — all while following modern web development practices.</p>
        <p>
        <a href="{{ url('contact') }}" class="btn btn-primary my-2">Contact Me</a>
        
        </p>
    </div>
    </section>

    <div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
        

            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ 'assets/images/fb.png' }}" alt="Card image cap">
                <div class="card-body">
                    <h2 class="display-7 fw-normal">Facebook</h2>
                    <p class="card-text">Created Facebook with PHP, Hack (a PHP dialect), Python, C++, Java, Erlang, D, and Haskell. 
                        For the front-end, they rely on JavaScript (including React), 
                        and Flow. Additionally, Facebook utilizes HTML and CSS</p>
                    <div class="d-flex justify-content-between align-items-center">
                        
                        <div class="d-flex align-items-center gap-2">
                        <a class="nav-link text-dark p-0" href="https://github.com/shuhailycasan" target="_blank">
                            <i class="bi bi-github fs-3"></i>
                        </a>
                        <a href="https://facebook.com" class="btn btn-sm btn-outline-primary">
                            Visit Site
                        </a>
                    </div>

                    <small class="text-muted">Source code</small>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ 'assets/images/fb.png' }}" alt="Card image cap">
                <div class="card-body">
                    <h2 class="display-7 fw-normal">Facebook</h2>
                    <p class="card-text">Created Facebook with PHP, Hack (a PHP dialect), Python, C++, Java, Erlang, D, and Haskell. 
                        For the front-end, they rely on JavaScript (including React), 
                        and Flow. Additionally, Facebook utilizes HTML and CSS</p>
                    <div class="d-flex justify-content-between align-items-center">
                        
                        <div class="d-flex align-items-center gap-2">
                        <a class="nav-link text-dark p-0" href="https://github.com/shuhailycasan" target="_blank">
                            <i class="bi bi-github fs-3"></i>
                        </a>
                        <a href="https://facebook.com" class="btn btn-sm btn-outline-primary">
                            Visit Site
                        </a>
                    </div>

                    <small class="text-muted">Source code</small>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ 'assets/images/fb.png' }}" alt="Card image cap">
                <div class="card-body">
                    <h2 class="display-7 fw-normal">Facebook</h2>
                    <p class="card-text">Created Facebook with PHP, Hack (a PHP dialect), Python, C++, Java, Erlang, D, and Haskell. 
                        For the front-end, they rely on JavaScript (including React), 
                        and Flow. Additionally, Facebook utilizes HTML and CSS</p>
                    <div class="d-flex justify-content-between align-items-center">
                        
                        <div class="d-flex align-items-center gap-2">
                        <a class="nav-link text-dark p-0" href="https://github.com/shuhailycasan" target="_blank">
                            <i class="bi bi-github fs-3"></i>
                        </a>
                        <a href="https://facebook.com" class="btn btn-sm btn-outline-primary">
                            Visit Site
                        </a>
                    </div>

                    <small class="text-muted">Source code</small>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ 'assets/images/fb.png' }}" alt="Card image cap">
                <div class="card-body">
                    <h2 class="display-7 fw-normal">Facebook</h2>
                    <p class="card-text">Created Facebook with PHP, Hack (a PHP dialect), Python, C++, Java, Erlang, D, and Haskell. 
                        For the front-end, they rely on JavaScript (including React), 
                        and Flow. Additionally, Facebook utilizes HTML and CSS</p>
                    <div class="d-flex justify-content-between align-items-center">
                        
                        <div class="d-flex align-items-center gap-2">
                        <a class="nav-link text-dark p-0" href="https://github.com/shuhailycasan" target="_blank">
                            <i class="bi bi-github fs-3"></i>
                        </a>
                        <a href="https://facebook.com" class="btn btn-sm btn-outline-primary">
                            Visit Site
                        </a>
                    </div>

                    <small class="text-muted">Source code</small>
                    </div>
                </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</main>
@endsection