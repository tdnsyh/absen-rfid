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
        <div class="tombol">
            <a href="{{ route('jam-absen.create') }}" class="btn btn-primary mb-3">Tambah Jam Absen</a>
        </div>
        @if ($jamAbsens->isEmpty())
            <div class="alert alert-warning" role="alert">
                Belum ada jam Absen.
            </div>
        @else
            <div class="page-content">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Jam Mulai</th>
                                    <th>Jam Selesai</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jamAbsens as $jamAbsen)
                                    <tr>
                                        <td>{{ $jamAbsen->id }}</td>
                                        <td>{{ $jamAbsen->nama }}</td>
                                        <td>{{ $jamAbsen->jam_mulai }}</td>
                                        <td>{{ $jamAbsen->jam_selesai }}</td>
                                        <td>
                                            <a href="{{ route('jam-absen.edit', $jamAbsen->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('jam-absen.destroy', $jamAbsen->id) }}"
                                                method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif
        <x-footer></x-footer>
    </div>
</x-layout-admin>
