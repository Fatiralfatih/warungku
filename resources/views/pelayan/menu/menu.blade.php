<x-layout>
    <div class="content">

        <!-- Start::main-content -->
        <div class="main-content">
            <!-- Page Header -->
            <x-page-header name="Daftar Menu" link="{{ route('pelayan.menu') }}" />
            <!-- Page Header Close -->
            <!-- Start::row-1 -->
            <div class="box">
                <div class="box-header sm:flex sm:justify-between space-y-3 sm:space-y-0">
                    <h5 class="box-title my-auto">Products List</h5>
                    <a href="{{ route('pelayan.menu.create') }}" class="ti-btn ti-btn-primary m-0 py-2"><i
                            class="ri ri-add-line"></i>Add
                        Product</a>
                </div>
                <div class="box-body">
                    <div class="table-bordered whitespace-nowrap rounded-sm overflow-auto">
                        <div class="table-bordered rounded-sm ti-custom-table-head">
                            <div class="py-2 px-3">
                                <div class="relative max-w-xs">
                                    <label for="search" class="sr-only">Search</label>
                                    <form action="{{ route('pelayan.menu') }}" method="GET">
                                        <input type="text" name="search" id="search"
                                            class="p-3 ltr:pl-10 rtl:pr-10 ti-form-input"
                                            placeholder="Search for items">
                                    </form>
                                    <div
                                        class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center pointer-events-none ltr:pl-4 rtl:pr-4">
                                        <svg class="h-3.5 w-3.5 text-gray-400 dark:text-white/70"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <table class="ti-custom-table ti-custom-table-head edit-table">
                                <thead class="bg-gray-100 dark:bg-black/20">
                                    <tr>
                                        <th scope="col" class="dark:text-white/70">Id</th>
                                        <th scope="col" class="dark:text-white/70">Nama Menu</th>
                                        <th scope="col" class="dark:text-white/70">Harga</th>
                                        <th scope="col" class="dark:text-white/70 flex justify-center items-center">
                                            Status</th>
                                        <th scope="col" class="dark:text-white/70">Stok</th>
                                        <th scope="col" class="dark:text-white/70">Tipe</th>
                                        <th scope="col" class="dark:text-white/70">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($menus as $menu)
                                        <tr class="product-list">
                                            <td class="flex font-semibold">{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="flex space-x-3 rtl:space-x-reverse">
                                                    <span
                                                        class="inline-block text-sm font-semibold text-gray-800 dark:text-white my-auto truncate lg:max-w-[200px]">
                                                        {{ $menu->nama }}</span>
                                                </div>
                                            </td>
                                            <td>Rp.{{ number_format($menu->harga) }}</td>
                                            <td class="flex justify-center items-center">
                                                @if ($menu->status)
                                                    <p class="badge bg-success/20 text-success">Avaible</p>
                                                @else
                                                    <p class="badge bg-danger/20 text-danger">Out Of Stock</p>
                                                @endif
                                            </td>
                                            <td>{{ $menu->stok }}</td>
                                            <td>{{ $menu->tipe->nama }}</td>
                                            <td class="flex jusitfy-center font-medium">
                                                <a aria-label="anchor"
                                                    href="{{ Route('pelayan.menu.edit', [$menu->id]) }}"
                                                    class="w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                    <i class="ti ti-pencil"></i>
                                                </a>

                                                <button aria-label="anchor" type="button"
                                                    data-hs-overlay="#hapus-menu{{ $menu->id }}"
                                                    class="product-btn w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                    <i class="ti ti-trash"></i>
                                                </button>
                                                {{-- </form> --}}
                                            </td>
                                        </tr>
                                        <div id="hapus-menu{{ $menu->id }}" class="hs-overlay hidden ti-modal">
                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                                                <div class="ti-modal-content">
                                                    <div class="ti-modal-header">
                                                        <h3 class="ti-modal-title">
                                                            Hapus Menu
                                                        </h3>
                                                        <button type="button"
                                                            class="hs-dropdown-toggle ti-modal-close-btn"
                                                            data-hs-overlay="#hapus-menu{{ $menu->id }}">
                                                            <span class="sr-only">Close</span>
                                                            <svg class="w-3.5 h-3.5" width="8" height="8"
                                                                viewBox="0 0 8 8" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('pelayan.menu.delete', [$menu->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <div class="ti-modal-body">
                                                            <p class="mt-1 text-gray-800 dark:text-white/70">
                                                                Yakin mau hapus? <br> Menu : {{ $menu->nama }}
                                                            </p>
                                                        </div>
                                                        <div class="ti-modal-footer">
                                                            <button type="button"
                                                                class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                data-hs-overlay="#hapus-menu{{ $menu->id }}">
                                                                Close
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
                                        <p class="text-red-500"> Tidak ada Menu </p>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <nav class="flex justify-end items-center space-x-2 rtl:space-x-reverse mt-5">
                            {{ $menus->links() }}
                        </nav>
                    </div>
                </div>
                <!-- End::row-1 -->

            </div>
            <!-- Start::main-content -->

        </div>
    </div>
</x-layout>
