<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains index</title>
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
    <h2>Trains</h2>
    <table>
        <thead>
            <tr>
                <th>nombre</th>
                <th>passengers</th>
                <th>year</th>
                <th>tipo de tren</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($trains as $temp)
                <tr>
                    <td>{{ $temp->name}}</td>{{-- para nombre, USANDO LA FUNCION QUE CREA UN OBJETO DE TIPO SERIE --}}
                    <td>{{ $temp->passengers}}</td>{{-- para temporada --}}
                    <td>{{ $temp->year}}</td>{{-- para capitulo --}}
                    <td>{{ $temp->trainType->type }}</td>{{-- para nº caps --}}
                    {{-- BOTONES DE INTERACCION --}}
                    <td>
                        <form action="{{route('train.show', ['train' =>$temp->id])}}" method="GET">
                            <input type="submit" value="Ver">
                        </form>
                    </td>
                    <td>
                        <form action="{{route('train.edit', ['train' =>$temp->id])}}" method="GET">
                            @csrf
                            <input type="submit" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form action="{{route('train.destroy', ['train' =>$temp->id])}}" method="POST">
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
        <a href="{{route('train.create')}}">Create new train</a>
    </p>
</body>
</html>