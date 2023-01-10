<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
</head>

<body>

    @include('partials.header')

    <main class="container mt-5 flex flex-grow">
        @yield('content')
    </main>
    @include('partials.footer')
</body>

</html>
