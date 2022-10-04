{{-- jika menggunakan slot maka dapat menggunakan : untuk menghemat pada class --}}
<x-app-layout :title="$name ?? 'Profile'">
    <h1>{{ $name ?? 'Profile' }}</h1>
</x-app-layout>
