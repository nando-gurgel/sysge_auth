@extends('layout')


@section('content')


        <div class="container list-group">
            <ul>
                <li class="list-group-item list-group-item-action"><a href="{{ route('veiculos.index') }}">Veículos</a></li>
                <li class="list-group-item list-group-item-action"><a href="{{ route('clientes.index') }}">Clientes</a></li>
				<li class="list-group-item list-group-item-action"><a href="{{ route('usuarios.index') }}">Usuários</a></li>
            </ul>
        </div>


@endsection