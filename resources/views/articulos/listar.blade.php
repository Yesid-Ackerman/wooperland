<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Artículos</title>
</head>
<body>
    <div class="container">
        <h1>hola desde listar</h1>

        <table>
            @foreach ($articles as $article)
            {{-- creo una fila --}}
            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->nombre_articulo}}</td>
                <td>{{$article->tipo_articulo}}</td>
                <td>{{$article->costo}}</td>
                <td>{{$article->desc_art}}</td>
                <td><a href="{{route('article.show', $article->id)}}" >Mostrar</a></td>
                <form action="{{route('article.destroy',$article->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <td><button type="submit">Eliminar</button></td>
                </form>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>

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

    /* Estilos para la tabla */
    table {
        width: 100%;
        border-collapse: collapse;
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
        background-color: #ff3333;
        color: white;
        padding: 6px 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #cc0000;
    }
</style>
