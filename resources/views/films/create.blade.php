@extends('layouts.default')

@section('content')
    <h1>Add a film</h1>
    <hr>

    {!! Form::open(['route' => 'films.store', 'method' => 'post']) !!}
            <div class="form-group">
                {!! Form::label('title', 'title') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('release_date', 'release date') !!}
                {!! Form::text('release_date', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                <h2>genres</h2>

                @foreach ($genres as $genre)
                    <div><label>
                    <input type="checkbox" name="genres[]" id="{{ $genre->id }}" value="{{ $genre->id }}">
                    {{ $genre->name }}</label></div>
                @endforeach
            </div>

            <div class="form-group">
                {!! Form::label('notes', 'notes') !!}
                {!! Form::textarea('notes', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('add film', ['class' => 'btn btn-primary form-control']) !!}
            </div>
    {!! Form::close() !!}
@stop
