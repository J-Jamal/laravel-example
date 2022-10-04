<x-app-layout title="About Page">
    Contact Page
    <form action="/contact" method="POST">
        @csrf
        <button type="submit">send</button>
    </form>
</x-app-layout>
