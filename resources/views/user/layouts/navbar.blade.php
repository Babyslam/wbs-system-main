<nav
    class="navbar navbar-expand-lg py-4 {{ Request::is('/') || Request::is('login') || Request::is('lupa-password') ? 'bg-body' : 'bg-blue-light' }}">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img class="mw-100" src="{{ asset('wbs-assets/img/logo-svg.svg') }}" alt="" title=""
                width="300" />
        </a>
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link me-3 {{ Request::is('/') ? 'active' : '' }}" aria-current="page"
                    href="{{ url('/') }}">Beranda</a>
                <a class="nav-link me-3 {{ Request::is('/informasi') ? 'active' : '' }}" href="#">Informasi</a>
                @if (Request::is('/'))
                    <a class="btn btn-light btn-rounded text-black bg-orange nav-link"
                        href="{{ url('/dashboard') }}">Pantau
                        Pengaduan</a>
                @else
                    <a class="nav-link" href="{{ url('/dashboard') }}">Pantau Pengaduan</a>
                @endif
            </div>
        </div>
    </div>
</nav>
