@extends('layouts.layout')
@section('content')


    <h3>Device add  -> </h3>
    <form action="{{route('device.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="device_name">Device Name</label>
                <input type="text" class="form-control" id="device_name" name="device_name" placeholder="enter name"  required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="amount">Amount</label>
                <input type="text" class="form-control" id="amount" name="amount" placeholder="enter name"  required>
            </div>

        </div>


        <button class="btn btn-primary" type="submit">Submit Info</button>
    </form>
    <br> <br>


@endsection
