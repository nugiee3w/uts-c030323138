<!-- resources/views/categories/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Category Details</h1>
    <h2>{{ $category->name }}</h2>
    <p>{{ $category->description }}</p>

    <a href="{{ route('categories.index') }}">Back to Categories</a>
@endsection
