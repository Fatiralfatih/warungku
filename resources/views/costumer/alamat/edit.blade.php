<x-layout>
    <div class="content">

        <!-- Start::main-content -->
        <div class="main-content">

            <!-- Page Header -->
            <x-page-header name="edit alamat" link="{{ route('pesanan.edit.alamat', [$alamat->id]) }}" />
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-6">
                <div class="col-span-12">
                    <form action="{{ route('pesanan.update.alamat', ['alamat' => $alamat->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        {{-- <input type="hidden" name="_method" value="PUT"> --}}
                        <div class="box !bg-transparent border-0 shadow-none">
                            <div class="box-body p-0">
                                <div class="grid grid-cols-12 gap-x-6">
                                    <div class="col-span-12 xl:col-span-9">
                                        <div class="box ">
                                            <div class="box-body">
                                                <div class="space-y-3">
                                                    <x-form.label for="nama" name="nama" />
                                                    <x-form.input name="nama" type="text"
                                                        placeholder="Masukkan nama menu" id="nama"
                                                        :value="$alamat->nama" />

                                                    <x-form.label for="no_hp" name="No Hp" />
                                                    <x-form.input name="no_hp" type="number"
                                                        placeholder="Masukkan No hp " id="no_hp"
                                                        :value="$alamat->no_hp" />

                                                    <x-form.label for="alamat_lengkap" name="Alamat Lengkap" />
                                                    <x-form.input name="alamat_lengkap" type="text"
                                                        placeholder="Masukkan Alamat lengkap" id="alamat_lengkap"
                                                        :value="$alamat->alamat_lengkap" />

                                                    <x-form.label for="kota" name="Kota" />
                                                    <x-form.input name="kota" type="text"
                                                        placeholder="Masukkan kota" id="kota" :value="$alamat->kota" />

                                                    <x-form.label for="provinsi" name="provinsi" />
                                                    <x-form.input name="provinsi" type="text"
                                                        placeholder="Masukkan provinsi" id="provinsi"
                                                        :value="$alamat->provinsi" />

                                                    <x-form.label for="kode_pos" name="kode pos" />
                                                    <x-form.input name="kode_pos" type="number"
                                                        placeholder="Masukkan kode pos" id="kode_pos"
                                                        :value="$alamat->kode_pos" />

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-start text-end border-t-0 px-0">
                                    <a href="{{ route('pesanan.show') }}"
                                        class="ti-btn bg-gray-500 text-white hover:bg-gray-600 focus:ring-gray-500 dark:bg-black/20 dark:hover:bg-black/30 dark:focus:ring-offset-white/10"><i
                                            class="ri-file-download-line"></i>Kembali</a>
                                <button type="submit" class="ti-btn ti-btn-secondary"><i
                                        class="ri-file-download-line"></i>Update Alamat</button>
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
