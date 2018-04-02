@extends('layouts.admin')




@section('content')

    <h1>Edit User</h1>

    <div class="row">




 <div class="col-sm-9">
    {!! Form::model($user,['method' => 'Patch', 'action'=>['UsersController@update',$user->id]])!!}

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
        {!! Form::submit('Update User',['class'=>'btn btn-md btn-primary col-sm-6']) !!}
    </div>

     {!! Form::close() !!}

         {!! Form::open(array('method' => 'DELETE', 'action'=>['UsersController@destroy',$user->id]))!!}


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