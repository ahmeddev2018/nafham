@extends('layouts.admin')




@section('content')

    <h1>Edit Employee</h1>

    <div class="row">




        <div class="col-sm-9">
            {!! Form::model($employee,['method' => 'Patch', 'action'=>['EmployeeController@update',$employee->id]])!!}

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
                {!! Form::submit('Update User',['class'=>'btn btn-md btn-primary col-sm-6']) !!}
            </div>

            {!! Form::close() !!}

            {!! Form::open(array('method' => 'DELETE', 'action'=>['EmployeeController@destroy',$employee->id]))!!}


            <div class="form-group">
                {!! Form::submit('Delete User',['class'=>'btn btn-md btn-danger col-sm-6']) !!}
            </div>

            {!! Form::close() !!}


        </div>
    </div>

    <div class="row">

        {{--@include('includes.form_error')--}}


    </div>

@stop