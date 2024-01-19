<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ticket type info</title>
</head>
<body>
    <h2>ticket type info</h2>
    <p>type: {{$ticketType ->type}}</p>
    <br>
    <a href="{{route('ticketType.index')}}">Volver al index</a>
</body>
</html>