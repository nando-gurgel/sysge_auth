@extends('layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Veículos</h2>
                <h3>Selecione um ou crie um novo.</h3>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('veiculos.create') }}"> Cadastrar Veículo </a>
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
            <th>Placa</th>
            <th>Marca</th>
			<th>Modelo</th>
            <th width="280px">Ação</th>
        </tr>
		
		
        @foreach ($veiculos as $veiculo)
            <tr>
                <td>{{ $veiculo->id }}</td>
                <td>{{ $veiculo->placa }}</td>
                <td>{{ $veiculo->marca }}</td>
				<td>{{ $veiculo->modelo }}</td>
                <td>
                    <a class="btn btn-outline-primary btn-sm" href="{{ route('veiculos.edit',$veiculo->id) }}">Editar</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['veiculos.destroy', $veiculo->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-outline-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>


    {!! $veiculos->links() !!}
@endsection