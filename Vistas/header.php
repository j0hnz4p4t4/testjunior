<div class="container">
<header>
  <h2>Bienvenido <?php 	session_start(); echo $_SESSION['user']?></h2>	</header>
  <ul class="nav">
  <li class="nav-item">
    <a class"nav-link" href="ingresarpersona.php">Ingresar Persona</a>
  </li>
  <li class="nav-item">
    <a class"nav-link" href="ingresarciudad.php">Ingresar Ciudad</a>
  </li>
  <li class="nav-item">
      <a class"nav-link" href="Vista.php">Ver Personas</a>
  </li>
  <li class="nav-item">
    <a class"nav-link" href="Vistaciudad.php">Ver Ciudades</a>
  </li>
  <li class="nav-item">
    <a class"nav-link" href="login.php">Salir</a>
  </li>
</ul>
</div>
