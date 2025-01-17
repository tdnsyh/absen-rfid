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
            <h3>{{ $title }}</h3>
        </div>
        <div class="page-content">
            <div class="row row-cols-2 row-cols-md-4 g-3">
                <div class="col">
                    <div class="card text-white bg-primary mb-0 h-100">
                        <div class="card-body">
                            <h3 class="text-white">Guru</h3>
                            <h5 class="card-title">{{ $guruCount }}</h5>
                            <p class="card-text">Data jumlah guru yang terdaftar.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-success mb-0 h-100">
                        <div class="card-body">
                            <h3 class="text-white">Presensi</h3>
                            <h5 class="card-title">{{ $hadirCount }}</h5>
                            <p class="card-text">Guru yang presensi hari ini.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-warning mb-0 h-100">
                        <div class="card-body">
                            <h3 class="text-white">Jam</h3>
                            <h5 class="card-title">{{ $jamAbsenCount }}</h5>
                            <p class="card-text">Data jumlah jam absensi yang terdaftar.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-info mb-0 h-100">
                        <div class="card-body">
                            <h3 class="text-white">Artikel</h3>
                            <h5 class="card-title">{{ $artikelCount }}</h5>
                            <p class="card-text">Jumlah artikel yang telah dipublikasikan.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-3">3 Presensi Terakhir</h4>
                            @if ($lastPresensi->isEmpty())
                                <p>Tidak ada data presensi yang tersedia.</p>
                            @else
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Guru</th>
                                            <th>Jam Absen</th>
                                            <th>Tanggal</th>
                                            <th>Jam Presensi</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lastPresensi as $presensi)
                                            <tr>
                                                <td>{{ $presensi->guru->nama }}</td>
                                                <td>{{ $presensi->jamAbsen->nama }}</td>
                                                <td>{{ $presensi->tanggal->format('d-m-Y') }}</td>
                                                <td>{{ $presensi->jam_presensi->format('H:i:s') }}</td>
                                                <td>{{ $presensi->keterangan }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout-admin>
