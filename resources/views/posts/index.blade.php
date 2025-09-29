@extends('layouts.app')
@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Daftar Berita') }}
    </h2>
@endsection

@section('content')
    <div class="container">


        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Posts</h1>
            <a href="{{ route('posts.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">
                + Create Post
            </a>
        </div>

        @if (session('success'))
            <div class="text-green-500">{{ session('success') }}</div>
        @endif

        {{-- <table class="table table-bordered">
            <thead>
                <tr>
                    <th></th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name ?? '-' }}</td>
                        <td>{{ $post->created_at->format('d M Y') }}</td>
                        <td class="flex flex-col gap-y-2">
                            <a href="{{ route('posts.show', $post) }}"
                                class="btn-outline-primary hover:bg-blue-400 hover:text-white rounded-sm">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.5 8.5V9.5C10.5 9.76522 10.3946 10.0196 10.2071 10.2071C10.0196 10.3946 9.76522 10.5 9.5 10.5H2.5C2.23478 10.5 1.98043 10.3946 1.79289 10.2071C1.60536 10.0196 1.5 9.76522 1.5 9.5V8.5M10.5 3.5V2.5C10.5 2.23478 10.3946 1.98043 10.2071 1.79289C10.0196 1.60536 9.76522 1.5 9.5 1.5H2.5C2.23478 1.5 1.98043 1.60536 1.79289 1.79289C1.60536 1.98043 1.5 2.23478 1.5 2.5V3.5"
                                        stroke="#2B7FFF" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M6 6.5C6.27614 6.5 6.5 6.27614 6.5 6C6.5 5.72386 6.27614 5.5 6 5.5C5.72386 5.5 5.5 5.72386 5.5 6C5.5 6.27614 5.72386 6.5 6 6.5Z"
                                        stroke="#2B7FFF" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M9.47201 6.16501C9.50936 6.05818 9.50936 5.94184 9.47201 5.83501C9.1905 5.14523 8.70991 4.55492 8.09154 4.1394C7.47316 3.72387 6.74503 3.50195 6.00001 3.50195C5.25499 3.50195 4.52686 3.72387 3.90848 4.1394C3.29011 4.55492 2.80951 5.14523 2.52801 5.83501C2.49066 5.94184 2.49066 6.05818 2.52801 6.16501C2.80951 6.8548 3.29011 7.4451 3.90848 7.86063C4.52686 8.27616 5.25499 8.49808 6.00001 8.49808C6.74503 8.49808 7.47316 8.27616 8.09154 7.86063C8.70991 7.4451 9.1905 6.8548 9.47201 6.16501Z"
                                        stroke="#2B7FFF" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Hapus post ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Belum ada post</td>
                    </tr>
                @endforelse
            </tbody>
        </table> --}}

        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 col">
                <thead class="bg-gray-100">
                    <tr>
                        <th scope="col" class="px-4 py-2 text-left text-sm font-semibold text-gray-700 border-b">
                            #
                        </th>
                        <th scope="col" class="px-4 py-2 text-left text-sm font-semibold text-gray-700 border-b">
                            Judul
                        </th>
                        <th scope="col" class="px-4 py-2 text-left text-sm font-semibold text-gray-700 border-b">Kategori
                        </th>
                        <th scope="col" class="px-4 py-2 text-left text-sm font-semibold text-gray-700 border-b">Tanggal
                        </th>
                        <th scope="col" class="px-4 py-2 text-left text-sm font-semibold text-gray-700 border-b">Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($posts as $post)
                        <tr class="odd:bg-white even:bg-gray-50">
                            <th scope="row" class="px-4 py-2 text-sm text-gray-700 font-medium text-left">
                                {{ $loop->iteration }}</th>
                            <th scope="row" class="px-4 py-2 text-sm text-gray-700 font-medium text-left">
                                {{ $post->title }}</th>
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $post->category->name ?? '-' }}</td>
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $post->created_at->format('d M Y') }}</td>
                            <td class="px-4 py-2 text-sm text-gray-700 flex flex-row gap-x-4">
                                <a href="{{ route('posts.show', $post) }}"
                                    class="hover:scale-125">
                                    <svg width="16" height="16" viewBox="0 0 12 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.5 8.5V9.5C10.5 9.76522 10.3946 10.0196 10.2071 10.2071C10.0196 10.3946 9.76522 10.5 9.5 10.5H2.5C2.23478 10.5 1.98043 10.3946 1.79289 10.2071C1.60536 10.0196 1.5 9.76522 1.5 9.5V8.5M10.5 3.5V2.5C10.5 2.23478 10.3946 1.98043 10.2071 1.79289C10.0196 1.60536 9.76522 1.5 9.5 1.5H2.5C2.23478 1.5 1.98043 1.60536 1.79289 1.79289C1.60536 1.98043 1.5 2.23478 1.5 2.5V3.5"
                                            stroke="#2B7FFF" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M6 6.5C6.27614 6.5 6.5 6.27614 6.5 6C6.5 5.72386 6.27614 5.5 6 5.5C5.72386 5.5 5.5 5.72386 5.5 6C5.5 6.27614 5.72386 6.5 6 6.5Z"
                                            stroke="#2B7FFF" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M9.47201 6.16501C9.50936 6.05818 9.50936 5.94184 9.47201 5.83501C9.1905 5.14523 8.70991 4.55492 8.09154 4.1394C7.47316 3.72387 6.74503 3.50195 6.00001 3.50195C5.25499 3.50195 4.52686 3.72387 3.90848 4.1394C3.29011 4.55492 2.80951 5.14523 2.52801 5.83501C2.49066 5.94184 2.49066 6.05818 2.52801 6.16501C2.80951 6.8548 3.29011 7.4451 3.90848 7.86063C4.52686 8.27616 5.25499 8.49808 6.00001 8.49808C6.74503 8.49808 7.47316 8.27616 8.09154 7.86063C8.70991 7.4451 9.1905 6.8548 9.47201 6.16501Z"
                                            stroke="#2B7FFF" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="{{ route('posts.edit', $post) }}" class="">
                                    <svg width="16" height="16" viewBox="0 0 12 12" fill="none" class="hover:scale-125"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.5 5.99997C10.3674 5.99997 10.2402 6.05265 10.1464 6.14642C10.0527 6.24018 10 6.36736 10 6.49997V9.49997C10 9.63258 9.94732 9.75976 9.85355 9.85352C9.75979 9.94729 9.63261 9.99997 9.5 9.99997H2.5C2.36739 9.99997 2.24021 9.94729 2.14645 9.85352C2.05268 9.75976 2 9.63258 2 9.49997V2.49997C2 2.36736 2.05268 2.24018 2.14645 2.14642C2.24021 2.05265 2.36739 1.99997 2.5 1.99997H5.5C5.63261 1.99997 5.75979 1.94729 5.85355 1.85352C5.94732 1.75975 6 1.63258 6 1.49997C6 1.36736 5.94732 1.24018 5.85355 1.14642C5.75979 1.05265 5.63261 0.999969 5.5 0.999969H2.5C2.10218 0.999969 1.72064 1.158 1.43934 1.43931C1.15804 1.72061 1 2.10214 1 2.49997V9.49997C1 9.89779 1.15804 10.2793 1.43934 10.5606C1.72064 10.8419 2.10218 11 2.5 11H9.5C9.89782 11 10.2794 10.8419 10.5607 10.5606C10.842 10.2793 11 9.89779 11 9.49997V6.49997C11 6.36736 10.9473 6.24018 10.8536 6.14642C10.7598 6.05265 10.6326 5.99997 10.5 5.99997ZM3 6.37997V8.49997C3 8.63258 3.05268 8.75976 3.14645 8.85352C3.24021 8.94729 3.36739 8.99997 3.5 8.99997H5.62C5.6858 9.00035 5.75103 8.98774 5.81195 8.96286C5.87287 8.93797 5.92828 8.90131 5.975 8.85497L9.435 5.38997L10.855 3.99997C10.9019 3.95349 10.9391 3.89819 10.9644 3.83726C10.9898 3.77633 11.0029 3.71098 11.0029 3.64497C11.0029 3.57896 10.9898 3.51361 10.9644 3.45268C10.9391 3.39175 10.9019 3.33645 10.855 3.28997L8.735 1.14497C8.68852 1.09811 8.63322 1.06091 8.57229 1.03552C8.51136 1.01014 8.44601 0.99707 8.38 0.99707C8.31399 0.99707 8.24864 1.01014 8.18771 1.03552C8.12678 1.06091 8.07148 1.09811 8.025 1.14497L6.615 2.55997L3.145 6.02497C3.09866 6.07169 3.062 6.1271 3.03711 6.18802C3.01223 6.24894 2.99962 6.31417 3 6.37997ZM8.38 2.20497L9.795 3.61997L9.085 4.32997L7.67 2.91497L8.38 2.20497ZM4 6.58497L6.965 3.61997L8.38 5.03497L5.415 7.99997H4V6.58497Z"
                                            fill="#2B7FFF" />
                                    </svg></a>
                                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Hapus post ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="hover:scale-125">
                                        <svg width="16" height="16" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_2131_23)">
                                                <path
                                                    d="M5.30747 -0.0144043C4.40377 -0.0144043 3.67777 0.736519 3.67777 1.64436V1.84606H1.84593C1.59162 1.84606 1.38439 2.05329 1.38439 2.3076V2.76913H0.922852V3.69221H1.84593V10.6153C1.84593 11.3745 2.47131 11.9999 3.23054 11.9999H8.769C9.52824 11.9999 10.1536 11.3745 10.1536 10.6153V3.69221H11.0767V2.76913H10.6152V2.3076C10.6152 2.05329 10.4079 1.84606 10.1536 1.84606H8.32177V1.6439C8.32177 0.736519 7.59577 -0.0144043 6.69208 -0.0144043H5.30747ZM5.30747 0.937288H6.69208C7.06316 0.937288 7.37008 1.24006 7.37008 1.6439V1.84606H4.62901V1.6439C4.62901 1.24006 4.93593 0.93775 5.307 0.93775L5.30747 0.937288ZM2.76901 3.69221H5.13439C5.19162 3.69821 5.24839 3.70652 5.30747 3.70652H6.69208C6.75116 3.70652 6.80747 3.69821 6.86516 3.69221H9.23054V10.6153C9.23054 10.8751 9.02885 11.0768 8.769 11.0768H3.23054C2.9707 11.0768 2.76901 10.8751 2.76901 10.6153V3.69221ZM3.69208 4.61529V10.1537H4.61516V4.61529H3.69208ZM5.53824 4.61529V10.1537H6.46131V4.61529H5.53824ZM7.38439 4.61529V10.1537H8.30747V4.61529H7.38439Z"
                                                    fill="#F52D00" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_2131_23">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Belum ada post</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- {{ $posts->links() }} --}}
    </div>
@endsection
