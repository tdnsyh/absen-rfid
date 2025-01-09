<x-layout-web>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar></x-navbar>
    {{-- hero section --}}
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-2 d-flex align-items-center g-4">
            <div class="col">
                <h5>
                    Selamat datang! di
                </h5>
                <h1 class="display-1 fw-bold">
                    SMK Al - Duka
                </h1>
                <h4>
                    Rajin sekolah, tekun ibadah, masa depan cerah, hidup berkah.
                </h4>
                <a href="/" class="btn btn-outline-info mt-2">Selengkapnya</a>
            </div>
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
        </div>
    </div>

    {{-- tentang sekolah --}}
    <div class="bg-body-tertiary py-5 mt-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="ratio ratio-21x9">
                                    <img src="https://images.unsplash.com/photo-1512253022256-19f4cb92a4dc?q=80&w=1427&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        class="img-fluid rounded object-fit-cover" alt="">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="ratio ratio-21x9">
                                    <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?q=80&w=1632&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        class="img-fluid rounded object-fit-cover" alt="">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="ratio ratio-21x9">
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
                            Tentang SMK Al - Duka
                        </div>
                    </div>
                    <p>
                        SMK Al-Huda adalah sebuah Sekolah Menengah Kejuruan yang berkomitmen untuk mencetak generasi
                        unggul melalui pendidikan berbasis keterampilan dan keahlian sesuai kebutuhan dunia kerja.
                        Dengan fasilitas yang memadai, tenaga pendidik profesional, dan berbagai program kejuruan, SMK
                        Al-Huda mendukung siswa untuk mengembangkan potensi akademik dan keterampilan praktis. Sekolah
                        ini juga menanamkan nilai-nilai keagamaan dan karakter untuk membentuk lulusan yang kompeten,
                        berakhlak mulia, dan siap bersaing di era global.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- alasan kenapa harus memilih sekolah --}}
    <div class="mt-5 container">
        <span class="badge text-bg-primary">Why</span>
        <div class="h3 pb-2 mb-4 fw-semibold text-secodary border-2 border-bottom border-secondary">
            Kenapa harus SMK Al- Duka?
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card bg-secondary-subtle border-0 h-100">
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
                <div class="card bg-secondary-subtle border-0 h-100">
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
                <div class="card bg-secondary-subtle border-0 h-100">
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
                <div class="card bg-secondary-subtle border-0 h-100">
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
                Jurusan di SMK Al - Duka
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card h-100 bg-body-tertiary border-0">
                    <div class="card-body">
                        <row class="row row-cols-2 p-3">
                            <div class="col-10">
                                <h3>Teknik Komputer dan Jaringan (TKJ)</h3>
                                <p>Membekali siswa dengan kemampuan merancang, mengelola, dan memperbaiki jaringan
                                    komputer serta perangkat keras teknologi informasi.</p>
                            </div>
                            <div class="col-2">
                                <img src="{{ asset('assets/img/tkr.png') }}" class="img-fluid" style="max-height: 300px"
                                    alt="">
                            </div>
                        </row>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-body-tertiary border-0">
                    <div class="card-body">
                        <row class="row row-cols-2 p-3">
                            <div class="col-10">
                                <h3>Akuntansi dan Keuangan Lembaga (AKL)</h3>
                                <p>
                                    Mengajarkan keterampilan pencatatan keuangan, penyusunan laporan akuntansi, dan
                                    pengelolaan keuangan perusahaan sesuai standar.</p>
                            </div>
                            <div class="col-2">
                                <img src="{{ asset('assets/img/tkr.png') }}" class="img-fluid"
                                    style="max-height: 300px" alt="">
                            </div>
                        </row>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-body-tertiary border-0">
                    <div class="card-body">
                        <row class="row row-cols-2 p-3">
                            <div class="col-10">
                                <h3>Teknik Kendaraan Ringan Otomotif (TKRO)</h3>
                                <p>
                                    Menyiapkan siswa dengan keahlian dalam perawatan, perbaikan, dan diagnosis kendaraan
                                    bermotor ringan.</p>
                            </div>
                            <div class="col-2">
                                <img src="{{ asset('assets/img/tkr.png') }}" class="img-fluid"
                                    style="max-height: 300px" alt="">
                            </div>
                        </row>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-body-tertiary border-0">
                    <div class="card-body">
                        <row class="row row-cols-2 p-3">
                            <div class="col-10">
                                <h3>Tata Busana</h3>
                                <p>
                                    Memberikan pengetahuan dan keterampilan tentang desain, pembuatan, dan pemasaran
                                    pakaian sesuai dengan tren mode.</p>
                            </div>
                            <div class="col-2">
                                <img src="{{ asset('assets/img/tkr.png') }}" class="img-fluid"
                                    style="max-height: 300px" alt="">
                            </div>
                        </row>
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
                Alumni SMK Al - Duka
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
                                <p class="card-text mt-2 alumni">Saya sangat berterima kasih kepada SMK Alhuda atas
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
                                <p class="card-text mt-2 alumni">Pengalaman di SMK Alhuda membantu saya memiliki
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
                                <p class="card-text mt-2 alumni">SMK Alhuda memberikan pendidikan berbasis praktik yang
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
                                <p class="card-text mt-2 alumni">Belajar di SMK Alhuda adalah keputusan terbaik yang
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
                                <p class="card-text mt-2 alumni">SMK Alhuda menginspirasi saya untuk terus belajar dan
                                    berkembang di dunia profesional.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- berita/artikel --}}
    <div class="py-5" style="background-color: #E4E0E1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 mb-3">
                    <h3 class="h3 pb-2 mb-4 fw-semibold text-secodary border-2 border-bottom border-secondary">Prestasi
                    </h3>
                    <div class="card border-0 bg-body-tertiary mb-3">
                        <div class="ratio ratio-16x9">
                            <img src="https://images.unsplash.com/photo-1625111696958-792514071a8f?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="card-img-top object-fit-cover" alt="">
                        </div>
                        <div class="card-body">
                            <span class="badge text-bg-success">Prestasi</span>
                            <h5 class="card-title mt-2">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste, harum.
                            </h5>
                            <a href="/" class="btn btn-outline-success mt-2">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="card border-0 bg-body-tertiary mb-3">
                        <div class="ratio ratio-16x9">
                            <img src="https://images.unsplash.com/photo-1648518295678-f78670c35924?q=80&w=1476&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="card-img-top object-fit-cover" alt="">
                        </div>
                        <div class="card-body">
                            <span class="badge text-bg-success text-white">Prestasi</span>
                            <h5 class="card-title mt-2">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste, harum.
                            </h5>
                            <a href="/" class="btn btn-outline-success mt-2">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                {{-- berita --}}
                <div class="col-12 col-md-8">
                    <h3 class="h3 pb-2 mb-4 fw-semibold text-secodary border-2 border-bottom border-secondary">Berita
                    </h3>
                    <div class="card border-0 bg-body-tertiary mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="ratio ratio-1x1">
                                    <img src="https://images.unsplash.com/photo-1625111381856-5cdedf9ae7a4?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        class="img-fluid rounded-start" style="object-fit: cover;"
                                        alt="Gambar ilustrasi">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span class="badge text-bg-primary text-white mb-2 mt-2">Akademik</span>
                                    <p class="text-secondary mb-0">Kamis, 09 Januari 2024</p>
                                    <h5 class="card-title">Lorem, ipsum dolor sit amet consectetur adipisicing
                                        elit. Incidunt assumenda nostrum molestias.</h5>
                                    <a href="/" class="btn btn-outline-primary mt-2">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 bg-body-tertiary mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="ratio ratio-1x1">
                                    <img src="https://images.unsplash.com/photo-1561476591-c5805d714b91?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        class="img-fluid rounded-start" style="object-fit: cover;"
                                        alt="Gambar ilustrasi">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span class="badge text-bg-warning text-white mb-2 mt-2">Berita</span>
                                    <p class="text-secondary mb-0">Kamis, 09 Januari 2024</p>
                                    <h5 class="card-title">Lorem, ipsum dolor sit amet consectetur adipisicing
                                        elit. Incidunt assumenda nostrum molestias.</h5>
                                    <a href="/" class="btn btn-outline-warning mt-2">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 bg-body-tertiary mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="ratio ratio-1x1">
                                    <img src="https://images.unsplash.com/photo-1625111381887-458fce74a923?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        class="img-fluid rounded-start" style="object-fit: cover;"
                                        alt="Gambar ilustrasi">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span class="badge text-bg-info text-white mb-2 mt-2">Artikel</span>
                                    <p class="text-secondary mb-0">Kamis, 09 Januari 2024</p>
                                    <h5 class="card-title">Lorem, ipsum dolor sit amet consectetur adipisicing
                                        elit. Incidunt assumenda nostrum molestias.</h5>
                                    <a href="/" class="btn btn-outline-info mt-2">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="berita" class="btn btn-primary mt-3 mb-0">Selengkapnya</a>
            </div>
        </div>
    </div>

    {{-- kontak kami --}}
    <div class="container py-5">
        <div class="judu">
            <h3 class="h3 pb-2 fw-semibold text-secodary border-2 border-bottom border-secondary">Kontak Kami
            </h3>
        </div>
        <div class="card mt-3 border-0 bg-secondary-subtle">
            <div class="card-body">
                <div class="row row-cols-1 row-cols-md-2 g-4 d-flex align-items-center">
                    <div class="col">
                        <img src="https://digitalgopi.com/wp-content/uploads/2021/01/lets-connect.png" alt=""
                            class="img-fluid">
                    </div>
                    <div class="col">
                        <div class="card border-0 bg-info-subtle p-3">
                            <div class="card-body">
                                <h3 class="fw-bold">Informasi Kontak</h3>
                                <p class="card-text">
                                    Jika Anda memiliki pertanyaan atau membutuhkan informasi lebih lanjut, jangan ragu
                                    untuk menghubungi kami melalui:
                                </p>
                                <p class="card-text">
                                    <i class="bi bi-telephone-fill me-2"></i> Telepon: (+62) 812-3456-7890
                                </p>
                                <p class="card-text">
                                    <i class="bi bi-globe2 me-2"></i> Website: www.namaperusahaan.com
                                </p>
                                <p class="card-text">
                                    <i class="bi bi-house-door-fill me-2"></i> Alamat: Jl. Contoh No. 123, Jakarta,
                                    Indonesia
                                </p>
                                <p class="card-text">
                                    Kami siap membantu Anda!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- bottom menu --}}
    <div class="bg-dark mt-3 mt-md-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 mb-3">
                    <div class="text-white">
                        <h2>SMK Al - Duka</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod placeat magnam culpa
                            distinctio.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 mb-3">
                    <div class="text-white">
                        <h4>Menu</h4>
                        <p class="mb-0">
                            <a href="/" class="text-decoration-none text-white">Home</a>
                        </p>
                        <p class="mb-0">
                            <a href="profil" class="text-decoration-none text-white">Profil</a>
                        </p>
                        <p class="mb-0">
                            <a href="berita" class="text-decoration-none text-white">Berita</a>
                        </p>
                        <p class="mb-0">
                            <a href="kontak" class="text-decoration-none text-white">Kontak</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 mb-3">
                    <div class="text-white">
                        <h4>Social Media</h4>
                        <p class="mb-0">
                            <a href="/" class="text-decoration-none text-danger">
                                <i class="bi bi-youtube fs-4 me-2"></i> Youtube
                            </a>
                        </p>
                        <p class="mb-0">
                            <a href="profil" class="text-decoration-none text-info">
                                <i class="bi bi-instagram fs-4 me-2"></i> Instagram
                            </a>
                        </p>
                        <p class="mb-0">
                            <a href="berita" class="text-decoration-none text-white">
                                <i class="bi bi-tiktok fs-4 me-2"></i> Tiktok
                            </a>
                        </p>
                        <p class="mb-0">
                            <a href="kontak" class="text-decoration-none text-success">
                                <i class="bi bi-whatsapp fs-4 me-2"></i> WhatsApp
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    <div class="bg-black text-light py-3 text-center">
        <p class="mb-0">&copy; 2025 Codemalaya. All Rights Reserved.</p>
    </div>
</x-layout-web>
