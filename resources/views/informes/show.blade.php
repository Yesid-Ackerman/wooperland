<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles de informe</title>
    <style>
        /* Estilos generales */    body {
        font-family:  'Happy Monkey', cursive;
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
        <h1>DETALLES DE INFOREM</h1>
        <div>
            <p>ID: {{$report->id}}</p>
            <p>GRAFICO: {{$report->grafico}}</p>
            <p>CALIFICACION: {{$report->calificacion}}</p>
            <p>DETALLES: {{$report->detalles}}</p>
            <p>NIVEL MAS JUGADO: {{$report->nivel_mas_jugado}}</p>
            <p>PADRE DEL NIÑO: {{$report->padre}}</p>
        </div>
    </div>
</body>
</html>
