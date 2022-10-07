<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Create New Task</div>
                    <div class="card-body">
                        <h1>Tasks</h1>
                        {{-- method post berfungsi untuk menampilkan data yang sudah dibuat --}}
                        <form action="{{ route('tasks.store') }}" method="POST" class="d-flex">
                            {{-- wajib untuk keamanan jika menggunakan input atau form --}}
                            @csrf
                            {{-- name list nantinya akan dipanggil di controller yang infin mengaksesnya --}}
                            <input type="text" name="list" id="" class="form-control me-2"
                                placeholder="The name of the task">
                            <button class="btn btn-primary" type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        {{-- menghapus border list --}}
        <ul class="list-group mt-4">
            {{-- membuat index supaya bisa menampilkan index atau penomoran dalam list --}}
            @foreach ($tasks as $index => $task)
                {{-- memmanggil controller dan membuat singular dan plural dan juga memanggil nama databse yang ingin ditampilkan dengan variabel --}}
                <li class="list-group-item d-flex align-items-center justify-content-between">{{ $index + 1 }} -
                    {{ $task->list }}
                    <div class="d-flex">
                        <a class="btn btn-primary me-2" href="{{ route('tasks.edit', $task->id) }}">edit</a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
