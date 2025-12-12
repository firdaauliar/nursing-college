@extends('layouts.landing')

@section('content')
    <!-- Header -->
    <header class="ex-header bg-gray">
        <div class="container px-4 sm:px-8 xl:px-4">
            <h1 class="xl:ml-24">Loan Form</h1>
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

    {{-- <!-- Basic -->
    <div class="ex-basic-1 py-12">
        <div class="container px-4 sm:px-8 text-center">
            <img class="inline mt-12 mb-4 object-cover lg:h-[90vh] lg:w-full" src="{{ asset('img/poltekkes lab 1.jpg') }}" alt="alternative" />
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic --> --}}


    <!-- Basic -->
    <div class="ex-basic-1 pt-4">
        <div class="container px-4 sm:px-8 xl:px-32 xl:py-20">
            <p class="mb-4"> The Loan Form is used when you will borrow equipment and materials at the depot or when you
                borrow a laboratory key. make sure you are with an officer who supervises, do not do it alone or without
                duty supervision.</p>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLScvCt9DsWK7zUTVMYO7-eNkGjvoLWsSMOSrywoRjEk1lgCtpg/viewform"
                target="_blank" rel="noopener noreferrer" class="flex flex-row items-center xl:py-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
                    <path fill="#454545"
                        d="M6.4 2A2.4 2.4 0 0 0 4 4.4v19.2A2.4 2.4 0 0 0 6.4 26h15.2a2.4 2.4 0 0 0 2.4-2.4V11.578c0-.729-.29-1.428-.805-1.944l-6.931-6.931A2.4 2.4 0 0 0 14.567 2zm-.9 2.4a.9.9 0 0 1 .9-.9H14V10a2 2 0 0 0 2 2h6.5v11.6a.9.9 0 0 1-.9.9H6.4a.9.9 0 0 1-.9-.9zm16.44 6.1H16a.5.5 0 0 1-.5-.5V4.06z" />
                </svg>
                Loan Form
            </a>
        </div> <!-- end of container -->

        
    </div> <!-- end of ex-basic-1 -->
    
            
    <!-- end of basic -->
@endsection
