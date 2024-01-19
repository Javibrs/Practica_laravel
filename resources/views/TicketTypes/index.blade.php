<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ticket type index</title>
</head>
<body>
    <h1>ticket Types</h1>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($ticketTypes as $ticketType)
                <tr>
                    <td>{{ $ticketType->type}}</td>{{-- para type --}}
                    
                    {{-- BOTONES DE INTERACCION --}}
                    <td>
                        <form action="{{route('ticketType.show', ['ticketType' =>$ticketType->id])}}" method="GET">
                            <input type="submit" value="Ver">
                        </form>
                    </td>
                    <td>
                        <form action="{{route('ticketType.edit', ['ticketType' =>$ticketType->id])}}" method="GET">
                            @csrf
                            <input type="submit" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form action="{{route('ticketType.destroy', ['ticketType' =>$ticketType->id])}}" method="POST">
                            @csrf
                            {{ method_field('DELETE')}}
                            <input type="submit" value="BORRAR">
                        </form>
                    </td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
    <p>
        <a href="{{route('ticketType.create')}}">Create new ticketType</a>
    </p>

    
</body>
</html>