<!-- SIDEBAR -->
<section id="sidebar">
    <a href="home" class="brand">
        <img src="{{ asset('logo.png') }}" height="65" width="auto" alt="Rosati Hospital" class="logorosati"/>
    </a>
    <ul class="side-menu top">
        <li class="active">
            <a href="home">
                <i class='bx bxs-home'></i>
                <span class="text">Home</span>
            </a>
        </li>
        <li>
            <a class="nav-link {{ request()->segment('1') == 'jabatan' ? 'active' : '' }} " aria-current="page"
                href="{{ url('karyawan') }}">
                <i class='bx bxs-user'></i>
                <span class="text">Karyawan</span>
            </a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class='bx bxs-building'></i>
                <span class="text">Office</span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="nav-link {{ request()->segment('1') == 'jabatan' ? 'active' : '' }} " aria-current="page"
                        href="{{ url('jabatan') }}">
                        <i class='bx bxs-building'></i>
                        <span class="text">Jabatan</span>
                    </a>
                </li>
                <li><a class="nav-link {{ request()->segment('1') == 'departemen' ? 'active' : '' }} "
                        aria-current="page" href="{{ url('departemen') }}">
                        <i class='bx bxs-building'></i>
                        <span class="text">Departemen</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class='bx bx-calendar'></i>
                <span class="text">Jadwal</span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="nav-link {{ request()->segment('1') == 'penjadwalan' ? 'active' : '' }} "
                        aria-current="page" href="{{ url('penjadwalan') }}">
                        <i class='bx bx-calendar-plus'></i>
                        <span class="text">Jadwal Karyawan</span>
                    </a>
                </li>
                <li><a class="nav-link {{ request()->segment('1') == 'cuti' ? 'active' : '' }} " aria-current="page"
                        href="{{ url('cuti') }}">
                        <i class='bx bx-calendar-exclamation'></i>
                        <span class="text">Cuti</span>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a class="nav-link {{ request()->segment('1') == 'presensi' ? 'active' : '' }} " aria-current="page"
                href="{{ url('presensi') }}">
                <i class='bx bxs-user-check'></i>
                <span class="text">Presensi</span>
            </a>
        </li>
        <li>
            <a class="nav-link {{ request()->segment('1') == 'penggajian' ? 'active' : '' }} " aria-current="page"
                href="{{ url('penggajian') }}">
                <i class='bx bx-wallet'></i>
                <span class="text">Penggajian</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        {{-- <li>
            <a href="#">
                <i class='bx bxs-cog'></i>
                <span class="text">Settings</span>
            </a>
        </li> --}}
        <li>
            <a class="nav-link {{ request()->segment('1') == 'logout' ? 'active' : '' }} " aria-current="page"
                href="{{ url('logout') }}">
                <i class='bx bx-log-out' style='color:#ff0000'></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>
<!-- SIDEBAR -->
