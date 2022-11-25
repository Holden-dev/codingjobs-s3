@extends('template')

@section('title', 'Songs page')

@section('content')

    <h2>Songs list</h2>

    @if (!empty($songs))
        @foreach ($songs as $s)
            <p>Title : {{ $s->title }}</p>
            <hr>
        @endforeach
    @else
        <p>No songs.</p>
    @endif

@endsection
