@extends('layouts.layout')
@section('content')

    <a href="{{route('device.create')}}" style="float: right" class="btn btn-success btn-sm" title="Add New Device">
        <i class="fa fa-plus" aria-hidden="true"></i> Add New Device
    </a>
    <br/>
    <br/>


{{--    show user table--}}
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Device Name</th>
                <th>Device amount</th>
                <th>Created at</th>

            </tr>
            </thead>
            <tbody>
            @if(isset($devices))
            @foreach($devices as $device)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $device->device_name}}</td>
                    <td>{{ $device->amount }}</td>
                    <td>{{ \Carbon\Carbon::parse($device->created_at)->diffForHumans() }}</td>


                </tr>
            @endforeach
            @endif
            </tbody>
        </table>
    </div>


    <a href="{{route('post.index')}}" style="float: right" class="btn btn-info btn-sm m-2" title="Go to post info">
        <i class="fa fa-plus" aria-hidden="true"></i> Post info
    </a>
    <a href="{{route('group.index')}}" style="float: right" class="btn btn-warning btn-sm m-2" title="Go to group info">
        <i class="fa fa-plus" aria-hidden="true"></i> Group info
    </a>

@endsection
