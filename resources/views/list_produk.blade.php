@extends('layouts.list')

@section('content')
    <div class="container mx-auto px-4 py-8">
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
@endsection
