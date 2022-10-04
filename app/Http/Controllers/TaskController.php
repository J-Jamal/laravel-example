<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        // variabel task untuk menampung pemanggilan database
        $tasks = DB::table('tasks')->get();
        // memamnggil halaman index di view
        return view('tasks.index', compact('tasks'));
    }
}
