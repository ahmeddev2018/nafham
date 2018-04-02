@extends('layouts.admin')





@section('content')

    <h1>Companies</h1>


    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Logo</th>
                <th>Website</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
            </thead>
            <tbody>

            @if($companies)

                @foreach($companies as $company)

                    <tr>
                        <td>{{$company->id}}</td>
                        <td><a href="{{route('companies.edit', $company->id)}}">{{$company->name}}</a></td>
                        <td>{{$company->email}}</td>
                        <td><img width="100" height="100" src="images/{{$company->logo}}" alt="No Logo"></td>
                        <td>{{$company->website}}</td>
                        <td>{{$company->created_at->diffForHumans()}}</td>
                        <td>{{$company->updated_at->diffForHumans()}}</td>
                    </tr>

                @endforeach
            @endif

            </tbody>
        </table>



    </div>

    <div class="text-center">
        {{ $companies->links() }}

    </div>

@stop
