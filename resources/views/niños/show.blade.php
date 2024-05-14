<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: 'Happy Monkey', cursive; 
            background-color: #FFD166; 
            text-align: center; 
        }

        h1 {
            color: #333; 
            margin-bottom: 20px; 
        }

        .kid-info {
            max-width: 400px; 
            margin: 0 auto; 
            background-color: #fff; 
            padding: 20px; 
            border-radius: 20px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        }
    </style>
</head>
<body>
    <h1>Mostrar niño</h1>
    <div class="kid-info">
        {{$kid}}
    </div>
</body>
</html>

