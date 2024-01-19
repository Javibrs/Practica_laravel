<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tickets index</title>
    <style>
        ul{
            list-style: none;
            display: flex;
            flex-flow: row wrap;
            justify-content: space-between;
            border: 1px solid black;
            background-color: lightgreen;
        }
        a{
            text-decoration: none;
        }
        table {
            border:1px solid black;
            width: 100%;
        }
        th, td {
            width: 25%;
            text-align: left;
            vertical-align: top;
            border: 1px solid #000;
            border-spacing: 0;
            padding: 15px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Menu de navegacion</h1>
    <ul>
        <li><a href="{{route('ticketType.index')}}">TicketType</a></li>
        <li><a href="{{route('ticket.index')}}">Ticket</a></li>
        <li><a href="{{route('trainType.index')}}">TrainType</a></li>
        <li><a href="{{route('train.index')}}">Train</a></li>
    </ul>
    <br><br>
    <h2>tickets</h2>
    
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