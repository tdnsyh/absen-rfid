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
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Nama</th>
                                <td>{{ $guru->nama }}</td>
                            </tr>
                            <tr>
                                <th>NIP</th>
                                <td>{{ $guru->nip }}</td>
                            </tr>
                            <tr>
                                <th>Tag UID</th>
                                <td>{{ $guru->tag_uid }}</td>
                            </tr>
                            <tr>
                                <th>Pelajaran</th>
                                <td>{{ $guru->detailGuru->pelajaran->nama_pelajaran ?? 'Tidak ada pelajaran' }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>{{ $guru->detailGuru->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                            </tr>
                            <tr>
                                <th>NIK</th>
                                <td>{{ $guru->detailGuru->nik }}</td>
                            </tr>
                            <tr>
                                <th>No Telepon</th>
                                <td>{{ $guru->detailGuru->no_telf }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{ $guru->detailGuru->alamat }}</td>
                            </tr>
                        </table>
                    </div>
                    <a href="{{ route('data-guru.index') }}" class="btn btn-secondary mb-3">Kembali ke Daftar Guru</a>
                </div>
            </div>
        </div>
        <x-footer></x-footer>
    </div>
</x-layout-admin>
