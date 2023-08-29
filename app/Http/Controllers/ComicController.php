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
        return view('comics.index', compact('comics'));
    }

    // Comic details
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    // Create Comic
    public function create()
    {
        return view('comics.create');
    }

    // Store Comic
    public function store(Request $request)
    {
        // !VALIDATION
        $request->validate([
            'title' => 'required|string',
            'thumb' => 'url:http,https',
            'price' => 'required|string',
            'series' => '',
            'sale_date' => 'required|date',
            'type' => 'string',
            'description' => '',
            'artists' => '',
            'writers' => ''
        ]);

        $data = $request->all();
        $comic = new Comic;
        $comic->fill($data);
        $comic->save();

        return to_route('comics.show', $comic);
    }

    // Edit Comic
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    // Update Comic
    public function update(Request $request, Comic $comic)
    {

        // !VALIDATION
        $request->validate([
            'title' => 'required|string',
            'thumb' => 'url:http,https',
            'price' => 'required|string',
            'series' => '',
            'sale_date' => 'required|date',
            'type' => 'string',
            'description' => '',
            'artists' => '',
            'writers' => ''
        ]);

        $data = $request->all();
        $comic->update($data);
        return to_route('comics.show', $comic);
    }

    // Destroy Comic
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index');
    }

    // Trash Comic
    public function trash()
    {
        $comics = Comic::onlyTrashed()->get();
        return view('comics.trash', compact('comics'));
    }
}
