<!DOCTYPE html>
<html lang="en">
<head>
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
    <h1>TIEMPOS</h1>
    <form action="{{route('read.period')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Tiempo de uso:
            <br>
            <input type="text" name="Tiempodeuso_tiempo">
        </label>
        <label>
            Descripcion:
            <br>
            <input type="text" name="Descripcion_tiempo">
        </label>
        <button type="submit">ENVIAR</button>
</form>
    </center>
</body>
</html>