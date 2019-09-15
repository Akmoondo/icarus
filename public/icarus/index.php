<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css\bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
	<link href="css\signin.css" rel="stylesheet">
    <title>Login</title>
  </head>
  <body class="text-center">
  <!-- conectar com o banco -->
		<form class="form-signin" method="post" action="dashboard.php">
			<h1>Icarus</h1>
			<h1 class="h3 mb-3 font-weight-normal">Faça seu Login</h1>
			<label for="inputEmail" class="sr-only">Usuário</label>
			<input type="text" id="inputText" class="form-control" placeholder="User-ID" required autofocus>
			<label for="inputPassword" class="sr-only">Senha</label>
			<input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
		</form>

 
  </body>
</html>