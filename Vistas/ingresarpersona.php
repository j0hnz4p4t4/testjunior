<?php

require_once('..\Datos\crudTipoDocumento.php');
require_once('..\Modelo\tipoDocumento.php');
require_once('..\Datos\CrudCiudad.php');
$crud=new crudTipoDocumento();
$crudCiudad=new CrudCiudad();
//lista todas los tipos de Documentos
$listaTipoDocumento=$crud->mostrar();
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



</head>
<body>
  <header>
    <?php include('header.php'); ?>
   </header>

<form action='../controladores/controller.php' method='post'>
	<div class="form-insert">
      <label class="alert">
<?php
if(isset($_GET['msg'])){

 echo 'ERROR! Una persona con el mismo numero de indentificación ya se encuentra en el sistema';
}
?>
</label>
    <div class="form-group">
     <label class="" for="nombre">Nombre :</label>
    <input class="form-control" type='text' name='nombre' required="true">
    </div>

    <div class="form-group">
     <label class="" for="apellido">Apellido :</label>
     <input class="form-control" type='text' name='apellido' required="true">
    </div>

    <div class="form-group">
     <label class="" for="numeroDocumento">Numero Documento :</label>
     <input class="form-control" type='text' name='numeroDocumento' required="true">
    </div>

    <div class="form-group">
     <label class="" for="idTipoDocumento">Tipo Documento :</label>
     <select class="form-control" name="idTipoDocumento" required="true">
     <?php
      foreach($listaTipoDocumento as $td) {?>
      <option value ='<?php echo $td->getId()?>'>
        <?php echo $td->getDescripcion()?> </option>
    <?php };?>
    </select>
    </div>

    <div class="form-group">
     <label for="idCiudad">Ciudad :</label>
     <select class="form-control" name="idCiudad" required="true">
     <?php
      foreach($listaCiudad as $td) {?>
      <option value ='<?php echo $td->getId()?>'>
        <?php echo $td->getDescripcion()?> </option>
    <?php };?>
  </select>

    </div>

		<input type='hidden' name='insertar' value='insertar'>
<input type='submit' class=" btn btn-primary  form-control" value='Guardar'>

	</div>
</form>
</body>
</html>
