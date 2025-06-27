<nav class="navbar fixed-top navbar-expand-lg bg-white border-bottom shadow-sm m-3 rounded">
    <div class="container-fluid">
        <a class="navbar-brand ms-4" href="{{ url('/home') }}">Shuhaily Casan</a>

        <button class="navbar-toggler me-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-4">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/projects') }}">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                </li>  
            </ul>

            <div class="d-flex align-items-center me-4">
                <a class="nav-link text-dark px-2" href="https://github.com/shuhailycasan" target="_blank">
                    <i class="bi bi-github fs-4"></i>
                </a>
                <a class="nav-link text-dark px-2" href="https://linkedin.com/in/shuhailycasan" target="_blank">
                    <i class="bi bi-linkedin fs-4"></i>
                </a>
                <a class="nav-link text-dark px-2" href="https://facebook.com/shuhailycasan" target="_blank">
                    <i class="bi bi-facebook fs-4"></i>
                </a>
            </div>
        </div>
    </div>
</nav>
