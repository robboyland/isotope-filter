@extends('layouts.default')

@section('content')
    <h1>100 Films</h1>

    <ol>
        @foreach ($films as $film)
            <li>{{ $film->title }}</li>
        @endforeach
    </ol>

@stop
