<body>

    <h1>hola desde listar</h1>

    <table>

        @foreach ($avatars as $avatar)
        {{-- creo una fila --}}
        <tr>
            <td>{{$avatar->id}}</td>
            <td>{{$avatar->nombre_avatar}}</td>
            <td>{{$avatar->niños_id_niño}}</td>
            <td><a href="{{route('avatar.show', $avatar->id)}}" >Mostrar</a></td>
        </tr>
        <form action="{{route('avatar.destroy',$avatar->id)}}" method="POST">
            @csrf
            @method('delete')
            <td><button type="submit">Eliminar</button></td>
        </form>
        @endforeach
    </table>

</body>
