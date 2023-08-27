@extends('layouts.main')

@section('title', 'Comic')

@section('main')

    <main>
        <div class="container">
            <div class="d-flex justify-content-center row">

                {{-- Dynamic data HERE --}}
                <div class="card m-3 col-6">
                    <img src="{{ $comic->thumb }}" class="card-img-top img-fluid" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <p class="card-text">{{ $comic->description }}</p>

                        {{-- Writers & Artists table --}}
                        <div class="d-flex justify-content-between">
                            <table>
                                <tr>
                                    <th colspan="2" align="left">Talent</th>
                                </tr>
                                <tr>
                                    <td class="title">Art by:</td>
                                    <td>
                                        <a href="#"> {{ $comic->artists }} </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="title">Written by:</td>
                                    <td>
                                        <a href="#"> {{ $comic->writers }} </a>
                                    </td>
                                </tr>
                            </table>

                            {{-- Info Table --}}
                            <table>
                                <tr>
                                    <th colspan="2" align="left">Specs</th>
                                </tr>
                                <tr>
                                    <td class="title">Series:</td>
                                    <td>{{ $comic->series }}</td>
                                </tr>
                                <tr>
                                    <td class="title">U.S. Price:</td>
                                    <td>{{ $comic->price }}</td>
                                </tr>
                                <tr>
                                    <td class="title">On Sale Date:</td>
                                    <td>{{ $comic->sale_date }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
