<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>AVATARS</h1>

<form action="{{route('avatar.Store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre de Avatar:
    <br>
    <input type="text" name="nombre_avatar">
</label>
<br>
<label>
    Id:
    <br>
    <input type="int" name="niños_id_niño">
</label>
<br>
<br>
<button type="submit">Enviar Formulario</button>
</form>
</body>
</html>

