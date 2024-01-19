<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>train type index</title>
</head>
<body>
    <h1>Train Types</h1>
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