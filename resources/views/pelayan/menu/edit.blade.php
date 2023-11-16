<x-layout>
    <div class="content">

        <!-- Start::main-content -->
        <div class="main-content">

            <x-page-header name="Edit Menu" link="{{ route('pelayan.menu.edit', [$menu->id]) }}" />
            @if ($errors->any())
                <div class="p-4 text-red bg-red-500 text-white">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-6">
                <div class="col-span-12">
                    <form action="{{ route('pelayan.menu.update', [$menu->id]) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        {{-- <input type="hidden" name="_method" value="PUT"> --}}
                        <div class="box !bg-transparent border-0 shadow-none">
                            <div class="box-body p-0">
                                <div class="grid grid-cols-12 gap-x-6">
                                    <div class="col-span-6 xl:col-span-3">
                                        <div class="box">
                                            <div class="box-header space-y-4">
                                                <a href="{{route('pelayan.edit.gambar', [$menu->id])}}"
                                                    class="hs-dropdown-toggle w-full bg-blue-500 p-3 text-white rounded-md"
                                                    >
                                                    Edit Gambar
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 xl:col-span-8">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="space-y-3" id="profile-1" role="tabpanel"
                                                    aria-labelledby="profile-item-1">
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Nama Menu</label>
                                                        <input type="text" name="nama"
                                                            class="my-auto ti-form-input"
                                                            value="{{ old('nama', $menu->nama) }}"
                                                            placeholder="Masukkan Nama Menu">
                                                    </div>
                                                    <div>
                                                        <label for="hs-input-with-leading-and-trailing-icon"
                                                            class="ti-form-label">Harga</label>
                                                        <div class="relative">
                                                            <input type="text"
                                                                id="hs-input-with-leading-and-trailing-icon"
                                                                name="harga"
                                                                class="ti-form-input ltr:pl-9 ltr:pr-16 rtl:pr-9 rtl:pl-16 focus:z-10"
                                                                value="{{ old('harga', $menu->harga) }}">
                                                            <div
                                                                class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center pointer-events-none z-20 ltr:pl-4 rtl:pr-4">
                                                                <span class="text-gray-500 dark:text-white/70">$</span>
                                                            </div>
                                                            <div
                                                                class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center pointer-events-none z-20 ltr:pr-4 rtl:pl-4">
                                                                <span class="text-gray-500 dark:text-white/70">Rp</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label">Deskripsi</label>
                                                        <textarea class="ti-form-input" name="deskripsi" rows="2">{{ old('deskripsi', $menu->deskripsi) }}</textarea>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label">Stok</label>
                                                        <input type="number" class="ti-form-input" name="stok"
                                                            value="{{ old('stok', $menu->stok) }}">
                                                    </div>

                                                    <div class="grid grid-cols-12 gap-4">
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div class="space-y-2 product-1">
                                                                <label class="ti-form-label mb-0">Produk Status</label>
                                                                <select class="ti-form-select product-search"
                                                                    name="status">
                                                                    <option selected value="1">
                                                                        {{ $menu->status == 1 ? 'Publish' : 'Tidak Publish' }}
                                                                    </option>
                                                                    <option value="1">Publish</option>
                                                                    <option value="0">Tidak Publish</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div class="space-y-2  product-1">
                                                                <label class="ti-form-label mb-0">Tipe</label>
                                                                <select class="ti-form-select product-search"
                                                                    name="tipe_id">

                                                                    <option selected
                                                                        value="{{ old('tipe_id', $menu->tipe_id) }}">
                                                                        {{ $menu->tipe->nama }}</option>
                                                                    <option value="1">Makanan</option>
                                                                    <option value="2">Minuman</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex justify-start text-end border-t-0 px-0">
                                                        <button type="submit" class="ti-btn ti-btn-secondary"><i
                                                                class="ri-file-download-line"></i>Save Product</button>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End::row-1 -->

        </div>
        <!-- Start::main-content -->

    </div>
</x-layout>
