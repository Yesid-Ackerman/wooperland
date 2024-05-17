<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del Avatar</title>
    <style>
        
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #FFD166;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }


    .container {
        max-width: 800px;
        padding: 20px;
        background-color: #EF476F;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }


        h1 {
            text-align: center;
            color: #333;
        }


        p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>DETALLES DE AVATAR</h1>
        <div>
            <p>ID: {{$avatar->id}}</p>
            <p>Nombre de Avatar: {{$avatar->nombre_avatar}}</p>
            <p>ID del Niño: {{$avatar->niños_id_niño}}</p>
        </div>
    </div>
</body>
</html>
