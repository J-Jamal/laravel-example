<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        // variabel task untuk menampung pemanggilan database
        $tasks = Task::orderBy('id', 'desc')->get();
        // memamnggil halaman index di view
        return view('tasks.index', compact('tasks'));
    }
    public function create()
    {
        return view('tasks.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'list' => ['required'],
        ]);
        Task::create($request->all());
        return redirect('tasks');
    }
    public function edit(Task $task)
    // model binding, jika ada data bernama task maka tambah parameter $task
    {
        // where digunakan untuk mencari field selain id
        // $task = Task::where('id', $id)->first();
        // find digunakan untuk mencari field id
        // $task = Task::find($id);
        return view('tasks.edit', ['task' => $task]);
    }
    public function update(Request $request, $id)
    {
        Task::where('id', $id)->update(['list' => $request->list]);
        return redirect('tasks');
    }
    public function destroy($id)
    {
        Task::where('id', $id)->delete();
        return back();
    }
}
