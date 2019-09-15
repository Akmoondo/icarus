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
    <title>Usuário</title>
	<link href="css\dashboard.css" rel="stylesheet">
  </head>
  <body class="text-center">
	<script src="js\jquery-3.3.1.slim.min.js" ></script>
	<script src="js\popper.min.js" ></script>
	<script src="js\bootstrap.min.js" ></script>

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
        <h1 class="h2">Contas</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary" onClick="window.location.href='cadastra_user.php'">Adicionar Usuário</button>
          </div>
        </div>
      </div>
	  
	  <h2>Auditores</h2>
	  <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
				<th>Usuário</th>
				<th>Nome</th>
				<th>Opção</th>
            </tr>
          </thead>
          <tbody>
              <tr>
              <td>001_LUPA</a></td>
              <td>Lucas Padilha</td>
			  <td><button type="button" class="btn btn-warning" onClick="window.location.href='altera_user.php'">Alterar</button><button type="button" class="btn btn-danger">Apagar</button></td>
            </tr>
             <tr>
              <td>002_AFSC</a></td>
              <td>Afonso Fonseca</td>
              <td><button type="button" class="btn btn-warning" onClick="window.location.href='altera_user.php'">Alterar</button><button type="button" class="btn btn-danger">Apagar</button></td>
            </tr>
          </tbody>
        </table>
      </div> 
	  
	  <h2>Auditados</h2>
	  <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Usuário</th>
              <th>Nome</th>
              <th>Responsábilidade</th>
              <th>Opção</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>003_JOAO</a></td>
              <td>João Augusto</td>
              <td>Art. 48</td>
			  <td><button type="button" class="btn btn-warning" onClick="window.location.href='altera_user.php'">Alterar</button><button type="button" class="btn btn-danger">Apagar</button></td>
            </tr>
             <tr>
              <td>003_MRIA</a></td>
              <td>Maria Juanita</td>
              <td>Art. 12</td>
			  <td><button type="button" class="btn btn-warning" onClick="window.location.href='altera_user.php'">Alterar</button><button type="button" class="btn btn-danger">Apagar</button></td>
			  
            </tr>
          </tbody>
        </table>
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