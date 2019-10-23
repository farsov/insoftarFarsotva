@extends('layouts.app')

@section('content')
<div class="container">
   

    <div class="row">
        <div class="col-sm-12">
            <h2>Listado de usuarios</h2>
        </div>
        <div class="col-sm-12">
            <a class="btn btn-success" href="{{ route('user.create') }}" role="button">Crear Usuario</a>
            <br><br>
        </div>
        <div class="col-sm-12">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>{{ session('success') }}</strong> 
                </div>
            @endif

            <div class="table-container">
                <table  class="table">
                    <thead class="thead-dark">
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Cédula</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                    @if($users->count())
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->last_name}}</td>
                                <td>{{$user->document}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>
                                    <a title="Editar" href="{{ route('user.edit', $user->id) }}" class="btn btn-warning" role="button"> Editar </a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="8">No hay registros !!</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
