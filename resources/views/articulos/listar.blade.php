<body>

    <h1>hola desde listar</h1>

    <table>

        @foreach ($articles as $article)
        {{-- creo una fila --}}
        <tr>
            <td>{{$article->id}}</td>
            <td>{{$article->nombre_articulo}}</td>
            <td>{{$article->tipo_articulo}}</td>
            <td>{{$article->costo}}</td>
            <td>{{$article->desc_art}}</td>
            <td><a href="{{route('article.show', $article->id)}}" >Mostrar</a></td>
        </tr>
        <form action="{{route('article.destroy',$article->id)}}" method="POST">
            @csrf
            @method('delete')
            <td><button type="submit">Eliminar</button></td>
        </form>
        @endforeach
    </table>

</body>
