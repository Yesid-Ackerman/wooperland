<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Canje</title>
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
            max-width: 400px;
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

        /* Estilos para los labels */
        label {
            display: block;
            margin-bottom: 10px;
        }

        /* Estilos para los inputs */
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Estilos para el botón */
        button[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>AVATARS</h1>

        <form action="{{route('exchange.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label>
                Descripción de Canje:
                <br>
                <input type="text" name="desc_can">
            </label>
            <br>
            <label>
                Avatar:
                <br>
                <input type="text" name="ava_avatar">
            </label>
            <br>
            <label>
                Artículo:
                <br>
                <input type="text" name="art_article">
            </label>
            <br>
            <br>
            <button type="submit">Enviar Formulario</button>
        </form>
    </div>
</body>
</html>
