<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>niñotema</h1>

<form action="{{route('niñotema.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    llave foranea id del niño:
    <br>
    <input type="number" name="fk_id_niño">
</label>
<br>
<label>
    llave foranea id de tema:
    <br>
    <input type="number" name="fk_id_tema">
</label>
<br>
<button type="submit">Guardar</button>
</body>
</form>

</html>