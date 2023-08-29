@extends('layouts.main')

@section('title', 'Home')

@section('main')

    <main>
        <div class="container">
            <h1 class="text-center">Trashed</h1>
            <div class="row">

                @forelse ($comics as $comic)
                    {{-- Dynamic image HERE --}}
                    <div class="card col-6 m-3" style="width: 18rem;">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>

                            {{-- Buttons --}}
                            <div class="d-flex justify-content-evenly">

                                {{-- Delete Button --}}
                                <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>

                                {{-- Restore Button --}}
                                <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-success">Restore</button>
                                </form>

                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-success">There's no elements</div>
                @endforelse
                <div class="d-flex justify-content-center">

                    {{-- All Comics Button --}}
                    <a href="{{ route('comics.index', $comic) }}" class="btn btn-primary">Return to Comics</a>

                </div>
            </div>
        </div>
    </main>

@endsection
