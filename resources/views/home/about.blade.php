<x-app-layout title="About Page">
    {{-- customisasi layout pada css dengan menggunakan slot --}}
    @slot('styles')
        <style>
            body {
                background-color: indigo;
            }
        </style>
    @endslot
    About Page
</x-app-layout>
