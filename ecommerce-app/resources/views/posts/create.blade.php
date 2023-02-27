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
    <form action="{{route('posts.store')}}" method='POST'>
    @csrf()
    <div class="mb-3">
        <label >title
            <input class="form-control" type="text" name="title" >
        </label> 
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="mb-3">
        <label class="form-label" >description
            <input class="form-control" type="text" name="discription" >
        </label>
        @error('discription')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label" >creator
            <input class="form-control" type="text" name="creator" >
        </label>
        @error('creator')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">created_at
            <input class="form-control" type="text" name="created_at" >
        </label>
        @error('created_at')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    
    </form>

  
</body>
</html>