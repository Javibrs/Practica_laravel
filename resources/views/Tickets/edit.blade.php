<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit ticket</title>
</head>
<body>
    <h2>edit ticket</h2>
    <form action="{{ route('ticket.update',['ticket'=> $ticket ->id])}}" method="post">
        @csrf
        {{ method_field('PUT')}}{{-- CAMBIA EL METORO A PUT --}}

        <label for="date">Fecha:</label>
        <input type="date" name="date" id="date" value="{{ $ticket->date }}">
    
        <label for="price">Precio:</label>
        <input type="number" name="price" id="price" value="{{ $ticket->price }}">
    
        <label for="select_train_id">Nombre de tren:</label>
        <select name="select_train_id" required>
            <option value="" selected hidden>{{$ticket->train->name}}</option>
            @foreach ($trains as $temp)
            <option value="{{ $temp->id }}">{{ $temp->name }}</option>
            @endforeach
        </select>
        
        <label for="select_ticket_type_id">Tipo de ticket:</label>
        <select name="select_ticket_type_id" required>
            <option value="" selected hidden>{{$ticket->ticketType->type}}</option>
            @foreach ($ticketTypes as $temp)
            <option value="{{ $temp->id }}">{{ $temp->type }}</option>
            @endforeach
        </select>
    
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>