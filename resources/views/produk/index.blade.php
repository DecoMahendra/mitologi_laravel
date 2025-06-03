@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="text-center mb-10">
        <h1 class="text-4xl font-extrabold text-gray-800 uppercase">Produk Kami</h1>
        <p class="text-gray-500 mt-2">Temukan koleksi terbaik dari kami 🎽🧥🎒</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid@extends('layouts.app')

@section('content')
<div class="bg-black py-6 mb-10">
    <div class="max-w-7xl mx-auto px-4 flex items-center justify-between">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12">
        <h1 class="text-white text-3xl font-bold text-center flex-grow -ml-12">Produk</h1>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
        @foreach ($produks as $produk)
            <a href="{{ route('produk.show', $produk->id) }}" class="block text-center">
                <div class="bg-gray-200 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition p-4">
                    <img src="{{ asset('images/produk/' . $produk->gambar) }}"
                         alt="{{ $produk->nama }}"
                         class="w-full h-48 object-contain mx-auto mb-2">
                </div>
                <p class="mt-2 font-medium text-gray-800">{{ $produk->nama }}</p>
            </a>
        @endforeach
    </div>
</div>
@endsection
-cols-4 gap-8">
        @forelse ($produks as $produk)
            <a href="{{ route('produk.show', $produk->id) }}" class="group">
                <div class="bg-white rounded-lg overflow-hidden shadow hover:shadow-xl transition duration-300">
                    <div class="relative">
                        <img src="{{ asset('images/produk/' . $produk->gambar) }}" alt="{{ $produk->nama }}"
                             class="w-full h-60 object-cover group-hover:scale-105 transition-transform duration-300 ease-in-out">
                    </div>
                    <div class="p-4 text-center">
                        <h2 class="text-lg font-semibold text-gray-800 group-hover:text-indigo-600 transition-colors">{{ $produk->nama }}</h2>
                    </div>
                </div>
            </a>
        @empty
            <div class="col-span-full text-center text-gray-500">
                Tidak ada produk yang tersedia saat ini.
            </div>
        @endforelse
    </div>
</div>
@endsection
