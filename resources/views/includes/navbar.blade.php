<nav class="navbar navbar-expand-lg navbar-light navbar-perpus fixed-top navbar-fixed-top" data-aos="fade-down">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
            <img src="{{ asset('images/logo.svg') }}" alt="logo" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->is('home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item {{ request()->is('buku') ? 'active' : '' }}">
                    <a href="{{ route('category') }}" class="nav-link">Buku</a>
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
                @guest
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="btn btn-primary nav-link px-4 text-white">Sign In</a>
                </li>
                @endguest
            </ul>

            @auth
            <ul class="navbar-nav d-none d-lg-flex">
                <li class="nav-item">
                    <div class="a nav-link d-inline-block mt-2">
                        <img src="/images/shopping.svg" alt="">
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                        Hi, {{ Auth::user()->nama }}
                        <img src="{{ asset('images/user_pc.png') }}" alt="profile"
                            class="rounded-circle ml-2 profile-picture">
                    </a>
                    <div class="dropdown-menu">
                        <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                        <a href="{{ route('dashboard-account') }}" class="dropdown-item">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="dropdown-item">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>

            </ul>

            <!-- mobile menu -->
            <ul class="navbar-nav d-block d-lg-none">
                <li class="nav-item"><a href="#" class="nav-link">Hi. Akbar</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Cart</a></li>
            </ul>
            @endauth
        </div>
    </div>
</nav>