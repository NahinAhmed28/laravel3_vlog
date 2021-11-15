@extends('layouts.layout')
@section('content')


    <h3>Employee add  -> form fill up</h3>
    <form action="{{route('employee.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="Name">Name</label>
                <input type="text" class="form-control" id="Name" name="name" placeholder="enter name"  required>
            </div>


        </div>
        <div class="form-row">

            <div class="col-md-3 mb-3">
                <label for="email">email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="enter mail" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="address">address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="enter City" required>
            </div>
            <label><strong>Education</strong></label><br>
            <input type="checkbox" value="ssc" name="education[]"  class="form-check-input mx-3">SSC
            <input type="checkbox" value="hsc" name="education[]"  class="form-check-input mx-3">HSC
            <input type="checkbox" value="graduate" name="education[]"  class="form-check-input mx-3">Graduate
        </div>

<br>
        <div class="col-md-6 mb-3">
            <label for="device_id">Devices</label>
            <select class="custom-select" id="inputGroupSelect03" name="device_id">
                <option selected>Choose...</option>
                @foreach($devices as $device)
                    <option value="{{$device->id}}">{{$device->device_name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label for="device">Post</label>
            <select class="custom-select" id="inputGroupSelect03" name="post_id">
                <option selected>Choose...</option>
                @foreach($posts as $post)
                    <option value="{{$post->id}}">{{$post->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label for="device">Group</label>
            <select class="custom-select" id="inputGroupSelect03" name="group_id">
                <option selected>Choose...</option>
                @foreach($groups as $group)
                    <option value="{{$group->id}}">{{$group->name}}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
    <br> <br>


@endsection
