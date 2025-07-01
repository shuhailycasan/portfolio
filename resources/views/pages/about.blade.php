@extends('layout.app')
@section('title', 'About | Shuhaily Casan')

@section('content')
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">About Me</h1>
            <p class="lead text-muted">I’m Shuhaily Casan, a junior developer who loves building clean, responsive web apps
                using Laravel, Livewire, and Alpine.js.
                I'm all about learning new things, solving real-world problems, and leveling up with every project.
                Still early in the game, but always ready to build and grow.</p>
            <p>
                <a href="{{ url('contact') }}" class="btn btn-primary my-2">Contact Me</a>

            </p>
        </div>
    </section>

    <div class="container mt-5 mb-5">
        <div class="row">
            <!-- Experience Column -->
            <div class="col-12 col-md-6 mb-4 mb-md-0">
                <h4>Experience</h4>
                <ul class="timeline">
                    <li>
                        <a>Jr Developer</a>
                        <span class="float-end">June 2025 - Present</span>
                        <p class="fst-italic">SweldoMo Software Inc.</p>
                    </li>
                    <li>
                        <a>General Assistant</a>
                        <span class="float-end">Oct 2023 - Dec 2024</span>
                        <p class="fst-italic">Yashreen Jewelry & Repair</p>
                    </li>
                    <li>
                        <a>Backend developer- OJT</a>
                        <span class="float-end">Jan 2023 to April 2023</span>
                        <p class="fst-italic">Pixel8 Web Solutions and Consultancy Inc.</p>
                    </li>
                </ul>
            </div>

            <!-- Education Column -->
            <div class="col-12 col-md-6">
                <h4>Education</h4>
                <ul class="timeline">
                    <li>
                        <a>Bachelor of Science in Computer Science</a>
                        <span class="float-end">2019 - 2023</span>
                        <p class="fst-italic">Divine Word College of Legazpi</p>
                    </li>
                    <li>
                        <a>Genecom Institute of Science and Technology, Inc.</a>
                        </a>
                        <span class="float-end">2017 - 2019</span>
                        <p class="fst-italic">Technical-Vocational-Livelihood (JAVA Programming)</p>
                    </li>

                </ul>
            </div>
        </div>

        {{-- Certification and Tech Stack HERE  --}}

        <div class="container my-5">
            <div class="row">
                <!-- Certifications (comes first on mobile) -->
                <div class="col-12 col-md-6 order-1 order-md-2 mb-4 mb-md-0">
                    <h4>Certifications</h4>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Civil Service Eligible Professional
                            <span class="badge bg-success rounded-pill">2024</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Project Management Essentials Certified
                            <span class="badge bg-success rounded-pill">2022</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Lean Six Sigma White Belt Certified
                            <span class="badge bg-success rounded-pill">2022</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Responsive Web Design (freeCodeCamp)
                            <span class="badge bg-success rounded-pill">2023</span>
                        </li>
                    </ul>
                </div>

                <!-- Tech Stack (comes second on mobile) -->
                <div class="col-12 col-md-6 order-2 order-md-1">
                    <h4>Tech Stack</h4>
                    <span class="badge bg-dark text-white me-2 mb-2">Laravel</span>
                    <span class="badge bg-primary me-2 mb-2">Livewire</span>
                    <span class="badge bg-info text-dark me-2 mb-2">Alpine.js</span>
                    <span class="badge bg-secondary me-2 mb-2">Docker</span>
                    <span class="badge bg-warning text-dark me-2 mb-2">Bootstrap</span>
                    <span class="badge bg-danger me-2 mb-2">MySQL</span>
                    <span class="badge bg-dark text-white me-2 mb-2">Java</span>
                    <span class="badge bg-primary me-2 mb-2">Python</span>
                    <span class="badge bg-info text-dark me-2 mb-2">Javascript</span>
                    <span class="badge bg-secondary me-2 mb-2">JQuery</span>
                    <span class="badge bg-dark text-white me-2 mb-2">Github</span>
                    <span class="badge bg-danger me-2 mb-2">MySQL</span>
                </div>
            </div>
        </div>
    </div>
@endsection
