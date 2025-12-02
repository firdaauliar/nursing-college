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

        <div class="navbar-collapse offcanvas-collapse lg:flex lg:flex-grow" id="navbarsExampleDefault">
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
                        <a href="{{ route('loanForm') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">LOAN FORM</a>
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
                        class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-md py-2 z-50 max-h-80 overflow-auto"
                        style="display: none;">
                        <a href="{{ route('basicLab') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Basic
                            Nursing Laboratory</a>
                        <div class="border-t my-1"></div>
                        <a href="{{ route('medicSurgicalLab') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Medical-Surgical Nursing
                            Laboratory</a>
                        <div class="border-t my-1"></div>
                        <a href="{{ route('pediatricLab') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Pediatric
                            Nursing Laboratory</a>
                        <a href="{{ route('maternityLab') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Maternity
                            Nursing Laboratory</a>
                        <a href="{{ route('psychriaticLab') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Psychriatic
                            Nursing Laboratory</a>
                        <a href="{{ route('criticalEmergencyLab') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Critical Emergency
                            Laboratory</a>
                        <a href="{{ route('familyGeronticsComLab') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Family &
                            Gerontics Community Laboratory</a>
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
