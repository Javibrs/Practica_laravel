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
    <form action="{{ route('train.update',['train'=> $train ->id])}}" method="post">
        @csrf
        {{ method_field('PUT')}}{{-- CAMBIA EL METORO A PUT --}}

        <label for="name">name:</label>
        <input type="text" name="name" id="name" value="{{ $train->name }}">
    
        <label for="passengers">passengers:</label>
        <input type="number" name="passengers" id="passengers" value="{{ $train->passengers }}">
    
        <label for="year">year:</label>
        <input type="number" name="year" id="year" value="{{ $train->year }}">

        <label for="select_train_type_id">Tipo de train:</label>
        <select name="train_type_id" required>
            <option value="" selected hidden>--Select--</option>
            @foreach ($trainTypes as $temp)
            <option value="{{ $temp->id }}">{{ $temp->type }}</option>
            @endforeach
        </select>
    
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>