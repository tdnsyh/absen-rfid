<div class="sticky-top">
    <div class="mt-4 container">
        <nav class="navbar navbar-expand-lg bg-primary-subtle rounded-3">
            <div class="container ms-2 me-2">
                <a class="navbar-brand fw-bold" href="#">SMK Al - Duka</a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse offcanvas-body position-relative" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profil">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="berita">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kontak">Kontak</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="btn btn-primary">
                                        Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-success">
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn btn-info">
                                            Register
                                        </a>
                                    @endif
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
