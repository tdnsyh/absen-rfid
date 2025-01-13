<x-layout-web>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar></x-navbar>
    <section id="berita" class="berita pb-5">
        <div class="container bg-white p-5 shadow-sm">
            <!-- Search input with icon -->
            <div class="row">
                <div class="col-12">
                    <div class="card border-0">
                        <div class="ratio ratio-21x9">
                            <img src="https://images.unsplash.com/photo-1625111696958-792514071a8f?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="object-fit-fill card-img-top" alt="...">
                        </div>
                        <h2 class="mb-0">Judul</h2>
                        <span class="text-black" style="font-size: 14px">berita</span>
                        <p class="mb-1" style="font-size: 12px">Jumat, 20 Desember 2024</p>
                        <div class="card-body">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus sapiente explicabo quidem
                                ea nostrum. Id veritatis accusamus perferendis tenetur modi vel sit molestias dolores
                                voluptate, sed ducimus fuga architecto eos!</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias est ipsum,
                                perspiciatis modi autem incidunt cupiditate dolore rerum! Unde totam vero accusamus
                                dicta dolorum eum vitae pariatur nam in consequatur, nesciunt rerum recusandae error
                                iste ratione repellat autem nihil deserunt vel adipisci corrupti quam. Perferendis
                                assumenda voluptatum aspernatur? Quod, totam!</p>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>
    <x-footer></x-footer>
</x-layout-web>
