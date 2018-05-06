@extends('layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Clientes</h2>
                <h3>Selecione um ou crie um novo.</h3>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('clientes.create') }}"> Cadastrar Cliente </a>
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
            <th>CPF</th>
            <th>Telefone</th>
            <th width="280px">Ação</th>
        </tr>
        @if(!empty($clientes))
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nome}}</td>
                <td>{{ $cliente->email }}</td>

                <td>{{ vsprintf("%s%s%s.%s%s%s.%s%s%s-%s%s", str_split($cliente->cpf))}}</td>

                <td>{{ vsprintf( (strlen($cliente->telefone)==10?"(%s%s) %s%s%s%s-%s%s%s%s":"(%s%s) %s%s%s%s-%s%s%s%s%s"), str_split($cliente->telefone))}}</td>
                <td>                   
                    <a class="btn btn-outline-primary btn-sm" href="{{ route('clientes.edit',$cliente->id) }}">Editar</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['clientes.destroy', $cliente->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-outline-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        @endif
    </table>


    {!! $clientes->links() !!}
@endsection