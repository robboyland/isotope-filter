@extends('layouts.default')

@section('content')

    <form method="POST" action="/auth/login">
        {!! csrf_field() !!}

        <div class="form-group">
            {!! Form::label('email', 'email') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>

<!--         <div>
            Email
            <input type="email" name="email" value="{{ old('email') }}">
        </div> -->

<!--         <div>
            Password
            <input type="password" name="password" id="password">
        </div> -->

        <div class="form-group">
            {!! Form::label('password', 'password') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('remember', 'remember me') !!}
            {!! Form::checkbox('remember'); !!}
        </div>

<!--         <div>
            <input type="checkbox" name="remember"> Remember Me
        </div> -->

        <div class="form-group">
            {!! Form::submit('login', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </form>
@stop
