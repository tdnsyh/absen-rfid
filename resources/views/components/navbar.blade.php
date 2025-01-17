<div class="sticky-top">
    <div class="container">
        <nav class="navbar ukuran mt-4 navbar-expand-lg bg-primary-subtle rounded-3 p-2 shadow-sm">
            <div class="container">
                <a class="navbar-brand fw-bold" href="/">
                    SMK Niko Al- Farisi
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse offcanvas-body position-relative" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('profil') ? 'active' : '' }}" href="/profil">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('berita') ? 'active' : '' }}" href="/berita">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('kontak') ? 'active' : '' }}" href="/kontak">Kontak</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="btn btn-primary text-light">
                                        Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-success text-light">
                                        Log in
                                    </a>
                                @endauth
                            </nav>
                        @endif
                    </span>
                </div>
            </div>
        </nav>
    </div>
    <style>
        .sticky-top {
            top: 30px;
        }
    </style>
</div>
