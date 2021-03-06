@extends('layouts.admin')




@section('content')

    <h1>Create User</h1>



    {!! Form::open(array('method' => 'Post', 'action'=>'UsersController@store'))!!}

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name',null, ['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('email', 'E-mail:') !!}
        {!! Form::email('email',null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', ['class'=>'form-control']) !!}
    </div>



    <div class="form-group">
        {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}



@stop