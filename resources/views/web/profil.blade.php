<x-layout-web>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar></x-navbar>
    <div class="container mt-5">
        <div class="row g-4">
            <div class="col-4">
                <img src="{{ asset('assets/img/logo.png') }}" alt="" class="img-fluid d-flex align-item-center">
            </div>
            <div class="col-4 col-md-8">
                <div style="text-align: justify">
                    <h1 class="fw-bold">SMK Niko Al- Farisi</h1>
                    <p>SMK Negeri al-duka beralamat di Jl. B7 Cipinang Pulo, Kel. Cipinang Besar Utara, Kec. Jatinegara,
                        Kota
                        Administrasi Jakarta Timur provinsi DKI Jakarta.</p>
                    <p>SMK Negeri al-duka sebagai pelaksana SMK Pusat Keunggulan memiliki 5 Konsentrasi Keahlian yaitu
                        Akuntansi, Manajemen Perkantoran, Bisnis Ritel, Desain Komunikasi Visual dan Rekayasa Perangkat
                        Lunak.
                        Proses pembelajaran dilakukan dengan kegiatan intrakurikuler maupun ekstrakurikuler. Keberadaan
                        Teaching
                        Factory menjadi salah satu simpul pembelajaran yang terpadu antar kompetensi keahlian.
                        Keberadaan LSP P1
                        SMK Negeri 46 Jakarta menjadi salah satu tempat penyelarasan kurikulum sesuai dengan KKNI dalam
                        membentuk lulusan yang kompeten sesuai bidang keahlian/skema masing-masing.</p>
                    <p>Ekstrakuriluer yang dilaksanakan adalah pramuka, olahraga (basket, voli, futsal), silat, karate,
                        PMR,
                        teater, seni tari, paduan suara, bina prestasi dan kerohanian. Mengantarkan seluruh peserta
                        didik menuju
                        tahap berikutnya baik melnjutkan kuliah, bekerja atau berwirausaha menjadi salah satu prioritas
                        utama
                        dengan melakukan berbagai kegiatan Job and Education Fair yang bekerja sama dengan BKK. Sekolah
                        dengan
                        status BLUD (Badan Layanan Usaha Daerah) menjadi salah satu tantangan sekolah kami untuk
                        senantiasa
                        menjalankan pelayanan yang optimal dan akuntabilitas dalam pengelolaan pembiayaan. Menjadi
                        sekolah yang
                        aman dan nyaman menjadi program dalam proses pembangunan berkelanjutan. <br>
                        Teruslah Jaya SMK Negeri 46 Jakarta. Satukan Hati Lejitkan Prestasi. Bersama Kita Bisa.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="text">
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
                                <h3>Teknik Kendaraan Ringan Otomotif (TKRO)</h3>
                                <p>
                                    Menyiapkan siswa dengan keahlian dalam perawatan, perbaikan, dan diagnosis kendaraan
                                    bermotor ringan.</p>
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
                                <h3>Tata Busana</h3>
                                <p>
                                    Memberikan pengetahuan dan keterampilan tentang desain, pembuatan, dan pemasaran
                                    pakaian sesuai dengan tren mode.</p>
                            </div>
                            <div class="col-2">
                                <img src="{{ asset('assets/img/tkr.png') }}" class="img-fluid" style="max-height: 300px"
                                    alt="">
                            </div>
                        </row>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-web-footer></x-web-footer>
</x-layout-web>
