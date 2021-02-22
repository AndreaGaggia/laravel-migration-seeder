@extends('layouts.base')

@section('content')
    <table class="table table-dark">
        <thead>
            <tr class="text-uppercase font-italic">
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">lastName</th>
                <th scope="col">Gender</th>
                <th scope="col">Age</th>
                <th scope="col">Role</th>
                <th scope="col">Education</th>
                <th scope="col">Hiring Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <th scope="row">{{ $employee->id }}</th>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->lastname }}</td>
                    <td>{{ $employee->gender }}</td>
                    <td>{{ $employee->age }}</td>
                    <td>{{ $employee->role }}</td>
                    <td>{{ $employee->education }}</td>
                    <td>{{ $employee->hiring_date }}</td>
                    <td><a href="#">View Details</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
