<x-layout-web>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar></x-navbar>
    {{-- kontak kami --}}
    <div class="container mt-5">
        @if (session('success'))
            <div id="flashAlert" class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }} <!-- Mengambil session('success') -->
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h3 class="mb-3">Kirim pengajuan Cuti/Sakit</h3>
        <form action="{{ route('pengajuan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nip" class="form-label">Cari Guru Berdasarkan NIP</label>
                <div class="input-group">
                    <input type="text" id="nip" class="form-control" placeholder="Masukkan NIP">
                    <button type="button" id="btnCari" class="btn btn-primary">Cari</button>
                </div>
                <input type="hidden" name="guru_id" id="guru_id">
                <div id="guru-info" class="mt-2"></div>
            </div>
            <div class="mb-3">
                <label for="jenis_pengajuan" class="form-label">Jenis Pengajuan</label>
                <select name="jenis_pengajuan" id="jenis_pengajuan" class="form-control" required>
                    <option value="Izin">Izin</option>
                    <option value="Sakit">Sakit</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea name="keterangan" id="keterangan" class="form-control" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="dokumen_pendukung" class="form-label">Dokumen Pendukung</label>
                <input type="file" name="dokumen_pendukung" id="dokumen_pendukung" class="form-control"
                    accept=".pdf,.jpg,.png">
            </div>
            <button type="submit" class="btn btn-success mb-5">Submit</button>
        </form>
    </div>
    <x-web-footer></x-web-footer>
    <script>
        document.getElementById('btnCari').addEventListener('click', function() {
            const nip = document.getElementById('nip').value;

            fetch('{{ route('pengajuan.searchGuru') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({
                        nip
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        document.getElementById('guru-info').innerHTML =
                            `<div class="alert alert-danger">${data.error}</div>`;
                        document.getElementById('guru_id').value = '';
                    } else {
                        document.getElementById('guru-info').innerHTML =
                            `<div class="alert alert-success">Guru: ${data.nama}</div>`;
                        document.getElementById('guru_id').value = data.id;
                    }
                })
                .catch(error => {
                    console.error(error);
                    document.getElementById('guru-info').innerHTML =
                        `<div class="alert alert-danger">Terjadi kesalahan.</div>`;
                });
        });
    </script>
</x-layout-web>
