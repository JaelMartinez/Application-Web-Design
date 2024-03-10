<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorld extends Controller
{
    public function index()
    {
        return view('hello');
    }

    public function create()
    {
        return view('create');
    }

    public function edit()
    {
        return view('edit');
    }
}
