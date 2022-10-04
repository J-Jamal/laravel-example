<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('home.contact');
    }
    public function store()
    {
        // dd('submited'); //die and dump
        // ddd('submited'); //die dump debug
    }
}
