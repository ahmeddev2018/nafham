@extends('layouts.admin')




@section('content')

    <h1>Edit Company</h1>

    <div class="row">




        <div class="col-sm-9">
            {!! Form::model($company,['method' => 'Patch', 'action'=>['CompanyController@update',$company->id]])!!}

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name',null, ['class'=>'form-control']) !!}
            </div>



            <div class="form-group">
                {!! Form::label('email', 'E-mail:') !!}
                {!! Form::email('email',null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('logo', 'Logo') !!}
                {!! Form::file('logo',null, ['class'=>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::submit('Update Company',['class'=>'btn btn-md btn-primary col-sm-6']) !!}
            </div>

            {!! Form::close() !!}

            {!! Form::open(array('method' => 'DELETE', 'action'=>['CompanyController@destroy',$company->id]))!!}


            <div class="form-group">
                {!! Form::submit('Delete Company',['class'=>'btn btn-md btn-danger col-sm-6']) !!}
            </div>

            {!! Form::close() !!}


        </div>
    </div>

    <div class="row">

        {{--@include('includes.form_error')--}}


    </div>

@stop