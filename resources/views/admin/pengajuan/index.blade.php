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
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Guru</th>
                                    <th>Jenis Pengajuan</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pengajuans as $pengajuan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pengajuan->guru->nama }}</td>
                                        <td>{{ $pengajuan->jenis_pengajuan }}</td>
                                        <td>{{ $pengajuan->keterangan }}</td>
                                        <td>{{ $pengajuan->status ?? 'Pending' }}</td>
                                        <td>
                                            @if ($pengajuan->status == 'pending')
                                                <form
                                                    action="{{ route('pengajuan.updateStatus', ['id' => $pengajuan->id, 'status' => 'approved']) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    <button type="submit"
                                                        class="btn btn-success btn-sm">Setujui</button>
                                                </form>
                                                <form
                                                    action="{{ route('pengajuan.updateStatus', ['id' => $pengajuan->id, 'status' => 'rejected']) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm">Tolak</button>
                                                </form>
                                            @else
                                                <span
                                                    class="badge {{ $pengajuan->status == 'approved' ? 'bg-success' : 'bg-danger' }}">
                                                    {{ ucfirst($pengajuan->status) }}
                                                </span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Belum ada data pengajuan.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <a href="{{ route('data-pengajuan.history') }}" class="btn btn-primary">History</a>
                </div>
            </div>
        </div>
        <x-footer></x-footer>
    </div>
</x-layout-admin>
