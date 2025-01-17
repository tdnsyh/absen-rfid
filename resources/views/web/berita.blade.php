<x-layout-web>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar></x-navbar>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="col-4">
                <h5 class="fs-2">Berita</h5>
            </div>
            <div class="col-auto">
                <div class="input-group">
                    <span class="input-group-text bg-primary">
                        <i class="bi bi-search text-white"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Cari berita">
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
            @foreach ($artikels as $artikel)
                <div class="col">
                    <div class="card mb-3 border-0 h-100">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('images/' . $artikel->gambar) }}"
                                    class="rounded-start img-fluid object-fit-cover h-100" alt="{{ $artikel->judul }}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="d-flex gap-2 mb-0">
                                        <span class="badge text-white bg-warning h-50">{{ $artikel->kategori }}</span>
                                        <p class="text-secondary">{{ $artikel->created_at->format('l, d F Y') }}</p>
                                    </div>
                                    <h5 class="card-title mb-0">{{ $artikel->judul }}</h5>
                                    <p class="card-text">
                                        {!! Str::limit(strip_tags($artikel->isi_berita), 100) !!}...
                                        <a href="{{ route('detail.berita', ['kategori' => $artikel->kategori, 'id' => $artikel->id, 'judul' => Str::slug($artikel->judul)]) }}"
                                            class="link-underline link-underline-opacity-0">
                                            Selengkapnya
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center">
            {{ $artikels->links() }}
        </div>
    </div>
    <x-web-footer></x-web-footer>
</x-layout-web>
