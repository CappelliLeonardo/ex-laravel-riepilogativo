@extends('layouts.app')

@section('page-title', 'Chi siamo')

@section('main-content')
<h1>
    Books
</h1>

@foreach ($books as $item)
    <ul>
        <li>{{ $item->title }}</li>
        <li>{{ $item->author }}</li>
        <li>{{ $item->genre }}</li>
        <li>{{ $item->release_year }}</li>
        <li>{{ $item->description }}</li>
    </ul>
@endforeach
@endsection