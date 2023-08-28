@extends('layouts.main')

@section('title', 'Add')

@section('main')

    <main>

        {{-- Errore Alert --}}
        @include('includes.error')

        <div class="container text-center">


            <form method="POST" action="{{ route('comics.store') }}">

                {{-- Token --}}
                @csrf

                <div class="row justify-content-center">
                    <h1 class="mb-3">ADD COMIC</h1>

                    {{-- Title --}}
                    <div class="mb-3 col-6">
                        <label class="text-start" for="title">Title</label>
                        <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}"
                            autofocus>
                    </div>

                    {{-- Thumb --}}
                    <div class="mb-3 col-6">
                        <label class="form-label" for="thumb">Cover</label>
                        <input type="text" id="thumb" name="thumb" class="form-control"
                            value="{{ old('thumb') }}">
                    </div>

                    {{-- Price --}}
                    <div class="mb-3 col-6">
                        <label class="form-label" for="price">Price</label>
                        <input type="text" id="price" name="price" class="form-control"
                            value="{{ old('price') }}">
                    </div>

                    {{-- Series --}}
                    <div class="mb-3 col-6">
                        <label class="form-label" for="series">Serie</label>
                        <input type="text" id="series" name="series" class="form-control"
                            value="{{ old('series') }}">
                    </div>

                    {{-- Sale Date --}}
                    <div class="mb-3 col-6">
                        <label class="form-label" for="sale_date">Sale Date</label>
                        <input type="date" id="sale_date" name="sale_date" class="form-control"
                            value="{{ old('sale_date') }}">
                    </div>

                    {{-- Type --}}
                    <div class="mb-3 col-6">
                        <label class="form-label" for="type">Genre</label>
                        <input type="text" id="type" name="type" class="form-control"
                            value="{{ old('type') }}">
                    </div>

                    {{-- Description --}}
                    <div class="mb-3 col-6">
                        <label class="form-label" for="description">Description</label>
                        <textarea type="text" id="description" name="description" class="form-control">{{ old('description') }}</textarea>
                    </div>

                    {{-- Artists --}}
                    <div class="mb-3 col-6">
                        <label for="artists" class="form-label">Artists</label>
                        <textarea type="text" id="artists" name="artists" class="form-control">{{ old('artists') }}</textarea>
                    </div>

                    {{-- Writers --}}
                    <div class="mb-3 col-6">
                        <label for="writers" class="form-label">Writers</label>
                        <textarea type="text" id="writers" name="writers" class="form-control">{{ old('writers') }}</textarea>
                    </div>
                </div>
                <button class="btn btn-success">Add</button>
            </form>

        </div>
    </main>

@endsection
