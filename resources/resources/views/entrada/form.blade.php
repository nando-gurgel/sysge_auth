    <div class="container">
      <div class="py-1 text-center">
        <form class="needs-validation" novalidate="">

      </div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="placa">Placa</label>
          <select id='id_veiculos' name='id_veiculos' class='form-control' required>
              <option value=''>Selecione um Veículo</option>
             @foreach ($veiculos as $veiculo)
               <option value='{{ $veiculo->id }}'>{{ $veiculo->placa }}</option>
            @endforeach
          </select>
        </div>
      </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="entra">Entrada</label>
                {!! Form::time('entra', null, array('class' => 'form-control')) !!}
              </div>
              <div class="col-md-6 mb-3 ">
                <label for="sai">Saída</label>
                {!! Form::time('sai', null, array('class' => 'form-control')) !!}
              </div>
</div>

			  <h4 class="mb-3">Serviço</h4>
            <div class="d-block my-3">
              <div class="col-md-6 mb-3">
                <select id='tarifas_id' name='tarifas_id' class='form-control' required>
                    <option value=''>Selecione um tipo</option>
                   @foreach ($tarifas as $tarifa)
                     <option value='{{ $tarifa->id }}'>{{ $tarifa->tipo }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-success btn-lg" type="submit">Entrada/Saída</button>
          </form>
        </div>
      </div>
