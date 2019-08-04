<?php

require_once('..\Datos\crudPersonas.php');
require_once('..\Modelo\persona.php');
$crud=new CrudPersonas();
$libro= new persona();
//lista todas la personas con el método mostrar de la clase crud
$listaPersona=$crud->mostrar();
?>

<html>
<head>
	<title>Mostrar Persona</title>
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
	<table class="table-striped table-persona" border=2>
		<head>
			<td >Nombre</td>
			<td>Apellido</td>
			<td>Numero Documento</td>
			<td>Tipo Documento</td>
			<td>Ciudad</td>
      <td>Actualizar</td>
			<td>Eliminar</td>
		</head>
		<body>
			<?php foreach ($listaPersona as $persona ){
				?>
			<tr>
				<td><?php echo $persona->getNombre() ?></td>
				<td><?php echo $persona->getApellido() ?></td>
				<td><?php echo $persona->getNumeroDocumento()?> </td>
        <td><?php echo $persona->getTipoDocumento()?> </td>
				<td><?php echo $persona->getCiudad()?> </td>
				<td><a href="..\Vistas\actualizar.php?id=<?php echo $persona->getId()?>&accion=a">Actualizar</a> </td>
				<td><a href="..\controladores\controller.php?id=<?php echo $persona->getId()?>&accion=e">Eliminar</a>   </td>
			</tr>
      <?php   };      ?>
		</body>
	</table>
	<td>

</td>
</body>
</html>
