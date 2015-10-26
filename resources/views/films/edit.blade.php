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
                {!! Form::label('release_date', 'release_date') !!}
                {!! Form::text('release_date', $film->release_date, ['class' => 'form-control']) !!}
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
