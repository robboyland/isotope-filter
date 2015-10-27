@extends('layouts.default')

@section('content')
    <h1>Update film details</h1>
    <hr>

    {!! Form::open(['route' => ['films.update', $film->id], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('title', 'title') !!}
                {!! Form::text('title', $film->title, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('release_date', 'release date') !!}
                {!! Form::text('release_date', $film->release_date, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                @foreach ($genres as $genre)
                    <div class="checkbox">
                    {!! Form::checkbox('genres[]', $genre->id, in_array($genre->id, $genreIds), ['class' => 'is_it_needed']) !!}
                    {!! Form::label($genre->id, $genre->name) !!}
                    </div>
                @endforeach
            </div>

            <div class="form-group">
                {!! Form::label('notes', 'notes') !!}
                {!! Form::textarea('notes', $film->notes, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('update film details', ['class' => 'btn btn-primary form-control']) !!}
            </div>
    {!! Form::close() !!}
@stop
