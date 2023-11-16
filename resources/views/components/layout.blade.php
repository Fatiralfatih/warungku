<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light"
    data-menu-styles="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> fatir </title>
    <meta name="description"
        content="A Tailwind CSS admin template is a pre-designed web page for an admin dashboard. Optimizing it for SEO includes using meta descriptions and ensuring it's responsive and fast-loading.">
    <meta name="keywords"
        content="analytics dashboard,jobs dashboard,crm dashboard examples,personal dashboard,sales dashboard sample,best crm dashboard,crypto dashboard template,sales analytics dashboard,stocks dashboard,hrm dashboard,ecommerce admin panel template,sales admin dashboard,admin panel for ecommerce website,website template ecommerce,template dashboard,course dashboard,template ecommerce website">
    <!-- Favicon -->
    {{-- <link rel="shortcut icon" href="/assets/img/brand-logos/favicon.ico"> --}}

    <!-- Main JS -->
    <script src="{{ url('/') }}/assets/js/main.js"></script>

    <!-- Style Css -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css">

    <!-- Simplebar Css -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/libs/simplebar/simplebar.min.css">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/libs/@simonwep/pickr/themes/nano.min.css">

    <!-- Vector Map Css-->
    <link rel="stylesheet" href="{{ url('/') }}/assets/libs/jsvectormap/css/jsvectormap.min.css">

    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/libs/swiper/swiper-bundle.min.css">

    <!-- Choices Css -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/libs/choices.js/public/assets/styles/choices.min.css">

    <!-- Dropzone File Upload  Css -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/libs/dropzone/dropzone.css">

    <!-- Flatpickr Css -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/libs/flatpickr/flatpickr.min.css">
</head>

<body class="">

    <!-- ========== Switcher  ========== -->
    <div id="hs-overlay-switcher" class="hs-overlay hidden ti-offcanvas ti-offcanvas-right" tabindex="-1">
        <div class="ti-offcanvas-header z-10 relative">
            <h3 class="ti-offcanvas-title">
                Switcher
            </h3>
            <button type="button"
                class="ti-btn flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white dark:text-white/70 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                data-hs-overlay="#hs-overlay-switcher">
                <span class="sr-only">Close modal</span>
                <i class="ri-close-circle-line leading-none text-lg"></i>
            </button>
        </div>
        <div class="ti-offcanvas-body pt-0 border-b dark:border-white/10 z-10 relative">
            <div class="flex space-x-2 rtl:space-x-reverse" aria-label="Tabs" role="tablist">
                <button type="button"
                    class="hs-tab-active:bg-secondary/10 w-full hs-tab-active:border-b-transparent hs-tab-active:text-secondary dark:hs-tab-active:bg-black/20 dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-secondary -mb-px py-2 px-3 bg-white text-xs font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-bgdark dark:border-white/10 dark:text-white/70 active"
                    id="switcher-item-1" data-hs-tab="#switcher-1" aria-controls="switcher-1" role="tab">
                    Theme Style
                </button>
                <button type="button"
                    class="hs-tab-active:bg-secondary/10 w-full hs-tab-active:border-b-transparent hs-tab-active:text-secondary dark:hs-tab-active:bg-black/20 dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-secondary -mb-px py-2 px-3 bg-white text-xs font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300"
                    id="switcher-item-2" data-hs-tab="#switcher-2" aria-controls="switcher-2" role="tab">
                    Theme Colors
                </button>
            </div>
        </div>
        <div class="ti-offcanvas-body" id="switcher-body">
            <div id="switcher-1" role="tabpanel" aria-labelledby="switcher-item-1" class="space-y-6">
                <div class="space-y-6">
                    <p class="switcher-style-head">Theme Color Mode:</p>
                    <div class="grid grid-cols-3 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="theme-style" class="ti-form-radio" id="switcher-light-theme"
                                checked>
                            <label for="switcher-light-theme"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Light</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="theme-style" class="ti-form-radio" id="switcher-dark-theme">
                            <label for="switcher-dark-theme"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Dark</label>
                        </div>
                    </div>
                </div>
                <div class="space-y-6">
                    <p class="switcher-style-head">Directions:</p>
                    <div class="grid grid-cols-3 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="direction" class="ti-form-radio" id="switcher-ltr" checked>
                            <label for="switcher-ltr"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">LTR</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="direction" class="ti-form-radio" id="switcher-rtl">
                            <label for="switcher-rtl"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">RTL</label>
                        </div>
                    </div>
                </div>
                <div class="space-y-6">
                    <p class="switcher-style-head">Navigation Styles:</p>
                    <div class="grid grid-cols-3 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="navigation-style" class="ti-form-radio"
                                id="switcher-vertical" checked>
                            <label for="switcher-vertical"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Vertical</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="navigation-style" class="ti-form-radio"
                                id="switcher-horizontal">
                            <label for="switcher-horizontal"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Horizontal</label>
                        </div>
                    </div>
                </div>
                <div class="space-y-6">
                    <p class="switcher-style-head">Navigation Menu Style:</p>
                    <div class="grid grid-cols-2 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio"
                                id="switcher-menu-click" checked>
                            <label for="switcher-menu-click"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Menu
                                Click</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio"
                                id="switcher-menu-hover">
                            <label for="switcher-menu-hover"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Menu
                                Hover</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio"
                                id="switcher-icon-click">
                            <label for="switcher-icon-click"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Icon
                                Click</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio"
                                id="switcher-icon-hover">
                            <label for="switcher-icon-hover"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Icon
                                Hover</label>
                        </div>
                    </div>
                    <div class="px-4 text-secondary text-xs"><b class="lt:mr-2 rtl:ml-2">Note:</b>Works same for both
                        Vertical and
                        Horizontal
                    </div>
                </div>
                <div class="space-y-6">
                    <p class="switcher-style-head">Page Styles:</p>
                    <div class="grid grid-cols-3 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="data-page-styles" class="ti-form-radio"
                                id="switcher-regular" checked>
                            <label for="switcher-regular"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Regular</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="data-page-styles" class="ti-form-radio"
                                id="switcher-classic">
                            <label for="switcher-classic"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Classic</label>
                        </div>
                    </div>
                </div>
                <div class="space-y-6">
                    <p class="switcher-style-head">Layout Width Styles:</p>
                    <div class="grid grid-cols-3 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="layout-width" class="ti-form-radio" id="switcher-full-width"
                                checked>
                            <label for="switcher-full-width"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">FullWidth</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="layout-width" class="ti-form-radio" id="switcher-boxed">
                            <label for="switcher-boxed"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Boxed</label>
                        </div>
                    </div>
                </div>
                <div class="space-y-6">
                    <p class="switcher-style-head">Menu Positions:</p>
                    <div class="grid grid-cols-3 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="data-menu-positions" class="ti-form-radio"
                                id="switcher-menu-fixed" checked>
                            <label for="switcher-menu-fixed"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Fixed</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="data-menu-positions" class="ti-form-radio"
                                id="switcher-menu-scroll">
                            <label for="switcher-menu-scroll"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Scrollable </label>
                        </div>
                    </div>
                </div>
                <div class="space-y-6">
                    <p class="switcher-style-head">Header Positions:</p>
                    <div class="grid grid-cols-3 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="data-header-positions" class="ti-form-radio"
                                id="switcher-header-fixed" checked>
                            o <label for="switcher-header-fixed"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">
                                Fixed</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="data-header-positions" class="ti-form-radio"
                                id="switcher-header-scroll">
                            <label for="switcher-header-scroll"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Scrollable
                            </label>
                        </div>
                    </div>
                </div>
                <div class="space-y-6 sidemenu-layout-styles">
                    <p class="switcher-style-head">Sidemenu Layout Syles:</p>
                    <div class="grid grid-cols-2 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-default-menu" checked>
                            <label for="switcher-default-menu"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 ">Default
                                Menu</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-closed-menu">
                            <label for="switcher-closed-menu"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 ">
                                Closed
                                Menu</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-icontext-menu">
                            <label for="switcher-icontext-menu"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 ">Icon
                                Text</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-icon-overlay">
                            <label for="switcher-icon-overlay"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 ">Icon
                                Overlay</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-detached">
                            <label for="switcher-detached"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 ">Detached</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-double-menu">
                            <label for="switcher-double-menu"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Double
                                Menu</label>
                        </div>
                    </div>
                    <div class="px-4 text-secondary text-xs"><b class="ltr:mr-2 rtl:ml-2">Note:</b>Navigation menu
                        styles won't work
                        here.</div>
                </div>
            </div>
            <div id="switcher-2" class="hidden space-y-6" role="tabpanel" aria-labelledby="switcher-item-2">
                <div class="theme-colors">
                    <p class="switcher-style-head">Menu Colors:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-white" type="radio"
                                name="menu-colors" id="switcher-menu-light" checked>
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                role="tooltip">
                                Light Menu
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-dark" type="radio"
                                name="menu-colors" id="switcher-menu-dark" checked>
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                role="tooltip">
                                Dark Menu
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-primary" type="radio"
                                name="menu-colors" id="switcher-menu-primary">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                role="tooltip">
                                Color Menu
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-gradient" type="radio"
                                name="menu-colors" id="switcher-menu-gradient">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                role="tooltip">
                                Gradient Menu
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-transparent"
                                type="radio" name="menu-colors" id="switcher-menu-transparent">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                role="tooltip">
                                Transparent Menu
                            </span>
                        </div>
                    </div>
                    <div class="px-4 text-secondary text-xs"><b class="ltr:mr-2 rtl:ml-2">Note:</b>If you want to
                        change color Menu
                        dynamically
                        change from below Theme Primary color picker.</div>
                </div>
                <div class="theme-colors">
                    <p class="switcher-style-head">Header Colors:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-white" type="radio"
                                name="header-colors" id="switcher-header-light" checked>
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                role="tooltip">
                                Light Header
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-dark" type="radio"
                                name="header-colors" id="switcher-header-dark">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                role="tooltip">
                                Dark Header
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-primary" type="radio"
                                name="header-colors" id="switcher-header-primary">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                role="tooltip">
                                Color Header
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-gradient" type="radio"
                                name="header-colors" id="switcher-header-gradient">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                role="tooltip">
                                Gradient Header
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-transparent"
                                type="radio" name="header-colors" id="switcher-header-transparent">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                role="tooltip">
                                Transparent Header
                            </span>
                        </div>
                    </div>
                    <div class="px-4 text-secondary text-xs"><b class="ltr:mr-2 rtl:ml-2">Note:</b>If you want to
                        change color
                        Header dynamically
                        change from below Theme Primary color picker.</div>
                </div>
                <div class="theme-colors">
                    <p class="switcher-style-head">Theme Primary:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-1" type="radio"
                                name="theme-primary" id="switcher-primary" checked>
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-2" type="radio"
                                name="theme-primary" id="switcher-primary1">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-3" type="radio"
                                name="theme-primary" id="switcher-primary2">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-4" type="radio"
                                name="theme-primary" id="switcher-primary3">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-5" type="radio"
                                name="theme-primary" id="switcher-primary4">
                        </div>
                        <div class="ti-form-radio switch-select ltr:pl-0 rtl:pr-0 mt-1 color-primary-light">
                            <div class="theme-container-primary"></div>
                            <div class="pickr-container-primary"></div>
                        </div>
                    </div>
                </div>
                <div class="theme-colors">
                    <p class="switcher-style-head">Theme Background:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-1" type="radio"
                                name="theme-background" id="switcher-background" checked>
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-2" type="radio"
                                name="theme-background" id="switcher-background1">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-3" type="radio"
                                name="theme-background" id="switcher-background2">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-4" type="radio"
                                name="theme-background" id="switcher-background3">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-5" type="radio"
                                name="theme-background" id="switcher-background4">
                        </div>
                        <div class="ti-form-radio switch-select ltr:pl-0 rtl:pr-0 mt-1 color-bg-transparent">
                            <div class="theme-container-background"></div>
                            <div class="pickr-container-background"></div>
                        </div>
                    </div>
                </div>
                <div class="menu-image theme-colors">
                    <p class="switcher-style-head">Menu With Background Image:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img1" type="radio" name="theme-images"
                                id="switcher-bg-img">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img2" type="radio" name="theme-images"
                                id="switcher-bg-img1">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img3" type="radio" name="theme-images"
                                id="switcher-bg-img2">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img4" type="radio" name="theme-images"
                                id="switcher-bg-img3">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img5" type="radio" name="theme-images"
                                id="switcher-bg-img4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ti-offcanvas-footer !justify-center">
            <a id="reset-all" class="ti-btn ti-btn-danger" href="javascript:void(0);">Reset</a>
        </div>
    </div>
    <!-- ========== END Switcher  ========== -->

    <div class="page">

        <!-- Start::app-sidebar -->
        <aside class="app-sidebar" id="sidebar">

            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header">
                <a href="/">
                    {{-- <img src="/assets/img/brand-logos/desktop-logo.png" alt="logo" class="main-logo desktop-logo"> --}}
                    <p class="text-lg flex items-center justify-center text-white">Fatir Al fatih</p>
                </a>
            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->
            <div class="main-sidebar " id="sidebar-scroll">

                <!-- Start::nav -->
                <nav class="main-menu-container nav nav-pills flex-column sub-open">
                    <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                            width="24" height="24" viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                        </svg></div>

                    <ul class="main-menu">
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Main</span></li>
                        <!-- End::slide__category -->
                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="{{ route('menu') }}"
                                class="side-menu__item {{ Request::is('menu') ? 'active' : '' }}">
                                <i class="side-menu__icon ti ti-garden-cart"></i>
                                <span class="side-menu__label">Daftar menu</span>
                            </a>
                        </li>
                        @auth
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <i class="ri-home-8-line side-menu__icon"></i>
                                    <span class="side-menu__label">Dashboards</span>
                                    <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1"><a href="javascript:void(0)">Dashboards</a></li>
                                    @auth
                                        @if (Auth::user()->role == 'costumer')
                                            <li class="slide"><a href="{{ Route('costumer.index') }}"
                                                    class="side-menu__item">Costumer</a></li>
                                        @else
                                            <li class="slide"><a href="{{ Route('home') }}"
                                                    class="side-menu__item">Admin</a>
                                            </li>
                                        @endif
                                    @endauth
                                </ul>
                            </li>
                            @if (Auth()->user()->role === 'pelayan')
                                <li class="slide">
                                    <a href="{{ route('pelayan.menu') }}"
                                        class="side-menu__item {{ Request::is('pelayan/menu') ? 'active' : '' }}">
                                        <i class="side-menu__icon ti ti-garden-cart"></i>
                                        <span class="side-menu__label">Data menu</span>
                                    </a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('data.pesanan') }}"
                                        class="side-menu__item {{ Request::is('pelayan/data-pesanan') ? 'active' : '' }}">
                                        <i class="side-menu__icon ti ti-garden-cart"></i>
                                        <span class="side-menu__label">Data Pesanan</span>
                                    </a>
                                </li>
                            @else
                                <li class="slide">
                                    <a href="{{ route('pesanan.detail') }}"
                                        class="side-menu__item {{ Request::is('pesanan/detail') ? 'active' : '' }}">
                                        <i class="side-menu__icon ti ti-garden-cart"></i>
                                        <span class="side-menu__label">Detail Pesanan</span>
                                    </a>
                                </li>
                            @endif

                        @endauth

                    </ul>
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                            width="24" height="24" viewBox="0 0 24 24">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                        </svg></div>
                </nav>
                <!-- End::nav -->

            </div>
            <!-- End::main-sidebar -->

        </aside>
        <!-- End::app-sidebar -->

        <!-- Start::Header -->
        <header class="header custom-sticky !top-0 !w-full">
            <nav class="main-header" aria-label="Global">
                <div class="header-content">
                    <div class="header-left">
                        <!-- Navigation Toggle -->
                        <div class="">
                            <button type="button" class="sidebar-toggle !w-100 !h-100">
                                <span class="sr-only">Toggle Navigation</span>
                                <i class="ri-arrow-right-circle-line header-icon"></i>
                            </button>
                        </div>
                        <!-- End Navigation Toggle -->
                    </div>
                    <div class="responsive-logo">
                        <a class="responsive-logo-dark" href="index.html" aria-label="Brand"><img
                                src="/assets/img/brand-logos/desktop-logo.png" alt="logo" class="mx-auto"></a>
                        <a class="responsive-logo-light" href="index.html" aria-label="Brand"><img
                                src="/assets/img/brand-logos/desktop-dark.png" alt="logo" class="mx-auto"></a>
                    </div>
                    @auth
                        <div class="header-right">
                            <div class="responsive-headernav">
                                <div class="header-nav-right">
                                    <div class="header-search">
                                        <button aria-label="button" type="button" data-hs-overlay="#search-modal"
                                            class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                            <i class="ri-search-2-line header-icon"></i>
                                        </button>
                                    </div>
                                    <div class="header-theme-mode hidden sm:block">
                                        <a aria-label="anchor"
                                            class="hs-dark-mode-active:hidden flex hs-dark-mode group flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                            href="javascript:;" data-hs-theme-click-value="dark">
                                            <i class="ri-moon-line header-icon"></i>
                                        </a>
                                        <a aria-label="anchor"
                                            class="hs-dark-mode-active:flex hidden hs-dark-mode group flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                            href="javascript:;" data-hs-theme-click-value="light">
                                            <i class="ri-sun-line header-icon"></i>
                                        </a>
                                    </div>
                                    <div class="header-cart hs-dropdown ti-dropdown hidden lg:block"
                                        data-hs-dropdown-placement="bottom-right">
                                        <button id="dropdown-cart" type="button"
                                            class="hs-dropdown-toggle ti-dropdown-toggle p-0 border-0 flex-shrink-0 h-[2.375rem] w-[2.375rem] rounded-full shadow-none focus:ring-gray-400 text-xs dark:focus:ring-white/10">
                                            <i class="ri-shopping-basket-line header-icon"></i>
                                            <span
                                                class="flex absolute h-5 w-5 top-0 ltr:right-0 rtl:left-0 -mt-1 ltr:-mr-1 rtl:-ml-1">
                                                <span
                                                    class="relative inline-flex rounded-full h-5 w-5 bg-blue-500 text-white justify-center items-center"
                                                    id="cart-data2">{{ count(App\Models\Keranjang::where('costumer_id', Auth::id())->get()) }}</span>
                                            </span>
                                        </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu w-[20rem] border-0"
                                            aria-labelledby="dropdown-cart">
                                            <div
                                                class="ti-dropdown-header !bg-primary border-b dark:border-white/10 flex justify-between items-center">
                                                <p class="ti-dropdown-header-title !text-white font-semibold">Shopping Cart
                                                </p>
                                                <a href="{{ route('keranjang') }}"
                                                    class="badge bg-black/20 text-white rounded-sm"
                                                    id="cart-data">{{ count(App\Models\Keranjang::where('costumer_id', Auth::id())->get()) }}
                                                    Items</a>
                                            </div>
                                            <div class="ti-dropdown-divider divide-y divide-gray-200 dark:divide-white/10">
                                                <div class="py-2 first:pt-0 last:pb-0" id="allCartsContainer">
                                                    @foreach (App\Models\Keranjang::where('costumer_id', Auth::id())->get() as $data)
                                                        <div class="ti-dropdown-item relative header-box">
                                                            <a href="{{ route('keranjang') }}"
                                                                class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                                <img loading="lazy"
                                                                    src="../assets/img/ecommerce/products/1.png"
                                                                    alt="product-img"
                                                                    class="avatar p-2 shadow-none  shrink-0 items-center justify-center rounded-sm bg-gray-100 dark:bg-black/20 !ring-transparent">
                                                                <div>
                                                                    <p
                                                                        class="text-sm font-medium text-gray-800 dark:text-white">
                                                                        {{ $data->menu->nama }}
                                                                    </p>
                                                                    <div class="flex space-x-2 rtl:space-x-reverse">
                                                                        <h5 class="text-xs">
                                                                            Rp.{{ number_format($data->menu->harga) }}</h5>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <form
                                                                action="{{ route('keranjang.delete', [$data->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="ltr:ml-auto rtl:mr-auto flex-shrink-0 inline-flex items-center justify-center text-lg text-gray-500/20 dark:text-white/20 hover:text-gray-800 dark:hover:text-white">
                                                                    <i class="ri-close-circle-line"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="py-2 first:pt-0 last:pb-0 px-5">
                                                    {{-- <div class="flex justify-between">
                                                        <div>
                                                            <span
                                                                class="text-xs font-semibold text-gray-800 dark:text-white">Total</span>
                                                        </div>
                                                        <div class="text-end font-medium">
                                                            <span
                                                                class="text-xs font-semibold text-gray-800 dark:text-white">$40,020</span>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                                <div class="py-2 first:pt-0 px-5">
                                                    <a class="w-full ti-btn ti-btn-primary p-2"
                                                        href="{{ route('keranjang') }}">
                                                        Proceed Checkout
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-profile hs-dropdown ti-dropdown"
                                        data-hs-dropdown-placement="bottom-right">
                                        <button id="dropdown-profile" type="button"
                                            class="hs-dropdown-toggle ti-dropdown-toggle gap-2 p-0 flex-shrink-0 h-8 w-8 rounded-full shadow-none focus:ring-gray-400 text-xs dark:focus:ring-white/10">
                                            <img class="inline-block rounded-full ring-2 ring-white dark:ring-white/10"
                                                src="/assets/img/users/1.jpg" alt="Image Description">
                                        </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu border-0 w-[20rem]"
                                            aria-labelledby="dropdown-profile">
                                            <div class="ti-dropdown-header flex">
                                                <div class="ltr:mr-3 rtl:ml-3">
                                                    <img class="avatar shadow-none rounded-full "
                                                        src="{{ asset('assets/img/users/1.jpg') }}" alt="profile-img">
                                                </div>
                                                <div>
                                                    <p class="ti-dropdown-header-title">
                                                        {{ Auth::user()->username }}</p>
                                                    <p class="ti-dropdown-header-content">{{ Auth::user()->role }}</p>
                                                </div>
                                            </div>
                                            <div class="mt-2 ti-dropdown-divider">
                                                {{-- <a href="{{ route('profil', ['id' => Auth::user()->id]) }}"
                                                    class="ti-dropdown-item">
                                                    <i class="ti ti-user-circle text-lg"></i>
                                                    Profile --}}
                                                <a href="{{ Route('logout') }}" class="ti-dropdown-item">
                                                    <i class="ti ti-logout  text-lg"></i>
                                                    Log Out
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="switcher-icon">
                                        <button aria-label="button" type="button"
                                            class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus-visible:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                            data-hs-overlay="#hs-overlay-switcher">
                                            <i class="ri-settings-5-line header-icon animate-spin"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="header-right">
                            <div class="responsive-headernav">
                                <div class="header-nav-right">
                                    <a href="/login"
                                        class="py-2 px-3 bg-blue-500 text-white hover:bg-blue-600 rounded-md focus:text-white">Login</a>
                                    <a href="/register"
                                        class="py-2 px-3 bg-gray-500 text-white hover:bg-gray-600 rounded-md focus:text-white">Register</a>
                                </div>
                            </div>
                        </div>
                    @endauth
                </div>
            </nav>
        </header>
        <!-- End::Header -->


        {{-- content --}}
        {{ $slot }}
        {{-- content --}}

        <!-- ========== Search Modal ========== -->
        <div id="search-modal" class="hs-overlay ti-modal hidden">
            <div class="ti-modal-box">
                <div class="ti-modal-content">
                    <div class="ti-modal-body">
                        <div class="header-search">
                            <label for="icon" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="search-btn">
                                    <i class="ri ri-search-2-line search-btn-icon"></i>
                                </div>
                                <input type="text" id="icon" name="icon"
                                    class="py-2 ltr:pl-11 rtl:pr-11 ti-form-input focus:z-10" placeholder="Search">
                                <div class="voice-search">
                                    <i class="ri ri-mic-2-line voice-btn-icon"></i>
                                </div>
                                <div class="search-dropdown">
                                    <i class="ri ri-more-2-line search-dropdown-btn-icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <p class="font-semibold text-[13px] text-gray-400 dark:text-gray-200 mb-2">Are You Looking
                                For...</p>
                            <div class="badge rounded-sm bg-secondary/20 text-secondary relative header-box">
                                <a href="team.html"
                                    class="w-full my-auto items-center flex space-x-2 rtl:space-x-reverse">
                                    <span class="inline-block text-secondary ltr:mr-1 rtl:ml-1"><i
                                            class="ri ri-user-line text-sm"></i></span>
                                    Team
                                </a>
                                <a href="javascript:void(0);"
                                    class="header-remove-btn flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-secondary hover:bg-secondary hover:text-secondary focus:outline-none focus:bg-secondary focus:text-white">
                                    <span class="sr-only">Remove badge</span>
                                    <svg class="h-4 w-4 hover:fill-white" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="badge rounded-sm bg-secondary/20 text-secondary relative header-box">
                                <a href="form-elements.html"
                                    class="w-full my-auto items-center flex space-x-2 rtl:space-x-reverse">
                                    <span class="inline-block text-secondary ltr:mr-1 rtl:ml-1"><i
                                            class="ri ri-file-text-line text-sm"></i></span>
                                    Forms
                                </a>
                                <a href="javascript:void(0);"
                                    class="header-remove-btn flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-secondary hover:bg-secondary hover:text-secondary focus:outline-none focus:bg-secondary focus:text-white">
                                    <span class="sr-only">Remove badge</span>
                                    <svg class="h-4 w-4 hover:fill-white" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="badge rounded-sm bg-secondary/20 text-secondary relative header-box">
                                <a href="vector-maps.html"
                                    class="w-full my-auto items-center flex space-x-2 rtl:space-x-reverse">
                                    <span class="inline-block text-secondary ltr:mr-1 rtl:ml-1"><i
                                            class="ri ri-map-pin-line text-sm"></i></span>
                                    Maps
                                </a>
                                <a href="javascript:void(0);"
                                    class="header-remove-btn flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-secondary hover:bg-secondary hover:text-secondary focus:outline-none focus:bg-secondary focus:text-white">
                                    <span class="sr-only">Remove badge</span>
                                    <svg class="h-4 w-4 hover:fill-white" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="badge rounded-sm bg-secondary/20 text-secondary relative header-box">
                                <a href="widgets.html"
                                    class="w-full my-auto items-center flex space-x-2 rtl:space-x-reverse">
                                    <span class="inline-block text-secondary ltr:mr-1 rtl:ml-1"><i
                                            class="ri ri-server-line text-sm"></i></span>
                                    Widgets
                                </a>
                                <a href="javascript:void(0);"
                                    class="header-remove-btn flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-secondary hover:bg-secondary hover:text-secondary focus:outline-none focus:bg-secondary focus:text-white">
                                    <span class="sr-only">Remove badge</span>
                                    <svg class="h-4 w-4 hover:fill-white" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="mt-5">
                            <p class="font-semibold text-sm text-gray-500 mb-2">Recent Search :</p>
                            <div
                                class="p-2 border dark:border-white/10 rounded-sm flex items-center text-gray-500 mb-1 relative header-box">
                                <a href="notifications.html" class="w-full my-auto items-center flex">
                                    <span class="text-sm">Notifications</span>
                                </a>
                                <a aria-label="anchor" href="javascript:void(0);"
                                    class="ltr:ml-auto rtl:mr-auto flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 focus:outline-none header-remove-btn">
                                    <i class="ri-close-line"></i>
                                </a>
                            </div>
                            <div
                                class="p-2 border dark:border-white/10 rounded-sm flex items-center text-gray-500 mb-1 relative header-box">
                                <a href="alerts.html" class="w-full my-auto items-center flex">
                                    <span class="text-sm">Alerts</span>
                                </a>
                                <a aria-label="anchor" href="javascript:void(0);"
                                    class="ltr:ml-auto rtl:mr-auto flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 focus:outline-none header-remove-btn">
                                    <i class="ri-close-line"></i>
                                </a>
                            </div>
                            <div
                                class="p-2 border dark:border-white/10 rounded-sm flex items-center text-gray-500 relative header-box">
                                <a href="tables.html" class="w-full my-auto items-center flex">
                                    <span class="text-sm">Tables</span>
                                </a>
                                <a aria-label="anchor" href="javascript:void(0);"
                                    class="ltr:ml-auto rtl:mr-auto flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 focus:outline-none header-remove-btn">
                                    <i class="ri-close-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="ti-modal-footer">
                        <div class="inline-flex rounded-md shadow-sm">
                            <button type="button" class="ti-btn-group py-1 ti-btn-soft-primary dark:border-white/10">
                                Search
                            </button>
                            <button type="button" class="ti-btn-group py-1 ti-btn-primary dark:border-white/10">
                                Clear Recents
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== END Search Modal ========== -->

        <footer class="mt-auto py-3 border-t dark:border-white/10 bg-white dark:bg-bgdark">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <p class="text-center">Copyright © <span id="year"></span> <a href="javascript:void(0)"
                        class="text-primary">Fatir</a>. Designed with <span
                        class="ri ri-heart-fill text-red-500"></span>
                    by <a class="text-primary" href="javascript:void(0)"> Fatir al fatih </a> All rights reserved </p>
            </div>
        </footer>


    </div>


    <!-- Apex Charts JS -->
    <script src="{{ url('/') }}/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Chartjs Chart JS -->
    <script src="{{ url('/') }}/assets/libs/chart.js/chart.min.js"></script>

    <!-- Index JS -->
    <script src="{{ url('/') }}/assets/js/index.js"></script>

    <!-- Back To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill text-xl"></i></span>
    </div>
    <div id="responsive-overlay"></div>

    <!-- popperjs -->
    <script src="{{ url('/') }}/assets/libs/@popperjs/core/umd/popper.min.js"></script>

    <!-- Color Picker JS -->
    <script src="{{ url('/') }}/assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>

    <!-- sidebar JS -->
    <script src="{{ url('/') }}/assets/js/defaultmenu.js"></script>

    <!-- sticky JS -->
    <script src="{{ url('/') }}/assets/js/sticky.js"></script>

    <!-- Switch JS -->
    <script src="{{ url('/') }}/assets/js/switch.js"></script>

    <!-- Preline JS -->
    <script src="{{ url('/') }}/assets/libs/preline/preline.js"></script>

    <!-- Simplebar JS -->
    <script src="{{ url('/') }}/assets/libs/simplebar/simplebar.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ url('/') }}/assets/js/custom.js"></script>




    <!-- Custom-Switcher JS -->
    <script src="{{ url('/') }}/assets/js/custom-switcher.js"></script>

    <!-- Swiper JS -->
    <script src="{{ url('/') }}/assets/libs/swiper/swiper-bundle.min.js"></script>
    <!-- Products JS -->
    <script src="{{ url('/') }}/assets/js/product.js"></script>

    <!-- Flatpickr JS -->
    <script src="{{ url('/') }}/assets/libs/flatpickr/flatpickr.min.js"></script>

    <!-- ADD Product JS -->
    <script src="{{ url('/') }}/assets/js/editproduct.js"></script>


    <!-- glightbox js -->
    <script src="{{ url('/') }}/assets/libs/glightbox/js/glightbox.min.js"></script>

    <script src="{{ url('/') }}/assets/js/gallery.js"></script>

    <!-- Products JS -->
    <script src="{{ url('/') }}/assets/js/cart.js"></script>
</body>

</html>
