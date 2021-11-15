<!DOCTYPE html>
<html>
<head>
    <title>nahin laravel project 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <a href="{{route('employee.index')}}" style="float: left" class="btn btn-primary btn-sm" title="home">
        <i class="fa fa-plus" aria-hidden="true"></i> Home
    </a>
    <a href="{{route('device.index')}}" style="float: right" class="btn btn-dark btn-sm m-2" title="Go to device info">
        <i class="fa fa-plus" aria-hidden="true"></i> Device info
    </a>

    <a href="{{route('post.index')}}" style="float: right" class="btn btn-info btn-sm m-2" title="Go to post info">
        <i class="fa fa-plus" aria-hidden="true"></i> Post info
    </a>
    <a href="{{route('group.index')}}" style="float: right" class="btn btn-warning btn-sm m-2" title="Go to group info">
        <i class="fa fa-plus" aria-hidden="true"></i> Group info
    </a>
    <a href="{{route('employee.index')}}" style="float: right" class="btn btn-primary btn-sm m-2" title="Go to employee info">
        <i class="fa fa-plus" aria-hidden="true"></i> Employee info
    </a>

    <br/>
    <br/>
    @yield('content')
</div>

</body>
</html>
