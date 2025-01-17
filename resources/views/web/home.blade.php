<x-layout-web>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar></x-navbar>
    {{-- hero section --}}
    <div class="container mt-5 mt-md-0">
        <div class="row row-cols-1 row-cols-md-2 d-flex align-items-center">
            <div class="col">
                <h2>Selamat datang di</h2>
                <p class="display-4 text-primary fw-bold mb-0">SMK Niko Al - Farisi</p>
                <h4>Rajin sekolah, tekun ibadah, masa depan cerah, hidup berkah.</h4>
                <a href="/" class="btn btn-outline-primary mt-2">Daftar Sekarang</a>
            </div>
            <div class="col d-none d-md-block">
                <img src="assets/img/udin.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    {{-- tentang sekolah --}}
    <div class="mt-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="ratio ratio-4x3">
                                    <img src="https://images.unsplash.com/photo-1512253022256-19f4cb92a4dc?q=80&w=1427&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        class="img-fluid rounded object-fit-cover" alt="">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="ratio ratio-4x3">
                                    <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?q=80&w=1632&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        class="img-fluid rounded object-fit-cover" alt="">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="ratio ratio-4x3">
                                    <img src="https://images.unsplash.com/photo-1453733190371-0a9bedd82893?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        class="img-fluid rounded object-fit-cover" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="j">
                        <span class="badge text-bg-primary">About</span>
                        <div class="h3 pb-2 mb-4 fw-semibold text-secodary border-2 border-bottom border-secondary">
                            Tentang SMK Niko Al - Farisi
                        </div>
                    </div>
                    <p>
                        SMK Niko Al-Farisi adalah institusi pendidikan kejuruan yang dikelola oleh Yayasan Darusshoba
                        Al-Muwaddah, berdiri sejak tahun 2017 berdasarkan Akta Notaris Nugraha Nur Pramana No. 86.
                        Sekolah ini dirancang untuk mencetak generasi muda yang kompeten, berdaya saing, dan
                        berkarakter.
                    </p>
                    <h4 class="fw-semibold">Visi</h4>
                    <p>
                        Menjadi Pusat Pendidikan yang berkualitas, berwawasan Iptek dan menghasilkan generasi
                        yang Islami yang tangguh serta mandiri
                    </p>
                    <h4 class="fw-semibold">Misi</h4>
                    <ol>
                        <li>Menyelenggarakan pendidikan yang Islami, Modern, Dinamis dan Disiplin serta memenuhi
                            Standar Pendidikan Nasional</li>
                        <li>Memberikan layanan belajar berbasis Sains dan Teknologi tepat guna </li>
                        <li>Meningkatkan kompetensi guru sesuai dengan bidang tugasnya</li>
                        <li>Melengkapi sekolah dengan sarana dan prasarana yang memadai dan Modern</li>
                    </ol>
                    <a href="profil" class="btn btn-outline-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

    {{-- sambutan kepala sekolah --}}
    <div class="container mt-5">
        <div class="h3 pb-2 mb-4 fw-semibold text-secodary border-2 border-bottom border-secondary">
            Sambutan Kepala Sekolah
        </div>
    </div>
    <div class="bg-primary-subtle">
        <div class="container py-5">
            <div class="row g-4 d-flex align-items-center">
                <div class="col-12 col-md-4 order-2 order-md-1">
                    <div class="ratio ratio-1x1" style="max-height: 300px">
                        <img src="assets/img/kepsek.jpg" alt="" class="img-fluid object-fit-cover rounded">
                    </div>
                </div>
                <div class="col-12 col-md-8 order-1 order-md-2">
                    <p>
                        <em>Assalamu’alaikum Warahmatullahi Wabarakatuh,</em>
                    </p>
                    <p>
                        Dengan rahmat Allah SWT, kami terus berkomitmen mencetak generasi unggul, berkarakter, dan siap
                        menghadapi tantangan.
                        Kerja sama antara sekolah, orang tua, dan masyarakat adalah kunci kesuksesan kami.
                    </p>
                    <p>
                        <em>
                            Wassalamu’alaikum Warahmatullahi Wabarakatuh.
                        </em>
                    </p>
                    <p class="text-muted">
                        Kepala Sekolah<br>
                        <strong>Asep Saepudin M. Mp.d</strong><br>
                        SMK Niko Al-Farisi
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- alasan kenapa harus memilih sekolah --}}
    <div class="mt-5 container">
        <span class="badge text-bg-primary">Why</span>
        <div class="h3 pb-2 mb-4 fw-semibold text-secodary border-2 border-bottom border-secondary">
            Kenapa harus SMK Niko Al - Farisi?
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card bg-primary-subtle border-0 h-100">
                    <div class="card-body">
                        <h4 class="bg-primary text-white rounded-circle text-center d-flex align-items-center justify-content-center"
                            style="width: 50px; height: 50px;">
                            01
                        </h4>
                        <h5>Kurikulum Berbasis Kompetensi</h5>
                        <p>Fokus pada keterampilan sesuai kebutuhan industri.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-success-subtle border-0 h-100">
                    <div class="card-body">
                        <h4 class="bg-success text-white rounded-circle text-center d-flex align-items-center justify-content-center"
                            style="width: 50px; height: 50px;">
                            02
                        </h4>
                        <h5>Fasilitas Lengkap</h5>
                        <p>Laboratorium, workshop, dan sarana praktik modern.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-info-subtle border-0 h-100">
                    <div class="card-body">
                        <h4 class="bg-info text-white rounded-circle text-center d-flex align-items-center justify-content-center"
                            style="width: 50px; height: 50px;">
                            03
                        </h4>
                        <h5>Pendidikan Karakter dan Keagamaan</h5>
                        <p>Mengintegrasikan ilmu dengan nilai moral dan spiritual.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-warning-subtle border-0 h-100">
                    <div class="card-body">
                        <h4 class="bg-warning text-white rounded-circle text-center d-flex align-items-center justify-content-center"
                            style="width: 50px; height: 50px;">
                            04
                        </h4>
                        <h5>Tenaga Pendidik Profesional</h5>
                        <p>Guru berpengalaman di bidangnya..</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- jurusan --}}
    <div class="container mt-5">
        <div class="text-center">
            <span class="badge text-bg-primary">Why</span>
            <div class="h3 pb-2 mb-4 fw-semibold text-secodary border-2 border-bottom border-secondary">
                Jurusan di SMK Niko Al - Farisi
            </div>
        </div>
        <div class="card h-100 bg-tertiary border-0">
            <div class="card-body">
                <div class="row p-3 align-items-center">
                    <div class="col-12 col-md-6 order-2 order-md-1 mt-3 mt-md-0">
                        <h3>Bisnis Daring dan Pemasaran (BDP)</h3>
                        <p>
                            Jurusan Bisnis Daring dan Pemasaran (BDP) di SMK Niko Al - Farisi mengajarkan strategi
                            pemasaran modern, pengelolaan toko online, dan teknik promosi digital. Siswa dibekali
                            keterampilan bisnis dan wirausaha untuk bersaing di era digital.
                        </p>
                    </div>
                    <div class="col-12 col-md-6 text-center order-1 order-md-2">
                        <img src="{{ asset('assets/img/jurusan.png') }}" class="img-fluid"
                            style="max-height: 300px; object-fit: cover;" alt="Bisnis Daring dan Pemasaran">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- alumni --}}
    <div class="container mt-5 mb-5">
        <div class="text-center">
            <span class="badge text-bg-primary">Why</span>
            <div class="h3 pb-2 mb-4 fw-semibold text-secodary border-2 border-bottom border-secondary">
                Alumni SMK Niko Al - Farisi
            </div>
        </div>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row row-cols-2 row-cols-md-4 g-4">
                        <div class="col">
                            <div class="text-center">
                                <img src="{{ asset('assets/img/profile.png') }}" class="img-fluid rounded-circle"
                                    style="max-height: 150px" alt="">
                                <h5 class="mb-0">Udin</h5>
                                <figcaption class="figure-caption">PT Telkom Indonesia (Persero) Tbk</figcaption>
                                <p class="card-text mt-2 alumni">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit.
                                    Autem,
                                    deleniti.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center">
                                <img src="{{ asset('assets/img/profile.png') }}" class="img-fluid rounded-circle"
                                    style="max-height: 150px" alt="">
                                <h5 class="mb-0">Siti Aisyah</h5>
                                <figcaption class="figure-caption">PT. Astra Honda Motor</figcaption>
                                <p class="card-text mt-2 alumni">Saya sangat berterima kasih kepada SMK Niko Al -
                                    Farisi atas
                                    pengalaman
                                    belajar yang luar biasa.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center">
                                <img src="{{ asset('assets/img/profile.png') }}" class="img-fluid rounded-circle"
                                    style="max-height: 150px" alt="">
                                <h5 class="mb-0">Budi Santoso</h5>
                                <figcaption class="figure-caption">Bank BCA</figcaption>
                                <p class="card-text mt-2 alumni">Pengalaman di SMK Niko Al - Farisi membantu saya
                                    memiliki
                                    mentalitas
                                    kerja yang kuat.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center">
                                <img src="{{ asset('assets/img/profile.png') }}" class="img-fluid rounded-circle"
                                    style="max-height: 150px" alt="">
                                <h5 class="mb-0">Dewi Lestari</h5>
                                <figcaption class="figure-caption">PT. Unilever Indonesia</figcaption>
                                <p class="card-text mt-2 alumni">Lingkungan belajar yang kondusif dan para guru yang
                                    peduli
                                    membuat saya siap menghadapi dunia kerja.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row row-cols-2 row-cols-md-4 g-4">
                        <div class="col">
                            <div class="text-center">
                                <img src="{{ asset('assets/img/profile.png') }}" class="img-fluid rounded-circle"
                                    style="max-height: 150px" alt="">
                                <h5 class="mb-0">Rudi Hartono</h5>
                                <figcaption class="figure-caption">PT. PLN (Persero)</figcaption>
                                <p class="card-text mt-2 alumni">SMK Niko Al - Farisi memberikan pendidikan berbasis
                                    praktik yang
                                    sangat
                                    relevan dengan industri.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center">
                                <img src="{{ asset('assets/img/profile.png') }}" class="img-fluid rounded-circle"
                                    style="max-height: 150px" alt="">
                                <h5 class="mb-0">Nur Hasanah</h5>
                                <figcaption class="figure-caption">PT. Samsung Electronics Indonesia</figcaption>
                                <p class="card-text mt-2 alumni">Kurikulum yang diterapkan sangat mendukung karier saya
                                    di
                                    perusahaan teknologi.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center">
                                <img src="{{ asset('assets/img/profile.png') }}" class="img-fluid rounded-circle"
                                    style="max-height: 150px" alt="">
                                <h5 class="mb-0">Ahmad Fauzi</h5>
                                <figcaption class="figure-caption">PT. Garuda Indonesia</figcaption>
                                <p class="card-text mt-2 alumni">Belajar di SMK Niko Al - Farisi adalah keputusan
                                    terbaik yang
                                    pernah
                                    saya ambil.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center">
                                <img src="{{ asset('assets/img/profile.png') }}" class="img-fluid rounded-circle"
                                    style="max-height: 150px" alt="">
                                <h5 class="mb-0">Laila Amalia</h5>
                                <figcaption class="figure-caption">PT. Pertamina (Persero)</figcaption>
                                <p class="card-text mt-2 alumni">SMK Niko Al - Farisi menginspirasi saya untuk terus
                                    belajar dan
                                    berkembang di dunia profesional.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- berita/artikel --}}
    <div class="py-5 bg-body-secondary">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 mb-3">
                    <h3 class="h3 pb-2 mb-4 fw-semibold text-secodary border-2 border-bottom border-secondary">Prestasi
                    </h3>
                    @foreach ($artikels->where('kategori', 'Prestasi')->take(2) as $artikel)
                        <div class="card border-0 bg-body-tertiary mb-3 border-bottom border-3 border-success">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('images/' . $artikel->gambar) }}"
                                    class="card-img-top object-fit-cover" alt="">
                            </div>
                            <div class="card-body">
                                <span class="badge text-bg-success">Prestasi</span>
                                <h5 class="card-title mt-2">{{ $artikel->judul }}</h5>
                                <a href="{{ route('detail.berita', ['kategori' => 'Prestasi', 'id' => $artikel->id, 'judul' => Str::slug($artikel->judul)]) }}"
                                    class="btn btn-outline-success mt-2">Selengkapnya</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- berita --}}
                <div class="col-12 col-md-8">
                    <h3 class="h3 pb-2 mb-4 fw-semibold text-secodary border-2 border-bottom border-secondary">Berita
                    </h3>
                    @foreach ($berita as $artikel)
                        <div class="card border-0 bg-body-tertiary mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <div class="ratio ratio-1x1">
                                        <img src="{{ asset('images/' . $artikel->gambar) }}"
                                            class="img-fluid rounded" style="object-fit: cover;"
                                            alt="Gambar ilustrasi">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <span
                                            class="badge text-bg-primary text-white mb-2 mt-2">{{ $artikel->kategori }}</span>
                                        <p class="text-secondary mb-0">{{ $artikel->created_at->format('l, d F Y') }}
                                        </p>
                                        <h5 class="card-title">{{ $artikel->judul }}</h5>
                                        <a href="{{ route('detail.berita', ['kategori' => $artikel->kategori, 'id' => $artikel->id, 'judul' => Str::slug($artikel->judul)]) }}"
                                            class="btn btn-outline-primary mt-2">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="text-center">
                <a href="berita" class="btn btn-primary mt-3 mb-0">Selengkapnya</a>
            </div>
        </div>
    </div>
    <x-web-footer></x-web-footer>
</x-layout-web>
