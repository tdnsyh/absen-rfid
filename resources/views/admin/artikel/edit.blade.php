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
                <div class="card-body">
                    <form action="{{ route('artikel.update', $artikel->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul"
                                value="{{ $artikel->judul }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="isi_berita" class="form-label">Isi Berita</label>
                            <div id="editor" style="height: 300px;">{!! $artikel->isi_berita !!}</div>
                            <textarea name="isi_berita" id="hidden-content" class="d-none"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="penulis" class="form-label">Penulis</label>
                            <input type="text" class="form-control" id="penulis" name="penulis"
                                value="{{ $artikel->penulis }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <input type="text" class="form-control" id="kategori" name="kategori"
                                value="{{ $artikel->kategori }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="gambar" name="gambar">
                            @if ($artikel->gambar)
                                <img src="{{ asset('images/' . $artikel->gambar) }}" alt="gambar"
                                    class="img-fluid mt-2" style="max-width: 150px;">
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <x-footer></x-footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const quill = new Quill("#editor", {
                theme: "snow",
            });

            const form = document.querySelector("form");
            const hiddenContent = document.querySelector("#hidden-content");

            form.addEventListener("submit", function(event) {
                hiddenContent.value = quill.root.innerHTML;

                console.log("Form submitted!");
                console.log("Hidden Content:", hiddenContent.value);
            });
        });
    </script>
</x-layout-admin>
