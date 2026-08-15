<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Aklat Atbp.')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    {{-- Reusable navigation component --}}
    @include('components.navbar')

    <main>

        {{-- Page-specific content is inserted here --}}
        @yield('content')

    </main>

    {{-- Reusable footer component --}}
    @include('components.footer')

</body>

</html>