<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite('resources/css/app.css')
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- [Favicon] icon -->
    <link rel="icon" href="assets/images/favicon.svg" type="image/x-icon" />

    <!-- [Page specific CSS] start -->
    <link href="assets/css/plugins/animate.min.css" rel="stylesheet" type="text/css" />
    <!-- [Page specific CSS] end -->
    <!-- [Font] Family -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet" />
    <!-- [phosphor Icons] https://phosphoricons.com/ -->
    <link rel="stylesheet" href="assets/fonts/phosphor/regular/style.css" />
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="assets/fonts/tabler-icons.min.css" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="assets/css/style.css" id="main-style-link" />
    <!-- buy now buuton script  -->
    <script defer src="https://fomo.codedthemes.com/pixel/yRevReYmxkh1j4z7Hc4tgbOKeXSu5Bm1"></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        {{-- @include('layouts.navigation') --}}

        <!-- Page Heading -->
        {{-- @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset --}}

        <!-- Page Content -->
        <!-- [ Sidebar Menu ] start -->
        <nav class="pc-sidebar">
            <div class="navbar-wrapper">
                <div class="m-header flex items-center py-4 px-6 h-header-height">
                    <a href="../dashboard/index.html" class="b-brand flex items-center gap-3">
                        <!-- ========   Change your logo from here   ============ -->
                        <img src="../assets/images/logo-white.svg" class="img-fluid logo logo-lg" alt="logo" />
                        <img src="../assets/images/favicon.svg" class="img-fluid logo logo-sm" alt="logo" />
                    </a>
                </div>
                <div class="navbar-content h-[calc(100vh_-_74px)] py-2.5">
                    <ul class="pc-navbar">
                        <li class="pc-item pc-caption">
                            <label data-i18n="Navigation">Navigation</label>
                        </li>
                        <li class="pc-item">
                            <a href="../dashboard/index.html" class="pc-link">
                                <span class="pc-micon">
                                    <i class="ph ph-house-line"></i>
                                </span>
                                <span class="pc-mtext" data-i18n="Dashboard">Dashboard</span>
                            </a>
                        </li>

                        <li class="pc-item pc-caption">
                            <label data-i18n="UI Components">UI Components</label>
                        </li>
                        <li class="pc-item">
                            <a href="../elements/bc_color.html" class="pc-link">
                                <span class="pc-micon"><i class="ph ph-palette"></i></span>
                                <span class="pc-mtext">Color</span>
                            </a>
                        </li>
                        <li class="pc-item">
                            <a href="../elements/bc_typography.html" class="pc-link">
                                <span class="pc-micon"><i class="ph ph-text-aa"></i></span>
                                <span class="pc-mtext">Typography</span>
                            </a>
                        </li>
                        <li class="pc-item">
                            <a href="../elements/icon-phosphor.html" class="pc-link">
                                <span class="pc-micon"> <i class="ph ph-feather"></i></span>
                                <span class="pc-mtext">Icons</span>
                            </a>
                        </li>

                        <li class="pc-item pc-caption">
                            <label data-i18n="pages">Pages</label>
                        </li>
                        <li class="pc-item">
                            <a href="../pages/login-v1.html" class="pc-link" target="_blank">
                                <span class="pc-micon"> <i class="ph ph-lock-key"></i></span>
                                <span class="pc-mtext">Login</span>
                            </a>
                        </li>
                        <li class="pc-item">
                            <a href="../pages/register-v1.html" class="pc-link" target="_blank">
                                <span class="pc-micon"> <i class="ph ph-user-circle-plus"></i></span>
                                <span class="pc-mtext">Register</span>
                            </a>
                        </li>

                        <li class="pc-item pc-caption">
                            <label data-i18n="Other">Other</label>
                        </li>
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link"><span class="pc-micon"> <i
                                        class="ph ph-tree-structure"></i> </span><span class="pc-mtext"
                                    data-i18n="Menu levels">Menu levels</span><span class="pc-arrow"><i
                                        class="ti ti-chevron-right"></i></span></a>
                            <ul class="pc-submenu">
                                <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 2.1">Level
                                        2.1</a></li>
                                <li class="pc-item pc-hasmenu">
                                    <a href="#!" class="pc-link">
                                        <span data-i18n="Level 2.2">Level 2.2</span>
                                        <span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
                                    <ul class="pc-submenu">
                                        <li class="pc-item"><a class="pc-link" href="#!"
                                                data-i18n="Level 3.1">Level 3.1</a></li>
                                        <li class="pc-item"><a class="pc-link" href="#!"
                                                data-i18n="Level 3.2">Level 3.2</a></li>
                                        <li class="pc-item pc-hasmenu">
                                            <a href="#!" class="pc-link">
                                                <span data-i18n="Level 3.3">Level 3.3</span>
                                                <span class="pc-arrow"><i class="ti ti-chevron-right"></i></span>
                                            </a>
                                            <ul class="pc-submenu">
                                                <li class="pc-item"><a class="pc-link" href="#!"
                                                        data-i18n="Level 4.1">Level 4.1</a></li>
                                                <li class="pc-item"><a class="pc-link" href="#!"
                                                        data-i18n="Level 4.2">Level 4.2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pc-item pc-hasmenu">
                                    <a href="#!" class="pc-link">
                                        <span data-i18n="Level 2.3">Level 2.3</span>
                                        <span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
                                    <ul class="pc-submenu">
                                        <li class="pc-item"><a class="pc-link" href="#!"
                                                data-i18n="Level 3.1">Level 3.1</a></li>
                                        <li class="pc-item"><a class="pc-link" href="#!"
                                                data-i18n="Level 3.2">Level 3.2</a></li>
                                        <li class="pc-item pc-hasmenu">
                                            <a href="#!" class="pc-link">
                                                <span data-i18n="Level 3.3">Level 3.3</span>
                                                <span class="pc-arrow"><i class="ti ti-chevron-right"></i></span>
                                            </a>
                                            <ul class="pc-submenu">
                                                <li class="pc-item"><a class="pc-link" href="#!"
                                                        data-i18n="Level 4.1">Level 4.1</a></li>
                                                <li class="pc-item"><a class="pc-link" href="#!"
                                                        data-i18n="Level 4.2">Level 4.2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="pc-item"><a href="../other/sample-page.html" class="pc-link">
                                <span class="pc-micon">
                                    <i class="ph ph-desktop"></i>
                                </span>
                                <span class="pc-mtext" data-i18n="Sample Page">Sample page</span></a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- [ Sidebar Menu ] end -->

        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>
