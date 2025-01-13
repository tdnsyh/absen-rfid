<x-layout-web>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar></x-navbar>
    <section id="berita" class="berita pb-5">
        <div class="container bg-white p-5 shadow-sm">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="fs-2">Berita</h5>
                <div>
                    <div class="input-group">
                        <span class="input-group-text bg-primary text-white" id="basic-addon1">
                            <i class="mb-2 bi bi-search"></i>
                        </span>
                        <input type="text" id="searchInput" class="form-control" placeholder="Search for...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card mb-3 border-0">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://images.unsplash.com/photo-1625111696958-792514071a8f?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    class="border border-1 p-1 img-fluid object-fit-cover h-100" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="d-flex gap-2 mb-0">
                                        <span class="badge text-white bg-warning h-50">Berita</span>
                                        <p class="text-secondary">Jumat, 20 Desember 2024</p>
                                    </div>
                                    <h5 class="card-title mb-0">Berita Jumat, 20 Desember 2024
                                        Serap Aspirasi, Anggota DPR RI Karmila.Sari Kunjungi Dispora Riau</h5>
                                    <p class="card-text">Dinas Kepemudaan dan Olahraga (Dispora) Provinsi Riau menerima
                                        kunjungan anggota DPR-RI periode 2024–2029....<a href="detail-berita"
                                            target="_blank"
                                            class="link-underline link-underline-opacity-0">selengkapnya</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card mb-3 border-0">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://images.unsplash.com/photo-1625111696958-792514071a8f?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    class="border border-1 p-1 img-fluid object-fit-cover h-100" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="d-flex gap-2 mb-0">
                                        <span class="badge text-white bg-primary h-50">Akademik</span>
                                        <p class="text-secondary">Jumat, 20 Desember 2024</p>
                                    </div>
                                    <h5 class="card-title mb-0">Berita Jumat, 20 Desember 2024
                                        Serap Aspirasi, Anggota DPR RI Karmila.Sari Kunjungi Dispora Riau</h5>
                                    <p class="card-text">Dinas Kepemudaan dan Olahraga (Dispora) Provinsi Riau menerima
                                        kunjungan anggota DPR-RI periode 2024–2029....<a href="detail-berita"
                                            target="_blank"
                                            class="link-underline link-underline-opacity-0">selengkapnya</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card mb-3 border-0">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://images.unsplash.com/photo-1625111696958-792514071a8f?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    class="border border-1 p-1 img-fluid object-fit-cover h-100" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="d-flex gap-2 mb-0">
                                        <span class="badge text-white bg-info h-50">Artikel</span>
                                        <p class="text-secondary">Jumat, 20 Desember 2024</p>
                                    </div>
                                    <h5 class="card-title mb-0">Berita Jumat, 20 Desember 2024
                                        Serap Aspirasi, Anggota DPR RI Karmila.Sari Kunjungi Dispora Riau</h5>
                                    <p class="card-text">Dinas Kepemudaan dan Olahraga (Dispora) Provinsi Riau menerima
                                        kunjungan anggota DPR-RI periode 2024–2029....<a href="detail-berita"
                                            target="_blank"
                                            class="link-underline link-underline-opacity-0">selengkapnya</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="d-flex flex-column justify-content-center mx-auto flex-md-row  justify-content-md-between mt-5">
                <div class="d-flex justify-content-center align-items-center">
                    Halaman dari
                    <div class="dropdown mx-1">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            2
                        </button>
                    </div>
                    dari 138
                </div>
                <!-- Pagination -->
                <ul class="pagination d-flex justify-content-center mt-3">
                    <li class="page-item"><a class="page-link" href="#" onclick="changePage(currentPage - 1)"
                            aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a></li>
                    <li class="page-item"><a class="page-link" href="#" onclick="changePage(1)">1</a></li>
                    <li class="page-item"><a class="page-link" href="#" onclick="changePage(2)">2</a></li>
                    <li class="page-item"><a class="page-link" href="#" onclick="changePage(3)">3</a></li>
                    <li class="page-item"><a class="page-link" href="#" onclick="changePage(currentPage + 1)"
                            aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a></li>
                </ul>
            </div>
        </div>
    </section>
    <x-footer></x-footer>
</x-layout-web>
