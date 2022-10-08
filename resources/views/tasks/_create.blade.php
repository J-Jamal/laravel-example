<div class="card">
    <div class="card-header">Create New Task</div>
    <div class="card-body">
        @if ($errors->all())
            <div class="alert alert-danger">
                Your data was invalid
            </div>
        @endif
        <h1>Tasks</h1>
        {{-- method post berfungsi untuk menampilkan data yang sudah dibuat --}}
        <form action="{{ route('tasks.store') }}" method="POST" class="d-flex">
            {{-- wajib untuk keamanan jika menggunakan input atau form --}}
            @csrf
            <div class="mb-2">
                {{-- name list nantinya akan dipanggil di controller yang infin mengaksesnya --}}
                <input type="text" name="list" id=""
                    class="form-control @error('list')
                    is-invalid @enderror me-2"
                    placeholder="The name of the task">
                @error('list')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <button class="btn btn-primary" type="submit">Send</button>
        </form>
    </div>
</div>
