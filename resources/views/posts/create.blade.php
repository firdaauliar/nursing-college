@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Buat Berita') }}
    </h2>
@endsection

@section('content')
    <div class="">
        {{-- <div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg p-6"> --}}

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="lg:w-2/3">
            @csrf

            {{-- Title --}}
            <div class="mb-4">
                <label class="block">Title</label>
                <input type="text" name="title" value="{{ old('title') }}" id="title"
                    class="w-full border-[1px] border-gray-300 rounded-sm shadow-xl outline-none bg-blue-100 focus:bg-white">
                @error('title')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            {{-- Slug --}}
            <div class="mb-8">
                <label class="block">Slug</label>
                <input type="text" name="slug" value="{{ old('title') }}" id="slug" readonly
                    class="w-full rounded-sm outline-none border-gray-200 bg-gray-200">

            </div>


            {{-- Featured Image --}}
            {{-- <div class="mb-4">
            <label class="block ">Featured Image</label>
            <input type="file" name="featured_image" class="w-full border-gray-200 rounded-sm shadow-md">
            </div> --}}

            {{-- Category --}}
            <div class="mb-4">
                <label class="block ">Category</label>
                <select name="category_id" class="w-full border-[1px] outline-none border-gray-300 rounded-sm shadow-md">
                    <option value="">-- Select Category --</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            {{-- Google Drive Link
            <div class="mb-4">
                <label class="flex flex-row items-center">
                    Google Drive Link
                    <span class="relative group">
                        <!-- Icon Tooltip -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500 cursor-pointer" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M12 20.5a8.5 8.5 0 100-17 8.5 8.5 0 000 17z" />
                        </svg>
                        <!-- Isi Tooltip -->
                        <span
                            class="absolute left-1/2 -translate-x-1/2 bottom-full mb-2 hidden group-hover:block w-max max-w-xs rounded-md bg-gray-800 px-2 py-1 text-xs text-white shadow-lg">
                            Masukkan link Google Drive yang valid (awali dengan https://).
                        </span>
                    </span>
                </label>
                <input type="url" name="drive_link" value="{{ old('drive_link') }}"
                    class="w-full border-gray-200 rounded-sm shadow-md">
            </div> --}}

            {{-- Google Drive Link --}}
            <div class="mb-4">
                <label class="flex flex-row items-center gap-2">
                    Google Drive Link
                    <div class="relative group inline-block">
                        <!-- Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 cursor-pointer" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M12 20.5a8.5 8.5 0 100-17 8.5 8.5 0 000 17z" />
                        </svg>

                        <!-- Tooltip -->
                        <div
                            class="absolute hidden group-hover:block
                        bg-black text-white text-xs rounded-sm py-1 px-2
                        bottom-full left-1/2 -translate-x-1/2 mb-2
                        w-max z-[999]">
                        File embedded in the article should be uploaded in the google drive and copy the url here
                        </div>
                    </div>
                </label>

                <input type="url" name="drive_link" value="{{ old('drive_link') }}"
                    class="w-full border-[1px] border-gray-300 outline-none rounded-sm px-2 py-1">
            </div>



            {{-- Content --}}
            <div class="mb-4">
                <label for="content" class="block ">Content</label>
                {{-- <textarea name="content" rows="6" class="w-full border-gray-200 rounded-sm shadow-md">{{ old('content') }}</textarea> --}}
                <input id="content" type="hidden" name="content" value="{{ old('content') }}">
                <trix-editor input="content"></trix-editor>
                @error('content')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>



            {{-- Type --}}
            {{-- <div class="mb-4">
                <label class="block font-medium">Type</label>
                <select name="type" class="w-full border-gray-300 rounded-md shadow-sm">
                    <option value="post" {{ old('type') == 'post' ? 'selected' : '' }}>Post</option>
                    <option value="page" {{ old('type') == 'page' ? 'selected' : '' }}>Page</option>
                </select>
            </div> --}}



            {{-- Status --}}
            {{-- <div class="mb-4">
                <label class="block font-medium">Status</label>
                <select name="status" class="w-full border-gray-300 rounded-md shadow-sm">
                    <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                </select>
            </div> --}}

            {{-- Submit --}}
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                    Save Post
                </button>
            </div>
        </form>
    </div>

    <script>
        // fungsi debounce
        function debounce(fn, delay) {
            let timer;
            return function(...args) {
                clearTimeout(timer);
                timer = setTimeout(() => fn.apply(this, args), delay);
            };
        }
        $('#title').on('keyup', debounce(function() {
            let title = $(this).val();

            fetch('{{ route('posts.checkSlug') }}?title=' + title)
                .then(response => response.json())
                .then(data => {
                    $('#slug').val(data.slug)
                })
                .catch(error => console.log(error))
        }, 500))

        document.addEventListener("trix-file-accept", function(event) {
            event.preventDefault(); // file tidak akan di-attach
        });
    </script>
@endsection
