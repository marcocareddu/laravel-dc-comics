@extends('layouts.main')

@section('title', 'Comic')

@section('main')

    <main>
        <div class="container">
            <div class="row">

                {{-- Dynamic data HERE --}}
                <div class="card col-6 m-3" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <p class="card-text">{{ $comic->description }}</p>
                        <a href="#" class="btn btn-primary">{{ $comic->title }}</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
