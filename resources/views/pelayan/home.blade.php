<x-layout>
    <div class="content">

        <!-- Start::main-content -->
        <div class="main-content">

            <!-- Page Header -->
            <x-page-header name="dsahboard pelayan" link="" />
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-5">
                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                    <div class="box">
                        <div class="box-body">
                            <div class="flex">
                                <div class="ltr:mr-3 rtl:ml-3">
                                    <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20 "><i
                                            class="ti ti-users text-2xl leading-none"></i></div>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm">Total Costumer</p>
                                    <div class="flex justify-between items-center">
                                        <h5 class="mb-0 text-2xl font-semibold text-gray-800 dark:text-white">
                                            {{ $costumer }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                    <div class="box">
                        <div class="box-body">
                            <div class="flex">
                                <span class="rounded-sm p-4 bg-primary/10">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-white svg1" height="24px"
                                        viewBox="0 0 24 24" width="24px" fill="#000000">
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path
                                            d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                    </svg>
                                </span>
                                <div class="flex-1">
                                    <p class="text-sm">Total Pesanan</p>
                                    <div class="flex justify-between items-center">
                                        <h5 class="mb-0 text-2xl font-semibold text-gray-800 dark:text-white">
                                            {{ $pesanan }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::row-1 -->
        </div>
    </div>
</x-layout>
