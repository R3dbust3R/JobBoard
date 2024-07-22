@props(['title' => '', 'page' => 'home'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>JobBoard {{ $title != '' ? '|' : '' }} {{ $title }}</title>
</head>
<body class="bg-gray-900 text-gray-200">

    {{-- navbar --}}
    <x-navbar :page="$page"></x-navbar>
    {{-- navbar --}}

    {{-- main content --}}
    {{ $slot }}
    {{-- main content --}}

    {{-- footer --}}
    <x-footer></x-footer>
    {{-- footer --}}
    

    @vite('resources/js/app.js')
</body>
</html>