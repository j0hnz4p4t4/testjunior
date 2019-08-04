<?php

	// si el elemento insertar no viene nulo llama al crud e inserta una ciudad
	if (isset($_POST['nombre'])&&$_POST['nombre']!='') {
		session_start();
    $_SESSION['user']=$_POST['nombre'];
		header('Location: ..\Vistas\Vista.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza la ciudad
	}else{

		header('Location: ..\Vistas\login.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina la ciudad
	}
?>
