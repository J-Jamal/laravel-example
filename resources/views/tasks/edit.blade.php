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
                    <div class="mb-2">
                        <input type="text" name="list" class="form-control @error('list') is-invalid @enderror"
                            id="" placeholder="The name of the task" value="{{ $task->list }}">
                        @error('list')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn btn-primary" type="submit">update</button>
                    {{-- name list nantinya akan dipanggil di controller yang infin mengaksesnya --}}
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
