<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains index</title>
</head>
<body>
    <h2>trains</h2>{{-- como un echo --}}
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