@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-dark">Menu</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Conectado

                    <div>
                      <a href="{{url('clientes')}}">Gerenciar Clientes</a>
                    </div>
                    <div>
                      <a href="{{url('veiculos')}}">Gerenciar Veículos</a>
                    </div>
                    <div>
                      <a href="{{url('usuarios')}}">Gerenciar Usuários</a>
                    </div>
                    <div>
                      <a href="{{url('entrada')}}">Gerenciar Entradas/Saídas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
