<!DOCTYPE html>
<html lang="en">
<head>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retos Listados</title>
    <style>
        body {
            background-color: #FFD166;
            font-family: "Happy Monkey", sans-serif;
            font-size: 20px;
        }

        h1 {
            font-family: "Press Start 2P", cursive;
            font-size: 30px;
            text-align: center
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
    </style>
</head>
<body>
    <h1>RETOS LISTADOS</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre del Reto</th>
            <th>Descripción del Reto</th>
            <th>Actividad</th>
            <th>Premio</th>
            <th></th>
            <th></th>                        
        </tr>
        @foreach ($challenges as $Retos)
        <tr>
            <td>{{$Retos->id}}</td>
            <td>{{$Retos->Nombre_Reto}}</td>
            <td>{{$Retos->Descripcion_Reto}}</td>
            <td>{{$Retos->Actividad_Reto}}</td>
            <td>{{$Retos->Premio_Reto}}</td>
            <td><a href="{{route('show.challenge',$Retos->id)}}" class="button">Mostrar</a></td>
            <td>
                <form action="{{route('destroy.challenge',$Retos->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
