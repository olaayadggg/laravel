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
    <div class="card col-6">
        <label>post info</label>
        <br>
        <label >Title : <p>{{$post-> title}}<p> </label>
        <label >content : <p>{{$post-> discription}}<p> </label>
    </div>

    <div class="card col-6">
        <label>post creator info</label>
        <br>
        <label>creator name :<p>{{$post-> creator}}<p></label>
        <label>created at :<p>{{$post-> created_at}}<p></label>


    </div>
</body>
</html>