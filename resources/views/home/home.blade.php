<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $name }}</title>
    {{-- link untuk mengakses css yang ada di menu public  --}}
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>

<body>
    <h1>aku akan belajar {{ $name }}</h1>
</body>

</html>
