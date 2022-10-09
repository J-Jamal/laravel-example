<div class="card">
    <div class="card-header">Create New Task</div>
    <div class="card-body">
        {{-- @if ($errors->all())
            <div class="alert alert-danger">
                Your data was invalid
            </div>
        @endif --}}
        <h1>Tasks</h1>
        {{-- method post berfungsi untuk menampilkan data yang sudah dibuat --}}
        <form action="{{ route('tasks.store') }}" method="POST" class="d-flex">
            {{-- wajib untuk keamanan jika menggunakan input atau form --}}
            @csrf
            @include('tasks._form')
        </form>
    </div>
</div>
