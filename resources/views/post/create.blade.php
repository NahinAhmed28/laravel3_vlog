@extends('layouts.layout')
@section('content')


    <h3>Post add  -> form fill up</h3>
    <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="Name">Name</label>
                <input type="text" class="form-control" id="Name" name="name" placeholder="post name"  required>
            </div>


        </div>
        <div class="form-row">

            <div class="col-md-3 mb-3">
                <label for="email">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="enter description" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="address">Salary</label>
                <input type="text" class="form-control" id="address" name="salary" placeholder="enter salary" required>
            </div>

        </div>


        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
    <br> <br>


@endsection
