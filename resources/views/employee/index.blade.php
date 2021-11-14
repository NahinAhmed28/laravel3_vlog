@extends('layouts.layout')
@section('content')

    <a href="{{route('employee.create')}}" style="float: right" class="btn btn-success btn-sm" title="Add New Employee">
        <i class="fa fa-plus" aria-hidden="true"></i> Add New Employee
    </a>
    <br/>
    <br/>


{{--    show user table--}}
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Education</th>
                <th>Device</th>
                <th>Created at</th>

            </tr>
            </thead>
            <tbody>

            @foreach($employees as $employee)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->address }}</td>
                    <td>{{ $employee->education }}</td>
                    <td>{{$employee->getDeviceName($employee->device_id)}}</td>
                    <td>{{ \Carbon\Carbon::parse($employee->created_at)->diffForHumans() }}</td>


                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

    <a href="{{route('device.index')}}" style="float: right" class="btn btn-success btn-sm" title="Go to device info">
        <i class="fa fa-plus" aria-hidden="true"></i> Go to device info
    </a>
    <br/>
    <br/>
@endsection
