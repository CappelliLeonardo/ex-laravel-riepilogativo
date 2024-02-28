@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>HomePage</h1>
            <button class="btn btn-primary ">
                <a class="text-decoration-none text-white" href="{{ '/movie' }}">Vai a Movies</a>
            </button>
            <button class="btn btn-primary ">
                <a class="text-decoration-none text-white" href="{{ '/book' }}">Vai a Books</a>
            </button>
        </div>
    </div>
</div>

@endsection
