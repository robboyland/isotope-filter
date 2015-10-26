@extends('layouts.default')

@section('content')
    <h1>100 Films</h1>

    <div>{!! link_to_route('films.create', $title = 'add film', $parameters = [], $attributes = []) !!}</div>

    <ol>
        @foreach ($films as $film)
            <li><h2>{!! link_to_route('films.edit', $title = $film->title, $parameters = ['id' => $film->id], $attributes = []) !!}</h2></li>
        @endforeach
    </ol>

@stop
