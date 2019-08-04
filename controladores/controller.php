<?php

require_once('..\Datos\crudPersonas.php');
require_once('..\Modelo\persona.php');

$crud= new CrudPersonas();
$persona= new persona();

	// si el elemento insertar no viene nulo llama al crud e inserta una persona
	if (isset($_POST['insertar'])) {
		$persona->setId($_POST['id']);
		$persona->setNombre($_POST['nombre']);
		$persona->setApellido($_POST['apellido']);
		$persona->setNumeroDocumento($_POST['numeroDocumento']);
    $persona->setIdTipoDocumento($_POST['idTipoDocumento']);
		$persona->setIdCiudad($_POST['idCiudad']);
		//llama a la función insertar definida en el crud
	  if($crud->insertar($persona)){
			header('Location: ..\Vistas\vista.php');
		}else{

			header('Location: ..\Vistas\ingresarpersona.php?msg="error"');
		}
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza la persona
	}elseif(isset($_POST['actualizar'])){
    	$persona->setId($_POST['id']);
		$persona->setNombre($_POST['nombre']);
		$persona->setApellido($_POST['apellido']);
		$persona->setNumeroDocumento($_POST['numeroDocumento']);
		$persona->setTipoDocumento($_POST['idTipoDocumento']);
		$persona->setIdCiudad($_POST['idCiudad']);
		$crud->actualizar($persona);
		header('Location:..\Vistas\Vista.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina la persona
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: ..\Vistas\vista.php');
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php
	}elseif($_GET['accion']=='a'){
		header('Location: ..\Vistas\actualizar.php');
	}
?>
