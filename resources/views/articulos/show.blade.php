<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del Artículo</title>
</head>
<body>
    <div class="container">
        <h1>¡Hola desde el detalle!</h1>
        <div>
            <p>Detalles del artículo:</p>
            <p>ID: {{$article->id}}</p>
            <p>Nombre del artículo: {{$article->nombre_articulo}}</p>
            <p>Tipo de artículo: {{$article->tipo_articulo}}</p>
            <p>Costo: {{$article->costo}}</p>
            <p>Descripción: {{$article->desc_art}}</p>
        </div>
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

    /* Estilos para el título */
    h1 {
        text-align: center;
        color: #333;
    }

    /* Estilos para los párrafos */
    p {
        margin-bottom: 10px;
    }
</style>
