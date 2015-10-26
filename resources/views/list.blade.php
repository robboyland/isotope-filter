@extends('layouts.default')

@section('content')
    <h1>100 Films</h1>

    <ol>
        @foreach ($films as $film)
            <li><h2>{{ $film->title }}</h2></li>
        @endforeach
    </ol>
@stop
