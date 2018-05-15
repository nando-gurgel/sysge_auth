@extends('layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Usuários</h2>
                <h3>Selecione um ou crie um novo.</h3>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('usuarios.create') }}"> Cadastrar Usuário </a>
                <a class="btn btn-info" href="{{ route('home') }}"> Voltar </a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-dark table-bordered">
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Email</th>
            <th width="280px">Ação</th>
        </tr>

        @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->name}}</td>
				<td>{{ $usuario->email}}</td>

                <td>
                    <a class="btn btn-outline-primary btn-sm" href="{{ route('usuarios.edit',$usuario->id) }}">Editar</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['usuarios.destroy', $usuario->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-outline-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>


    {!! $usuarios->links() !!}
@endsection
