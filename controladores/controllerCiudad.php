<?php

require_once('..\Datos\CrudCiudad.php');
require_once('..\Modelo\ciudad.php');

$crud= new CrudCiudad();
$ciudad= new ciudad();

	// si el elemento insertar no viene nulo llama al crud e inserta una ciudad
	if (isset($_POST['insertar'])) {
		$ciudad->setIdDepartamento($_POST['idDepartamento']);
		$ciudad->setDescripcion($_POST['descripcion']);

		//llama a la función insertar definida en el crud
		$crud->insertar($ciudad);
		header('Location: ..\Vistas\VistaCiudad.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza la ciudad
	}elseif(isset($_POST['actualizar'])){
		$ciudad->setId($_POST['id']);
		$ciudad->setIdDepartamento($_POST['idDepartamento']);
		$ciudad->setDescripcion($_POST['descripcion']);

		$crud->actualizar($ciudad);
		header('Location: ..\Vistas\VistaCiudad.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina la ciudad
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: ..\Vistas\VistaCiudad.php');
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php
	}elseif($_GET['accion']=='a'){
		header('Location:..\Vistas\actualizarCiudad.php');
	}
?>
