<?php

	require_once('..\Datos\crudPersonas.php');
	require_once('..\Modelo\persona.php');
	require_once('..\Datos\crudTipoDocumento.php');
	require_once('..\Modelo\tipoDocumento.php');
	require_once('..\Datos\CrudCiudad.php');


	$crud= new CrudPersonas();
	$persona=new persona();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$persona=$crud->BuscarPersona($_GET['id']);


	$crudT=new crudTipoDocumento();
	$crudCiudad=new CrudCiudad();
	//lista todas los tipos de Documentos
	$listaTipoDocumento=$crudT->mostrar();
	//lista todas las Ciudades
	$listaCiudad=$crudCiudad->mostrar();


?>
<html>
<head>
			<link rel="stylesheet" href="..\Estilos\site.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<title>Actualizar Persona</title>

</head>
<body>
	<header>
		<?php include('header.php'); ?>
   </header>

	<form action='..\controladores\controller.php' method='post'>

		<div class="form-insert">
<input class="form-control" type='hidden' name='id' value='<?php echo $persona->getId()?>' required="true">
	    <div class="form-group">
	     <label class="" for="nombre">Nombre :</label>
	   <input class="form-control" type='text' name='nombre' value='<?php echo $persona->getNombre()?>'  required="true" >
	    </div>

	    <div class="form-group">
	     <label class="" for="apellido">Apellido :</label>
	     	 <input class="form-control" type='text' name='apellido' value='<?php echo $persona->getApellido()?>' required="true"></td>
	    </div>

	    <div class="form-group">
	     <label class="" for="numeroDocumento">Numero Documento :</label>
	     <input class="form-control" type='text' name='numeroDocumento' value='<?php echo $persona->getNumeroDocumento() ?>' required="true">
	    </div>

	    <div class="form-group">
	     <label class="" for="idTipoDocumento">Tipo Documento :</label>
			 <select class="form-control"  name="idTipoDocumento" required="true">
			 <?php
				foreach($listaTipoDocumento as $td) {?>
				<option value ='<?php echo $td->getId()?>'
					<?php if($persona->getIdTipoDocumento() == $td->getId()){echo 'selected = "selected"';}?> >
					<?php echo $td->getDescripcion()?> </option>
			<?php };?> </select>
	    </div>

	    <div class="form-group">
	     <label for="idCiudad">Ciudad :</label>
			 <select class="form-control" name="idCiudad" required="true">
			 <?php
				foreach($listaCiudad as $td) {?>
				<option value ='<?php echo $td->getId()?>'
					<?php if($persona->getIdCiudad() == $td->getId()){echo 'selected = "selected"';}?> >
					<?php echo $td->getDescripcion()?> </option>
			<?php };?>
	  </select>

	    </div>

			<input type='hidden' name='actualizar' value='actualizar'>
	<input type='submit' class=" btn btn-primary  form-control" value='actualizar'>


		</div>



</form>
</body>
</html>
