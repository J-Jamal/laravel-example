{{-- ini adalah template master atau template utama --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- meemberikan parameter untuk mengakses ke menu lain --}}
    <title>{{ $title }} | Parsinta</title>
    {{-- link untuk mengakses css yang ada di menu public  --}}
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>

<body>
    {{-- <h1>aku akan belajar {{ $name }}</h1> --}}
    {{-- <h2>ini halaman home</h2> --}}
    {{-- pemanggilan navbar menggunakan component --}}
    <x-navbar>

    </x-navbar>
    {{ $slot }}
    {{-- hasil include atau pemanggilan dari file layouts navbar --}}
    {{-- @include('layouts.navbar') --}}
    {{-- membuat sejenis parameter untuk di akses di menu yang memanggilnya --}}
    @yield('content')
</body>

</html>
