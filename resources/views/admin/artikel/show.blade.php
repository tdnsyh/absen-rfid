<x-layout-admin>
    <x:slot:title>
        {{ $title }}
    </x:slot:title>
    <x-sidebar></x-sidebar>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>{{ $title }}</h3>
                        <p class="text-subtitle text-muted">Lorem ipsum dolor sit amet.
                            Voluptates. di {{ $title }}</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="card">
                @if ($artikel->gambar)
                    <img src="{{ asset('images/' . $artikel->gambar) }}" class="card-img-top" alt="Gambar Artikel">
                @else
                    <p>Gambar tidak tersedia</p>
                @endif
                <div class="card-body">
                    <h4 class="card-title mt-3">{{ $artikel->judul }}</h4>
                    <p class="card-text mb-0 mt-3"><strong>Penulis:</strong> {{ $artikel->penulis }}</p>
                    <p class="card-text"><strong>Kategori:</strong> {{ $artikel->kategori }}</p>
                    <div class="card-text mt-3">{!! $artikel->isi_berita !!}</div>
                    <a href="{{ route('artikel.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
                </div>
            </div>
        </div>
        <x-footer></x-footer>
    </div>
</x-layout-admin>
