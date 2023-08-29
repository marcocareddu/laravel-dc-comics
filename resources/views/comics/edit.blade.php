@extends('layouts.main')

@section('title', 'Add')

@section('main')

    <main>

        {{-- Errore Alert --}}
        {{-- !! RESUME FROM COMMENTS --}}
        @include('includes.error')

        <div class="container text-center">
            <form method="POST" action="{{ route('comics.update', $comic) }}">
                @csrf
                @method('PUT')

                <div class="row justify-content-center">

                    {{-- Title --}}
                    <div class="mb-3 col-6">
                        <label class="text-start" for="title">Title</label>
                        <input type="text" id="title" name="title" class="form-control" autofocus
                            value="{{ $comic->title }}">
                    </div>

                    {{-- Thumb --}}
                    <div class="mb-3 col-6">
                        <label class="form-label" for="thumb">Cover</label>
                        <input type="text" id="thumb" name="thumb" class="form-control"
                            value="{{ $comic->thumb }}">
                    </div>

                    {{-- Price --}}
                    <div class="mb-3 col-6">
                        <label class="form-label" for="price">Price</label>
                        <input type="text" id="price" name="price" class="form-control"
                            value="{{ $comic->price }}">
                    </div>

                    {{-- Series --}}
                    <div class="mb-3 col-6">
                        <label class="form-label" for="series">Serie</label>
                        <input type="text" id="series" name="series" class="form-control"
                            value="{{ $comic->series }}">
                    </div>

                    {{-- Sale Date --}}
                    <div class="mb-3 col-6">
                        <label class="form-label" for="sale_date">Sale Date</label>
                        <input type="text" id="sale_date" name="sale_date" class="form-control"
                            value="{{ $comic->sale_date }}">
                    </div>

                    {{-- Type --}}
                    <div class="mb-3 col-6">
                        <label class="form-label" for="type">Genre</label>
                        <input type="text" id="type" name="type" class="form-control"
                            value="{{ $comic->type }}">
                    </div>

                    {{-- Description --}}
                    <div class="mb-3 col-6">
                        <label class="form-label" for="description">Description</label>
                        <textarea type="text" id="description" name="description" class="form-control">{{ $comic->description }}</textarea>
                    </div>

                    {{-- Artists --}}
                    <div class="mb-3 col-6">
                        <label for="artists" class="form-label">Artists</label>
                        <textarea type="text" id="artists" name="artists" class="form-control">{{ $comic->artists }}</textarea>
                    </div>

                    {{-- Writers --}}
                    <div class="mb-3 col-6">
                        <label for="writers" class="form-label">Writers</label>
                        <textarea type="text" id="writers" name="writers" class="form-control">{{ $comic->writers }}</textarea>
                    </div>
                </div>
                <button class="btn btn-primary">Save</button>
            </form>

        </div>
    </main>

@endsection
