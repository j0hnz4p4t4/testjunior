<?php
require_once('conexion.php');

	class CrudTipoDocumento{
		// constructor de la clase
		public function __construct(){}


		// método para mostrar Tipo decumento
		public function mostrar(){
			$db=Db::conectar();
			$listaTipoDocumento=[];
			$select=$db->query('SELECT * FROM tipoDocumento; ');
					foreach($select->fetchAll() as $tipoDocumento){
				$mytipoDocumento= new tipoDocumento();
				$mytipoDocumento->setId($tipoDocumento['id']);
				$mytipoDocumento->setDescripcion($tipoDocumento['descripcion']);

       array_push($listaTipoDocumento,$mytipoDocumento);
			}
			return $listaTipoDocumento;

	}
}
?>
