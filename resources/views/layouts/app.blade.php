<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ trim($__env->yieldContent('title')) }}</title>
    <meta name="description" content="{{ trim($__env->yieldContent('description')) }}">
{{--    <link rel="icon" type="image/svg+xml" href="{{ url('/') . '/images/favicon.svg' }}" sizes="any">--}}
    @vite('resources/scss/app.scss')
    @yield('styles')
</head>

<body>

    @include('include.header')

    <main>
        @yield('content')
    </main>

{{--    @include('include.footer')--}}

    @include('include.modal-board')

    @vite('resources/js/app.js')
    @yield('scripts')

</body>
</html>
