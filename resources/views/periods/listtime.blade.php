<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sugerencias Listado</title>
    <style>
        body {
            background-color: #FFD166;
            font-family: "Happy Monkey", sans-serif;
            font-size: 20px;
        }

        h1 {
            font-family: "Press Start 2P", cursive;
            font-size: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #EF476F;
            color: #fff;
        }

        td {
            font-family: "Press Start 2P", cursive;
            font-size: 20px;
        }

        a.button {
            display: inline-block;
            background-color: #EF476F;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 30px;
            text-decoration: none;
            cursor: pointer;
            font-family: "Press Start 2P", cursive;
            font-size: 20px;
        }

        a.button:hover {
            background-color: #d6415a;
        }

        button[type="submit"] {
            background-color: #EF476F;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 30px;
            cursor: pointer;
            font-family: "Press Start 2P", cursive;
            font-size: 20px;
        }

        button[type="submit"]:hover {
            background-color: #d6415a;
        }

        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="center">
        <h1>TIEMPO LISTADO</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Tiempo de Uso</th>
                <th></th>
                <th></th>
            </tr>
            @foreach ($periods as $Tiempos)
            <tr>
                <td>{{$Tiempos->id}}</td>
                <td>{{$Tiempos->Descripcion_tiempo}}</td>
                <td>{{$Tiempos->Tiempodeuso_tiempo}}</td>
                <td><a href="{{route('show.period',$Tiempos->id)}}" class="button">Mostrar</a></td>
                <td>
                    <form action="{{route('destroy.period',$Tiempos->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
