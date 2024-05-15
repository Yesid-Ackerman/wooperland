<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 
    <h1>listado de niñotema</h1>


        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>fk_id_niño</th>
                    <th>fk_id_tema</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kidTopicss as $kidTopics)
                    <tr>
                        <td>{{ $kidTopics->id }}</td>
                        <td>{{ $kidTopics->fk_id_niño }}</td>
                         <td>{{ $kidTopics->fk_id_tema }}</td>
                        <td><a href="{{ route('niñotema.show', $kidTopics->id) }}"  class="button">Mostrar</a></td>
                            <td>
                            <form action="{{ route('niñotema.destroy', $kidTopics->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>

</body>
</html>
