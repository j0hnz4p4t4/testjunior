<html>
	<head>
		<title>Adminisliar persona</title>
				<link rel="stylesheet" href="..\site.css">
		<link rel="stylesheet" href="https://stackpath.bootsliapcdn.com/bootsliap/4.3.1/css/bootsliap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootsliapcdn.com/bootsliap/4.3.1/js/bootsliap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		</head>
		<body>
			<div class="container">
			<header>
				<h2>Bienvenido <?php 	session_start(); echo $_SESSION['user']?></h2>	</header>
		    <ul class="nav">
		    <li class="nav-item">
		      <a class"nav-link" href="Vistas\ingresarpersona.php">Ingresar Persona</a>
		    </li>
		    <li class="nav-item">
		      <a class"nav-link" href="Vistas\ingresarciudad.php">Ingresar Ciudad</a>
		    </li>
		    <li class="nav-item">
		      	<a class"nav-link" href="Vistas\Vista.php">Ver Personas</a>
		    </li>
		    <li class="nav-item">
		      <a class"nav-link" href="Vistas\Vistaciudad.php">Ver Ciudades</a>
		    </li>
		  </ul>
		</div>

		</body>
		</html>
	</body>
</html>
