@extends('layouts.main')

@section('title', 'Home')

@section('main')

    <main>
        <div class="container">
            <div class="row">

                {{-- Dynamic image HERE --}}

                {{-- !! TODO USE FOREACH INSTEAD FOR --}}
                @for ($i = 0; $i < 10; $i++)
                    <div class="card col-6 m-3" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">Title</h5>
                            <p class="card-text">Description</p>
                            <a href="#" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                @endfor
            </div>

        </div>
    </main>

@endsection
