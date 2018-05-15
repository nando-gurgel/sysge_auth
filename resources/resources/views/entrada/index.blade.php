@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Entrada e saídas de Veiculos</h2>
            </div>
            <div class="float-right">
              <a class="btn btn-success" href="{{ route('entrada.create') }}"> Registrar </a>
                <a class="btn btn-info" href="{{ route('home') }}"> Voltar </a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="placa">Placa</label>
            <select id='id_veiculos' name='id_veiculos' class='form-control'>
                <option value=''>Selecione um Veículo</option>
               @foreach ($veiculos as $veiculo)
                 <option value='{{ $veiculo->id }}'>{{ $veiculo->placa }}</option>
              @endforeach
            </select>
          </div>
        </div>
            <div class="row">
              <div class="col-md-4 order-md-2 mb-2">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                  <span class="text-muted">Extrato</span>
                </h4>
                <ul class="list-group mb-3">
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                      <h6 class="my-0">*Placa</h6>
                      <small class="text-muted" value='{{ $veiculo->id }}'>{{ $veiculo->placa }}</small>
                    </div>
                  </li>
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                      <h6 class="my-0">Entrada</h6>
                    </div>
                    <span class="text-muted">*00:00</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                      <h6 class="my-0">Saída</h6>
                    </div>
                    <span class="text-muted">*00:00</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between">
                    <span>Total (R$)</span>
                    <strong>R$0,00</strong>
                  </li>
                </ul>
              </div>
              </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
    @endif
  </div>
@endsection
