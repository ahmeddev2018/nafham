@extends('layouts.admin')




@section('content')

    <h1>Create Employee</h1>



    {!! Form::open(array('method' => 'Post', 'action'=>'EmployeeController@store'))!!}

    <div class="form-group">
        {!! Form::label('firstname', 'First Name:') !!}
        {!! Form::text('firstname',null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('lastname', 'Last Name:') !!}
        {!! Form::text('lastname',null, ['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('email', 'E-mail:') !!}
        {!! Form::email('email',null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('company_id', 'Company') !!}
        {!! Form::select('company_id',$companies ,null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('phone', 'Phone:') !!}
        {!! Form::text('phone',null, ['class'=>'form-control']) !!}
    </div>



    <div class="form-group">
        {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


    <div class="row">
        @include('includes.form_error')

    </div>

@stop