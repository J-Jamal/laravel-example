<x-app-layout>
    <h1>Tasks</h1>
    {{-- method post berfungsi untuk menampilkan data yang sudah dibuat --}}
    <form action="/tasks/{{ $task->id }}" method="POST">
        {{-- html tidak support method put dan delete jdi di laravel diakali dengan melakukan @method --}}
        @method('put')
        {{-- wajib untuk keamanan jika menggunakan input atau form --}}
        @csrf
        {{-- name list nantinya akan dipanggil di controller yang infin mengaksesnya --}}
        <input type="text" name="list" id="" placeholder="The name of the task" value="{{ $task->list }}">
        <button type="submit">update</button>
    </form>
</x-app-layout>
