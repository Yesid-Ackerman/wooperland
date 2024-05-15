<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: 'Happy Monkey', cursive; 
            background-color: #FFD166; 
        }

        h1 {
            color: #333; 
        }

        table {
            width: 100%; 
            border-collapse: collapse; 
            margin-bottom: 20px; 
        }

        th, td {
            padding: 10px; 
            text-align: left; 
            border-bottom: 2px solid #fff; 
        }

        th {
            background-color: #333; 
            color: #fff; 
        }

        tr:nth-child(even) {
            background-color: #f2f2f2; 
        }

        a.button {
            display: inline-block; 
            padding: 8px 16px; 
            text-decoration: none;
            color: #fff;
            background-color: #EF476F; 
            border-radius: 20px; 
            transition: background-color 0.3s; 
        }

        a.button:hover {
            background-color: #d73858; 
        }

        form {
            display: inline; 
            margin: 0; 
        }

        button[type="submit"] {
            padding: 8px 16px; 
            border: none; 
            border-radius: 20px; 
            background-color: #EF476F; 
            color: #fff; 
            cursor: pointer; 
            transition: background-color 0.3s; 
        }

        button[type="submit"]:hover {
            background-color: #d73858; 
        }
    </style>
</head>
<body>
 
    <h1>Listado de niños</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Nickname</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kids as $kid)
                <tr>
                    <td>{{ $kid->id }}</td>
                    <td>{{ $kid->nombre }}</td>
                    <td>{{ $kid->apellido }}</td>
                    <td>{{ $kid->edad }}</td>
                    <td>{{ $kid->nickname }}</td>
                    <td>
                        <a href="{{ route('niños.show', $kid->id) }}" class="button">Mostrar</a>
                        <form action="{{ route('niños.destroy', $kid->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

