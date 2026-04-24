<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title', 'Admin')</title>
    @vite(['resources/css/admin.css', 'resources/js/admin.js'])
  </head>
  <body
    x-data="{ darkMode: false }"
    x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
             $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark bg-gray-900': darkMode === true}"
    class="min-h-screen"
  >
    @yield('content')
  </body>
</html>
