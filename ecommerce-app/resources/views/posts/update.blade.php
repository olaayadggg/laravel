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
    <div class="row">
    <form class="m-5" action="{{route('posts.edit', $post-> id)}}" method="POST">
        @method('PUT')
        @csrf
    <div class="mb-3">
        <label  class="form-label">Title</label>
        <input type="text"  name="title" class="form-control" value="{{$post->title}}" >
    </div>
    <div class="mb-3">
        <label  class="form-label">Description</label>
        <input type="text"  name="discription" class="form-control" value="{{$post->discription}}">
    </div>
    <div class="mb-3">
        <label  class="form-label">Creator</label>
        <input type="text"  name="creator" class="form-control" value="{{$post->creator}}">
    </div>
    <div class="mb-3">
        <label  class="form-label">Created at</label>
        <input type="text"  name="created_at" class="form-control" value="{{$post->created_at}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

</body>
</html>