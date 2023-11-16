<x-layout>
    <div class="content">

        <!-- Start::main-content -->
        <div class="main-content">

            <!-- Page Header -->
            <x-page-header name="Check Out" link="" />
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-6">
                <div class="col-span-12 xxl:col-span-9">
                    <form action="{{ route('pesanan.checkout') }}" method="POST">
                        @csrf
                        <div class="box shadow-none border-0 !bg-transparent">
                            <div class="box-body space-y-2 p-0">
                                <div class="sm:flex justify-between space-y-2 sm:space-y-0">
                                    <h3 class="text-xl my-auto font-semibold text-gray-800 dark:text-white">Alamat
                                    </h3>
                                    <button type="button" data-hs-overlay="#tambah-alamat"
                                        class="hs-dropdown-toggle ti-btn ti-btn-primary m-0"><i
                                            class="ri-map-pin-add-line"></i>Tambah Alamat</button>
                                </div>
                                <div class="sm:grid grid-cols-12 gap-6 space-y-4 sm:space-y-0">
                                    @forelse ($alamats as $alamat)
                                        <div class="col-span-12 lg:col-span-6">
                                            <label
                                                class="flex p-3 w-full bg-white border border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70">
                                                <input type="radio" name="alamat_id" class="ti-form-radio"
                                                    value="{{ $alamat->id }}" checked>
                                                <span
                                                    class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 w-full">
                                                    <span class="sm:flex">
                                                        <span>
                                                            <span class="text-base font-semibold text-primary block">
                                                                Alamat
                                                                {{ $loop->iteration }}</span>
                                                            <span> {{ $alamat->nama }} ,{{ $alamat->alamat_lengkap }},
                                                                {{ $alamat->kota }},
                                                                {{ $alamat->provinsi }}.,{{ $alamat->kode_pos }}
                                                            </span>
                                                            <span><i class="ri-smartphone-line"></i>
                                                                {{ $alamat->no_hp }}</span>
                                                        </span>
                                                        <span class="ltr:ml-auto rtl:mr-auto my-auto flex">
                                                            <a aria-label="anchor"
                                                                href="{{ route('pesanan.edit.alamat', [$alamat->id]) }}"
                                                                class="ti-btn text-xs font-medium rounded-sm transition-none focus:outline-none ti-btn-soft-secondary">
                                                                <i class="ti ti-pencil"></i>
                                                            </a>
                                                            <button type="button"
                                                                data-hs-overlay="#hapus-alamat{{ $alamat->id }}"
                                                                class="ti-btn text-xs font-medium rounded-sm transition-none focus:outline-none ti-btn-soft-danger">
                                                                <i class="ti ti-trash"></i>
                                                            </button>
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                    @empty
                                        <p>tidak ada alamat</p>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 space-y-3">
                            <x-form.label for="uang_costumer" name="Masukkan Uang kamu dadada" />
                            <x-form.number id="uang_costumer" name="uang_costumer" type="number" />
                            <input type="hidden" name="total_harga" value="{{ $total }}">
                        </div>
                        <div class="flex justify-between mb-6">
                            <a href="{{ route('keranjang') }}" class="ti-btn ti-btn-secondary m-0"><i
                                    class="ri-arrow-left-line"></i> Back to cart</a>
                            <button type="submit" class="ti-btn ti-btn-primary hs-dropdown-toggle m-0">Place Order<i
                                    class="ri-arrow-right-line"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-span-12 xxl:col-span-3">
                    <div class="box">
                        <div class="box-header">
                            <h5 class="box-titile">Pesanan Menu</h5>
                        </div>
                        <div class="box-body px-0 space-y-5">
                            @forelse ($keranjangs as $keranjang)
                                <div
                                    class="flex flex-row justify-between border-b pb-5 px-6 border-gray-200 dark:border-white/10">
                                    <div class="flex items-center">
                                        <img class="inline-block flex-shrink-0 h-[3.875rem] w-[3.875rem] rounded-sm p-2 border dark:border-white/10 bg-gray-100 dark:bg-black/20"
                                            src="/assets/img/ecommerce/products/1.png" alt="Image Description">
                                        <div class="ltr:ml-4 rtl:mr-4 space-y-1">
                                            <h5 class="font-semibold text-gray-800 dark:text-white">
                                                {{ $keranjang->menu->nama }} </h5>
                                            <p class="text-xs tetext-gray-400 dark:text-white/70">Kuantitas :
                                                {{ $keranjang->kuantitas }} </p>
                                            <div class="">
                                                <span class="font-semibold text-base">Rp.
                                                    {{ number_format($keranjang->total_harga) }} </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <button type="button" data-hs-overlay="#keranjang_hapus{{ $keranjang->id }}"
                                            class="ti-btn text-xs font-medium rounded-sm p-1 transition-none focus:outline-none ti-btn-soft-danger">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                <div id="keranjang_hapus{{ $keranjang->id }}" class="hs-overlay ti-modal hidden">
                                    <div
                                        class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out flex items-center !max-w-2sm">
                                        <div class="ti-modal-content w-full">
                                            <div class="ti-modal-header">
                                                <h3 class="ti-modal-title">
                                                    Yakin Mau Hapus keranjang {{ $keranjang->menu->nama }}
                                                </h3>
                                                <button type="button" class="hs-dropdown-toggle ti-modal-clode-btn"
                                                    data-hs-overlay="#keranjang_hapus{{ $keranjang->id }}">
                                                    <span class="sr-only">Close</span>
                                                    <svg class="w-3.5 h-3.5" width="8" height="8"
                                                        viewBox="0 0 8 8" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <form action="{{ route('keranjang.delete', [$keranjang->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="flex ti-modal-body justify-end">
                                                    <button type="button"
                                                        class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                        data-hs-overlay="#keranjang_hapus{{ $keranjang->id }}">
                                                        Batal
                                                    </button>
                                                    <button type="submit" class="ti-btn ti-btn-danger">
                                                        Hapus
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <h4>Keranjang kosong<a href="{{ route('menu') }}">pesan lagi?</a></h4>
                            @endforelse
                            <ul class="flex flex-col px-6">
                                <li
                                    class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                    <div class="flex justify-between w-full">
                                        Total Items
                                        <span class=""> {{ $keranjangs->count() }} </span>
                                    </div>
                                </li>
                                <li
                                    class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                    <div class="flex justify-between w-full text-xl font-semibold">
                                        Total
                                        <span class="">{{ number_format($total) }}</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::row-1 -->

            <!-- Start::Modal -->
            <div id="tambah-alamat" class="hs-overlay ti-modal hidden">
                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out flex items-center !max-w-2xl">
                    <div class="ti-modal-content w-full">
                        <div class="ti-modal-header">
                            <h3 class="ti-modal-title">
                                Tambah Alamat
                            </h3>
                            <button type="button" class="hs-dropdown-toggle ti-modal-clode-btn"
                                data-hs-overlay="#tambah-alamat">
                                <span class="sr-only">Close</span>
                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                        fill="currentColor"></path>
                                </svg>
                            </button>
                        </div>
                        <form action="{{ route('pesanan.tambah.alamat') }}" method="POST">
                            @csrf
                            <div class="ti-modal-body">
                                <div class="grid lg:grid-cols-2 gap-6">
                                    <div class="space-y-2">
                                        <x-form.label name="nama" for="nama" />
                                        <x-form.input name="nama" id="nama" type="text"
                                            placeholder="Masukkan Nama" />
                                    </div>
                                    <div class="space-y-2">
                                        <x-form.label name="no hp" for="no_hp" />
                                        <x-form.input name="no_hp" id="no_hp" type="number"
                                            placeholder="Masukkan No Hp" />
                                    </div>
                                    <div class="space-y-2">
                                        <x-form.label name="alamat lengkap" for="alamat_lengkap" />
                                        <x-form.input name="alamat_lengkap" id="alamat_lengkap" type="text"
                                            placeholder="Masukkan alamat lengkap" />
                                    </div>
                                    <div class="space-y-2">
                                        <x-form.label name="kota" for="kota" />
                                        <x-form.input name="kota" id="kota" type="text"
                                            placeholder="Masukkan kota" />
                                    </div>
                                    <div class="space-y-2">
                                        <x-form.label name="provinsi" for="provinsi" />
                                        <x-form.input name="provinsi" id="provinsi" type="text"
                                            placeholder="Masukkan provinsi" />
                                    </div>
                                    <div class="space-y-2">
                                        <x-form.label name="kode pos" for="kode pos" />
                                        <x-form.input name="kode_pos" id="kode pos" type="number"
                                            placeholder="Masukkan kode pos" />
                                    </div>
                                </div>
                            </div>
                            <div class="ti-modal-footer">
                                <button type="button"
                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                    data-hs-overlay="#tambah-alamat">
                                    Batal
                                </button>
                                <button type="submit" class="ti-btn ti-btn-primary" href="javascript:void(0);">
                                    Tambah Alamat
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @if ($alamats->count() > 1)
                <div id="hapus-alamat{{ $alamat->id }}" class="hs-overlay ti-modal hidden">
                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out flex items-center !max-w-2sm">
                        <div class="ti-modal-content w-full">
                            <div class="ti-modal-header">
                                <h3 class="ti-modal-title">
                                    Yakin Mau Hapus alamat ini?
                                </h3>
                                <button type="button" class="hs-dropdown-toggle ti-modal-clode-btn"
                                    data-hs-overlay="#hapus-alamat{{ $alamat->id }}">
                                    <span class="sr-only">Close</span>
                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </button>
                            </div>
                            <form action="{{ route('pesanan.delete.alamat', [$alamat]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="flex ti-modal-body justify-end">
                                    <button type="button"
                                        class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                        data-hs-overlay="#hapus-alamat{{ $alamat->id }}">
                                        Batal
                                    </button>
                                    <button type="submit" class="ti-btn ti-btn-danger">
                                        Hapus Alamat
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endif

        </div>
        <!-- End::Modal -->


    </div>
    <!-- Start::main-content -->

    </div>
</x-layout>
