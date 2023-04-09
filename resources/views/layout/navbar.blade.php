<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ asset('logo.png') }}" width="auto" height="60"
                alt=""> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav left">
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment('1') == '' || request()->segment('1') == 'home' ? 'active' : '' }}"
                        aria-current="page" href="{{ url('home') }}">
                        <i class="fas fa-house"></i> <b>Home</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment('1') == 'karyawan' ? 'active' : '' }} " aria-current="page"
                        href="{{ url('karyawan') }}">
                        <i class="fas fa-user"></i> <b>Karyawan</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment('1') == 'departemen' ? 'active' : '' }} " aria-current="page"
                        href="{{ url('departemen') }}">
                        <i class="fas fa-hospital-alt"></i> <b>Departemen</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment('1') == 'penggajian' ? 'active' : '' }} " aria-current="page"
                        href="{{ url('penggajian') }}">
                        <i class="fab fa-cc-visa"></i> <b>Penggajian</b>
                    </a>
                </li>

            </ul>
            <ul class="navbar-nav right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false"><span
                            class="d-none d-lg-inline me-2 text-gray-600 small"><b>{{ Auth::user()->name }}</b></span><img
                            class="border rounded-circle img-profile" src={{ asset('profile.jpg') }} height="25px"
                            width="25px" />
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->segment('1') == 'logout' ? 'active' : '' }} "
                                aria-current="page" href="{{ url('/sesi/logout') }}">
                                <i class="fa-solid fa-right-from-bracket"></i> <b>Logout</b>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
