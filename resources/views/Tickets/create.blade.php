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
    <form action="{{ route('ticket.store') }}" method="post">
        @csrf
        <label for="date">Fecha:</label>
        <input type="date" name="date" id="date" required>
        <label for="price">Precio:</label>
        <input type="number" name="price" id="price" required>
        <label for="train_id">Nombre de tren:</label>
        <select name="train_id" required>
            <option value="" selected hidden>--Seleccione--</option>
            @foreach ($trains as $temp)
            <option value="{{ $temp->id }}">{{ $temp->name }}</option>
            @endforeach
        </select>
        
        <label for="ticket_type_id">Tipo de ticket:</label>
        <select name="ticket_type_id" required>
            <option value="" selected hidden>--Seleccione--</option>
            @foreach ($ticketTypes as $temp)
            <option value="{{ $temp->id }}">{{ $temp->type }}</option>
            @endforeach
        </select>

        <button type="submit">Crear</button>
    </form>
</body>
</html>