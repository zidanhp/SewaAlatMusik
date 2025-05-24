@extends('layouts.list')

@section('content')
    <div id="data" class="container mx-auto px-4 py-8">
        <div class="overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-16">No</th>
                        <th scope="col" class="px-6 py-3">Nama Produk</th>
                        <th scope="col" class="px-6 py-3">Deskripsi Produk</th>
                        <th scope="col" class="px-6 py-3">Harga Produk</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nama as $index => $item)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $index + 1 }}</td>
                        <td class="px-6 py-4">{{ $item }}</td>
                        <td class="px-6 py-4">{{ $desc[$index] }}</td>
                        <td class="px-6 py-4">Rp {{ number_format($harga[$index], 0, ',', '.') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div id="input-form" class="bg-white p-6 rounded-lg shadow">
            <h1 class="text-2xl font-bold mb-6 text-center">Input Produk Baru</h1>
            <form method="POST" action="{{ route('produk.simpan') }}">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Nama Produk</label>
                    <input type="text" class="w-full px-3 py-2 border rounded" name="nama" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Deskripsi</label>
                    <textarea class="w-full px-3 py-2 border rounded" name="deskripsi" rows="3" required></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Harga</label>
                    <input type="number" class="w-full px-3 py-2 border rounded" name="harga" required>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Simpan Produk
                </button>
            </form>
        </div>
@endsection
