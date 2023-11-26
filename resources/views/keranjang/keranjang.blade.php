<x-layout>
    <div class="content">

        <!-- Start::main-content -->
        <div class="main-content">

            <!-- Page Header -->
            <x-page-header name="Keranjang" link="{{ route('keranjang') }}" />
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-6">
                <div class="col-span-12 xl:col-span-9">
                    <div class="box cart-full overflow-hidden">
                        <div class="box-body p-0">
                            <div class="overflow-auto">
                                <table class="ti-custom-table ti-custom-table-head">
                                    <thead class="">
                                        <tr>
                                            <th scope="col" class="!text-sm !p-4 !text-gray-800 dark:!text-white">
                                                Menu</th>
                                            <th scope="col" class="!text-sm !p-4 !text-gray-800 dark:!text-white">
                                                Kuantitas</th>
                                            <th scope="col" class="!text-sm !p-4 !text-gray-800 dark:!text-white">
                                                Harga</th>
                                            <th scope="col"
                                                class="!text-end !text-sm !p-4 !text-gray-800 dark:!text-white">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($keranjangs as $keranjang)
                                            <tr class="cart-box">
                                                <td class="flex">
                                                    <img class="avatar avatar-lg rounded-sm bg-gray-100 dark:bg-black/20 p-1"
                                                        src="/assets/img/ecommerce/products/1.png"
                                                        alt="Image Description">
                                                    <div class="ltr:ml-3 rtl:mr-3">
                                                        <input type="hidden" name="menu_id"
                                                            value="{{ $keranjang->menu_id }}">
                                                        <span
                                                            class="block text-sm font-semibold text-gray-800 dark:text-white max-w-[200px] truncate">Menu
                                                            :
                                                            {{ $keranjang->menu->nama }}</span>
                                                        <span
                                                            class="block text-sm text-gray-600 dark:text-white/70">Tipe
                                                            :
                                                            {{ $keranjang->menu->tipe->nama }} </span>
                                                        @if ($keranjang->menu->status)
                                                            <span
                                                                class="block text-sm text-gray-600 dark:text-white/70">Status
                                                                : in stock </span>
                                                        @else
                                                            <span
                                                                class="block text-sm text-gray-600 dark:text-white/70">Status
                                                                : Out Of Stock </span>
                                                        @endif
                                                    </div>
                                                </td>
                                                <td>
                                                    <form
                                                        action="{{ route('keranjang.update.kuantitas', $keranjang->id) }}" method="POST">
                                                        @csrf
                                                        <div class="flex rounded-sm">
                                                            <button aria-label="button"
                                                                type="submit"
                                                                class="product-quantity-minus inline-flex flex-shrink-0 justify-center items-center h-8 w-8 ltr:rounded-l-sm rtl:rounded-r-sm border border-transparent font-semibold ti-btn-soft-light transition-all text-sm">
                                                                <i class="ti ti-minus"></i>
                                                            </button>
                                                            <input type="text" name="kuantitas"
                                                                value="{{ old('kuantitas', $keranjang->kuantitas) }}"
                                                                class="product-quantity p-0 ti-form-input w-20 rounded-none focus:z-10 text-center"
                                                                >
                                                            <button aria-label="button" name="kuantitas-tambah"
                                                                type="submit"
                                                                class="product-quantity-plus inline-flex flex-shrink-0 justify-center items-center h-8 w-8 ltr:rounded-r-sm rtl:rounded-l-sm border border-transparent font-semibold ti-btn-soft-light transition-all text-sm">
                                                                <i class="ti ti-plus"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </td>
                                                <td>Rp.{{ number_format($keranjang->menu->harga) }}</td>
                                                <td class="text-end font-medium">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <form action="{{ route('keranjang.delete', [$keranjang->id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class=" hs-tooltip-toggle w-10 h-10 ti-btn rounded-full p-0 focus:outline-none ti-btn-soft-danger">
                                                                <i class="ti ti-trash"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700">
                                                                    Delete
                                                                </span>
                                                            </button>
                                                        </form>
                                                        {{-- <a href="{{ route('keranjang.delete', [$keranjang->id]) }}"
                                                                    class=" hs-tooltip-toggle w-10 h-10 ti-btn rounded-full p-0 focus:outline-none ti-btn-soft-danger">
                                                                    <i class="ti ti-trash"></i>
                                                                    <span
                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700">
                                                                        Delete
                                                                    </span>
                                                                </a> --}}
                                                    </div>
                                                </td>
                                            </tr>
                                    </tbody>
                                @empty
                                    @endforelse
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-span-12 xl:col-span-3">
                    <div class="box">
                        <div class="box-body">
                            <div class="relative">
                                <div class="flex rounded-sm space-x-3 rtl:space-x-reverse">
                                    <input type="text" class="p-2 ti-form-input" placeholder="Enter Coupon Number">
                                    <a href="javascript:void(0);"
                                        class="ltr:ml-3 rtl:mr-3 m-0 ti-btn p-2 ti-btn-primary">Apply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Menu Total</h5>
                        </div>
                        <div class="box-body p-0">
                            @if (count($keranjangs) >= 1)
                                <div class="overflow-auto">
                                    <table class="ti-custom-table ti-custom-table-head">
                                        <tbody>
                                            @foreach ($keranjangs as $keranjang)
                                                <tr>
                                                    <td>
                                                        <span
                                                            class="block text-sm font-medium text-gray-800 dark:text-white max-w-[100px] truncate">Menu
                                                            : {{ $keranjang->menu->nama }}</span>
                                                    </td>
                                                    <td class="font-medium">
                                                        <span
                                                            class="text-sm text-gray-600 dark:text-white/70">Rp.{{ number_format($keranjang->total_harga) }}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td>
                                                    <span class="text-sm text-gray-600 dark:text-white/70">Total
                                                        Semua</span>
                                                </td>

                                                <td class="font-medium">
                                                    <span class="text-sm text-gray-600 dark:text-white/70">Rp.
                                                        {{ number_format($total) }} </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <p class="flex justify-center items-center text-red-500">Tidak Ada Menu Dikeranjang</p>
                            @endif
                        </div>
                        <div class="box-footer">
                            @if (count($keranjangs) >= 1)
                                <form action="{{ route('pesanan.show') }}" method="GET">
                                    <button type="submit" class="w-full ti-btn p-2 ti-btn-primary">
                                        <i class="ti ti-arrow-right"></i>Check Out
                                    </button>
                                </form>
                            @endif
                            <a href="{{ route('menu') }}" class="ti-btn p-2 ti-btn-secondary w-full"><i
                                    class="ti ti-arrow-left rtl:rotate-180"></i>Lanjut Pilih Menu
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::row-1 -->


        </div>
        <!-- Start::main-content -->

    </div>
</x-layout>
