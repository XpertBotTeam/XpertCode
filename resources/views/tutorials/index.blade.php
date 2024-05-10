<!-- resources/views/tutorials/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Tutorials</h1>
    @foreach($tutorials as $tutorial)
        <div>
            <h2>{{ $tutorial->title }}</h2>
            <p>{{ $tutorial->description }}</p>
            <a href="{{ route('tutorials.show', $tutorial->id) }}">View Tutorial</a>
        </div>
    @endforeach
@endsection
<style>


    .featured-tutorials {
        background-color: #fff;
        padding: 50px 20px; /* Adjust padding for smaller screens */
    }

    .featured-tutorials h2 {
        text-align: center;
        margin-bottom: 40px;
    }

    .tutorial-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .tutorial {
        width: calc(33.333% - 20px);
        background-color: #f8f9fa;
        padding: 20px;
        margin-bottom: 40px;
        border-radius: 5px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .tutorial h3 {
        font-size: 1.5em;
        margin-bottom: 10px;
    }

    .tutorial p {
        color: #666;
        margin-bottom: 20px;
    }

    @media screen and (max-width: 768px) {
        .tutorial {
            width: calc(50% - 20px);
        }
    }

</style>
