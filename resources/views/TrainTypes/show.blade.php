<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>train type info</title>
</head>
<body>
    <h2>train type info</h2>
    <p>type: {{$trainType ->type}}</p>
    <br>
    <a href="{{route('trainType.index')}}">Volver al index</a>
</body>
</html>