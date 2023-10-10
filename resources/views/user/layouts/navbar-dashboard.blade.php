<nav class="navbar navbar-expand-lg py-4 bg-blue-light">
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
            <div class="navbar-nav ms-auto align-items-center">
                <a class="nav-link me-3 {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"
                    href="{{ url('/dashboard') }}">Beranda</a>
                <a class="nav-link me-3 {{ Request::is('dashboard/pengaduan') ? 'active' : '' }}"
                    href="{{ url('/dashboard/pengaduan') }}">Ajukan Pengaduan</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:;" id="userDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="img-profile rounded-circle"
                            src="{{ Auth::user()->avatar ? storage(Auth::user()->avatar) : asset('wbs-assets/img/profile.svg') }}" />
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->nama }}</span>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow border-2 border-dark"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{ url('/edit-profile') }}">
                            <img src="{{ asset('wbs-assets/img/icons/person.svg') }}" alt="Send"
                                class="icon d-inline-block" />
                            Edit Profil
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('/logout') }}">
                            <img src="{{ asset('wbs-assets/img/icons/logout.svg') }}" alt="Send"
                                class="icon d-inline-block" />
                            Keluar
                        </a>
                    </div>
                </li>
            </div>
        </div>
    </div>
</nav>
