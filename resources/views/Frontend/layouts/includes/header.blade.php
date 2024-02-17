<!-- ======= start Header ======= -->
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand " href="{{ route('index') }}"><img src="{{ url('/') }}/storage/{{ settings()->logo }}" class="logo" alt="LOGO"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list" id="menu"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav ms-auto" id="navbar">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("index", ["locale" => app()->getLocale()]) }}">{{__("Home")}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("products", ["locale" => app()->getLocale()]) }}">{{__("Products")}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("portfolio", ["locale" => app()->getLocale()]) }}">{{__("Portfolio")}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("contact", ["locale" => app()->getLocale()]) }}">{{__("Contact")}}</a>
                    </li>
                </ul>
                <div class="d-flex ms-auto">
                    <a class="btn" href="{{ route('filament.admin.pages.dashboard') }}">@if(auth()->check()) {{__("Dashboard")}} @else {{__("Sign in")}} @endif</a>
                    <button id="mode-toggle" class="btn-light-mode switch-button"><i id="mode-icon" class="bi bi-moon-fill"></i></button>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- ======= end Header ======= -->
