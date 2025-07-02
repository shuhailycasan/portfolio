<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height: 925px">
    <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap" />
        </svg>
        <span class="fs-4">Dashboard</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
{{--        <li class="nav-item">--}}
{{--            <a href="{{ route('admin.dashboard') }}" class="nav-link active" aria-current="page">--}}
{{--                <svg class="bi me-2" width="16" height="16">--}}
{{--                    <use xlink:href="#home" />--}}
{{--                </svg>--}}
{{--                Home--}}
{{--            </a>--}}
{{--        </li>--}}
        <li>
            <a href="{{ route('admin.profile') }}" class="nav-link link-dark">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#speedometer2" />
                </svg>
               Home Profile
            </a>
        </li>
        <li>
            <a href="{{ route('admin.education') }}" class="nav-link link-dark">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#table" />
                </svg>
                Education
            </a>
        </li>
        <li>
            <a href="{{ route('admin.experience') }}" class="nav-link link-dark">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#grid" />
                </svg>
                Experience
            </a>
        </li>
        <li>
            <a href="{{ route('admin.certifications') }}" class="nav-link link-dark">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#grid" />
                </svg>
                Certifications
            </a>
        </li>
        <li>
            <a href="{{ route('admin.projects') }}" class="nav-link link-dark">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#people-circle" />
                </svg>
                Projects
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown" x-data>
        <a href="#"
           class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
           id="dropdownUser2"
           data-bs-toggle="dropdown"
           aria-expanded="false"
        >
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>Casan</strong>
        </a>

        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
                <a
                    href="{{ route('logout') }}"
                    class="dropdown-item"
                    @click.prevent="$refs.logoutForm.submit()"
                >
                    Logout
                </a>

                <form
                    x-ref="logoutForm"
                    id="logout-form"
                    action="{{ route('logout') }}"
                    method="POST"
                    class="d-none"
                >
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>
