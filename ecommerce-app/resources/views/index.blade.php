<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
@include ('posts/nav')
    
    <table class="table table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $User as $user)
            <tr>
                <td>{{$user -> id}}</td>
                <td>{{$user -> name}}</td>
                <td>{{$user -> email}}</td>
                <td><a class="btn btn-primary" href="{{route('posts',$user->id)}}">View</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>