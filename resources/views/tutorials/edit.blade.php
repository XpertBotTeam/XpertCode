<!-- resources/views/tutorials/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Tutorial</h1>
    <form action="{{ route('tutorials.update', [$tutorial->id]) }}" method="post">
        @csrf


    @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $tutorial->title }}">
        <label for="description">Description:</label>
        <textarea name="description" id="description">{{ $tutorial->description }}</textarea>
        <label for="content">Content:</label>
        <input name="content" id="content" value="{{$tutorial->content}}"></input>
        <label for="author">Author:</label>
        <input type="text" name="author" id="author" value="{{$tutorial->author}}">
        <button type="submit">Update Tutorial</button>
    </form>
@endsection
<style>/* Edit Page Styles */

    section {
        background-color: #f8f9fa;
        padding: 50px 20px; /* Adjust padding for smaller screens */
    }

    section h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    section form {
        max-width: 600px;
        margin: 0 auto;
    }

    section form label {
        display: block;
        margin-bottom: 10px;
    }

    section form input[type="text"],
    section form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    section form button {
        display: block;
        width: 100%;
        padding: 10px 0;
        font-size: 1.1em;
        background-color: #ffcc00;
        color: #343a40;
        text-align: center;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    section form button:hover {
        background-color: #343a40;
        color: #fff;
    }
</style>
