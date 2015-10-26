@extends('layouts.default')

@section('content')
    <h1>100 Films</h1>

    @if (Session::has('flash_message'))
        <div class="alert alert-success" role="alert">{{ Session::get('flash_message') }}</div>
    @endif

    <div>{!! link_to_route('films.create', $title = 'add film', $parameters = [], $attributes = []) !!}</div>

    <ol>
        @foreach ($films as $film)
            <li>
                <h2>{!! link_to_route(  'films.edit',
                                        $title = $film->title,
                                        $parameters = ['id' => $film->id],
                                        $attributes = []) !!}
                                        </h2>
                <div>
                    {!! Form::open(['route' => ['films.destroy', $film->id], 'method' => 'delete']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-default btn-sm']) !!}
                    {!! Form::close() !!}
                </div>
            </li>
        @endforeach
    </ol>

@stop
