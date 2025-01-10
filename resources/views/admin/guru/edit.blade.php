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
                    <form action="{{ route('data-guru.update', $guru->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                value="{{ old('nama', $guru->nama) }}">
                        </div>

                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" id="nip" name="nip"
                                value="{{ old('nip', $guru->nip) }}">
                        </div>

                        <div class="form-group">
                            <label for="tag_uid">Tag UID</label>
                            <input type="text" class="form-control" id="tag_uid" name="tag_uid"
                                value="{{ old('tag_uid', $guru->tag_uid) }}">
                        </div>

                        <div class="form-group">
                            <label for="pelajaran_id">Pelajaran</label>
                            <select name="pelajaran_id" class="form-control">
                                @foreach ($pelajaran as $pelajaran_item)
                                    <option value="{{ $pelajaran_item->id }}"
                                        @if ($pelajaran_item->id == $guru->detailGuru->pelajaran_id) selected @endif>
                                        {{ $pelajaran_item->nama_pelajaran }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option value="L" @if ($guru->detailGuru->jenis_kelamin == 'L') selected @endif>Laki-laki
                                </option>
                                <option value="P" @if ($guru->detailGuru->jenis_kelamin == 'P') selected @endif>Perempuan
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik"
                                value="{{ old('nik', $guru->detailGuru->nik) }}">
                        </div>

                        <div class="form-group">
                            <label for="no_telf">No Telepon</label>
                            <input type="text" class="form-control" id="no_telf" name="no_telf"
                                value="{{ old('no_telf', $guru->detailGuru->no_telf) }}">
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat">{{ old('alamat', $guru->detailGuru->alamat) }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('data-guru.index') }}"" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
        <x-footer></x-footer>
    </div>
</x-layout-admin>
