@extends('layouts.landing')

@section('content')
    {{-- <div class="container min-h-screen"> --}}

    <!-- component -->
    <div class="bg-gray-100 font-sans flex xl:mt-20 justify-start flex-col">
        <h2 class="xl:mb-6 mb-4 xl:mt-4 text-center lg:max-w-xl lg:mx-auto uppercase ">Jadwal Peminjaman Lab</h2>
        <div x-data="{ openTab: 1 }" class="px-8 xl:pt-2 xl:pb-12">
            <div class="">
                <div class="mb-4 flex space-x-4 p-2 bg-white rounded-lg shadow-md">
                    <button x-on:click="openTab = 1" :class="{ 'bg-blue-500 text-white': openTab === 1 }"
                        class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">2024
                        (Januari-Desember)</button>
                    <button x-on:click="openTab = 2" :class="{ 'bg-blue-500 text-white': openTab === 2 }"
                        class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">2023
                        (Januari-Desember)</button>
                    <button x-on:click="openTab = 3" :class="{ 'bg-blue-500 text-white': openTab === 3 }"
                        class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">2022
                        (Januari-Desember)</button>
                </div>

                <div x-show="openTab === 1"
                    class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 border-blue-500">
                    {{-- <h2 class="text-2xl font-semibold mb-2">Peminjaman Lab 2024 (Januari-Desember)</h2> --}}
                    <a href="https://drive.google.com/file/d/1eimD5lBaXFljNIqixlcdBMmgAp5UVuoQ/view" target="_blank"
                        rel="noopener noreferrer" class="flex flex-row items-center xl:py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"><path fill="#454545" d="M6.4 2A2.4 2.4 0 0 0 4 4.4v19.2A2.4 2.4 0 0 0 6.4 26h15.2a2.4 2.4 0 0 0 2.4-2.4V11.578c0-.729-.29-1.428-.805-1.944l-6.931-6.931A2.4 2.4 0 0 0 14.567 2zm-.9 2.4a.9.9 0 0 1 .9-.9H14V10a2 2 0 0 0 2 2h6.5v11.6a.9.9 0 0 1-.9.9H6.4a.9.9 0 0 1-.9-.9zm16.44 6.1H16a.5.5 0 0 1-.5-.5V4.06z"/></svg>
                        Peminjaman Lab 2024 (Januari-Desember)
                    </a>
                    <iframe src="https://docs.google.com/file/d/1ScecEIyCFuOx42GnIIlMtx5pHcKcwfOo/preview" frameborder="0"
                        style="border:none;" class="lg:w-full lg:min-h-[70vh] mt-2"></iframe>
                </div>

                <div x-show="openTab === 2"
                    class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 border-blue-500">
                    <a href="https://drive.google.com/file/d/1eimD5lBaXFljNIqixlcdBMmgAp5UVuoQ/view" target="_blank"
                        rel="noopener noreferrer" class="flex flex-row items-center xl:py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"><path fill="#454545" d="M6.4 2A2.4 2.4 0 0 0 4 4.4v19.2A2.4 2.4 0 0 0 6.4 26h15.2a2.4 2.4 0 0 0 2.4-2.4V11.578c0-.729-.29-1.428-.805-1.944l-6.931-6.931A2.4 2.4 0 0 0 14.567 2zm-.9 2.4a.9.9 0 0 1 .9-.9H14V10a2 2 0 0 0 2 2h6.5v11.6a.9.9 0 0 1-.9.9H6.4a.9.9 0 0 1-.9-.9zm16.44 6.1H16a.5.5 0 0 1-.5-.5V4.06z"/></svg>
                        Peminjaman Lab 2024 (Januari-Desember)
                    </a>
                    <iframe src="https://docs.google.com/file/d/1ScecEIyCFuOx42GnIIlMtx5pHcKcwfOo/preview" frameborder="0"
                        style="border:none;" class="lg:w-full lg:min-h-[70vh] mt-2"></iframe>
                </div>

                <div x-show="openTab === 3"
                    class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 border-blue-500">
                    <a href="https://drive.google.com/file/d/1eimD5lBaXFljNIqixlcdBMmgAp5UVuoQ/view" target="_blank"
                        rel="noopener noreferrer" class="flex flex-row items-center xl:py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"><path fill="#454545" d="M6.4 2A2.4 2.4 0 0 0 4 4.4v19.2A2.4 2.4 0 0 0 6.4 26h15.2a2.4 2.4 0 0 0 2.4-2.4V11.578c0-.729-.29-1.428-.805-1.944l-6.931-6.931A2.4 2.4 0 0 0 14.567 2zm-.9 2.4a.9.9 0 0 1 .9-.9H14V10a2 2 0 0 0 2 2h6.5v11.6a.9.9 0 0 1-.9.9H6.4a.9.9 0 0 1-.9-.9zm16.44 6.1H16a.5.5 0 0 1-.5-.5V4.06z"/></svg>
                        Peminjaman Lab 2024 (Januari-Desember)
                    </a>
                    <iframe src="https://docs.google.com/file/d/1ScecEIyCFuOx42GnIIlMtx5pHcKcwfOo/preview" frameborder="0"
                        style="border:none;" class="lg:w-full lg:min-h-[70vh] mt-2"></iframe>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    {{-- </div> --}}
@endsection
