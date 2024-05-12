<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Intercambios</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Estilos para el contenedor principal */
        .container {
            max-width: 800px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Estilos para el título */
        h1 {
            text-align: center;
            color: #333;
        }

        /* Estilos para la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        /* Estilos para las celdas */
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        /* Estilos para las celdas de encabezado */
        th {
            background-color: #f2f2f2;
        }

        /* Estilos para los botones */
        button[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Listado de Intercambios</h1>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descripción de Canje</th>
                    <th>Avatar</th>
                    <th>Artículo</th>
                    <th>Mostrar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($excs as $exc)
                <tr>
                    <td>{{$exc->id}}</td>
                    <td>{{$exc->desc_can}}</td>
                    <td>{{$exc->ava_avatar}}</td>
                    <td>{{$exc->art_article}}</td>
                    <td><a href="{{route('exchange.show', $exc->id)}}" >Mostrar</a></td>
                    <td>
                        <form action="{{route('exchange.destroy',$exc->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
