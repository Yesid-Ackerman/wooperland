<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>AVATARS</h1>

<form action="{{route('help.Store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Descripcion de Ayuda:
    <br>
    <input type="text" name="desc_ayu">
</label>
<br>
<label>
    Nivel:
    <br>
    <input type="int" name="niveles_id_nivel">
</label>
<br>
<br>
<button type="submit">Enviar Formulario</button>
</form>
</body>
</html>

