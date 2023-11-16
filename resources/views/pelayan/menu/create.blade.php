<x-layout>
    <div class="content">

        <!-- Start::main-content -->
        <div class="main-content">

            <!-- Page Header -->
            <x-page-header name="Tambah Menu" link="{{ route('pelayan.menu.create') }}" />
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-6">
                <div class="col-span-12">
                    <form action="{{ route('pelayan.menu.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- <input type="hidden" name="_method" value="PUT"> --}}
                        <div class="box !bg-transparent border-0 shadow-none">
                            <div class="box-body p-0">
                                <div class="grid grid-cols-12 gap-x-6">
                                    <div class="col-span-12 xl:col-span-9">
                                        <div class="box ">
                                            <div class="box-body">
                                                <div class="space-y-3">
                                                    <x-form.label for="nama" name="Nama Menu" />
                                                    <x-form.input name="nama" type="text"
                                                        placeholder="Masukkan nama menu" id="nama" />

                                                    <x-form.label for="harga" name="harga" />
                                                    <x-form.number id="harga" name="harga" type="number" />

                                                    <x-form.label for="deskripsi" name="deskripsi" />
                                                    <x-form.text-area id="deskripsi" name="deskripsi" placeholder="Masukkan deskripsi" rows="2" />
                                                    
                                                    <x-form.label for="stok" name="stok" />
                                                    <x-form.input name="stok" type="number"
                                                        placeholder="Masukkan stok" id="stok" />
                                                    <div>
                                                        <label class="ti-form-label">Gambar</label>
                                                        <input type="file" name="gambar[]" multiple>
                                                    </div>
                                                    <div class="grid grid-cols-12 gap-4">
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div class="space-y-2 product-1">
                                                                <label class="ti-form-label mb-0">Produk Status</label>
                                                                <select
                                                                    class="ti-form-select product-search @error('status') !border-danger focus:border-danger focus:ring-danger @enderror"
                                                                    name="status" required>
                                                                    <option value="1">Publish</option>
                                                                    <option value="0">Tidak Publish</option>
                                                                </select>

                                                                @error('status')
                                                                    <p class="text-sm text-red-600 font-semibold">
                                                                        {{ ucwords($message) }} </p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div class="space-y-2  product-1">
                                                                <label class="ti-form-label mb-0">Tipe</label>
                                                                <select class="ti-form-select product-search @error('tipe_id') !border-danger focus:border-danger focus:ring-danger @enderror"
                                                                    name="tipe_id" required>
                                                                    <option value="1">Makanan</option>
                                                                    <option value="2">Minuman</option>
                                                                </select>

                                                                @error('tipe_id')
                                                                    <p class="text-sm text-red-600 font-semibold">
                                                                        {{ ucwords($message) }} </p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-start text-end border-t-0 px-0">
                                <button type="submit" class="ti-btn ti-btn-secondary"><i
                                        class="ri-file-download-line"></i>Simpan Menu</button>
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
