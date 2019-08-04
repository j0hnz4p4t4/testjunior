<?php
require_once('conexion.php');
require_once('..\Modelo\ciudad.php');

	class CrudCiudad{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto una ciudad
		public function insertar($ciudad){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO ciudad (idDepartamento,descripcion) values(:idDepartamento,:descripcion)');
			$insert->bindValue('descripcion',$ciudad->getDescripcion());
			$insert->bindValue('idDepartamento',$ciudad->getIdDepartamento());
			$insert->execute();

		}

		// método para mostrar todas las ciudades
		public function mostrar(){
			$db=Db::conectar();
			$listaCiudad=[];
			$select=$db->query('SELECT c.descripcion As ciudad, c.id As id , d.descripcion as departamento FROM ciudad as c INNER JOIN  departamento as d ON d.id=c.idDepartamento ; ');
					foreach($select->fetchAll() as $ciudad){
				$myCiudad= new ciudad();
				$myCiudad->setId($ciudad['id']);
				$myCiudad->setDepartamento($ciudad['departamento']);
				$myCiudad->setDescripcion($ciudad['ciudad']);

       array_push($listaCiudad,$myCiudad);
			}
			return $listaCiudad;
		}

		// método para eliminar una Persona, recibe como parámetro el id de la persona
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM ciudad WHERE id=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}

		// método para buscar una ciudad, recibe como parámetro el id de la ciudad
		public function BuscarCiudad($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM ciudad WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$ciudad=$select->fetch();
			$myCiudad = new ciudad();
			$myCiudad ->setId($ciudad['id']);
			$myCiudad ->setIdDepartamento($ciudad['idDepartamento']);
			$myCiudad ->setDescripcion($ciudad['descripcion']);
			return $myCiudad;
		}

		// método para actualizar un Ciudad, recibe como parámetro el ciudad
		public function actualizar($ciudad){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE ciudad SET idDepartamento=:idDepartamento, descripcion=:descripcion WHERE ID=:id');
			$actualizar->bindValue('id',$ciudad->getId());
			$actualizar->bindValue('idDepartamento',$ciudad->getIdDepartamento());
			$actualizar->bindValue('descripcion',$ciudad->getDescripcion());
			$actualizar->execute();
		}
	}
?>
