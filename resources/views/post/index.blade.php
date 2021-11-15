@extends('layouts.layout')
@section('content')

    <a href="{{route('post.create')}}" style="float: right" class="btn btn-success btn-sm" title="Add New post">
        <i class="fa fa-plus" aria-hidden="true"></i> Add New Post
    </a>
    <br/>
    <br/>


{{--    show user table--}}
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Salary</th>


            </tr>
            </thead>
            <tbody>

            @foreach($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->description }}</td>
                    <td>{{ $post->salary }}</td>

                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

    <a href="{{route('device.index')}}" style="float: right" class="btn btn-dark btn-sm m-2" title="Go to device info">
        <i class="fa fa-plus" aria-hidden="true"></i> Device info
    </a>

    <a href="{{route('group.index')}}" style="float: right" class="btn btn-warning btn-sm m-2" title="Go to group info">
        <i class="fa fa-plus" aria-hidden="true"></i> Group info
    </a>
    <br/>
    <br/>
@endsection
