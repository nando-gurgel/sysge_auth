<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nome:</strong>
            {!! Form::text('nome', null, array('placeholder' => 'Nome','class' => 'form-control','required'=>'required')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>E-mail:</strong>
            {!! Form::text('email', null, array('placeholder' => 'E-mail','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CPF:</strong>
            {!! Form::text('cpf', null, array('placeholder' => 'CPF','class' => 'form-control','data-mask'=>"000.000.000-00")) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Telefone:</strong>
            {!! Form::text('telefone', null, array('placeholder' => 'Telefone','class' => 'form-control','data-mask'=>"(00) 00000-0000")) !!}
        </div>
    </div>
	 <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Veículo:</strong>

			<select id='veiculos_id' name='veiculos_id' class='form-control'>
				  <option value=''>Selecione um Veículo</option>
			   @foreach ($veiculos as $veiculo)
				   <option value='{{ $veiculo->id }}'>{{ $veiculo->placa }}</option>
			  @endforeach
			</select>

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>
