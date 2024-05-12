<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles de la Ayuda</title>
    <style>
        /* Estilos generales */    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #FFD166;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    /* Estilos para el contenedor principal */
    .container {
        max-width: 800px;
        padding: 20px;
        background-color: #EF476F;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

        /* Estilos para el título */
        h1 {
            text-align: center;
            color: #333;
        }

        /* Estilos para el contenido */
        p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>DETALLES DE AYUDA</h1>
        <div>
            <p>ID: {{$help->id}}</p>
            <p>Descripción de Ayuda: {{$help->desc_ayu}}</p>
            <p>ID del Nivel: {{$help->niveles_id_nivel}}</p>
        </div>
    </div>
</body>
</html>
