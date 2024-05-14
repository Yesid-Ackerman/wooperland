<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retos</title>
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

        label {
            display: block;
            margin-bottom: 10px;
            font-family: "Press Start 2P", cursive;
            font-size: 20px;
        }

        input[type="text"] {
            width: 100%;
            max-width: 300px; 
            padding: 5px;
            margin-top: 5px;
            border: 1px solid #605E5E; 
            border-radius: 20px;
            box-sizing: border-box;
            font-family: "Press Start 2P", cursive;
            font-size: 20px;
        }

        button[type="submit"] {
            background-color: #EF476F;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            font-family: "Press Start 2P", cursive; 
        }

        button[type="submit"]:hover {
            background-color: #d6415a;
        }
    </style>
</head>
<body>
    <center>
    <h1>RETOS</h1>
    <form action="{{route('read.challenge')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Digite el nombre del Reto
            <br>
            <input type="text" name="Nombre_Reto">
        </label>
        <label>
            Descripcion Del Reto
            <br>
            <input type="text" name="Descripcion_Reto">
        </label>
        <label>
            Actividad
            <br>
            <input type="text" name="Actividad_Reto">
        </label>
        <label>
            Premio Ganado
            <br>
            <input type="text" name="Premio_Reto">
        </label>
        <button type="submit">ENVIAR</button>
    </form>
    </center>
</body>
</html>
