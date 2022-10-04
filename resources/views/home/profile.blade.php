{{-- jika menggunakan slot maka dapat menggunakan : untuk menghemat pada class --}}
<x-app-layout :title="$username ?? 'Profile'">
    <h1>{{ $username ?? 'Profile' }}</h1>
</x-app-layout>
