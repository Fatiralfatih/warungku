<x-layout>
    <div class="content">

        <!-- Start::main-content -->
        <div class="main-content">

            <!-- Page Header -->
            <div class="block justify-between page-header md:flex mb-3">
                @if (Session()->has('success'))
                    <div class="fixed p-6 py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
                        <div id="dismiss-alert"
                            class="hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 bg-teal-50 border border-teal-200 alert mb-0"
                            role="alert">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-4 w-4 text-teal-400 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                </div>
                                <div class="ltr:ml-3 rtl:mr-3">
                                    <div class="text-sm text-teal-800 font-medium">
                                        {{ Session()->get('success') }}
                                    </div>
                                </div>
                                <div class="ltr:pl-3 rtl:pr-3 ltr:ml-auto rtl:mr-auto">
                                    <div class="mx-1 my-auto">
                                        <button type="button"
                                            class="inline-flex bg-teal-50 rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-teal-50 focus:ring-teal-600"
                                            data-hs-remove-element="#dismiss-alert">
                                            <span class="sr-only">Dismiss</span>
                                            <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path
                                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div>
                    <h3
                        class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">
                        Gallery {{ $menu->nama }}</h3>
                </div>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12">
                    <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Galeri</h5>
                        </div>
                        <div class="box-body space-y-8">
                            <div class="sm:grid grid-cols-12 gap-2 sm:space-y-0 space-y-6">
                                @foreach ($menu->gambar as $data)
                                    <div class="col-span-12 lg:col-span-3">
                                        <div class="inner">
                                            <img src="{{ asset('storage/' . $data->gambar) }}" alt="image"
                                                class="w-full">

                                            <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary"
                                                data-hs-overlay="#edit-gambar{{ $data->id }}">
                                                edit Gambar
                                            </button>
                                            <button class="px-3 py-2 bg-red-500 text-white"
                                                data-hs-overlay="#hapus-gambar{{ $data->id }}">Hapus Gambar</button>
                                        </div>
                                    </div>
                                    {{-- Modal Update Gambar --}}
                                    <div id="edit-gambar{{ $data->id }}" class="hs-overlay hidden ti-modal">
                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                                            <div class="ti-modal-content">
                                                <div class="ti-modal-header">
                                                    <h3 class="ti-modal-title">
                                                        Edit Gambar
                                                    </h3>
                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                        data-hs-overlay="#edit-gambar{{ $data->id }}">
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
                                                <form action="{{ route('pelayan.update.gambar', [$data->id]) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="ti-modal-body">
                                                        <p class="mt-1 text-gray-800 dark:text-white/70">
                                                            Silahkan Upload Gambar
                                                        </p>
                                                        <div class="mt-3">
                                                            <input type="file" name="gambar"
                                                                class="filepond multiple-filepond">
                                                        </div>
                                                    </div>
                                                    <div class="ti-modal-footer">
                                                        <button type="button"
                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                            data-hs-overlay="#edit-gambar{{ $data->id }}">
                                                            Close
                                                        </button>
                                                        <button type="submit" class="ti-btn ti-btn-primary">
                                                            Edit Gambar
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- End Modal --}}
                                    {{-- Modal Hapus Gambar --}}
                                    <div id="hapus-gambar{{ $data->id }}" class="hs-overlay hidden ti-modal">
                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                                            <div class="ti-modal-content">
                                                <div class="ti-modal-header">
                                                    <h3 class="ti-modal-title">
                                                        hapus Gambar
                                                    </h3>
                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                        data-hs-overlay="#edit-gambar{{ $data->id }}">
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
                                                <form action="{{ route('pelayan.delete.gambar', [$data->id]) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('delete')
                                                    <div class="ti-modal-body">
                                                        <p class="mt-1 text-lg text-gray-800 dark:text-white/70">
                                                            Yakin mau Gambar Ini??
                                                        </p>
                                                            <input type="hidden" name="oldGambar[]" value="{{ $data->gambar }}">
                                                    </div>
                                                    <div class="ti-modal-footer">
                                                        <button type="button"
                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                            data-hs-overlay="#edit-gambar{{ $menu->id }}">
                                                            Close
                                                        </button>
                                                        <button type="submit" class="ti-btn ti-btn-danger">
                                                            Delete
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- End Modal --}}
                                @endforeach
                            </div>

                            <div>
                                <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary"
                                    data-hs-overlay="#tambah-gambar{{ $menu->id }}">
                                    Tambah Gambar
                                </button>
                                <a href="{{ route('pelayan.menu.edit', [$menu->id]) }}"
                                    class="px-5 py-3 bg-gray-500 text-white">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::row-1 -->
        </div>
        <!-- Start::main-content -->

    </div>
    {{-- Modal Tambah Gambar --}}
    <div id="tambah-gambar{{ $menu->id }}" class="hs-overlay hidden ti-modal">
        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
            <div class="ti-modal-content">
                <div class="ti-modal-header">
                    <h3 class="ti-modal-title">
                        Edit Gambar
                    </h3>
                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                        data-hs-overlay="#tambah-gambar{{ $menu->id }}">
                        <span class="sr-only">Close</span>
                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                fill="currentColor" />
                        </svg>
                    </button>
                </div>
                <form action="{{ route('pelayan.tambah.gambar', [$menu->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="ti-modal-body">
                        <p class="mt-1 text-gray-800 dark:text-white/70">
                            Silahkan Upload Gambar
                        </p>
                        <div class="mt-3">
                            <input type="file" name="gambar[]" class="filepond multiple-filepond" multiple>
                            <p class="text-red-500">minimal 2 gambar</p>
                        </div>
                    </div>
                    <div class="ti-modal-footer">
                        <button type="button"
                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                            data-hs-overlay="#tambah-gambar{{ $menu->id }}">
                            Close
                        </button>
                        <button type="submit" class="ti-btn ti-btn-primary">
                            Edit Gambar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- End Modal --}}


</x-layout>
