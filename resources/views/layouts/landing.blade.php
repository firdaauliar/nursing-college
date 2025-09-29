<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    @vite(['resources/css/app2.css', 'resources/js/scripts.js'])
    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Pavo is a mobile app Tailwind CSS HTML template created to help you present benefits, features and information about mobile apps in order to convince visitors to download them" />
    <meta name="author" content="Your name" />


    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image" /> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Pavo Webpage Title</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />



    <!-- Favicon  -->
    <link rel="icon" href="img/favicon.png" />
</head>

<body data-spy="scroll" data-target=".fixed-top">
    @php
        use Illuminate\Support\Str;
        $isHome = Str::startsWith(Route::currentRouteName(), '#header');
    @endphp

    <!-- Navigation -->
    <nav class="navbar fixed-top ">
        <div class="container sm:px-4 flex lg:px-4 flex-wrap items-center flex-row justify-between ">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="text-gray-800 font-semibold text-3xl leading-4 no-underline page-scroll" href="index.html">Pavo</a> -->

            <!-- Image Logo -->
            <a class="inline-block mr-4 py-0.5 text-xl whitespace-nowrap hover:no-underline focus:no-underline"
                href="{{ route('home') }}">
                <img src="{{ asset('img/NEW-LOGO-POLTEKKES-SBY.png') }}" alt="alternative" class="h-12" />
            </a>

            <button
                class="background-transparent rounded text-xl leading-none hover:no-underline focus:no-underline lg:hidden lg:text-gray-400"
                type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon inline-block w-8 h-8 align-middle"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse lg:flex lg:flex-grow"
                id="navbarsExampleDefault">
                <ul class="pl-0 mt-3 mb-2 flex flex-col list-none lg:mt-0 lg:mb-0 lg:flex-row text-lg ml-auto">
                    <li>
                        <a class="nav-link page-scroll "x-data="{ isActive: window.location.hash === '#header' || window.location.pathname === '/' }"
                            :class="isActive ? 'active nav-link page-scroll ' : 'nav-link page-scroll '"
                            href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li>
                        <a class="nav-link page-scroll" href="{{ route('labSchedule') }}">Laboratory Schedule</a>
                    </li>

                    <!-- Dropdown menu -->
                    <li x-data="{ open: false }" @mouseenter.window="if (window.innerWidth >= 1024) open = true"
                        @mouseleave.window="if (window.innerWidth >= 1024) open = false" @click.away="open = false"
                        class="relative list-none">

                        <!-- Trigger -->
                        <a href="#" @click.prevent="open = !open" class="nav-link dropdown-toggle cursor-pointer"
                            :aria-expanded="open">
                            Laboratory Document
                        </a>

                        <!-- Dropdown Menu -->
                        <div x-show="open" x-transition
                            class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-md py-2 z-50"
                            style="display: none;">
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">LOAN FORM</a>
                            <div class="border-t my-1"></div>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">PRACTICUM
                                MODULE</a>
                            <div class="border-t my-1"></div>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">WORK
                                INSTRUCTION</a>
                            <div class="border-t my-1"></div>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">LABORATORY
                                PRACTICE FILES</a>
                            <div class="border-t my-1"></div>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">CLINICAL PRACTICE
                                FILE</a>
                        </div>
                    </li>
                    <!-- Dropdown menu -->
                    <li x-data="{ open: false }" @mouseenter.window="if (window.innerWidth >= 1024) open = true"
                        @mouseleave.window="if (window.innerWidth >= 1024) open = false" @click.away="open = false"
                        class="relative list-none">

                        <!-- Trigger -->
                        <a href="#" @click.prevent="open = !open" class="nav-link dropdown-toggle cursor-pointer"
                            :aria-expanded="open">
                            Our Laboratory
                        </a>

                        <!-- Dropdown Menu -->
                        <div x-show="open" x-transition
                            class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-md py-2 z-50"
                            style="display: none;">
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Article
                                Details</a>
                            <div class="border-t my-1"></div>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Terms
                                Conditions</a>
                            <div class="border-t my-1"></div>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Privacy
                                Policy</a>
                        </div>
                    </li>
                    <li>
                        <a class="nav-link page-scroll" href="#details">Survey Kepuasan</a>
                    </li>
                    <li>
                        <a class="nav-link page-scroll" href="#pricing">Database</a>
                    </li>
                </ul>
                <span class="block lg:ml-3.5">
                    <a class="no-underline" href="#your-link">
                        <i
                            class="fab fa-apple text-indigo-600 hover:text-pink-500 text-xl transition-all duration-200 mr-1.5"></i>
                    </a>
                    <a class="no-underline" href="#your-link">
                        <i
                            class="fab fa-android text-indigo-600 hover:text-pink-500 text-xl transition-all duration-200"></i>
                    </a>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

    @yield('content')

    <!-- Footer -->
    {{-- <div class="bg-black min-h-screen text-white">
        <div class="container px-4 sm:px-8">

            <div class="flex flex-row items-start">
                <div class="flex flex-col w-52">
                    <a class="inline-block mr-4 py-12 text-xl whitespace-nowrap hover:no-underline focus:no-underline"
                        href="{{ route('home') }}">
                        <img src="{{ asset('img/NEW-LOGO-POLTEKKES-SBY.png') }}" alt="alternative" class="h-14" />
                    </a>
                    Jl. Prof. DR. Moestopo, Mojo, Kec. Gubeng, Surabaya
                </div>
                <div class="flex text-2xl">
                    Contact Us

                </div>
                <div class="flex">
                    Contact Us
                </div>
                <div class="flex">
                    Contact Us
                </div>
            </div>

            <h4 class="mb-8 lg:max-w-3xl lg:mx-auto">Pavo is a mobile application for marketing automation and you
                can
                reach the team at <a class="text-indigo-600 hover:text-gray-500"
                    href="mailto:email@domain.com">email@domain.com</a></h4> --}}
    {{-- <div class="social-container"> --}}
    {{-- <span class="fa-stack">
                    <a href="#your-link">
                        Instagram
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        Email
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        Telp
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-pinterest-p fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        LinkedIn
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-instagram fa-stack-1x"></i>
                    </a>
                </span> --}}
    {{-- </div> <!-- end of social-container --> --}}
    {{-- </div>  --}}
    <!-- end of container -->
    {{-- </div>  --}}
    <!-- end of footer -->

    <footer class="bg-gray-900 text-gray-300 py-12">
        <div class="container mx-auto px-4">
            <!-- Bagian atas: logo + info -->
            <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-8">
                <!-- Logo dan Nama -->
                <div class="flex flex-col items-start">
                    <img src="{{ asset('img/NEW-LOGO-POLTEKKES-SBY.png') }}" alt="alternative" class="h-16 w-48" />

                    <h2 class="text-white text-xl font-semibold">Prodi Keperawatan</h2>
                    <p class="mt-2 text-gray-400 text-sm">Poltekkes Kemenkes Surabaya </p>
                </div>

                <!-- Alamat / Kontak -->
                <div class="flex flex-col text-sm text-gray-400 space-y-2">
                    <p>Jl. Prof. DR. Moestopo, Mojo, Kec. Gubeng, Surabaya</p>
                    <p>Email: <a href="mailto:ti@uin-malang.ac.id"
                            class="hover:text-white">admin@poltekkes-surabaya.ac.id</a>
                    </p>
                    <p>Telp: (031) 5038487</p>
                    <p>Fax: (0341) 551612</p>
                </div>

                <!-- Media Sosial -->
                <div class="flex flex-col space-y-2">
                    <span class="text-white font-semibold">Media Sosial</span>
                    <div class="flex gap-4">
                        <a href="#" class="hover:text-white">Facebook</a>
                        <a href="#" class="hover:text-white">Instagram</a>
                        <a href="#" class="hover:text-white">Twitter</a>
                        <a href="#" class="hover:text-white">LinkedIn</a>
                    </div>
                </div>
            </div>

            <!-- Bagian bawah: copyright -->
            <div class="mt-12 border-t border-gray-700 pt-4 text-center text-gray-500 text-sm">
                &copy; 2025 Program Studi Teknik Informatika, Universitas Islam Negeri Maulana Malik Ibrahim Malang
            </div>
        </div>
    </footer>







    <!-- Scripts -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- jQuery Easing -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"
        integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Swiper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"
        integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Magnific Popup -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/jquery.magnific-popup.min.js"
        integrity="sha512-fCRpXk4VumjVNtE0j+OyOqzPxF1eZwacU3kN3SsznRPWHgMTSSo7INc8aY03KQDBWztuMo5KjKzCFXI/a5rVYQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    @vite(['resources/js/app.js', 'resources/js/scripts.js'])
    <script src="https://unpkg.com/alpinejs"></script>

    <script>
        // close menu on click in small viewport
        $('[data-toggle="offcanvas"], .nav-link:not(.dropdown-toggle').on('click', function() {
            $('.offcanvas-collapse').toggleClass('open')
        })

        // hover in desktop mode
        function toggleDropdown(e) {
            const _d = $(e.target).closest('.dropdown'),
                _m = $('.dropdown-menu', _d);
            setTimeout(function() {
                const shouldOpen = e.type !== 'click' && _d.is(':hover');
                _m.toggleClass('show', shouldOpen);
                _d.toggleClass('show', shouldOpen);
                $('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
            }, e.type === 'mouseleave' ? 300 : 0);
        }
        $('body')
            .on('mouseenter mouseleave', '.dropdown', toggleDropdown)
            .on('click', '.dropdown-menu a', toggleDropdown);


        document.addEventListener("DOMContentLoaded", () => {
            
        // scroll animation
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    console.log(entry.target)
                    entry.target.classList.add("showed")
                } else {
                    entry.target.classList.remove("showed")
                }
            });
        }, {})

        //contoh kodingan
        const tobeAnimated = document.querySelectorAll(".to-animate")
        tobeAnimated.forEach(el => observer.observe(el))
        });


        

    
    </script>
</body>


</html>
