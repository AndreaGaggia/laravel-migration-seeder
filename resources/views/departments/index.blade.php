@extends('layouts.base')

@section('content')
    <table class="table table-dark">
        <thead>
            <tr class="text-uppercase font-italic">
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Employees</th>
                <th scope="col">Opened...</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($depts as $dept)
                <tr>
                    <th scope="row">{{ $dept->id }}</th>
                    <td>{{ $dept->name }}</td>
                    <td>{{ $dept->address }}</td>
                    <td>{{ $dept->employees }}</td>
                    <td>{{ $dept->open_since }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
