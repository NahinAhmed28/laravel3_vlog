@extends('layouts.layout')
@section('content')

    <a href="{{route('group.create')}}" style="float: right" class="btn btn-success btn-sm" title="Add New group">
        <i class="fa fa-plus" aria-hidden="true"></i> Add New group
    </a>
    <br/>
    <br/>


{{--    show user table--}}
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Group Name</th>
                <th>Description</th>


            </tr>
            </thead>
            <tbody>

            @foreach($groups as $group)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $group->name }}</td>
                    <td>{{ $group->description }}</td>


                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

    <a href="{{route('device.index')}}" style="float: right" class="btn btn-dark btn-sm m-2" title="Go to device info">
        <i class="fa fa-plus" aria-hidden="true"></i> Device info
    </a>

    <a href="{{route('post.index')}}" style="float: right" class="btn btn-info btn-sm m-2" title="Go to post info">
        <i class="fa fa-plus" aria-hidden="true"></i> Post info
    </a>
    <br/>
    <br/>
@endsection
