<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>train type index</title>
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
    <h2>Train Types</h2>
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
            @foreach($trainTypes as $trainType)
                <tr>
                    <td>{{ $trainType->type}}</td>{{-- para type --}}
                    
                    {{-- BOTONES DE INTERACCION --}}
                    <td>
                        <form action="{{route('trainType.show', ['trainType' =>$trainType->id])}}" method="GET">
                            <input type="submit" value="Ver">
                        </form>
                    </td>
                    <td>
                        <form action="{{route('trainType.edit', ['trainType' =>$trainType->id])}}" method="GET">
                            @csrf
                            <input type="submit" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form action="{{route('trainType.destroy', ['trainType' =>$trainType->id])}}" method="POST">
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
        <a href="{{route('trainType.create')}}">Create new trainType</a>
    </p>

</body>
</html>