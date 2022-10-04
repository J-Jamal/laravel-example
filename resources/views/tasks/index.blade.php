<x-app-layout>
    <h1>Tasks</h1>
    <ol>
        @foreach ($tasks as $task)
            {{-- memmanggil controller dan membuat singular dan plural dan juga memanggil nama databse yang ingin ditampilkan dengan variabel --}}
            <li>{{ $task->list }}</li>
        @endforeach
    </ol>
</x-app-layout>
