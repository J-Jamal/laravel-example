<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Tasks</h1>
                {{-- method post berfungsi untuk menampilkan data yang sudah dibuat --}}
                <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                    {{-- html tidak support method put dan delete jdi di laravel diakali dengan melakukan @method --}}
                    @method('put')
                    {{-- wajib untuk keamanan jika menggunakan input atau form --}}
                    @csrf
                    @include('tasks._form')
                    {{-- name list nantinya akan dipanggil di controller yang infin mengaksesnya --}}
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
