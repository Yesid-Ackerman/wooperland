<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>ARTICULOS</h1>

        <form action="{{route ('article.store')}} " method="post" enctype="multipart/form-data">
            @csrf
            <label>
                <input type="text" name="nombre_articulo" placeholder="Nombre del Articulo">
            </label>
            <label>
                <input type="text" name="tipo_articulo" placeholder="Tipo de Articulo">
            </label>
            <label>
                <input type="number" name="costo" placeholder="Costo del Articulo">
            </label>
            <label>
                <input type="text" name="desc_art" placeholder="Descripcion del Articulo">
            </label>
            <button type="submit">Enviar Formulario</button>
        </form>
    </div>
</body>

<style>

body {
    font-family: Arial, sans-serif;
    text-align: center;
    margin: 0;
    padding: 0;
    background-color: #FFD166;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    max-width: 500px; /* Aumenté el ancho máximo del formulario */
    width: 90%; /* Hice el formulario más ancho */
    padding: 40px; /* Aumenté el espacio interno */
    background-color: #EF476F;
    border-radius: 15px; /* Aumenté el radio del borde */
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); /* Aumenté la intensidad de la sombra */
}

h1 {
    color: #333;
}

label {
    display: block;
    margin-bottom: 20px; /* Aumenté el espacio entre etiquetas */
}

input[type="text"],
input[type="number"] {
    width: calc(100% - 22px); /* Resté 22px para compensar el padding y el borde */
    padding: 15px; /* Aumenté el padding */
    margin: 10px 0; /* Aumenté el espacio vertical */
    border: 1px solid #ccc;
    border-radius: 10px; /* Aumenté el radio del borde */
    box-sizing: border-box;
}

button[type="submit"] {
    margin-top: 20px; /* Aumenté el espacio arriba del botón */
    background-color: #4caf50;
    color: white;
    padding: 15px 30px; /* Aumenté el padding */
    border: none;
    border-radius: 15px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #45a049;
}


</style>

</html>
