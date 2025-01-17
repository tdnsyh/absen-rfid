<x-layout-web>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar></x-navbar>
    {{-- kontak kami --}}
    <div class="container mt-5 mb-5">
        <div class="h3 pb-2 mb-4 fw-semibold text-secodary border-2 border-bottom border-secondary">
            Kontak kami melalui
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card border-0 bg-tertiary">
                    <div class="card-body">
                        <div class="row d-flex align-items-center g-4">
                            <div class="col-2">
                                <h1 class="bg-primary fw-bold text-white p-3 rounded d-inline-block"
                                    style="width: 70px; height: 70px; ">
                                    <i class="bi bi-telephone-inbound"></i>
                                </h1>
                            </div>
                            <div class="col-10">
                                <div class="ms-3">
                                    <h4 class="mb-1">Telepon</h4>
                                    <h4 class="text-dark mb-0">081394086140</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 bg-tertiary">
                    <div class="card-body">
                        <div class="row d-flex align-items-center g-4">
                            <div class="col-2">
                                <h1 class="bg-primary fw-bold text-white p-3 rounded d-inline-block"
                                    style="width: 70px; height: 70px; ">
                                    <i class="bi bi-envelope"></i>
                                </h1>
                            </div>
                            <div class="col-10">
                                <div class="ms-3">
                                    <h4 class="mb-1">Email</h4>
                                    <h4 class="text-dark mb-0">darusshoba@gmail.com</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 bg-tertiary">
                    <div class="card-body">
                        <div class="row d-flex align-items-center g-4">
                            <div class="col-2">
                                <h1 class="bg-primary fw-bold text-white p-3 rounded d-inline-block"
                                    style="width: 70px; height: 70px; ">
                                    <i class="bi bi-globe-asia-australia"></i>
                                </h1>
                            </div>
                            <div class="col-10">
                                <div class="ms-3">
                                    <h4 class="mb-1">Website</h4>
                                    <h4 class="text-dark mb-0">smkniko.sch</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="h3 pb-2 mb-4 fw-semibold text-secodary border-2 border-bottom border-secondary mt-5">
            Atau
        </div>
        <div class="row g-4">
            <div class="col-12 col-md-4 order-1 order-md-2">
                <img src="assets/img/contact.png" alt="" class="img-fluid object-fit-cover rounded">
            </div>
            <div class="col-12 col-md-8 order-1 order-md-2">
                <div class="order-2 order-md-1">
                    <div class="card border-0 bg-tertiary">
                        <div class="card-body">
                            <form class="p-3">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="firstName" class="form-label">Nama Depan</label>
                                        <input type="text" class="form-control" id="firstName"
                                            placeholder="Masukkan nama depan Anda">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastName" class="form-label">Nama Belakang</label>
                                        <input type="text" class="form-control" id="lastName"
                                            placeholder="Masukkan nama belakang Anda">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="emailAddress" class="form-label">Alamat Email</label>
                                    <input type="email" class="form-control" id="emailAddress"
                                        placeholder="Masukkan alamat email Anda">
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subjek</label>
                                    <input type="text" class="form-control" id="subject"
                                        placeholder="Masukkan subjek pesan Anda">
                                </div>
                                <div class="mb-3">
                                    <label for="aboutYou" class="form-label">Isi</label>
                                    <textarea class="form-control" id="aboutYou" rows="4" placeholder="Ceritakan sesuatu tentang diri Anda"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .form-control {
            border: none;
            border-bottom: 1px solid #ccc;
            border-radius: 0;
            box-shadow: none;
        }

        .form-control:focus {
            border-bottom: 2px solid #007bff;
            outline: none;
            box-shadow: none;
        }
    </style>
    <x-web-footer></x-web-footer>
</x-layout-web>
