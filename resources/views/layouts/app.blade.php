<!DOCTYPE html>
<html>
<head>
    <title>My App</title>
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
</head>
<body>

    @include('layouts.header')
    @include('layouts.sidebar')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    <script src="{{ asset('template/js/app.js') }}"></script>
</body>
</html>