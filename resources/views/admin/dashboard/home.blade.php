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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nemo officia possimus deserunt odit
                debitis sed aliquam assumenda molestias minima nisi numquam sint ducimus et, quasi qui pariatur
                delectus. Doloremque.</p>
        </div>
    </div>
</x-layout-admin>
