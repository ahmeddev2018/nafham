@extends('layouts.admin')





@section('content')

    <h1>Employees</h1>


    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>E-mail</th>
                <th>Company</th>
                <th>Phone</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
            </thead>
            <tbody>

            @if($employees)

                @foreach($employees as $employee)

                    <tr>
                        <td>{{$employee->id}}</td>
                        <td><a href="{{route('employees.edit', $employee->id)}}">{{$employee->firstname}}</a></td>
                        <td>{{$employee->lastname}}</td>
                        <td>{{$employee->email}}</td>
                        <td>{{$employee->company->name}}</td>
                        <td>{{$employee->phone}}</td>
                        <td>{{$employee->created_at->diffForHumans()}}</td>
                        <td>{{$employee->updated_at->diffForHumans()}}</td>
                    </tr>
                @endforeach
            @endif

            </tbody>
        </table>
    </div>


    <div class="text-center">
        {{ $employees->links() }}

    </div>

@stop
