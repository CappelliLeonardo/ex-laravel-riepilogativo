@extends('layouts.app')

@section('page-title', 'Chi siamo')

@section('main-content')
<h1>
    Movies
</h1>

@foreach ($movie as $item)
    <ul>
        <li>{{ $item->movie_name }}</li>
        <li>{{ $item->director }}</li>
        <li>{{ $item->genre }}</li>
        <li>{{ $item->release_year }}</li>
        <li>{{ $item->description }}</li>
    </ul>
@endforeach
@endsection