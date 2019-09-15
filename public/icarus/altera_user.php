<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css\bootstrap.min.css">
	<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <title>Alterar</title>
	<link href="css\dashboard.css" rel="stylesheet">
	<link href="css\form-validation.css" rel="stylesheet"> 
  </head>
  <body class="text-center">
	<script src="js\jquery-3.3.1.slim.min.js" ></script>
	<script src="js\popper.min.js" ></script>
	<script src="js\bootstrap.min.js" ></script>
	<script src="js\form-validation.js"></script>

<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">Icarus</a>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="logout.php">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
   <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
	   <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Sistema</span>
        </h5>
        <ul class="nav flex-column">
		<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-muted">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
			 <span data-feather="bar-chart-2"></span>
			  Dashboard
            </a>
          </li>
		</h6>
		
          <li class="nav-item">
		    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-muted">
            <a class="nav-link" href="auditoria.php">
			<span data-feather="file"></span>
              Auditoria
            </a>
		    </h6>
          </li>
          <li class="nav-item">
		  	<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-muted">
            <a class="nav-link" href="aviso.php">
              <span data-feather="alert-circle"></span>
              Avisos
            </a>
			</h6>
          </li>
          <li class="nav-item">
			<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-muted">
            <a class="nav-link" href="relatorio.php">
              <span data-feather="layers"></span>
              Relatórios
            </a>
			</h6>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Gerenciamento</span>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
		    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-muted">
            <a class="nav-link" href="user.php">
              <span data-feather="users"></span>
			  Contas
            </a>
			</h6>
          </li>
          <li class="nav-item">
			<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-muted">
            <a class="nav-link" href="log.php">
			<span data-feather="archive"></span>
              LOGS
            </a>
			</h6>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Alterar usuário</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary" onClick="window.location.href='user.php'">Voltar</button>
          </div>
        </div>
      </div>
	  
	<div class="container">
  <div class="row">
    <div class="col">
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Insira o nome" value="" required>
            <div class="invalid-feedback">
              Insira um nome
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="usuario">Usuário</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">ID</span>
            </div>
            <input type="text" class="form-control" id="usuario" placeholder="User_ID" required>
            <div class="invalid-feedback" style="width: 100%;">
             Insira um ID de Usuário
            </div>
          </div>
        </div>

          <div class="mb-3">
          <label for="email">E-mail</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="email" class="form-control" id="email" placeholder="email" required>
            <div class="invalid-feedback" style="width: 100%;">
             Insira o email
            </div>
          </div>
        </div>
		
		 <div class="row">
          <div class="col-md-12 mb-3">
            <label for="password">Senha</label>
            <input type="password" class="form-control" id="senha" placeholder="Insira uma senha" value="" required>
            <div class="invalid-feedback">
              Insira uma senha.
            </div>
          </div>
        </div>
		
        <hr class="mb-4">

        <h4 class="mb-3">Tipo de Usuário</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="credit">Auditor</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="debit">Auditado</label>
          </div>
        </div>
		<hr class="mb-4">
		<h4 class="mb-3">Responsabilidade</h4>
		<div class="d-block my-3">
			<select class="form-control" id="responsabilidade">
				<option>Art.12</option>
				<option>Art.37</option>
				<option>Art.38</option>
				<option>Art.48</option>
			</select>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Cadastro</button>
      </form>
    </div>
  </div>
	 
	
    </main>
  </div>
</div>
<script src="js\jquery-3.3.1.slim.min.js" ></script>
<script>window.jQuery || document.write('<script src="js\jquery-slim.min.js"><\/script>')</script><script src="js\bootstrap.bundle.min.js"></script>
<script src="js\feather.min.js"></script>
<script src="js\chart.min.js"></script>
<script src="js\dashboard.js"></script>
  </body>
</html>