<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class TaskController extends Controller
{
    public function index()
    {
        // variabel task untuk menampung pemanggilan database
        $tasks = DB::table('tasks')->orderBy('id', 'desc')->get();
        // memamnggil halaman index di view
        return view('tasks.index', compact('tasks'));
    }
    public function create()
    {
        return view('tasks.create');
    }
    public function store(Request $request)
    {
        DB::table('tasks')->insert([
            // list berasala dari view create dengan name list
            'list' => $request->list,
        ]);
        return redirect('tasks');
    }
    public function edit($id)
    {
        $task = DB::table('tasks')->where('id', $id)->first();

        return view('tasks.edit', ['task' => $task]);
    }
    public function update(Request $request, $id)
    {
        DB::table('tasks')->where('id', $id)->update(['list' => $request->list]);
    }
    public function destroy($id)
    {
        DB::table('tasks')->where('id', $id)->delete();
        return back();
    }
}
