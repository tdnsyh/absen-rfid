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
                    <form action="{{ route('history.presensi') }}" method="GET" class="mb-3">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="tanggal">Tanggal:</label>
                                <input type="date" name="tanggal" id="tanggal" class="form-control"
                                    value="{{ request('tanggal') }}">
                            </div>

                            <div class="col-md-3">
                                <label for="guru_id">Nama Guru:</label>
                                <select name="guru_id" id="guru_id" class="form-control">
                                    <option value="">Pilih Guru</option>
                                    @foreach ($gurus as $guru)
                                        <option value="{{ $guru->id }}"
                                            {{ request('guru_id') == $guru->id ? 'selected' : '' }}>
                                            {{ $guru->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary mt-4">Filter</button>
                            </div>
                        </div>
                    </form>

                    <div class="table-responsive mt-3">
                        <button onclick="downloadExcel()" class="btn btn-outline-success mb-3">Download Excel</button>
                        <table class="table" id="presensiTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Guru</th>
                                    <th>Tanggal</th>
                                    <th>Jam Absen</th>
                                    <th>Jam Presensi</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($presensis as $presensi)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $presensi->guru->nama }}</td>
                                        <td>{{ $presensi->tanggal->format('d-m-Y') }}</td>
                                        <td>{{ $presensi->jamAbsen->nama }}</td>
                                        <td>{{ $presensi->jam_presensi->format('H:i:s') }}</td>
                                        <td>{{ $presensi->keterangan }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $presensis->links() }}
                </div>
            </div>
        </div>
        <x-footer></x-footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>
    <script>
        function downloadExcel() {
            var table = document.getElementById("presensiTable");
            var wb = XLSX.utils.table_to_book(table, {
                sheet: "Sheet 1"
            });
            XLSX.writeFile(wb, "Presensi_Data.xlsx");
        }
    </script>
</x-layout-admin>
