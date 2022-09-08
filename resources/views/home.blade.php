@extends('layouts.main')

@section ('title', 'Homepage')

@section('head-scripts')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
@endsection

@section('main-content')
    <div class="container p-5">
        <div class="row">
            <div class="col-3">
                <div class="card text-bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                      <h5 class="card-title">Primary card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>                  
            </div>
        </div>
    </div>
@endsection