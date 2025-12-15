@extends('layouts.landing')

@section('content')
    <!-- Header -->
    <header id="header">
        {{-- <div class="bg-blue-100 w-full h-[5rem]"></div> --}}
        <!-- Background image -->
        <div class="absolute inset-0 -z-10 bg-[url('/img/header-nurse (2).jpg')] bg-cover bg-center w-full h-[34rem]"
            style="background-image:  url('/img/header-nurse (3).jpg')"></div>

        <!-- Blur + white overlay -->
        <div class="absolute inset-0 -z-0 bg-blue-100/10 backdrop-blur-sm h-[34rem] backdrop-filter"></div>
        <div class="container to-animate flex flex-col justify-end h-[34rem]">

            <div class="xl:mb-16 relative to-animate ">
                <p class="h1-large mb-3 font-semibold max-w-4xl tracking-tight">"Excellence in Nursing Practice, Powered by
                    Innovation"</p>
                {{-- <div class="grid grid-cols-5"> --}}
                <p class="text-3xl tracking-tight ">Sidoarjo Nursing Laboratory</p>
                {{-- </div> --}}
                {{-- <a class="btn-solid-lg" href="#your-link"><i class="fab fa-apple"></i>Download</a>
                <a class="btn-solid-lg secondary" href="#your-link"><i class="fab fa-google-play"></i>Download</a> --}}
            </div>
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->

    <!-- Details 2 -->
    <div class="py-24">
        <div class="container sm:px-4 lg:px-0 lg:grid lg:grid-cols-12 lg:gap-x-8">
            <div class="lg:col-span-4 items-center lg:mt-2 flex">
                <div class="mb-8 lg:mb-0 xl:mb-0 xl:mr-2">
                    <img class="inline" src="{{ asset('img/poltekkes lab 1.jpg') }}" alt="alternative" />
                </div>
            </div> <!-- end of col -->
            <div class="lg:col-span-8">
                <div class="xl:mt-12">
                    <h2 class="mb-6">Our Laboratory</h2>
                    <p class="mb-4">The Surabaya Ministry of Health Polytechnic Nursing Department Laboratory is a vehicle
                        for Nursing students to hone cognitive, affective, and psychomotor abilities in the field of Nursing
                        comprehensively. This laboratory accommodates the teaching and learning process for students of the
                        Bachelor of Applied Nursing Study Program, D3 Nursing Study Program and Nursing Professional
                        Education Study Program which has excellence in the field of Nursing. there are 7 Nursing
                        Laboratories, including the implementation of Nursing practice activities for students.</p>
                    <p class="mb-4">The Nursing Department Laboratory adopts the concept and setting of “Mini Hospital”
                        with the aim of students getting an overview and experience of implementing professional nursing
                        care in a real setting so that the graduates produced have moral, superior and competent qualities
                        so that they are ready to face the challenges of the world of work in particular global competition
                        in this era of Globalization.</p>
                    <a class="btn-outline-reg" href="article.html">Details</a>
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of container -->
    </div>
    <!-- end of details 2 -->

    <!-- Testimonials -->
    <div class="slider-1 py-32 bg-gray">
        <div class="container px-4 sm:px-8">
            <h2 class="mb-12 text-center lg:max-w-xl lg:mx-auto">Our Laboratory</h2>

            <!-- Card Slider -->
            <div class="slider-container">
                <div class="swiper-container card-slider h-svh w-80">
                    <div class="swiper-wrapper">

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="inline object-cover lg:h-[85vh] lg:w-full"
                                    src="{{ asset('img/poltekkes lab 1.jpg') }}" alt="alternative" />
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="inline object-cover lg:h-[85vh] lg:w-full"
                                    src="{{ asset('img/poltekkes-lab-2.jpg') }}" alt="alternative" />
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="inline object-cover lg:h-[85vh] lg:w-full"
                                    src="{{ asset('img/poltekkes-basic-lab-1.jpg') }}" alt="alternative" />
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="inline object-cover lg:h-[85vh] lg:w-full"
                                    src="{{ asset('img/poltekkes-lab-4.jpg') }}" alt="alternative" />
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->
                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="inline object-cover lg:h-[85vh] lg:w-full"
                                    src="{{ asset('img/poltekkes-lab-5.jpg') }}" alt="alternative" />
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->
                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="inline object-cover lg:h-[85vh] lg:w-full"
                                    src="{{ asset('img/poltekkes-lab-6.jpg') }}" alt="alternative" />
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->
                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="inline object-cover lg:h-[85vh] lg:w-full"
                                    src="{{ asset('img/poltekkes-lab-7.jpg') }}" alt="alternative" />
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->
                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="inline object-cover lg:h-[85vh] lg:w-full"
                                    src="{{ asset('img/poltekkes-lab-8.jpg') }}" alt="alternative" />
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->


                    </div> <!-- end of swiper-wrapper -->

                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <!-- end of add arrows -->

                </div> <!-- end of swiper-container -->
            </div> <!-- end of slider-container -->
            <!-- end of card slider -->

        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of testimonials -->

    <!-- Statistics -->
    {{-- <div class="counter">
        <div class="container px-4 sm:px-8">

            <!-- Counter -->
            <div id="counter">
                <div class="cell">
                    <div class="counter-value number-count" data-count="231">1</div>
                    <p class="counter-info">Happy Users</p>
                </div>
                <div class="cell">
                    <div class="counter-value number-count" data-count="385">1</div>
                    <p class="counter-info">Issues Solved</p>
                </div>
                <div class="cell">
                    <div class="counter-value number-count" data-count="159">1</div>
                    <p class="counter-info">Good Reviews</p>
                </div>
                <div class="cell">
                    <div class="counter-value number-count" data-count="127">1</div>
                    <p class="counter-info">Case Studies</p>
                </div>
                <div class="cell">
                    <div class="counter-value number-count" data-count="211">1</div>
                    <p class="counter-info">Orders Received</p>
                </div>
            </div>
            <!-- end of counter -->

        </div> <!-- end of container -->
    </div> <!-- end of counter --> --}}
    <!-- end of statistics -->

    <div class="pt-4">
        <h2 class="text-center lg:max-w-xl lg:mx-auto uppercase">
            Tata Tertib Praktek Laboratorium
        </h2>

        <div class="pb-6 xl:py-12 xl:min-h-[400px] grid grid-flow-col justify-center items-stretch gap-x-6 xl:gap-x-20">

            <!-- CARD 1 -->
            <div class="flex">
                <div class="bg-white max-w-sm w-full flex flex-col pb-6 border border-default rounded-md shadow-md h-full">
                    <div id="btnTatib1" class="flex justify-center relative rounded-md">
                        <div class="flex hover:bg-black/50 w-full h-full absolute rounded-md"></div>
                        <img class="rounded-md max-h-64 lg:max-h-80 object-contain"
                            src="{{ asset('img/tata-tertib/tata-tertib-praktik-lab.jpeg') }}" alt="" />
                    </div>

                    <a href="#">
                        <h5 class="mt-6 lg:mt-2 mb-2 px-5 text-xl font-semibold uppercase">
                            Tata Tertib Praktik Laboratorium
                        </h5>
                    </a>

                    <div class="mt-auto px-5">
                        <button class="inline-flex items-center bg-blue-700 text-white text-sm px-3 py-1.5 rounded-md"
                            id="previewTatib1">
                            Preview
                        </button>
                    </div>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="flex">
                <div class="bg-white max-w-sm w-full flex flex-col pb-6 border border-default rounded-md shadow-md h-full">
                    <div id="btnTatib2" class="flex justify-center relative rounded-md">
                        <div class="flex hover:bg-black/50 w-full h-full absolute rounded-md"></div>
                        <img class="rounded-md max-h-64 lg:max-h-80 object-contain"
                            src="{{ asset('img/tata-tertib/tata-tertib-penggunaan-fasilitas-lab.jpeg') }}"
                            alt="" />
                    </div>

                    <a href="#">
                        <h5 class="mt-6 lg:mt-2 mb-2 px-5 text-xl font-semibold uppercase">
                            Tata Tertib Penggunaan Fasilitas Lab
                        </h5>
                    </a>

                    <div class="mt-auto px-5">
                        <button class="inline-flex items-center bg-blue-700 text-white text-sm px-3 py-1.5 rounded-md"
                            id="previewTatib2">
                            Preview
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </div>



    <!-- Modal Tata Tertib -->
    <div id="modalTatib1" role="dialog" tabindex="-1" aria-hidden="true"
        class="hidden bg-black/50  overflow-x-hidden fixed top-0 my-16 py-6 right-0 left-0 z-[1000] justify-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
        aria-hidden="true">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white border border-default rounded-md shadow-sm overflow-y-auto modal-content">
                <img src="{{ asset('img/tata tertib/tata tertib praktik lab.jpeg') }}" alt="" />
            </div>
        </div>
    </div>
    <!-- Modal Tata Tertib -->
    <div id="modalTatib2" role="dialog" tabindex="-1" aria-hidden="true"
        class="hidden bg-black/50  overflow-x-hidden fixed top-0 my-16 py-6 right-0 left-0 z-[1000] justify-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
        aria-hidden="true">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white border border-default rounded-md shadow-sm overflow-y-auto modal-content">
                <img src="{{ asset('img/tata tertib/tata tertib penggunaan fasilitas lab.jpeg') }}" alt="" />
            </div>
        </div>
    </div>



    <!-- Testimonials -->
    <div class="slider-1 py-32 bg-gray">
        <div class="container px-4 sm:px-8">
            <h2 class="mb-12 text-center lg:max-w-xl lg:mx-auto uppercase">Letak lan & wifi jurusan keperawatan</h2>
            <div class="flex gap-y-8 flex-col">
                <img src="{{ asset('img/letak-lan-dan-wifi-jurusan-keperawatan-polkesbaya-cropped.png') }}"
                    alt="" class="max-h-[50%] max-w-2xl m-auto">
                <img src="{{ asset('img/letak-lan-dan-wifi-jurusan-keperawatan-polkesbaya-2-cropped.png') }}"
                    alt="" class="max-h-[50%] max-w-2xl m-auto">
            </div>
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->


    <div class="slider-1 py-32">
        <div class="container px-4 sm:px-8">
            <h2 class="mb-12 text-center lg:max-w-xl lg:mx-auto uppercase">Jalur Evakuasi dan Letak Apar</h2>

            <div class="flex gap-y-8 flex-col">
                <img src="{{ asset('img/jalur-evakuasi-dan-letak-apar-lab-polkesbaya-cropped.png') }}" alt=""
                    class="max-h-[50%] max-w-2xl m-auto">
                <img src="{{ asset('img/jalur-evakuasi-dan-letak-apar-lab-polkesbaya-2-cropped.png') }}" alt=""
                    class="max-h-[50%] max-w-2xl m-auto">
            </div>
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of testimonials -->


    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        $(document).ready(function() {
            function showTatibModal(modal) {
                
                modal
                    .removeClass('hidden')
                    .addClass('flex');


                // Reset scroll AFTER render (guaranteed)
                requestAnimationFrame(() => {
                    modal.scrollTop(0);
                });


            }
            var $modalTatib1 = $('#modalTatib1')
            var $modalTatib2 = $('#modalTatib2')

            $('#btnTatib1').click(() => showTatibModal($modalTatib1))
            $('#previewTatib1').click(() => showTatibModal($modalTatib1))
            $('#btnTatib2').click(() => showTatibModal($modalTatib2))
            $('#previewTatib2').click(() => showTatibModal($modalTatib2))

            function closeModal($modal) {
                $modal
                    .removeClass('flex')
                    .addClass('hidden');
            }

            $('#modalTatib1').click(function(){closeModal($(this))})
            $('#modalTatib2').click(function() {closeModal($(this))})




        })
    </script>
@endsection
