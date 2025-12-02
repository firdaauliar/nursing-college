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


    <!-- Introduction -->
    {{-- <div class="xl:mt-12 pt-4 pb-14 text-center">
        <div class="container px-4 sm:px-8 xl:px-4 to-animate">
            <p class="mb-4 text-gray-800 text-3xl leading-10 lg:max-w-5xl lg:mx-auto font-semibold">NURSING LABORATORY OF
                POLKESBAYA</p>
            <p class="mb-4 text-gray-800 text-lg leading-1 lg:max-w-5xl lg:mx-auto">"We are pleased to welcome you to the
                Polkesbaya Nursing Laboratory website. Find information about our services and facilities. If you have any
                questions, our team is ready to help."</p>
        </div> <!-- end of container -->
    </div> --}}
    <!-- end of introduction -->

    <!-- content or information card/lists can be shown here-->
    {{-- <div class="flex justify-center w-full bg-white p-6">
        <div class="flex flex-col items-start max-w-md text-left">
            <!-- Icon bisa ditambahkan di sini jika mau -->
            <div class="mb-4">
                <h3 class="text-xl font-semibold text-gray-800">
                    Pelatihan BTCLS
                </h3>
            </div>
            <p class="text-gray-600">
                Merupakan pelatihan Basic Trauma Cardiac Life Support yang diselenggarakan Jurusan Keperawatan untuk
                mahasiswa keperawatan
            </p>
        </div>
    </div> --}}



    <!-- Features -->
    {{-- <div id="features" class="cards-1">
        <div class="container px-4 sm:px-8 xl:px-4 to-animate">

            <!-- Card -->
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('img/features-icon-1.svg') }}" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">Platform Integration</h5>
                    <p class="mb-4">You sales force can use the app on any smartphone platform without
                        compatibility
                        issues</p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card to-animate">
                <div class="card-image">
                    <img src="{{ asset('img/features-icon-2.svg') }}" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">Easy On Resources</h5>
                    <p class="mb-4">Works smoothly even on older generation hardware due to our optimization
                        efforts
                    </p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card to-animate">
                <div class="card-image">
                    <img src="{{ asset('img/features-icon-3.svg') }}" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">Great Performance</h5>
                    <p class="mb-4">Optimized code and innovative technology insure no delays and ultra-fast
                        responsiveness</p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card to-animate">
                <div class="card-image">
                    <img src="img/features-icon-4.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">Multiple Languages</h5>
                    <p class="mb-4">Choose from one of the 40 languages that come pre-installed and start selling
                        smarter</p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card to-animate">
                <div class="card-image">
                    <img src="img/features-icon-5.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">Free Updates</h5>
                    <p class="mb-4">Don't worry about future costs, pay once and receive all future updates at no
                        extra cost</p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card to-animate">
                <div class="card-image">
                    <img src="img/features-icon-6.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">Community Support</h5>
                    <p class="mb-4">Register the app and get acces to knowledge and ideas from the Pavo online
                        community</p>
                </div>
            </div>
            <!-- end of card -->

        </div> <!-- end of container -->
    </div>  --}}
    <!-- end of cards-1 -->
    <!-- end of features -->


    <!-- Details 1 -->
    {{-- <div id="details" class="pt-12 pb-16 lg:pt-16">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12 to-animate">
            <div class="lg:col-span-5">
                <div class="mb-16 lg:mb-0 xl:mt-16">
                    <h2 class="mb-6">Our Laboratory</h2>
                    <p class="mb-4">Based on our team's extensive experience in developing line of business
                        applications and constructive customer feedback we reached a new level of revenue.</p>
                    <p class="mb-4">We enjoy helping small and medium sized tech businesses take a shot at
                        established Fortune 500 companies</p>
                </div>
            </div> <!-- end of col -->
            <div class="lg:col-span-7">
                <div class="xl:ml-14">
                    <img class="inline" src="img/details-1.jpg" alt="alternative" />
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of container -->
    </div> --}}
    <!-- end of details 1 -->


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
                    <p class="mb-4">The Surabaya Ministry of Health Polytechnic Nursing Department Laboratory is a vehicle for Nursing students to hone cognitive, affective, and psychomotor abilities in the field of Nursing comprehensively. This laboratory accommodates the teaching and learning process for students of the Bachelor of Applied Nursing Study Program, D3 Nursing Study Program and Nursing Professional Education Study Program which has excellence in the field of Nursing. there are 7 Nursing Laboratories, including the implementation of Nursing practice activities for students.</p>
                    <p class="mb-4">The Nursing Department Laboratory adopts the concept and setting of “Mini Hospital” with the aim of students getting an overview and experience of implementing professional nursing care in a real setting so that the graduates produced have moral, superior and competent qualities so that they are ready to face the challenges of the world of work in particular global competition in this era of Globalization.</p>
                    <a class="btn-solid-reg popup-with-move-anim mr-1.5" href="#details-lightbox">Lightbox</a>
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
                                    <img class="inline object-cover lg:h-[85vh] lg:w-full" src="{{ asset('img/poltekkes lab 1.jpg') }}" alt="alternative" />
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="inline object-cover lg:h-[85vh] lg:w-full" src="{{ asset('img/poltekkes-lab-2.jpg') }}" alt="alternative" />
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="inline object-cover lg:h-[85vh] lg:w-full" src="{{ asset('img/poltekkes-basic-lab-1.jpg') }}" alt="alternative" />
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="inline object-cover lg:h-[85vh] lg:w-full" src="{{ asset('img/poltekkes-lab-4.jpg') }}" alt="alternative" />
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->
                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="inline object-cover lg:h-[85vh] lg:w-full" src="{{ asset('img/poltekkes-lab-5.jpg') }}" alt="alternative" />
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->
                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="inline object-cover lg:h-[85vh] lg:w-full" src="{{ asset('img/poltekkes-lab-6.jpg') }}" alt="alternative" />
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->
                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="inline object-cover lg:h-[85vh] lg:w-full" src="{{ asset('img/poltekkes-lab-7.jpg') }}" alt="alternative" />
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->
                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="inline object-cover lg:h-[85vh] lg:w-full" src="{{ asset('img/poltekkes-lab-8.jpg') }}" alt="alternative" />
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


    <!-- Details Lightbox -->
    <!-- Lightbox -->
    {{-- <div id="details-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="lg:grid lg:grid-cols-12 lg:gap-x-8">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="lg:col-span-8">
                <div class="mb-12 text-center lg:mb-0 lg:text-left xl:mr-6">
                    <img class="inline rounded-lg" src="img/details-lightbox.jpg" alt="alternative" />
                </div>
            </div> <!-- end of col -->
            <div class="lg:col-span-4">
                <h3 class="mb-2">Goals Setting</h3>
                <hr class="w-11 h-0.5 mt-0.5 mb-4 ml-0 border-none bg-indigo-600" />
                <p>The app can easily help you track your personal development evolution if you take the time to set
                    it
                    up.</p>
                <h4 class="mt-7 mb-2.5">User Feedback</h4>
                <p class="mb-4">This is a great app which can help you save time and make your live easier. And
                    it
                    will help improve your productivity.</p>
                <ul class="list mb-6 space-y-2">
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Splash screen panel</div>
                    </li>
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Statistics graph report</div>
                    </li>
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Events calendar layout</div>
                    </li>
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Location details screen</div>
                    </li>
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Onboarding steps interface</div>
                    </li>
                </ul>
                <a class="btn-solid-reg mfp-close page-scroll" href="#download">Download</a>
                <button class="btn-outline-reg mfp-close as-button" type="button">Back</button>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div>  --}}
    <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of details lightbox -->


    <!-- Details 3 -->
    {{-- <div class="pt-16 pb-12">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
            <div class="lg:col-span-5">
                <div class="mb-16 lg:mb-0 xl:mt-16">
                    <h2 class="mb-6">Platform integration and life time free updates</h2>
                    <p class="mb-4">Get a glimpse of what this app can do for your marketing automation and
                        understand why current users are so excited when using Pavo
                        together with their teams.</p>
                    <p class="mb-4">We will promptly answer any questions and honor your requests based on the
                        service level agreement</p>
                </div>
            </div> <!-- end of col -->
            <div class="lg:col-span-7">
                <div class="ml-14">
                    <img class="inline" src="img/details-3.jpg" alt="alternative" />
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of container -->
    </div> --}}
    <!-- end of details 3 -->


    <!-- Statistics -->
    <div class="counter">
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
    </div> <!-- end of counter -->
    <!-- end of statistics -->

    <div class="">
        <h2 class="mb-8 text-center lg:max-w-xl lg:mx-auto uppercase ">Tata Tertib Praktek Laboratorium</h2>
        <div class="grid grid-cols-5 xl:min-h-[400px]">
            <div class="flex justify-center items-start col-span-2 h-full" {{-- style="background: linear-gradient(rgba(50,60,70,0.5),rgba(50,60,70,0.9)), url('{{ asset('img/lab-asset.jpg') }}') center/cover no-repeat;" --}}>
                <img src="{{ asset('img/nurse-rules.png') }}" class="w-[75%] mb-12 self-start" alt="">
            </div>

            <div class="backdrop-blur-sm bg-white/40 lg:mx-8 col-span-3 lg:pb-4" x-data="{ selected: 1 }">
                <ul>
                    <li class="border-b border-gray-200 lg:py-2 lg:px-2">
                        {{-- button --}}
                        <button @click="selected !== 1 ? selected = 1 : selected = null"
                            class="w-full flex items-center flex-row justify-between">
                            <span>1. Tahap Persiapan</span>
                            <svg 
                            class="transform transition-transform duration-300"
                            :class="selected === 1 ? '-rotate-180' : '' "
                            width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.75 12.5L15 18.75L21.25 12.5" stroke="#1E1E1E" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                        {{-- content --}}
                        <div x-ref="accordion_terms"
                            x-bind:style="selected == 1 ? 'max-height:' + $el.scrollHeight + 'px' : ''"
                            class="relative overflow-hidden max-h-0 transition-all duration-500 text-sm/6">
                            <p class="p-6">
                                a. Mahasiswa wajib mengikuti praktek sesuai jadwal yang telah ditetapkan, dengan prosentase
                                kehadiran
                                100%. <br>
                                b. Mahasiswa wajib menguasai (membaca dan memahami) intruksi kerja keterampilan yang akan
                                dipraktekkan. <br>
                                c. Demi kelancaran proses bimbingan, setiap kelompok wajib mengkonfirmasi pembimbing sesuai
                                dengan jadwal 1 (satu) hari sebelum pelaksanaan praktek laboratrium.
                            </p>
                        </div>
                    </li>
                    <li class="border-b border-gray-200 lg:py-2 lg:px-2">
                        {{-- button --}}
                        <button @click="selected !== 2 ? selected = 2 : selected = null"
                            class="w-full flex items-center flex-row justify-between">
                            <span>2. Tahap Pelaksanaan</span>
                            <svg class="transform transition-transform duration-300"
                            :class="selected === 2 ? '-rotate-180' : '' " width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.75 12.5L15 18.75L21.25 12.5" stroke="#1E1E1E" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                        {{-- content --}}
                        <div x-ref="accordion_terms"
                            x-bind:style="selected == 2 ? 'max-height:' + $el.scrollHeight + 'px' : ''"
                            class="relative overflow-hidden max-h-0 transition-all duration-500 text-sm/6">
                            <p class="p-6">
                                a. Mahasiswa siap di ruang laboratorium 20 menit sebelum praktek dimulai, dan sudah
                                mempersiapkan
                                peralatan yang akan di pergunakan serta membersihkan ruang laboratorium yang akan digunakan
                                untuk
                                praktek. <br>
                                b. Mahasiswa wajib menggunakan seragam dan tanda pengenal, skort biru serta melepas
                                sepatu/alas kaki
                                saat memasuki ruang laboratorium, melepas semua aksesoris kecuali jam tangan. <br>
                                c. Mahasiswa wajib membawa instruksi kerja dari keterampilanyang akan dipraktekkan
                                (dialarang
                                meminjam milik temannya). <br>
                                d. Mahasiswa menghubungi pembimbing 15 menit sebelum praktek dimulai (peralatan sudah siap).
                                <br>
                                e. Bagi mahasiswa yang terlambat 15 menit tanpa memberitahukan pembimbing, tidak
                                diperkenankan
                                mengikuti praktek laboratorium. <br>
                                f. Selama proses bimbingan alat komunikasi Hanphone/phoneCell harus dimatikan. <br>
                                g. Mahasiswa wajib mengikuti proses bimbingan dengan tertib. <br>
                                h. Menjaga kebersihan ruangan laboratorium selama pelaksanaan praktek dan dilarang
                                mencoret/merusak
                                phantom. <br>
                                i. Berlaku sopan, santun dan menjaga etika dalam laboratorium. <br>
                                j. Dilarang menyentuh, memindahkan dan menggunakan peralatan di laboratorium yang tidak
                                sesuai
                                dengan kegiatan praktikum matakuliah yang telah dijadwalkan. <br>
                                k. Membuang sampah sesuai pada tempatnya (sesuai label pada tempat sampah).
                            </p>
                        </div>
                    </li>
                    <li class="border-b border-gray-200 lg:py-2 lg:px-2">
                        {{-- button --}}
                        <button @click="selected !== 3 ? selected = 3 : selected = null"
                            class="w-full flex items-center flex-row justify-between">
                            <span>3. Tahap Akhir</span>
                            <svg 
                            class="transform transition-transform duration-300"
                            :class="selected === 3 ? '-rotate-180' : '' "
                            width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.75 12.5L15 18.75L21.25 12.5" stroke="#1E1E1E" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                        {{-- content --}}
                        <div x-ref="accordion_terms"
                            x-bind:style="selected == 3 ? 'max-height:' + $el.scrollHeight + 'px' : ''"
                            class="relative overflow-hidden max-h-0 transition-all duration-500 text-sm/6">
                            <p class="p-6">
                                a. Setelah selesai praktek, peralatan dikembalikan ketempat semual dalam keadaan bersih dan
                                kering. <br>
                                b. Sesudah kegiatan praktek mahasiswa membersihkan ruangan laboratorium. <br>
                                c. Setelah selesai praktek, setiap mahasiswa diwajibkan meminta tanda tangan kepada
                                pembimbing
                                tentang keterampilan yang telah dilaksanakan pada lembar kerja. <br>
                                d. Mahasiswa wajib mengisi lembar daftar hadir mahasiswa.
                            </p>
                        </div>
                    </li>
                    <li class=" border-gray-200 lg:py-2 lg:px-2">
                        {{-- button --}}
                        <button @click="selected != 4 ? selected = 4 : selected=null"
                            class="w-full flex items-center flex-row justify-between">
                            <span>Download PDF file here</span>
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                            class="transform transition-transform duration-300"
                            :class="selected === 4 ? '-rotate-180' : '' "
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.75 12.5L15 18.75L21.25 12.5" stroke="#1E1E1E" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div x-ref="accordion_terms"
                            x-bind:style="selected == 4 ? 'max-height:' + $el.scrollHeight + 'px' : ''"
                            class="relative overflow-hidden max-h-0 transition-all duration-500 text-sm/6">
                            <div class="pdf-container" id="pdf_viewer">
                                <iframe src="{{ asset('pdf/Tata Tertib.pdf') }}" style="border:none;" class="lg:w-full lg:min-h-[100vh] mt-2"></iframe>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <!-- Testimonials -->
    <div class="slider-1 py-32 bg-gray">
        <div class="container px-4 sm:px-8">
            <h2 class="mb-12 text-center lg:max-w-xl lg:mx-auto uppercase">Letak lan & wifi jurusan keperawatan</h2>

            {{--             
            <!-- Card Slider -->
            <div class="slider-container">
                <div class="swiper-container card-slider">
                    <div class="swiper-wrapper">

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="img/testimonial-1.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">It's been so fun to work with Pavo, I've managed to
                                        integrate it properly into my business flow and it's great</p>
                                    <p class="testimonial-author">Jude Thorn - Designer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="img/testimonial-2.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">We were so focused on launching as many campaigns as
                                        possible that we've forgotten to target our loyal customers</p>
                                    <p class="testimonial-author">Roy Smith - Developer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="img/testimonial-3.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">I've been searching for a tool like Pavo for so long. I
                                        love
                                        the reports it generates and the amazing high accuracy</p>
                                    <p class="testimonial-author">Marsha Singer - Marketer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="img/testimonial-4.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">We've been waiting for a powerful piece of software that
                                        can
                                        help businesses manage their marketing projects</p>
                                    <p class="testimonial-author">Tim Shaw - Designer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="img/testimonial-5.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">Searching for a great prototyping and layout design app
                                        was
                                        difficult but thankfully I found app suite quickly</p>
                                    <p class="testimonial-author">Lindsay Spice - Marketer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="img/testimonial-6.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">The app support team is amazing. They've helped me with
                                        some
                                        issues and I am so grateful to the entire team</p>
                                    <p class="testimonial-author">Ann Blake - Developer</p>
                                </div>
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
--}}
            <div class="flex gap-y-8 flex-col">
                <img src="{{ asset('img/letak-lan-dan-wifi-jurusan-keperawatan-polkesbaya-cropped.png') }}" alt=""
                    class="max-h-[50%] max-w-2xl m-auto">
                <img src="{{ asset('img/letak-lan-dan-wifi-jurusan-keperawatan-polkesbaya-2-cropped.png') }}"
                    alt="" class="max-h-[50%] max-w-2xl m-auto">
            </div>
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->


    <div class="slider-1 py-32">
        <div class="container px-4 sm:px-8">
            <h2 class="mb-12 text-center lg:max-w-xl lg:mx-auto uppercase">Jalur Evakuasi dan Letak Apar</h2>

            {{--             
            <!-- Card Slider -->
            <div class="slider-container">
                <div class="swiper-container card-slider">
                    <div class="swiper-wrapper">

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="img/testimonial-1.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">It's been so fun to work with Pavo, I've managed to
                                        integrate it properly into my business flow and it's great</p>
                                    <p class="testimonial-author">Jude Thorn - Designer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="img/testimonial-2.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">We were so focused on launching as many campaigns as
                                        possible that we've forgotten to target our loyal customers</p>
                                    <p class="testimonial-author">Roy Smith - Developer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="img/testimonial-3.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">I've been searching for a tool like Pavo for so long. I
                                        love
                                        the reports it generates and the amazing high accuracy</p>
                                    <p class="testimonial-author">Marsha Singer - Marketer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="img/testimonial-4.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">We've been waiting for a powerful piece of software that
                                        can
                                        help businesses manage their marketing projects</p>
                                    <p class="testimonial-author">Tim Shaw - Designer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="img/testimonial-5.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">Searching for a great prototyping and layout design app
                                        was
                                        difficult but thankfully I found app suite quickly</p>
                                    <p class="testimonial-author">Lindsay Spice - Marketer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="img/testimonial-6.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">The app support team is amazing. They've helped me with
                                        some
                                        issues and I am so grateful to the entire team</p>
                                    <p class="testimonial-author">Ann Blake - Developer</p>
                                </div>
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
--}}
            <div class="flex gap-y-8 flex-col">
                <img src="{{ asset('img/jalur-evakuasi-dan-letak-apar-lab-polkesbaya-cropped.png') }}" alt=""
                    class="max-h-[50%] max-w-2xl m-auto">
                <img src="{{ asset('img/jalur-evakuasi-dan-letak-apar-lab-polkesbaya-2-cropped.png') }}" alt=""
                    class="max-h-[50%] max-w-2xl m-auto">
            </div>
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of testimonials -->


    {{-- <!-- Pricing -->
    <div id="pricing" class="mb-[6rem]"
        style="background: linear-gradient(rgba(50, 60, 70, 0.9), rgba(50, 60, 70, 0.9)), url('{{ asset('/img/pricing-background.jpg') }}') center center no-repeat;">
        <div class="absolute bottom-0 h-[20rem] w-full bg-white"></div>
        <div class="container px-4 pb-px py-12 sm:px-8">
            <h2 class="mb-3 text-white lg:max-w-xl lg:mx-auto">Jalur Evakuasi dan Letak Apar</h2>
            <div class="flex gap-y-8 flex-col">
                <img src="{{ asset('img/jalur-evakuasi-dan-letak-apar-lab-polkesbaya-cropped.png') }}" alt=""
                    class="max-h-[50%] max-w-2xl m-auto">
                <img src="{{ asset('img/jalur-evakuasi-dan-letak-apar-lab-polkesbaya-2-cropped.png') }}"
                    alt="" class="max-h-[50%] max-w-2xl m-auto">
            </div>


        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing --> --}}


    {{-- <!-- Conclusion -->
    <div id="download" class="basic-5">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2">
            <div class="mb-16 lg:mb-0">
                <img src="img/conclusion-smartphone.png" alt="alternative" />
            </div>
            <div class="lg:mt-24 xl:mt-44 xl:ml-12 animate-appear animation-appear">
                <p class="mb-9 text-gray-800 text-3xl leading-10">Team management mobile applications don’t get
                    much
                    better than Pavo. Download it today</p>
                <a class="btn-solid-lg" href="#your-link"><i class="fab fa-apple"></i>Download</a>
                <a class="btn-solid-lg secondary" href="#your-link"><i class="fab fa-google-play"></i>Download</a>
            </div>
        </div> <!-- end of container -->
    </div> <!-- end of basic-5 -->
    <!-- end of conclusion --> --}}

    {{-- <script>
        // shows pdf viewer



        //add the link to your pdf file
        const pdfUrl = 'pdf/Tata Tertib.pdf';

        //get the container element
        const pdfContainer = document.getElementById('pdf_viewer');

        // function loadPdfViewer()
        // load pdf document
        pdfjsLib.getDocument(pdfUrl).promise.then(pdfDoc => {
            //this for loop, loops through all of the pages, and load the doc
            for (let pageNum = 1; pageNum <= pdfDoc.numPages; pageNum++) {

                pdfDoc.getPage(pageNum).then(page => {
                    // create a viewport to render the PDF page. the higher number you..
                    const viewport = page.getViewport({
                        scale: 2
                    });

                    // set the dimensions of the container to match the PDF size
                    pdfContainer.style.width = viewport.width + 'px';
                    pdfContainer.style.height = viewport.height + 'px';

                    // Prepare the canvas element to render the PDF page
                    const pdfCanvas = document.createElement('canvas');
                    pdfContainer.appendChild(pdfCanvas);

                    // Set the canvas dimensions
                    pdfCanvas.width = viewport.width;
                    pdfCanvas.height = viewport.height;

                    // Render the PDF page on the canvas
                    const renderContext = {
                        canvasContext: pdfCanvas.getContext('2d'),
                        viewport: viewport
                    };

                })
            }
        })
    </script> --}}
@endsection
