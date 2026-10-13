<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Fasilitas Kota')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boostrap@5.3.8/dist/css/boostrap.min.cs">
</head>
<body class="bg-light">
    @include('partials.navbar')

    <main class="container py-4">
        @yield('content')
    </main>

    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/boostrap@5.3.8/dist/js/boostrap.bundle
    in.js"></script>
</body>
</html>