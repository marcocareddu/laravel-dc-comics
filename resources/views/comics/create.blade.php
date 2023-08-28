@extends('layouts.main')

@section('title', 'Add')

@section('main')

    <main>
        <div class="container text-center">

            <form method="POST" action="{{ route('comics.store') }}">

                {{-- Token --}}
                @csrf

                <div class="row justify-content-center">
                    <h1 class="mb-3">ADD COMIC</h1>

                    {{-- Title --}}
                    <div class="mb-3 col-6">
                        <label class="text-start" for="title">Title</label>
                        <input type="text" id="title" name="title" class="form-control" autofocus>
                    </div>

                    {{-- Thumb --}}
                    <div class="mb-3 col-6">
                        <label class="form-label" for="thumb">Cover</label>
                        <input type="text" id="thumb" name="thumb" class="form-control">
                    </div>

                    {{-- Price --}}
                    <div class="mb-3 col-6">
                        <label class="form-label" for="price">Price</label>
                        <input type="text" id="price" name="price" class="form-control">
                    </div>

                    {{-- Series --}}
                    <div class="mb-3 col-6">
                        <label class="form-label" for="series">Serie</label>
                        <input type="text" id="series" name="series" class="form-control">
                    </div>

                    {{-- Sale Date --}}
                    <div class="mb-3 col-6">
                        <label class="form-label" for="sale_date">Sale Date</label>
                        <input type="date" id="sale_date" name="sale_date" class="form-control">
                    </div>

                    {{-- Type --}}
                    <div class="mb-3 col-6">
                        <label class="form-label" for="type">Genre</label>
                        <input type="text" id="type" name="type" class="form-control">
                    </div>

                    {{-- Description --}}
                    <div class="mb-3 col-6">
                        <label class="form-label" for="description">Description</label>
                        <textarea type="text" id="description" name="description" class="form-control"></textarea>
                    </div>

                    {{-- Artists --}}
                    <div class="mb-3 col-6">
                        <label for="artists" class="form-label">Artists</label>
                        <textarea type="text" id="artists" name="artists" class="form-control"></textarea>
                    </div>

                    {{-- Writers --}}
                    <div class="mb-3 col-6">
                        <label for="writers" class="form-label">Writers</label>
                        <textarea type="text" id="writers" name="writers" class="form-control"></textarea>
                    </div>
                </div>
                <button class="btn btn-success">Add</button>
            </form>

        </div>
    </main>

@endsection
