<x-layout-web>
    <x-navbar></x-navbar>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <x-alert></x-alert>
                <div class="card border-0 mb-0">
                    <div class="card-header bg-success text-center">
                        <p class="text-white fs-4 mb-0">
                            Masuk ke Halaman Dashboard
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="mb-3 mt-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 mb-2">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout-web>
