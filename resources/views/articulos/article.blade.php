<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>ARTICULOS</h1>

<form action="{{route('article.Store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre del Articulo:
    <br>
    <input type="text" name="nombre_articulo">
</label>
<br>
<label>
    Tipo de Articulo:
    <br>
    <input type="text" name="tipo_articulo">
</label>
<br>
<label>
    Costo del Articulo:
    <br>
    <input type="double" name="costo">
</label>
<br>
<label>
    descripcion del Articulo:
    <br>
    <input type="text" name="desc_art">
</label>
<br>
<br>
<button type="submit">Enviar Formulario</button>
</form>
</body>
</html>
