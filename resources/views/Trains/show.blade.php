<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>train info</title>
</head>
<body>
    <h2>train info</h2>
    <p>name: {{$train ->name}}</p>
    <p>passengers: {{$train ->passengers}}</p>
    <p>year: {{$train->year}}</p>
    <p>train type: {{$train ->trainType->type}}</p>
</body>
</html>