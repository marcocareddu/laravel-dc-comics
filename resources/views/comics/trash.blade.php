@extends('layouts.main')

@section('title', 'Home')

@section('main')

    <main>
        <div class="container">
            <h1 class="text-center">Trashed</h1>
            <div class="row">

                {{-- Dynamic image HERE --}}
                @foreach ($comics as $comic)
                    <div class="card col-6 m-3" style="width: 18rem;">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>

                            {{-- Buttons --}}
                            <div class="d-flex justify-content-between">

                                {{-- All Comics Button --}}
                                <a href="{{ route('comics.index', $comic) }}" class="btn btn-primary">All Comics</a>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </main>

@endsection
