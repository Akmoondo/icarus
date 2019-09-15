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
    <title>Relatórios</title>
	<link href="css\dashboard.css" rel="stylesheet">
	<link href="css\grid.css" rel="stylesheet">
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

  </div>
</div>
<script src="js\jquery-3.3.1.slim.min.js" ></script>
<script>window.jQuery || document.write('<script src="js\jquery-slim.min.js"><\/script>')</script><script src="js\bootstrap.bundle.min.js"></script>
<script src="js\feather.min.js"></script>
<script src="js\dashboard.js"></script>
  </body>
</html>