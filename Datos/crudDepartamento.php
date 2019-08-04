<?php
require_once('conexion.php');
require_once('..\Modelo\departamento.php');

	class CrudDepartamento{
		// constructor de la clase
		public function __construct(){}



		// método para mostrar todos los departamento
		public function mostrar(){
			$db=Db::conectar();
			$listaDepartamento=[];
			$select=$db->query('SELECT * FROM departamento;');
					foreach($select->fetchAll() as $departamento){
				$myDepartamento= new departamento();
				$myDepartamento->setId($departamento['id']);
				$myDepartamento->setDescripcion($departamento['descripcion']);

       array_push($listaDepartamento,$myDepartamento);
			}
			return $listaDepartamento;
		}


	}
?>
