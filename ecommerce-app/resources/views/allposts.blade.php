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
    @include ('nav')

    <a href=""><button class="btn btn-success">create post</button></a>
    


    <table class="table col-6">
        <thead>
            <tr>
                <th>title</th>
                <th>discription</th>
                <th>creator</th>
                <th>created_at</th> 
            </tr>
        </thead>
        <tbody>
            @foreach ( $Post as $post)
            <tr>
                <td>{{$post -> title}}</td>
                <td>{{$post -> discription}}</td>
                <td>{{$post -> creator}}</td>
                <td>{{$post -> created_at}}</td>
                <td>
                <a href="" class ="btn btn-light">edit</a>
                <a href=""class="btn btn-danger">delete</a>
                <a href="/singlepost/{{$post->id}}" class="btn btn-primary">view</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>