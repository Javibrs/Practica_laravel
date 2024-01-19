<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tickets index</title>
</head>
<body>
    <h2>tickets</h2>{{-- como un echo --}}
    <table>
        <thead>
            <tr>
                <th>date</th>
                <th>price</th>
                <th>train name</th>
                <th>train type</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($tickets as $temp)
                <tr>
                    <td>{{ $temp->date}}</td>{{-- para nombre, USANDO LA FUNCION QUE CREA UN OBJETO DE TIPO SERIE --}}
                    <td>{{ $temp->price}}</td>{{-- para temporada --}}
                    <td>{{ $temp->train->name }}</td>{{-- para capitulo --}}
                    <td>{{ $temp->ticketType->type}}</td>{{-- para nº caps --}}
                    {{-- BOTONES DE INTERACCION --}}
                    <td>
                        <form action="{{route('ticket.show', ['ticket' =>$temp->id])}}" method="GET">
                            <input type="submit" value="Ver">
                        </form>
                    </td>
                    <td>
                        <form action="{{route('ticket.edit', ['ticket' =>$temp->id])}}" method="GET">
                            @csrf
                            <input type="submit" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form action="{{route('ticket.destroy', ['ticket' =>$temp->id])}}" method="POST">
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
        <a href="{{route('ticket.create')}}">Create new ticket</a>
    </p>
</body>
</html>