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
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h4 class="card-title">Absensi hari ini</h4>
                        <h4 class="total">Total Guru : </h4>
                    </div>
                    <div class="row row-cols-2 row-cols-md-4">
                        <div class="col">
                            <div class="card text-white bg-success">
                                <div class="card-body">
                                    <h5 class="card-title">Hadir</h5>
                                    <p class="card-text">00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white bg-warning">
                                <div class="card-body">
                                    <h5 class="card-title">Izin</h5>
                                    <p class="card-text">00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white bg-info">
                                <div class="card-body">
                                    <h5 class="card-title">Sakit</h5>
                                    <p class="card-text">00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white bg-danger">
                                <div class="card-body">
                                    <h5 class="card-title">Absen</h5>
                                    <p class="card-text">00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table caption-top">
                            <caption>History</caption>
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col" class="text-nowrap">Pelajaran</th>
                                    <th scope="col">Masuk</th>
                                    <th scope="col">Pulang</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td class="text-nowrap">Matematika</td>
                                    <td>07:00</td>
                                    <td>16:00</td>
                                    <td><span class="badge text-bg-success">Hadir</span></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-info">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td class="text-nowrap">Bahasa Inggris</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><span class="badge text-bg-danger">Belum absen</span></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-info">Detail</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <a href="#" class="btn btn-info mb-3">Detail</a>
        </div>
        <x-footer></x-footer>
    </div>
</x-layout-admin>
