<x-layout-web>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar></x-navbar>
    {{-- kontak kami --}}
    <div class="container py-5">
        <div class="card mt-3 border-0 bg-secondary-subtle">
            <div class="card-body">
                <div class="row row-cols-1 row-cols-md-2 g-4 d-flex align-items-center">
                    <div class="col">
                        <img src="https://digitalgopi.com/wp-content/uploads/2021/01/lets-connect.png" alt=""
                            class="img-fluid">
                    </div>
                    <div class="col">
                        <div class="card border-0 bg-info-subtle p-3">
                            <div class="card-body">
                                <h3 class="fw-bold">Informasi Kontak</h3>
                                <p class="card-text">
                                    Jika Anda memiliki pertanyaan atau membutuhkan informasi lebih lanjut, jangan ragu
                                    untuk menghubungi kami melalui:
                                </p>
                                <p class="card-text">
                                    <i class="bi bi-telephone-fill me-2"></i> Telepon: (+62) 812-3456-7890
                                </p>
                                <p class="card-text">
                                    <i class="bi bi-globe2 me-2"></i> Website: www.namaperusahaan.com
                                </p>
                                <p class="card-text">
                                    <i class="bi bi-house-door-fill me-2"></i> Alamat: Jl. Contoh No. 123, Jakarta,
                                    Indonesia
                                </p>
                                <p class="card-text">
                                    Kami siap membantu Anda!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-layout-web>
