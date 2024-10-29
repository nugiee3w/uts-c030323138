<!-- resources/views/categories/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create New Category</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
