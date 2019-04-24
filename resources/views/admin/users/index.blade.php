@extends('admin.template.main')

@section('title','Lista de Usuarios')

@section('content')
    <table class="table table-striped">
        <head>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
        </head>

        <body>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <!--  boton de editar -->
                        <a href="/admin/users/{{$user->id}}/edit" class="btn btn-warning"></a>
                        
                        <!-- boton de borrar  
                        Para borrar no puedo crear una vista porque en la url se veria el id y la ruta que desde otra pagina
                        se puede falsificar (problema de seguridad), por lo tanto uso un formulario con un boton que me 
                        llame al metodo destroy del controlador
                        -->
                    <form method="POST" action="/admin/users/{{$user->id}}">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}


                            <button  class="btn btn-danger"></button>
                        </form>
                    </td>
                </tr>

            @endforeach
        </body>

    </table>
    <!--   renderizo para tener la paginacion con render() -->
    {!! $users->render() !!}

@endsection