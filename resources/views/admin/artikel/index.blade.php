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
        <div class="tombol">
            <a href="{{ route('artikel.create') }}" class="btn btn-primary mb-3">Tambah Artikel</a>
        </div>
        @if ($artikels->isEmpty())
            <div class="alert alert-warning" role="alert">
                Belum ada Artikel.
            </div>
        @else
            <div class="page-content">
                <div class="row">
                    @foreach ($artikels as $artikel)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                @if ($artikel->gambar)
                                    <div class="ratio ratio-16x9">
                                        <img src="{{ asset('images/' . $artikel->gambar) }}"
                                            class="card-img-top object-fit-cover" alt="Gambar Artikel">
                                    </div>
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{ $artikel->judul }}</h5>
                                    <p class="card-text">
                                        <strong>Penulis:</strong> {{ $artikel->penulis }}<br>
                                        <strong>Kategori:</strong> {{ $artikel->kategori }}
                                    </p>
                                    <a href="{{ route('artikel.show', $artikel->id) }}" class="btn btn-info btn-sm">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('artikel.edit', $artikel->id) }}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <form action="{{ route('artikel.destroy', $artikel->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        <x-footer></x-footer>
    </div>
</x-layout-admin>
