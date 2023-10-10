<nav class="navbar navbar-expand-lg navbar-light navbar-perpus fixed-top navbar-fixed-top" data-aos="fade-down">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand">
                <img src="/images/logo.svg" alt="logo" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a href="{{ route('home') }}" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item {{ request()->is('buku') ? 'active' : '' }}">
                        <a href="{{ route('buku') }}" class="nav-link">Buku</a>
                    </li>
                    <li class="nav-item">
                        <a href="/artikel.html" class="nav-link">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a href="/bantuan.html" class="nav-link">Bantuan</a>
                    </li>
                    <li class="nav-item">
                        <a href="/tentang.html" class="nav-link">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a href="/kontak.html" class="nav-link">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a href="/register.html" class="nav-link">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a href="/login.html" class="btn btn-primary nav-link px-4 text-white">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>