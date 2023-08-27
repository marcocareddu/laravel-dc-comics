<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{

    // Comics list
    public function index()
    {
        $comics = Comic::all();
        return view('comics.list', compact('comics'));
    }

    // Comic details
    public function show($index)
    {
        $comic = config('comics')[$index];
        return view('comics.detail', compact('comic'));
    }

    // Create Comic
    public function create()
    {
        return view('comics.create');
    }
}
