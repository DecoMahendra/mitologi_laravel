@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-6">
    <div class="bg-white shadow rounded-lg p-6 flex flex-col items-center text-center">
        <img src="{{ asset('images/produk/' . $produk->gambar) }}" alt="{{ $produk->nama }}" class="w-64 h-64 object-cover rounded mb-4">
        <h2 class="text-2xl font-bold mb-2">{{ $produk->nama }}</h2>
        <p class="text-gray-600 text-lg">Harga: <span class="text-green-600 font-semibold">Rp {{ number_format($produk->harga) }}</span></p>
    </div>
</div>
@endsection
