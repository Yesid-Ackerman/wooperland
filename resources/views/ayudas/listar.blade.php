<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Ayudas</title>
    <!-- Agregamos la librería de FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1>LISTA DE AYUDAS</h1>

        <table class="custom-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descripción de Ayuda</th>
                    <th>ID del Nivel</th>
                    <th>Mostrar</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($helps as $help)
                <tr>
                    <td>{{ $help->id }}</td>
                    <td>{{ $help->desc_ayu }}</td>
                    <td>{{ $help->niveles_id_nivel }}</td>
                    <td><a href="{{ route('help.show', $help->id) }}" class="button"><i class="fas fa-eye"></i></a></td>
                    <td><a href="{{ route('help.edit', $help->id) }}" class="button"><i class="fa-solid fa-pen"></i></a></td>
                    <td>
                        <form action="{{ route('help.destroy', $help->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="trash-button"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #EF476F;
    }

    .container {
        max-width: 95%;
        padding: 20px;
        background-color: #FFD166;
        border-radius: 5px;
        box-shadow: 0 0 10px rgb(255, 255, 255);
        margin: auto;
        margin-top: 20px;
    }

    .custom-table {
        width: 100%;
        border-collapse: collapse;
    }

    .custom-table th,
    .custom-table td {
        border: 1px solid #ffffff;
        text-align: left;
        padding: 8px;
    }

    .custom-table th {
        background-color: #EF476F;
    }

    .button {
        background-color: #4caf50;
        color: white;
        padding: 6px 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
    }

    .trash-button {
        background-color: #EF476F;
        color: white;
        padding: 6px 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .trash-button:hover {
        background-color: #ffa7b3;
    }

    .button:hover {
        background-color: rgb(167, 255, 249);
    }
</style>
