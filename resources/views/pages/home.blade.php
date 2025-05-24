@extends('layouts.app')

@section('title', 'home')
@section('page_title', 'Selamat datang di Berita Batam')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Selamat Pagi</h1>
    <p class="mb-4">Berikut adalah berita update di hari ini</p>

    @include('components.card', [
        'imgsrc' => 'images/gitar.jpg',
        'title' => 'Gitar Akustik Grade Premium',
        'description' => 'Gitar Akustik adalah salah satu top seller di website kami.'
    ])
@endsection