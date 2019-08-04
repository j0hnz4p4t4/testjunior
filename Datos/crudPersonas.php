<?php
require_once('conexion.php');

	class CrudPersonas{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto una persona
		public function insertar($persona){

			if($this->BuscarPersonaDocumento($persona->getNumeroDocumento() )){
				 return false;
			}
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO persona (nombre,apellido,numeroDocumento,idTipoDocumento,idCiudad) values(:nombre,:apellido,:numeroDocumento,:tipoDocumento,:idCiudad)');

			$insert->bindValue('nombre',$persona->getNombre());
			$insert->bindValue('apellido',$persona->getApellido());
			$insert->bindValue('numeroDocumento',$persona->getNumeroDocumento());
      $insert->bindValue('tipoDocumento',$persona->getIdTipoDocumento());
			$insert->bindValue('idCiudad',$persona->getIdCiudad());
			$insert->execute();
			return true;

		}

		// método para mostrar todas las PersonasS
		public function mostrar(){
			$db=Db::conectar();
			$listaPersona=[];
			$select=$db->query('SELECT * FROM descripcionPersona; ');
					foreach($select->fetchAll() as $persona){
				$myPersona= new persona();
				$myPersona->setId($persona['id']);
				$myPersona->setNombre($persona['nombre']);
				$myPersona->setApellido($persona['apellido']);
				$myPersona->setNumeroDocumento($persona['numeroDocumento']);
        $myPersona->setTipoDocumento($persona['TipoDocumento']);
				$myPersona->setCiudad($persona['ciudad']);


       array_push($listaPersona,$myPersona);
			}
			return $listaPersona;
		}

		// método para eliminar una Persona, recibe como parámetro el id de la persona
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM persona WHERE id=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}

		// método para buscar un Persona, recibe como parámetro el id del Persona
		public function BuscarPersona($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM persona WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$persona=$select->fetch();
			$myPersona = new persona();
			$myPersona->setId($persona['id']);
			$myPersona->setNombre($persona['nombre']);
			$myPersona->setApellido($persona['apellido']);
			$myPersona->setNumeroDocumento($persona['numeroDocumento']);
      $myPersona->setIdTipoDocumento($persona['idTipoDocumento']);
			$myPersona->setIdCiudad($persona['idCiudad']);
			return $myPersona;
		}
		// método para buscar un Persona, recibe como parámetro el id del Persona
		public function BuscarPersonaDocumento($numeroDocumento){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM persona WHERE numeroDocumento=:numeroDocumento');
			$select->bindValue('numeroDocumento',$numeroDocumento);
			$select->execute();


			if ($select->rowCount() > 0) return true;
			return false;

		}
		// método para actualizar un libro, recibe como parámetro el libro
		public function actualizar($persona){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE persona SET nombre=:nombre, apellido=:apellido,numeroDocumento=:numeroDocumento,idtipoDocumento=:tipoDocumento,idCiudad=:idCiudad WHERE ID=:id');
			$actualizar->bindValue('id',$persona->getId());
			$actualizar->bindValue('nombre',$persona->getNombre());
			$actualizar->bindValue('apellido',$persona->getApellido());
			$actualizar->bindValue('numeroDocumento',$persona->getNumeroDocumento());
      $actualizar->bindValue('tipoDocumento',$persona->getTipoDocumento());
			$actualizar->bindValue('idCiudad',$persona->getIdCiudad());
			$actualizar->execute();
		}
	}
?>
