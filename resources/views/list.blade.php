@extends('layouts.default')

@section('content')
    <h1>100 Films</h1>

    <ul id="isotope_filters">
        <li><a data-filter="*" href="#">all</a></li>
        @foreach ($genres as $genre)
            <li><a data-filter=".{{ $genre->name }}" href="#">{{ $genre->name }}</a></li>
        @endforeach
    </ul>

    <ol id="isotope_container">
        @foreach ($films as $film)
            <li class="isotope_selector {{ genreCssString($film->genres) }}">
                <h2>{{ $film->title }} </h2>
            </li>
        @endforeach
    </ol>
@stop
