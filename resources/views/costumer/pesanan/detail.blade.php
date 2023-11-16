<x-layout>
    <div class="content">

        <!-- Start::main-content -->
        <div class="main-content">

            <!-- Page Header -->
            <x-page-header name="Pesanan Detail" link="" />
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-6 gap-y-2 max-w-7xl mx-auto">
                @foreach ($pesanans as $pesanan)
                    @foreach ($pesanan->menu as $menu)
                        <div class="col-span-12 lg:col-span-6">
                            <div class="box">
                                <div class="box-header">
                                    <div class="flex justify-between">
                                        <div class="">
                                            <span class="text-sm font-semibold">Order Id</span>
                                            <span
                                                class="block text-xs text-gray-500 dark:text-white/70">#{{ $pesanan->id }}
                                            </span>
                                        </div>
                                        <div class="">
                                            <span class="fs-14 font-semibold">Tanggal Pesan </span>
                                            <span
                                                class="block text-xs text-gray-500 dark:text-white/70">{{ $pesanan->created_at }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="space-y-3">
                                        <div class="sm:flex space-x-3 rtl:space-x-reverse">
                                            <img src="../assets/img/ecommerce/products/1.png" alt="product"
                                                class="avatar w-24 h-24 rounded-sm bg-gray-100 dark:bg-black/20 p-2">
                                            <div class="flex justify-between w-full">
                                                <div class="product-details space-y-1">
                                                    <h5 class="text-lg font-semibold">{{ $menu->nama }}</h5>
                                                    <p class="font-medium text-sm">Alamat : <span
                                                            class="text-gray-500 dark:text-white/70 text-sm">
                                                            {{ $pesanan->alamat->alamat_lengkap }}</span>
                                                            <span><i class="ri-smartphone-line"></i>
                                                                {{ $pesanan->alamat->no_hp }}</span>
                                                    </p>
                                                    <p class="font-medium text-sm">Kuantitas : <span
                                                            class="text-gray-500 dark:text-white/70 text-xs font-normal">
                                                            {{ $menu->pivot->kuantitas }}</span>
                                                    </p>
                                                    <p class="font-medium text-sm">Uang Kamu : <span
                                                            class="text-gray-500 dark:text-white/70 text-xs font-normal">
                                                            Rp.{{ number_format($pesanan->uang_costumer) }}</span>
                                                    </p>
                                                    <p class="font-medium text-sm">Kembalian : <span
                                                            class="text-gray-500 dark:text-white/70 text-xs font-normal">
                                                            Rp.{{ number_format($pesanan->kembalian) }}</span>
                                                    </p>
                                                    @if ($menu->pivot->status == 'ordered')
                                                        <div><span class="font-medium text-sm ltr:mr-2 rtl:ml-2">Status
                                                            </span><a class="text-info hover:underline"
                                                                href="order-details.html">Ordered</a></div>
                                                    @elseif($menu->pivot->status == 'canceled')
                                                        <div><span class="font-medium text-sm ltr:mr-2 rtl:ml-2">Status
                                                            </span><a class="text-red-500 hover:underline"
                                                                href="order-details.html">Canceled</a></div>
                                                    @elseif($menu->pivot->status == 'delivered')
                                                        <div><span class="font-medium text-sm ltr:mr-2 rtl:ml-2">Status
                                                            </span><a class="text-green-500 hover:underline"
                                                                href="order-details.html">Delivered</a></div>
                                                    @endif

                                                </div>
                                                <div class="flex space-x-2 rtl:space-x-reverse">
                                                    <h5
                                                        class="text-base font-semibold text-gray-500 dark:text-white/70">
                                                        Rp.{{ number_format($menu->harga * $menu->pivot->kuantitas) }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    @if ($menu->pivot->status == 'ordered')
                                        <a href="{{ route('pesanan.cancel', [$pesanan->id]) }}" class="ti-btn m-0 py-2 px-3 ti-btn-primary">
                                            Cancel Order
                                        </a>
                                        <a href="{{ route('menu') }}"
                                            class="ltr:float-right rtl:float-left ti-btn m-0 py-2 px-3 ti-btn bg-gray-500 text-white hover:bg-gray-600 focus:ring-gray-500 dark:bg-black/20 dark:hover:bg-black/30 dark:focus:ring-offset-white/10">
                                            Lanjut Pilih Menu
                                        </a>
                                    @elseif ($menu->pivot->status == 'canceled' || $menu->pivot->status == 'delivered')
                                        <a href="{{ route('menu') }}"
                                            class="ltr:float-right rtl:float-left ti-btn m-0 py-2 px-3 ti-btn-primary">
                                            Lanjut Pilih Menu
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
            <!-- End::row-1 -->
            <nav class="flex justify-center mx-auto space-x-2 rtl:space-x-reverse mb-5">
                {{ $pesanans->links() }}
            </nav>
        </div>
        <!-- Start::main-content -->

    </div>
</x-layout>
