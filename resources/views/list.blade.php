<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset("bootstrap/css/bootstrap.css")}}">
    <title>Students List</title>
</head>
<body>
<div class="container">
    <h2 class="p-3">FPT-APTECH STUDENTS LIST</h2>
    <div class="pb-3">
        <a href="{{url("/add-student")}}" class="btn btn-info">Add Student</a>
        @if(Session::has("success"))
            <p style="color: green">{{Session::get("success")}}</p>
        @endif
        @if($errors->has("fail"))
            <p style="color: red">{{$errors->first("fail")}}</p>
        @endif
    </div>

    <table class="table table-hover">
        <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
        <th>Telephone</th>
        <th>Active</th>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->age}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->telephone}}</td>
                <td>{{\App\Student::$_StatusLabel[$student->active]}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $students->links("navigation") !!}
</div>

</body>
</html>
