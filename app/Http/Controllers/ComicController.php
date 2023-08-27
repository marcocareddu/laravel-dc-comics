<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    // Comic list
    public function index()
    {
        return view('comics.list');
    }

    // Comic details
    public function show()
    {
        return view('comics.show');
    }

    // Comic list
    public function create()
    {
        return view('comics.create');
    }
}
