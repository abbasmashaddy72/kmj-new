<!doctype html>
<html lang="en" class="">

<head>
    <meta charset="utf-8">
    <title>Al Karbala</title>
    <script>
        if (localStorage.getItem('dark-mode') == 'true' || !('dark-mode' in localStorage)) {
            document.querySelector('html').classList.add('dark');
        } else {
            document.querySelector('html').classList.remove('dark');
        }
    </script>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="{{ mix('css/frontend/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.c302aa41b3733e3b3aa7.css') }}" />
    @yield('styles')
</head>
@include('frontend.partials.header')

<body class="font-inter antialiased bg-white text-gray-900 dark:bg-gray-900 dark:text-gray-100 tracking-tight">
    <div class="flex flex-col min-h-screen overflow-hidden">

        <main class="grow">
            <div class="relative max-w-6xl mx-auto h-0 pointer-events-none -z-1" aria-hidden="true">
                {{-- @include('frontend.partials.illustration') --}}
            </div>
            @yield('content')

        </main>
        @include('frontend.partials.footer')

    </div>
    <script src={{ asset('js/frontend/main.00c21bbed7bfc2c2321f.js') }}></script>
    <script src={{ mix('js/frontend/app.js') }}></script>

</body>

</html>
