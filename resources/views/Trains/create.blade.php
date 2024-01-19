<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create ticket</title>
</head>
<body>
    <h2>new ticket</h2>
    <form action="{{ route('train.store') }}" method="post">
        @csrf
        
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="passengers">Passengers:</label>
        <input type="number" name="passengers" id="passengers" required>

        <label for="year">Year:</label>
        <input type="number" name="year" id="year" required>

        <label for="train_type_id">Train type:</label>
        <select name="train_type_id" required>
            <option value="" selected hidden>--Select--</option>
            @foreach ($trainTypes as $temp)
            <option value="{{ $temp->id }}">{{ $temp->type }}</option>
            @endforeach
        </select>

        <button type="submit">Crear</button>
    </form>
</body>
</html>