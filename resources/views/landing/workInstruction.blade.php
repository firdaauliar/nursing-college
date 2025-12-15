@extends('layouts.landing')

@section('content')
    <!-- Header -->
    <header class="ex-header bg-gray">
        <div class="container px-4 sm:px-8 xl:px-4">
            <h1 class="xl:ml-24">Work Instructions</h1>
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

    <!-- Basic -->
    <div class="ex-basic-1 pt-4">
        <div class="container px-4 sm:px-8 xl:px-32">
            <p class="mb-2">Welcome to the Nursing Laboratory Practice Work Instructions page, an information center that
                provides detailed guidance on the work steps in the implementation of laboratory practice. This page is
                designed to help students understand the proper and standardized procedures in each laboratory activity, so
                as to improve practical skills safely and effectively.</p>
        </div> <!-- end of container -->


    </div>

    </div> <!-- end of ex-basic-1 -->

    <!-- Features -->
    <div id="features" class="cards-1 mt-0 xl:px-32">
        <div class="container grid grid-cols-3 gap-2 xl:gap-4 px-4 sm:px-8 xl:px-2">

            <!-- Card -->
            <div x-data="{ hover: false }" @mouseenter="hover= true" @mouseleave="hover = false"
                class="bg-neutral-primary-soft block max-w-sm border border-default rounded-md shadow-md">
                <a class="relative flex justify-center"
                    href="https://drive.google.com/file/d/1V3MrtWvH2mmNjrVhkspo8n2RmnCvas-1/view" target="_blank">
                    <div class="absolute right-0" x-show="hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 512 512">
                            <rect width="512" height="512" fill="#696969" />
                            <path fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32"
                                d="M384 224v184a40 40 0 0 1-40 40H104a40 40 0 0 1-40-40V168a40 40 0 0 1 40-40h167.48M336 64h112v112M224 288L440 72" />
                        </svg>
                    </div>
                    <img class="rounded-t-base max-h-20 lg:max-h-72 object-contain"
                        src="{{ asset('img/cover-modul-keperawatan-maternitas-2.png') }}" alt="" />
                </a>
                <div class="p-2 text-center">
                    <a href="https://drive.google.com/file/d/1V3MrtWvH2mmNjrVhkspo8n2RmnCvas-1/view" target="_blank">
                        <h5 class="mb-3 text-lg font-semibold tracking-tight text-heading uppercase">Modul Keperawatan
                            Maternitas</h5>
                    </a>
                    <a href="{{ route('downloadModul', '24_25 P. KEPERAWATAN MATERNITAS.pdf') }}"
                        class="mb-2 inline-flex items-center text-white bg-blue-600 box-border border border-transparent hover:bg-blue-800 focus:ring-4 focus:ring-blue-200 shadow-xs font-medium leading-5 rounded-md text-sm px-3 py-2 focus:outline-none">
                        <svg class="w-6 h-6 me-1" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                            viewBox="0 0 24 24">
                            <rect width="24" height="24" fill="none" />
                            <path fill="#ffffff"
                                d="m12 16l-5-5l1.4-1.45l2.6 2.6V4h2v8.15l2.6-2.6L17 11zm-8 4v-5h2v3h12v-3h2v5z" />
                        </svg>
                        Download PDF
                    </a>
                </div>
            </div>
            <!-- end of card -->


            <!-- Card -->
            <div x-data="{ hover: false }" @mouseenter="hover= true" @mouseleave="hover = false"
                class="bg-neutral-primary-soft block max-w-sm border border-default rounded-md shadow-md">
                <a class="relative flex justify-center"
                    href="https://drive.google.com/file/d/1OI265wwsiZ0UZ3vxwi1HHCyXt0-zqQDL/view" target="_blank">
                    <div class="absolute right-0" x-show="hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 512 512">
                            <rect width="512" height="512" fill="#696969" />
                            <path fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32"
                                d="M384 224v184a40 40 0 0 1-40 40H104a40 40 0 0 1-40-40V168a40 40 0 0 1 40-40h167.48M336 64h112v112M224 288L440 72" />
                        </svg>
                    </div>
                    <img class="rounded-t-base max-h-20 lg:max-h-72 object-contain"
                        src="{{ asset('img/cover-modul-keperawatan-anak.jpg') }}" alt="" />
                </a>
                <div class="p-2 text-center">
                    <a href="https://drive.google.com/file/d/1OI265wwsiZ0UZ3vxwi1HHCyXt0-zqQDL/view" target="_blank">
                        <h5 class="mb-3 text-lg font-semibold tracking-tight text-heading uppercase">Modul Keperawatan
                            Anak</h5>
                    </a>
                    <a href="{{ route('downloadModul', '24_25 P. KEPERAWATAN ANAK.pdf') }}"
                        class="mb-2 inline-flex items-center text-white bg-blue-600 box-border border border-transparent hover:bg-blue-800 focus:ring-4 focus:ring-blue-200 shadow-xs font-medium leading-5 rounded-md text-sm px-3 py-2 focus:outline-none">
                        <svg class="w-6 h-6 me-1" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                            viewBox="0 0 24 24">
                            <rect width="24" height="24" fill="none" />
                            <path fill="#ffffff"
                                d="m12 16l-5-5l1.4-1.45l2.6 2.6V4h2v8.15l2.6-2.6L17 11zm-8 4v-5h2v3h12v-3h2v5z" />
                        </svg>
                        Download PDF
                    </a>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div x-data="{ hover: false }" @mouseenter="hover= true" @mouseleave="hover = false"
                class="bg-neutral-primary-soft block max-w-sm border border-default rounded-md shadow-md">
                <a class="relative flex justify-center"
                    href="https://drive.google.com/file/d/1IBdNq2Ny1Ds4OSfRaD97NL9fyL17eqJC/view" target="_blank">
                    <div class="absolute right-0" x-show="hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 512 512">
                            <rect width="512" height="512" fill="#696969" />
                            <path fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32"
                                d="M384 224v184a40 40 0 0 1-40 40H104a40 40 0 0 1-40-40V168a40 40 0 0 1 40-40h167.48M336 64h112v112M224 288L440 72" />
                        </svg>
                    </div>
                    <img class="rounded-t-base max-h-20 lg:max-h-72 object-contain"
                        src="{{ asset('img/cover-modul-keperawatan-keluarga.png') }}" alt="" />
                </a>
                <div class="p-2 text-center">
                    <a href="https://drive.google.com/file/d/1IBdNq2Ny1Ds4OSfRaD97NL9fyL17eqJC/view" target="_blank">
                        <h5 class="mb-3 text-lg font-semibold tracking-tight text-heading uppercase">Modul Keperawatan
                            Keluarga</h5>
                    </a>
                    <a href="{{ route('downloadModul', '24_25 P. KEPERAWATAN KELUARGA.pdf') }}"
                        class="mb-2 inline-flex items-center text-white bg-blue-600 box-border border border-transparent hover:bg-blue-800 focus:ring-4 focus:ring-blue-200 shadow-xs font-medium leading-5 rounded-md text-sm px-3 py-2 focus:outline-none">
                        <svg class="w-6 h-6 me-1" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                            viewBox="0 0 24 24">
                            <rect width="24" height="24" fill="none" />
                            <path fill="#ffffff"
                                d="m12 16l-5-5l1.4-1.45l2.6 2.6V4h2v8.15l2.6-2.6L17 11zm-8 4v-5h2v3h12v-3h2v5z" />
                        </svg>
                        Download PDF
                    </a>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div x-data="{ hover: false }" @mouseenter="hover= true" @mouseleave="hover = false"
                class="bg-neutral-primary-soft block max-w-sm border border-default rounded-md shadow-md">
                <a class="relative flex justify-center"
                    href="https://drive.google.com/file/d/1Ozqfo9ZuSi6Hjj_7qlU3WZFC7OeOVFUn/view" target="_blank">
                    <div class="absolute right-0" x-show="hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 512 512">
                            <rect width="512" height="512" fill="#696969" />
                            <path fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32"
                                d="M384 224v184a40 40 0 0 1-40 40H104a40 40 0 0 1-40-40V168a40 40 0 0 1 40-40h167.48M336 64h112v112M224 288L440 72" />
                        </svg>
                    </div>
                    <img class="rounded-t-base max-h-20 lg:max-h-72 object-contain"
                        src="{{ asset('img/cover-modul-keperawatan-jiwa.png') }}" alt="" />
                </a>
                <div class="p-2 text-center">
                    <a href="https://drive.google.com/file/d/1Ozqfo9ZuSi6Hjj_7qlU3WZFC7OeOVFUn/view" target="_blank">
                        <h5 class="mb-3 text-lg font-semibold tracking-tight text-heading uppercase">Modul Keperawatan
                            Jiwa</h5>
                    </a>
                    <a href="{{ route('downloadModul', '24_25 P. KEPERAWATAN JIWA.pdf') }}"
                        class="mb-2 inline-flex items-center text-white bg-blue-600 box-border border border-transparent hover:bg-blue-800 focus:ring-4 focus:ring-blue-200 shadow-xs font-medium leading-5 rounded-md text-sm px-3 py-2 focus:outline-none">
                        <svg class="w-6 h-6 me-1" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                            viewBox="0 0 24 24">
                            <rect width="24" height="24" fill="none" />
                            <path fill="#ffffff"
                                d="m12 16l-5-5l1.4-1.45l2.6 2.6V4h2v8.15l2.6-2.6L17 11zm-8 4v-5h2v3h12v-3h2v5z" />
                        </svg>
                        Download PDF
                    </a>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div x-data="{ hover: false }" @mouseenter="hover= true" @mouseleave="hover = false"
                class="bg-neutral-primary-soft block max-w-sm border border-default rounded-md shadow-md">
                <a class="relative flex justify-center"
                    href="https://drive.google.com/file/d/1QUlreEDmCv99CnOwmJmah_NcHo5HFFFz/view" target="_blank">
                    <div class="absolute right-0" x-show="hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 512 512">
                            <rect width="512" height="512" fill="#696969" />
                            <path fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32"
                                d="M384 224v184a40 40 0 0 1-40 40H104a40 40 0 0 1-40-40V168a40 40 0 0 1 40-40h167.48M336 64h112v112M224 288L440 72" />
                        </svg>
                    </div>
                    <img class="rounded-t-base max-h-20 lg:max-h-72 object-contain"
                        src="{{ asset('img/cover-modul-keperawatan-gawat-darurat.png') }}" alt="" />
                </a>
                <div class="p-2 text-center">
                    <a href="https://drive.google.com/file/d/1QUlreEDmCv99CnOwmJmah_NcHo5HFFFz/view" target="_blank">
                        <h5 class="mb-3 text-lg font-semibold tracking-tight text-heading uppercase">Modul Keperawatan
                            Gawat Darurat</h5>
                    </a>
                    <a href="{{ route('downloadModul', '24_25 P. GADAR. dan MANAJEMEN BENCANA.pdf') }}"
                        class="mb-2 inline-flex items-center text-white bg-blue-600 box-border border border-transparent hover:bg-blue-800 focus:ring-4 focus:ring-blue-200 shadow-xs font-medium leading-5 rounded-md text-sm px-3 py-2 focus:outline-none">
                        <svg class="w-6 h-6 me-1" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                            viewBox="0 0 24 24">
                            <rect width="24" height="24" fill="none" />
                            <path fill="#ffffff"
                                d="m12 16l-5-5l1.4-1.45l2.6 2.6V4h2v8.15l2.6-2.6L17 11zm-8 4v-5h2v3h12v-3h2v5z" />
                        </svg>
                        Download PDF
                    </a>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div x-data="{ hover: false }" @mouseenter="hover= true" @mouseleave="hover = false"
                class="bg-neutral-primary-soft block max-w-sm border border-default rounded-md shadow-md">
                <a class="relative flex justify-center"
                    href="https://drive.google.com/file/d/15hAoYEPTbhO3C4S6iUFxIymGx2JYTVDn/view" target="_blank">
                    <div class="absolute right-0" x-show="hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 512 512">
                            <rect width="512" height="512" fill="#696969" />
                            <path fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32"
                                d="M384 224v184a40 40 0 0 1-40 40H104a40 40 0 0 1-40-40V168a40 40 0 0 1 40-40h167.48M336 64h112v112M224 288L440 72" />
                        </svg>
                    </div>
                    <img class="rounded-t-base max-h-20 lg:max-h-72 object-contain"
                        src="{{ asset('img/cover-modul-keperawatan-gerontik.png') }}" alt="" />
                </a>
                <div class="p-2 text-center">
                    <a href="https://drive.google.com/file/d/15hAoYEPTbhO3C4S6iUFxIymGx2JYTVDn/view" target="_blank">
                        <h5 class="mb-3 text-lg font-semibold tracking-tight text-heading uppercase">Modul Keperawatan
                            Gerontik</h5>
                    </a>
                    <a href="{{ route('downloadModul', '24_25 P. KEPERAWATAN GERONTIK.pdf') }}"
                        class="mb-2 inline-flex items-center text-white bg-blue-600 box-border border border-transparent hover:bg-blue-800 focus:ring-4 focus:ring-blue-200 shadow-xs font-medium leading-5 rounded-md text-sm px-3 py-2 focus:outline-none">
                        <svg class="w-6 h-6 me-1" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                            viewBox="0 0 24 24">
                            <rect width="24" height="24" fill="none" />
                            <path fill="#ffffff"
                                d="m12 16l-5-5l1.4-1.45l2.6 2.6V4h2v8.15l2.6-2.6L17 11zm-8 4v-5h2v3h12v-3h2v5z" />
                        </svg>
                        Download PDF
                    </a>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div x-data="{ hover: false }" @mouseenter="hover= true" @mouseleave="hover = false"
                class="bg-neutral-primary-soft block max-w-sm border border-default rounded-md shadow-md">
                <a class="relative flex justify-center"
                    href="https://drive.google.com/file/d/1GlLVQwdXHGZrTPGjTImJa2B17nyv1BNG/view" target="_blank">
                    <div class="absolute right-0" x-show="hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 512 512">
                            <rect width="512" height="512" fill="#696969" />
                            <path fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32"
                                d="M384 224v184a40 40 0 0 1-40 40H104a40 40 0 0 1-40-40V168a40 40 0 0 1 40-40h167.48M336 64h112v112M224 288L440 72" />
                        </svg>
                    </div>
                    <img class="rounded-t-base max-h-20 lg:max-h-72 object-contain"
                        src="{{ asset('img/cover-modul-keperawatan-kebutuhan-manusia.png') }}" alt="" />
                </a>
                <div class="p-2 text-center">
                    <a href="https://drive.google.com/file/d/1GlLVQwdXHGZrTPGjTImJa2B17nyv1BNG/view" target="_blank">
                        <h5 class="mb-3 text-lg font-semibold tracking-tight text-heading uppercase">Modul Keperawatan
                            Kebutuhan Manusia dalam Konteks Keperawatan</h5>
                    </a>
                    <a href="{{ route('downloadModul', '24_25 P. KEBUTUHAN MANUSIA DALAM KONTEKS KEPERAWATAN 2025 .pdf') }}"
                        class="mb-2 inline-flex items-center text-white bg-blue-600 box-border border border-transparent hover:bg-blue-800 focus:ring-4 focus:ring-blue-200 shadow-xs font-medium leading-5 rounded-md text-sm px-3 py-2 focus:outline-none">
                        <svg class="w-6 h-6 me-1" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                            viewBox="0 0 24 24">
                            <rect width="24" height="24" fill="none" />
                            <path fill="#ffffff"
                                d="m12 16l-5-5l1.4-1.45l2.6 2.6V4h2v8.15l2.6-2.6L17 11zm-8 4v-5h2v3h12v-3h2v5z" />
                        </svg>
                        Download PDF
                    </a>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div x-data="{ hover: false }" @mouseenter="hover= true" @mouseleave="hover = false"
                class="bg-neutral-primary-soft block max-w-sm border border-default rounded-md shadow-md">
                <a class="relative flex justify-center"
                    href="https://drive.google.com/file/d/1clEaXovOpeak4-KMbcVKnST5ij8ctWxA/view" target="_blank">
                    <div class="absolute right-0" x-show="hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 512 512">
                            <rect width="512" height="512" fill="#696969" />
                            <path fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32"
                                d="M384 224v184a40 40 0 0 1-40 40H104a40 40 0 0 1-40-40V168a40 40 0 0 1 40-40h167.48M336 64h112v112M224 288L440 72" />
                        </svg>
                    </div>
                    <img class="rounded-t-base max-h-20 lg:max-h-72 object-contain"
                        src="{{ asset('img/cover-modul-keperawatan-ilmu-biomedik.png') }}" alt="" />
                </a>
                <div class="p-2 text-center">
                    <a href="https://drive.google.com/file/d/1clEaXovOpeak4-KMbcVKnST5ij8ctWxA/view" target="_blank">
                        <h5 class="mb-3 text-lg font-semibold tracking-tight text-heading uppercase">Modul Keperawatan
                            Ilmu Biomedik</h5>
                    </a>
                    <a href="{{ route('downloadModul', '24_25 P. ILMU BIOMEDIK .pdf') }}"
                        class="mb-2 inline-flex items-center text-white bg-blue-600 box-border border border-transparent hover:bg-blue-800 focus:ring-4 focus:ring-blue-200 shadow-xs font-medium leading-5 rounded-md text-sm px-3 py-2 focus:outline-none">
                        <svg class="w-6 h-6 me-1" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                            viewBox="0 0 24 24">
                            <rect width="24" height="24" fill="none" />
                            <path fill="#ffffff"
                                d="m12 16l-5-5l1.4-1.45l2.6 2.6V4h2v8.15l2.6-2.6L17 11zm-8 4v-5h2v3h12v-3h2v5z" />
                        </svg>
                        Download PDF
                    </a>
                </div>
            </div>
            <!-- end of card -->

        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of features -->
    <!-- end of basic -->

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection
