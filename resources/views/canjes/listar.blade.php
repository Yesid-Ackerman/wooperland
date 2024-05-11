<body>

    <h1>hola desde listar</h1>

    <table>

        @foreach ($excs as $exc)
        {{-- creo una fila --}}
        <tr>
            <td>{{$exc->id}}</td>
            <td>{{$exc->desc_can}}</td>
            <td>{{$exc->ava_avatar}}</td>
            <td>{{$exc->art_article}}</td>
            <td><a href="{{route('exchange.show', $exc->id)}}" >Mostrar</a></td>
        </tr>
        <form action="{{route('exchange.destroy',$exc->id)}}" method="POST">
            @csrf
            @method('delete')
            <td><button type="submit">Eliminar</button></td>
        </form>
        @endforeach
    </table>

</body>
