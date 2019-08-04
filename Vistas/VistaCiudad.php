<?php

require_once('..\Datos\CrudCiudad.php');
require_once('..\Modelo\ciudad.php');
$crud=new CrudCiudad();
$libro= new ciudad();
//lista todas las ciudades con el método mostrar de la clase crud
$listaCiudad=$crud->mostrar();
?>

<html>
<head>
	<title>Mostrar ciudad</title>
		<link rel="stylesheet" href="..\Estilos\site.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>
	<header>
		<?php include('header.php'); ?>
   </header>
	<table class="table-striped table-persona" border=2 >
		<head>
			<td>Id</td>
			<td>Departamento</td>
			<td>Ciudad</td>

      <td>Actualizar</td>
			<td>Eliminar</td>
		</head>
		<body>
			<?php foreach ($listaCiudad as $ciudad ){
				?>
			<tr>
				<td><?php echo $ciudad->getid() ?></td>
				<td><?php echo $ciudad->getDepartamento() ?></td>
				<td><?php echo $ciudad->getDescripcion()?> </td>

				<td><a href="..\Vistas\actualizarCiudad.php?id=<?php echo $ciudad->getId()?>&accion=a">Actualizar</a> </td>
				<td><a href="..\controladores\controllerCiudad.php?id=<?php echo $ciudad->getId()?>&accion=e">Eliminar</a>   </td>
			</tr>
      <?php   };      ?>
		</body>

	</table>

</body>
</html>
