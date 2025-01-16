<x-layout-web>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar></x-navbar>
    <div class="berita pb-5">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="ratio ratio-16x9">
                        <img src="{{ asset('images/' . $artikel->gambar) }}" class="object-fit-cover rounded"
                            alt="{{ $artikel->judul }}">
                    </div>
                    <h2 class="mb-3 mt-md-4 mt-3">{{ $artikel->judul }}</h2>
                    <span class="text-black">{{ $artikel->kategori }}</span>
                    <p class="mb-1">{{ $artikel->created_at->format('l, d F Y') }}</p>
                    <div class="card-body">
                        <p>{!! $artikel->isi_berita !!}</p>
                    </div>
                </div>
                <div class="col">
                    <h3 class="card-title mb-3">
                        Berita lainnya
                    </h3>
                    @foreach ($otherArticles as $otherArtikel)
                        <div class="card border-0 bg-body-tertiary mb-3">
                            <div class="ratio ratio-21x9">
                                <img src="{{ asset('images/' . $otherArtikel->gambar) }}"
                                    class="object-fit-cover card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ Str::limit($otherArtikel->judul, 50) }}</h5>
                                <a href="{{ route('detail.berita', ['kategori' => $otherArtikel->kategori, 'id' => $otherArtikel->id, 'judul' => Str::slug($otherArtikel->judul)]) }}"
                                    class="btn btn-sm btn-primary">Selengkapnya</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <x-web-footer></x-web-footer>
</x-layout-web>
