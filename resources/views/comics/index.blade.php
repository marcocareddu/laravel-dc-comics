@extends('layouts.main')

@section('title', 'Home')

@section('main')

    <main>
        <div class="container">
            <div class="row">

                {{-- Dynamic image HERE --}}
                @foreach ($comics as $index => $comic)
                    <div class="card col-6 m-3" style="width: 18rem;">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>

                            {{-- Buttons --}}
                            <div class="d-flex justify-content-between">

                                {{-- Detail Button --}}
                                <a href="{{ url("comics/$index") }}" class="btn btn-primary">Details</a>

                                {{-- Delete Button --}}
                                <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </main>

@endsection
