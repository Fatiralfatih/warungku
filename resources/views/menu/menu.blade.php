<x-layout>
    <div class="content">

        <div class="main-content">

            <!-- Page Header -->
            <x-page-header name="Daftar Menu" link="{{ route('menu') }}" />
            <!-- Page Header Close -->
            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-5">
                <div class="col-span-12 xl:col-span-3">
                    <div class="box">
                        <div class="box-body">
                            <div class="relative">
                                <label for="hs-table-search" class="sr-only">Search</label>
                                <div
                                    class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center ltr:pr-4 rtl:pl-4">
                                    <svg class="h-3.5 w-3.5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                        </path>
                                    </svg>
                                </div>
                                <form action="{{ route('menu') }}" method="GET">
                                    <input type="text" name="search" id="hs-table-search"
                                        value="{{ request('search') }}" class="p-3 ltr:pr-10 rtl:pl-10 ti-form-input"
                                        placeholder="Search for items">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 xl:col-span-9">
                    <div class="box">
                        <div class="box-body">
                            <div class="">
                                <div class="hs-dropdown ti-dropdown">
                                    <button id="product-feature" type="button"
                                        class="hs-dropdown-toggle ti-dropdown-toggle">
                                        Pilih Menu
                                    </button>
                                </div>
                                @auth
                                    @if (Auth::user()->role == 'admin')
                                        <a href="add-product.html"
                                            class="ti-btn ti-btn-primary ltr:float-right rtl:float-left"><i
                                                class="ti ti-plus"></i>Add Prdouct</a>
                                    @endif
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-12">
                    <div class="grid grid-cols-12 gap-x-6">
                        @forelse ($menus as $menu)
                            <div class="col-span-12 md:col-span-6 xxl:col-span-4">
                                <div class="box product-box">
                                    <div class="box-body space-y-3">
                                        <div class="product-image">
                                            <a href="{{ route('menu.show', [$menu->nama]) }}" class="image">
                                                @if (!empty($menu->gambar->first()->gambar))
                                                    <img src="/storage/{{ $menu->gambar->first()->gambar }}"
                                                        class="mx-auto rounded-sm" alt="dada">
                                                @else
                                                    <img class="mx-auto rounded-sm"
                                                        src="{{ asset('assets/img/ecommerce/products/1.png') }}"
                                                        alt="gambar">
                                                @endif
                                            </a>
                                            <div class="product-icons">
                                                <a aria-label="anchor" href="wishlist.html"
                                                    class="z-40 absolute top-2 ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-none rounded-full text-gray-500 dark:text-white text-base"><i
                                                        class="ri ri-heart-line"></i></a>
                                                <a aria-label="anchor" href="{{ Route('menu.show', [$menu->nama]) }}"
                                                    class="z-40 absolute top-[5.5rem] ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-[0] rounded-full text-gray-500 dark:text-white text-base"><i
                                                        class="ri ri-eye-line leading-none"></i>
                                                </a>
                                                @if ($menu->status)
                                                    <form action="{{ route('keranjang.store', [$menu->id]) }}" method="POST">
                                                        @csrf
                                                        <button type="submit"
                                                            class="z-40 absolute top-12 ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-none rounded-full text-gray-500 dark:text-white text-base "><i
                                                                class="ri ri-shopping-cart-2-line"></i>
                                                        </button>
                                                    </form>
                                                @else
                                                    <a aria-label="anchor"
                                                        class="z-40 absolute top-12 ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-none rounded-full text-gray-500 dark:text-white text-base "><i
                                                            class="ti ti-garden-cart-off"></i>
                                                    </a>
                                                @endif
                                            </div>
                                            @if ($menu->status)
                                                <a href="{{ route('menu') }}?status={{ $menu->status }}"
                                                    class="z-40 absolute bottom-2 ltr:left-2 rtl:right-2 block bg-success p-1 leading-none rounded-sm text-white text-xs">Available</a>
                                            @else
                                                <a href="{{ route('menu') }}?status=out of stock"
                                                    class="z-40 absolute bottom-2 ltr:left-2 rtl:right-2 block bg-danger p-1 leading-none rounded-sm text-white text-xs">Out
                                                    Of Stock</a>
                                            @endif
                                        </div>
                                        <div class="product-details space-y-1">
                                            <h5 class="text-lg font-semibold">{{ $menu->nama }}</h5>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                                <div class="product-rating">
                                                    <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                    <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                    <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                    <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                    <i class="ri ri-star-fill text-gray-200 text-base"></i>
                                                </div>
                                                {{-- <p
                                                class=" my-auto text-gray-500 dark:text-white/70 text-sm space-x-2 rtl:space-x-reverse">
                                                4 (21,123 views)</p> --}}
                                            </div>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                                <h5 class="text-lg font-semibold">Rp
                                                    {{ number_format($menu->harga) }}
                                                </h5>
                                                {{-- <span
                                                class="my-auto line-through font-semibold text-base text-gray-500 dark:text-white/70">$999</span> --}}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @empty
                            <p class="text-red-500">Tidak Ada menu</p>
                        @endforelse


                    </div>

                    <nav class="flex justify-end items-center space-x-2 rtl:space-x-reverse mb-5">
                        {{ $menus->links() }}
                    </nav>
                </div>
            </div>

            <!-- End::row-1 -->
        </div>
    </div>
</x-layout>
