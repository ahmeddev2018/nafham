@extends('layouts.admin')






@section('content')


    <h1>Create Company</h1>

    <div class="row">

        {!! Form::open(array('method' => 'Post', 'action'=>'CompanyController@store', 'files'=>true))!!}

        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name',null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'E-mail') !!}
            {!! Form::email('email',null, ['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('logo', 'Logo') !!}
            {!! Form::file('logo',null, ['class'=>'form-control']) !!}
        </div>



        <div class="form-group">
            {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>

    <div class="row">
        @include('includes.form_error')

    </div>







@stop