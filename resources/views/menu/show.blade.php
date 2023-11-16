<x-layout>
    <div class="content">

        <!-- Start::main-content -->
        <div class="main-content">
            <!-- Page Header -->
            <x-page-header :name="'menu ' . $menu->nama" link="{{ route('menu.show', $menu->nama) }}" />
            <!-- Page Header Close -->
            <!-- Start::row-1 -->
            <div class="box">
                <div class="grid grid-cols-12">
                    <div class="col-span-12 xxl:col-span-5">
                        <div class="box mb-0 border-0 shadow-none bg-transparent">
                            <div class="box-body">
                                <div class="swiper mySwiper2">
                                    <div class="swiper-wrapper">
                                        @foreach ($menu->gambar as $data)
                                            <div class="swiper-slide">
                                                <img class="mx-auto rounded-sm" alt="gambar{{ $data->gambar }}"
                                                    src="{{ asset('storage/' . $data->gambar) }}">
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        {{-- @foreach ($menu->gambar as $data)
                                            <div class="swiper-slide">
                                                <img alt="product-image-1"
                                                    src="{{ asset('storage/' . $data->latest()->gambar) }}">
                                            </div>
                                        @endforeach --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-span-12 xxl:col-span-4">
                        <div class="box mb-0 border-0 shadow-none bg-transparent">
                            <form action="{{ route('keranjang.store', [$menu->id]) }}" method="POST">
                                @csrf
                                <div class="box-body xxl:px-0">
                                    <div class="space-y-5">
                                        <h5 class="font-bold text-xl text-gray-800 dark:text-white">{{ $menu->nama }}
                                        </h5>
                                        <div class="space-y-4">
                                            <h5 class="font-bold text-sm my-auto w-28 text-gray-800 dark:text-white">
                                                Description :</h5>
                                            <p class="my-auto font-medium text-sm text-gray-500 dark:text-white/70">
                                                {{ $menu->deskripsi }}</p>
                                        </div>
                                        <div class="sm:flex sm:space-x-5">
                                            <h5 class="font-bold text-sm my-auto w-28 text-gray-800 dark:text-white">
                                                Status
                                                :</h5>
                                            @if ($menu->status)
                                                <span class="my-auto font-medium text-sm text-success">Available In
                                                    {{ $menu->stok }} Stock</span>
                                            @else
                                                <span class="my-auto font-medium text-sm text-danger">Out Of
                                                    Stock</span>
                                            @endif
                                        </div>
                                        <div class="sm:flex sm:space-x-2">
                                            <h5 class="font-bold text-sm my-auto w-28 text-gray-800 dark:text-white">
                                                Price :
                                            </h5>
                                            <h5 class="text-xl font-semibold text-primary">Rp
                                                {{ number_format($menu->harga) }}</h5>
                                            {{-- <span
                                            class="my-auto line-through text-base text-gray-500 dark:text-white/70 font-semibold">$2999</span> --}}
                                        </div>
                                        <div class="sm:flex sm:space-x-2">
                                            <h5
                                                class="font-normal text-gray-500 dark:text-white/70 text-sm my-auto w-28">
                                                Jumlah :</h5>
                                            <div class="flex rounded-sm">
                                                <button aria-label="button" type="button" id="product-quantity-minus"
                                                    class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 ltr:rounded-l-sm rtl:rounded-r-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-5 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm">
                                                    <i class="ti ti-minus"></i>
                                                </button>
                                                <input type="number" id="product-quantity" name="kuantitas"
                                                    value="1"
                                                    class="p-0 ti-form-input w-12 rounded-none focus:z-10 text-center">
                                                <button aria-label="button" type="button" id="product-quantity-plus"
                                                    class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8  ltr:rounded-r-sm rtl:rounded-l-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm">
                                                    <i class="ti ti-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="wishlist.html" class="ti-btn ti-btn-ghost-primary"><i
                                                class="ri-heart-2-line"></i>Add To
                                            Favourites</a>
                                        <div class="sm:flex sm:space-x-3 product-des">
                                            <h5 class="font-bold text-sm my-auto w-28 text-gray-800 dark:text-white">
                                                Share
                                                :</h5>
                                            <div class="flex space-x-1 rtl:space-x-reverse">
                                                <button aria-label="button" type="button"
                                                    class="m-0 rounded-sm p-2 ti-btn ti-btn-outline ring-white/10 text-gray-500 dark:text-white/70 bg-white/10  border-gray-200 dark:border-white/10">
                                                    <i class="ri ri-github-line text-lg leading-none"></i>
                                                </button>
                                                <button aria-label="button" type="button"
                                                    class="m-0 rounded-sm p-2 ti-btn ti-btn-outline ring-white/10 text-gray-500 dark:text-white/70 bg-white/10  border-gray-200 dark:border-white/10">
                                                    <i class="ri ri-instagram-line text-lg leading-none"></i>
                                                </button>
                                                <button aria-label="button" type="button"
                                                    class="m-0 rounded-sm p-2 ti-btn ti-btn-outline ring-white/10 text-gray-500 dark:text-white/70 bg-white/10  border-gray-200 dark:border-white/10">
                                                    <i class="ri ri-twitter-line text-lg leading-none"></i>
                                                </button>
                                                <button aria-label="button" type="button"
                                                    class="m-0 rounded-sm p-2 ti-btn ti-btn-outline ring-white/10 text-gray-500 dark:text-white/70 bg-white/10  border-gray-200 dark:border-white/10">
                                                    <i class="ri ri-linkedin-line text-lg leading-none"></i>
                                                </button>
                                                <button aria-label="button" type="button"
                                                    class="m-0 rounded-sm p-2 ti-btn ti-btn-outline ring-white/10 text-gray-500 dark:text-white/70 bg-white/10  border-gray-200 dark:border-white/10">
                                                    <i class="ri ri-facebook-circle-line text-lg leading-none"></i>
                                                </button>
                                            </div>
                                        </div>
                                        @auth
                                            @if ($menu->status)
                                                <div>
                                                    <button type="submit"
                                                        class="w-full ti-btn ti-btn-primary">Tambah Keranjang</button>
                                                    {{-- <a href="{{ route('pesanan.show') }}"
                                                        class="w-full ti-btn ti-btn-outline ti-btn-outline-primary">Beli
                                                        Sekarang</a> --}}
                                                </div>
                                            @else
                                                <p class="flex text-lg font-medium justify-center text-red-500">Out Of Stock
                                                </p>
                                            @endif
                                        @else
                                            <p class="flex justify-center items-center text-red-500 text-lg font-semibold">
                                                harus
                                                login</p>
                                            <a href="{{ route('login') }}" class="font-underline">Login? klik</a>
                                        @endauth
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::row-1 -->

        </div>
        <!-- Start::main-content -->

    </div>
</x-layout>
