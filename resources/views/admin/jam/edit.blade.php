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
                    <form action="{{ route('jam-absen.update', $jamAbsen->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nama">Nama Jam Absen</label>
                            <input type="text" name="nama" id="nama" class="form-control"
                                value="{{ old('nama', $jamAbsen->nama) }}" required>
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="jam_mulai">Jam Mulai</label>
                            <input type="text" name="jam_mulai" id="jam_mulai" class="form-control"
                                value="{{ old('jam_mulai', $jamAbsen->jam_mulai) }}" required>
                            @error('jam_mulai')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="jam_selesai">Jam Selesai</label>
                            <input type="text" name="jam_selesai" id="jam_selesai" class="form-control"
                                value="{{ old('jam_selesai', $jamAbsen->jam_selesai) }}" required>
                            @error('jam_selesai')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('jam-absen.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
        <x-footer></x-footer>
    </div>
</x-layout-admin>
