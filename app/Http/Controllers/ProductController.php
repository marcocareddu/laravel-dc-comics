<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Product list
    public function index()
    {
        return view('comics.list');
    }

    // Product details
    public function show()
    {
        return view('comics.details');
    }

    // Product list
    public function create()
    {
        return view('comics.create');
    }
}
