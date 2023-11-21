<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/upload')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="form-group" mt-2>
        <label for="">file</label>
        <input type="file" name="img" id="" class="form-control">  
        <button class="btn-btn-primary">Upload</button>
        
    </form>
</body>
</html>