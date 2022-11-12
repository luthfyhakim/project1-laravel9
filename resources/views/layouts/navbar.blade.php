<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #DEA057;">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="/img/logo.png" alt="logo smkn2" width="30" height="24" class="d-inline-block align-text-top">
            RPL SMKN 2 TRENGGALEK
        </a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" aria-current="page"
                    href="/">Home</a>
                <a class="nav-link {{ $title === 'Berita' ? 'active' : '' }}" href="/berita">Berita</a>
                <a class="nav-link {{ $title === 'Agenda' ? 'active' : '' }}" href="/agenda">Agenda</a>
                <!-- Navbar dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Paket Keahlian
                    </a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item {{ $title === 'Data Guru' ? 'active' : '' }}" href="/">Rekayasa Perangkat Lunak</a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ $title === 'Data Siswa' ? 'active' : '' }}" href="/">Desain Pemodelan dan Informasi Bangunan</a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ $title === 'Lowongan Kerja' ? 'active' : '' }}" href="/">Teknik Konstruksi Perumahan</a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ $title === 'Lowongan Kerja' ? 'active' : '' }}" href="/">Tata Boga</a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ $title === 'Lowongan Kerja' ? 'active' : '' }}" href="/">Kuliner</a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ $title === 'Lowongan Kerja' ? 'active' : '' }}" href="/">Teknik Pendinginan dan Tata Udara</a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ $title === 'Lowongan Kerja' ? 'active' : '' }}" href="/">Teknik Pengelasan</a>
                        </li>
                    </ul>
                </li>
                <!-- Navbar dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Information
                    </a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item {{ $title === 'Data Guru' ? 'active' : '' }}" href="/guru">Data Guru</a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ $title === 'Data Siswa' ? 'active' : '' }}" href="/siswa">Data Siswa</a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ $title === 'Lowongan Kerja' ? 'active' : '' }}" href="/loker">Lowongan Kerja</a>
                        </li>
                    </ul>
                </li>
                <a class="nav-link {{ $title === 'Profil' ? 'active' : '' }}" href="/profil">Profil</a>
            </div>
        </div>
    </div>

    {{-- login --}}
    <ul class="navbar-nav ms-auto">
        @auth
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a href="#" class="dropdown-item">My Dashboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a href="/login" class="nav-link {{ ($title === 'Login') ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i>Login</a>
                </li>
            </ul>
        @endauth
    </ul>

    {{-- form search --}}
    <form class="d-flex input-group w-auto">
        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
            aria-describedby="search-addon" />
        <span class="input-group-text border-0" id="search-addon">
            <i class="fas fa-search"></i>
        </span>
    </form>
</nav>
