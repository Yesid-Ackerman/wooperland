<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>AVATARS</h1>

<form action="{{route('exchange.Store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Descripcion de Canje:
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
    Articulo:
    <br>
    <input type="text" name="art_article">
</label>
<br>
<br>
<button type="submit">Enviar Formulario</button>
</form>
</body>
</html>

