@extends('layouts.base')

@section('content')
    <table class="table table-dark">
        <thead>
            <tr class="text-uppercase font-italic">
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Employees</th>
                <th scope="col">Foundation</th>
                <th scope="col">Sector</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
                <tr>
                    <th scope="row">{{ $company->id }}</th>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->address }}</td>
                    <td>{{ $company->employees }}</td>
                    <td>{{ $company->foundation }}</td>
                    <td>{{ $company->sector }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
