@php
$pageData = [
'landing.about' => ['title' => 'About Us', 'breadcrumb' => 'About'],
'landing.service' => ['title' => 'Services', 'breadcrumb' => 'Service'],
'landing.menu' => ['title' => 'Food Menu', 'breadcrumb' => 'Menu'],
'landing.booking' => ['title' => 'Booking', 'breadcrumb' => 'Booking'],
'landing.team' => ['title' => 'Our Team', 'breadcrumb' => 'Team'],
];

$currentRoute = request()->route()->getName();
$page = $pageData[$currentRoute] ?? null;
@endphp

<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="{{ route('landing.homepage') }}" class="nav-item nav-link {{ request()->routeIs('landing.homepage') ? 'active' : '' }}"> Home </a>
                <a href="{{ route('landing.about') }}" class="nav-item nav-link {{ request()->routeIs('landing.about') ? 'active' : '' }}"> About </a>
                <a href="{{ route('landing.service') }}" class="nav-item nav-link {{ request()->routeIs('landing.service') ? 'active' : '' }}"> Service </a>
                <a href="{{ route('landing.menu') }}" class="nav-item nav-link {{ request()->routeIs('landing.menu') ? 'active' : '' }}"> Menu </a>
                <div class="nav-item dropdown">
                    <a href="#"
                        class="nav-link dropdown-toggle {{ request()->routeIs('landing.booking', 'landing.team') ? 'active' : '' }}"
                        data-bs-toggle="dropdown">
                        Pages
                    </a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route('landing.booking') }}"
                            class="dropdown-item {{ request()->routeIs('landing.booking') ? 'active' : '' }}">
                            Booking
                        </a>
                        <a href="{{ route('landing.team') }}"
                            class="dropdown-item {{ request()->routeIs('landing.team') ? 'active' : '' }}">
                            Our Team
                        </a>
                        <a href="#" class="dropdown-item">
                            Testimonial
                        </a>
                    </div>
                </div>
                <a href="#" class="nav-item nav-link"> Contact </a>
            </div>
            <a href="#" class="btn btn-primary py-2 px-4"> Book A Table </a>
        </div>
    </nav>

    <!-- Hero -->
    @if(request()->routeIs('landing.homepage'))
    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 text-white animated slideInLeft">
                        Enjoy Our<br>Delicious Meal
                    </h1>
                    <p class="text-white animated slideInLeft mb-4 pb-2">
                        Tempor erat elitr rebum at clita.
                        Diam dolor diam ipsum sit.
                        Aliqu diam amet diam et eos.
                    </p>
                    <a href="{{ route('landing.booking') }}"
                        class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">
                        Book A Table
                    </a>
                </div>
                <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                    <img class="img-fluid" src="{{ asset('assets/img/hero.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    @elseif($page)

    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">

            <h1 class="display-3 text-white mb-3 animated slideInDown">
                {{ $page['title'] }}
            </h1>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">

                    <li class="breadcrumb-item">
                        <a href="{{ route('landing.homepage') }}">
                            Home
                        </a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="#">Pages</a>
                    </li>

                    <li class="breadcrumb-item text-white active">
                        {{ $page['breadcrumb'] }}
                    </li>

                </ol>
            </nav>

        </div>
    </div>

    @endif
</div>
<!-- Navbar & Hero End -->