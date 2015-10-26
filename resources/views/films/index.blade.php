@extends('layouts.default')

@section('content')
    <h1>100 Films</h1>

    <div>{!! link_to_route('films.create', $title = 'add film', $parameters = [], $attributes = []) !!}</div>

    <ol>
        @foreach ($films as $film)
            <li>{{ $film->title }}</li>
        @endforeach
    </ol>

@stop
