<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar canje</title>
</head>
<body>
    <div class="container">
        <h1>ACTUALIZAR CANJE</h1>

        <form action="{{ route('exchange.update', $exchange->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="text" name="desc_can" placeholder="Descripción de Canje" value="{{ $exchange->desc_can }}">
            <input type="text" name="ava_avatar" placeholder="Avatar" value="{{ $exchange->ava_avatar }}">
            <input type="text" name="art_article" placeholder="Artículo" value="{{ $exchange->art_article }}">
            <button type="submit">Actualizar</button>
        </form>
    </div>
</body>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #ffd166;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        max-width: 500px;
        width: 90%;
        padding: 40px;
        background-color: #ef476f;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        text-align: center;
    }

    h1 {
        color: #333;
    }

    input[type="text"] {
        width: calc(100% - 22px);
        padding: 15px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-sizing: border-box;
    }

    button[type="submit"] {
        margin-top: 20px;
        background-color: #4caf50;
        color: white;
        padding: 15px 30px; 
        border: none;
        border-radius: 15px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</html>
