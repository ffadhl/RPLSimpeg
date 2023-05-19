<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="{{ url('karyawanrosati') }}"><img src="{{ asset('logo.png') }}" width="auto" height="60"
                alt=""> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav left">
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment('1') == '' || request()->segment('1') == '#' ? 'active' : '' }}"
                        aria-current="page" href="{{ url('/karyawanrosati') }}">
                        <i class="fas fa-house"></i> <b>Dashboard</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment('1') == '#' ? 'active' : '' }} " aria-current="page"
                        href="{{ url('/karyawanrosati/datadirikaryawan') }}">
                        <i class="fas fa-user"></i> <b>Data Diri</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment('1') == '#' ? 'active' : '' }} "
                        aria-current="page" href="{{ url('/karyawanrosati/jadwalkaryawan') }}">
                        <i class="fa-solid fa-calendar-days"></i> <b>Jadwal</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment('1') == '#' ? 'active' : '' }} "
                        aria-current="page" href="{{ url('/karyawanrosati/gajikaryawan') }}">
                        <i class="fab fa-cc-visa"></i> <b>Penggajian</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment('1') == '#' ? 'active' : '' }} "
                        aria-current="page" href="{{ url('/karyawanrosati/presensikaryawan') }}">
                        <i class="fa-solid fa-user-check"></i> <b>Presensi</b>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-paper-plane"></i> <b> Pengajuan </b>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="nav-link {{ request()->segment('1') == '#' ? 'active' : '' }} "
                                aria-current="page" href="{{ url('/karyawanrosati/pengajuanedit') }}">
                                <i class="fa-solid fa-user-pen"></i> <b>Edit Data</b>
                            </a>
                        </li>
                        <li><a class="nav-link {{ request()->segment('1') == '#' ? 'active' : '' }} "
                                aria-current="page" href="{{ url('/karyawanrosati/pengajuancuti') }}">
                                <i class="fa-solid fa-calendar-plus"></i> <b>Cuti</b>
                            </a>
                        </li>
                    </ul>
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
                                aria-current="page" href="{{ url('logout') }}">
                                <i class="fa-solid fa-right-from-bracket"></i> <b>Logout</b>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
