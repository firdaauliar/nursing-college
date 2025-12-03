<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    @vite(['resources/css/app2.css', 'resources/js/scripts.js'])
    {{-- <link rel="stylesheet" href="./build/assets/css/app2.css"> --}}
    <script type="module" src="./build/assets/app.js"></script>
    <!-- SEO Meta Tags -->
    <meta name="description" content="Laboratory of Nursing Poltekkes Sidoarjo" />
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
    <title>Nursing Poltekkes Sidoarjo</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet" />
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" /> --}}
        <link href="{{ asset('pavo/css/swiper.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet" />



    <!-- PDF viewer -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf_viewer.min.css"
        integrity="sha512-p0IfbrMdZR9K3frD+U5xodiEuT9e3nEzfLRo29LqvB8jJVKbftQvRTkhCD1oYNVuhFOsfDTLahPrPuSM0eyAPg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('img/logo-poltekkes-sby-single.png')}}" />
</head>

<body data-spy="scroll" data-target=".fixed-top">
    @php
        use Illuminate\Support\Str;
        $isHome = Str::startsWith(Route::currentRouteName(), '#header');
    @endphp

    @include('partials.nav_landing')

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

@include('partials.footer')







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
