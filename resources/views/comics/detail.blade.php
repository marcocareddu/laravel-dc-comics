@extends('layouts.main')

@section('title', 'Home')

@section('main')

    <main>
        <div class="container">
            <div class="row">

                {{-- Dynamic data HERE --}}
                <div class="card col-6 m-3" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic['title'] }}</h5>
                        <p class="card-text">Description</p>
                        <a href="#" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
