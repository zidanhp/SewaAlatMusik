<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'My App')</title>
    <script src="{{ asset('styles/tailwindcss3.4.1.js') }}"></script>
</head>
<body class="min-h-screen flex flex-col">
    <header>
        @include('components.header')
    </header>
    
    <h1 class="text-center text-xl font-bold mt-10">List Produk</h1>
    
    <div class="flex-grow px-4">
        <main class="w-full max-w-[100vw] overflow-x-auto">
            @yield('content')
        </main>
    </div>
    
    <footer>
        @include('components.footer')
    </footer>
</body>
</html>