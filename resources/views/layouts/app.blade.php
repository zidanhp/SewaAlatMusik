<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>

    <link href="styles/flowbite.min.css" rel="stylesheet">
    <script src="styles/flowbite.min.js"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
    
    @include('components.menu')

    <main class="container mx-auto mt-10 px-4">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">@yield('page_title', 'Judul_Halaman')</h2>
            @yield('content')
        </div>
    </main>

    <footer>
        &copy; {{ date('Y') }} Laravel App. All rights reserved.
    </footer>
</body>
</html>