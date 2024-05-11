<body>

    <h1>hola desde listar</h1>

    <table>

        @foreach ($helps as $help)
        {{-- creo una fila --}}
        <tr>
            <td>{{$help->id}}</td>
            <td>{{$help->desc_ayu}}</td>
            <td>{{$help->niveles_id_nivel}}</td>
            <td><a href="{{route('help.show', $help->id)}}" >Mostrar</a></td>
        </tr>
        <form action="{{route('help.destroy',$help->id)}}" method="POST">
            @csrf
            @method('delete')
            <td><button type="submit">Eliminar</button></td>
        </form>
        @endforeach
    </table>

</body>
