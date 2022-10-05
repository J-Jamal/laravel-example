<x-app-layout>
    <h1>Tasks</h1>
    {{-- method post berfungsi untuk menampilkan data yang sudah dibuat --}}
    <form action="/tasks" method="POST">
        {{-- wajib untuk keamanan jika menggunakan input atau form --}}
        @csrf
        {{-- name list nantinya akan dipanggil di controller yang infin mengaksesnya --}}
        <input type="text" name="list" id="" placeholder="The name of the task">
        <button type="submit">Send</button>
    </form>
    {{-- menghapus border list --}}
    <ul style="list-style-type:none">
        {{-- membuat index supaya bisa menampilkan index atau penomoran dalam list --}}
        @foreach ($tasks as $index => $task)
            {{-- memmanggil controller dan membuat singular dan plural dan juga memanggil nama databse yang ingin ditampilkan dengan variabel --}}
            <li style="margin-bottom: 15px">{{ $index + 1 }} - {{ $task->list }} - <a style="color: green"
                    href="/tasks/{{ $task->id }}/edit">edit</a>
                <form action="/tasks/{{ $task->id }}" method="POST" style="display:inline">
                    @csrf
                    @method('delete')
                    <button type="submit">delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-app-layout>
