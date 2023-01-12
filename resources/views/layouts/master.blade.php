<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
</head>

<body>

    @include('partials.header')

    <main class="w-full flex flex-grow mt-16">
        @include('partials.sidebar')
        @yield('content')
    </main>
    @include('partials.footer')
</body>

</html>
