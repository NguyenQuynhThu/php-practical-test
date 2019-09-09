<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset("bootstrap/css/bootstrap.css")}}">
    <title>Add Student</title>
</head>
<body>
<div class="container">
    <h2 class="p-3">ADD STUDENT</h2>
    <form action="{{url("/add-student")}}" method="post">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" type="text" name="name"
                   value="{{old("name")}}"
                   placeholder="Name">
            @if($errors->has("name"))
                <p class="error" style="color: red">{{$errors->first("name")}}</p>
            @endif
        </div>

        <div class="form-group">
            <label>Age</label>
            <input class="form-control" type="text" name="age"
                   value="{{old("age")}}"
                   placeholder="Age">
            @if($errors->has("age"))
                <p class="error" style="color: red">{{$errors->first("age")}}</p>
            @endif
        </div>

        <div class="form-group">
            <label>Address</label>
            <input class="form-control" type="text" name="address"
                   value="{{old("address")}}"
                   placeholder="Address">
            @if($errors->has("address"))
                <p class="error" style="color: red">{{$errors->first("address")}}</p>
            @endif
        </div>

        <div class="form-group">
            <label>Telephone</label>
            <input class="form-control" type="text" name="telephone"
                   value="{{old("telephone")}}"
                   placeholder="Address">
            @if($errors->has("telephone"))
                <p class="error" style="color: red">{{$errors->first("telephone")}}</p>
            @endif
        </div>

        <div class="form-group text-right">
            <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </form>
</div>

</body>
</html>
