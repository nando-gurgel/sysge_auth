<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>SGE Entrada/Saidas</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="../../public/css/app.css" rel="stylesheet">
	<style>
        body{
            background-color: #FFF;
        }
		h7{
			font-size:30px;
			font-family:inherit;
			font-weight:500;
			line-height:1.1;
			color:black;
		}
    </style>
  </head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <a class="navbar-brand" href="#" >
     <img src="../../public/parkIcon.jpg" width="40" height="40" alt=""">
  </a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('http://localhost/laravel-mysql/public/index.php')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('http://localhost/laravel-mysql/resources/views/entrada.php')}}">Entrada/Saída</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cadastrar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('http://localhost/laravel-mysql/public/index.php/veiculos')}}">Veiculo</a>
          <a class="dropdown-item" href="{{url('http://localhost/laravel-mysql/public/index.php/clientes')}}">Cliente</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('http://localhost/laravel-mysql/public/index.php/usuarios')}}">Usuários</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Vagas</a>
      </li>
    </ul>
  </div>
</nav>
    <div class="container">
      <div class="py-5 text-center">
        <h7>Entrada e Saída de Veículos</h7>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Extrato</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">*Nome</h6>
                <small class="text-muted">*placa</small>
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
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Dados</h4>
          <form class="needs-validation" novalidate="">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome" value="" required="">
				<div class="invalid-feedback">
                  Digite um nome.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Placa</label>
                <input type="text" class="form-control" id="placa" placeholder="xxx-0000" value="" required="">
                <div class="invalid-feedback">
                  Digite uma praca válida.
                </div>
              </div>
            </div>

            <div class="col-md-6 mb-3">
                <label for="entrada">Entrada</label>
                <input type="time" class="form-control" id="entrada" value="">
              </div>
              <div class="col-md-6 mb-3">
                <label for="saida">Saída</label>
                <input type="time" class="form-control" id="saida" value="">
              </div>

            <div class="mb-3">
              <label for="tipo">Tipo</label>
              <select class="custom-select d-block w-100" id="country" required="">
                  <option value="">Escolha...</option>
                  <option>Pequeno</option>
				  <option>Médio</option>
				  <option>Grande</option>
                </select>
			  </div>
			  
			  <h4 class="mb-3">Serviço</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="hora" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                <label class="custom-control-label" for="hora">Horista</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="mensal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="mensal">Mensalista</label>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-success btn-lg" type="submit">Registrar Entrada</button>
			<button class="btn btn-success btn-lg " type="submit">Registrar Saída</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2018 SGE</p>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
</body>
</html>