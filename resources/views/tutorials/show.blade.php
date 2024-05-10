<!-- resources/views/tutorials/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>{{ $tutorial->title }}</h1>
    <p>{{ $tutorial->description }}</p>
    <p>{{ $tutorial->content }}</p>
    <a href="{{ route('tutorials.edit', $tutorial->id) }}">Edit</a>
    <form action="{{ route('tutorials.destroy', $tutorial->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection

