<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit train</title>
</head>
<body>
    <h2>edit train</h2>
    <form action="{{ route('trainType.update',['trainType'=> $trainType ->id])}}" method="post">
        @csrf
        {{ method_field('PUT')}}{{-- CAMBIA EL METORO A PUT --}}

        <label for="type">type:</label>
        <input type="text" name="type" id="type" value="{{ $trainType->type }}">
    
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>