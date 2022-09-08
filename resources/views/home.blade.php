@extends('layouts.main')

@section ('title', 'Homepage')

@section('head-scripts')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
@endsection

@section('main-content')
    <div class="container p-5">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-wrap justify-content-center">

                    @forelse ($movies as $movie)
                        <div class="card text-bg-light w-25 m-2">
                                <div class="card-header"> {{ $movie->title }} </div>
                                <div class="card-body">
                                <h5 class="card-title"> {{ $movie->original_title }} </h5>
                                <p class="card-text"> {{ $movie->nationality }}</p>
                                <p class="card-text"> {{ $movie->date }}</p>
                                <p class="card-text"> {{ $movie->vote }}</p>
                            </div>
                        </div>
                    @empty
                        <p>
                            Nothing! -> The new movie about NOTHING
                        </p>
                    @endforelse
                    
                </div>
            </div>
        </div>
    </div>
@endsection