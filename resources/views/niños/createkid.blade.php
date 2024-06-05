<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background-color: #FFD166; /* Fondo amarillo */
            font-family: 'Happy Monkey', cursive; /* Tipo de letra */
        }

        form {
            max-width: 400px; /* Ancho máximo del formulario */
            margin: 0 auto; /* Centrar el formulario en la página */
        }

        label {
            display: block; /* Mostrar cada etiqueta en una nueva línea */
            margin-bottom: 15px; /* Espacio entre etiquetas */
        }

        input[type="text"],
        input[type="number"],
        button {
            width: 100%; /* Ancho completo para los inputs y el botón */
            padding: 10px; /* Espacio interno */
            margin-bottom: 15px; /* Espacio entre elementos */
            border: 2px solid #fff; /* Borde blanco */
            border-radius: 20px; /* Borde redondeado */
            box-sizing: border-box; /* Incluir el borde en el tamaño total */
            background-color: #fff; /* Fondo blanco */
            font-family: 'Happy Monkey', cursive; /* Tipo de letra */
        }

        button {
            background-color: #EF476F; /* Color del botón */
            color: #fff; /* Color del texto del botón */
            cursor: pointer; /* Cursor al pasar por encima del botón */
        }

        button:hover {
            background-color: #d73858; /* Color del botón al pasar el mouse */
        }
    </style>
</head>
<body>

<h1>KID</h1>

<form action="{{ route('niños.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>
        Nombre de niño:
        <br>
        <input type="text" name="nombre">
    </label>
    <br>
    <label>
        Apellido de niño:
        <br>
        <input type="text" name="apellido">
    </label>
    <br>
    <label>
        Edad de niño:
        <br>
        <input type="number" name="edad">
    </label>
    <br>
    <label>
        Nickname de niño:
        <br>
        <input type="text" name="nickname">
    </label>
    <br>
    <label>
        avatar:
        <br>
        <input type="text" name="avatar">
    </label>
    <br>
    <button type="submit">Guardar</button>
</form>

</body>
</html>

