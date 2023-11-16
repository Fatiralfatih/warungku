<x-layout>
  <div class="content">
  
    <!-- Start::main-content -->
    <div class="main-content">
  
      <!-- Page Header -->
      <div class="block justify-between page-header md:flex">
          <div>
              <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> HRM Dashboard</h3>
          </div>
          <ol class="flex items-center whitespace-nowrap min-w-0">
              <li class="text-sm">
                <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                  Home
                  <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                </a>
              </li>
              <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                  HRM Dashboard
              </li>
          </ol>
      </div>
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
                  <p class="text-sm">Total Employees</p>
                  <div class="flex justify-between items-center">
                    <h5 class="mb-0 text-2xl font-semibold text-gray-800 dark:text-white">1,238</h5>
                    <span class="text-success badge bg-success/20 rounded-sm p-1"><i
                        class="ti ti-trending-up leading-none"></i> +1.03%</span>
                  </div>
                  <span class="text-xs text-gray-500 dark:text-white/70">This Month</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-span-12 md:col-span-6 xxl:col-span-3">
          <div class="box">
            <div class="box-body">
              <div class="flex">
                <div class="ltr:mr-3 rtl:ml-3">
                  <div class="avatar rounded-sm text-secondary p-2.5 bg-secondary/20 "><i
                      class="ti ti-users-minus text-2xl leading-none"></i></div>
                </div>
                <div class="flex-1">
                  <p class="text-sm">Employees In Leave</p>
                  <div class="flex justify-between items-center">
                    <h5 class="mb-0 text-2xl font-semibold text-gray-800 dark:text-white">116</h5>
                    <span class="text-success badge bg-success/20 rounded-sm p-1"><i
                        class="ti ti-trending-up leading-none"></i> +0.36%</span>
                  </div>
                  <span class=" text-gray-500 dark:text-white/70 text-xs">This Month</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-span-12 md:col-span-6 xxl:col-span-3">
          <div class="box">
            <div class="box-body">
              <div class="flex">
                <div class="ltr:mr-3 rtl:ml-3">
                  <div class="avatar rounded-sm text-warning p-2.5 bg-warning/20 "><i
                      class="ti ti-briefcase text-2xl leading-none"></i></div>
                </div>
                <div class="flex-1">
                  <p class="text-sm">Total Clients</p>
                  <div class="flex justify-between items-center">
                    <h5 class="mb-0 text-2xl font-semibold text-gray-800 dark:text-white">2,159</h5>
                    <span class="text-danger badge bg-danger/20 rounded-sm p-1"><i
                        class="ti ti-trending-down leading-none"></i> -1.28%</span>
                  </div>
                  <span class=" text-gray-500 dark:text-white/70 text-xs">This Month</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-span-12 md:col-span-6 xxl:col-span-3">
          <div class="box">
            <div class="box-body">
              <div class="flex">
                <div class="ltr:mr-3 rtl:ml-3">
                  <div class="avatar rounded-sm text-success p-2.5 bg-success/20 "><i
                      class="ti ti-chart-bar text-2xl leading-none"></i></div>
                </div>
                <div class="flex-1">
                  <p class="text-sm">New Leads</p>
                  <div class="flex justify-between items-center">
                    <h5 class="mb-0 text-2xl font-semibold text-gray-800 dark:text-white">773</h5>
                    <span class="text-success badge bg-success/20 rounded-sm p-1"><i
                        class="ti ti-trending-down leading-none"></i>+4.25%</span>
                  </div>
                  <span class=" text-gray-500 dark:text-white/70 text-xs">This Month</span>
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