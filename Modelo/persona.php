<?php
	class persona{
		private $id;
		private $nombre;
		private $apellido;
		private $numeroDocumento;
    private $idTipoDocumento;
		private $tipoDocumento;
		private $idCiudad;
		private $Ciudad;

		function __construct(){}

      public function getId(){
      return $this->id;
      }

      public function setId($id){
        $this->id = $id;
      }


		public function getNombre(){
		return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getApellido(){
			return $this->apellido;
		}

		public function setApellido($apellido){
			$this->apellido = $apellido;
		}

		public function getNumeroDocumento(){
		return $this->numeroDocumento;
		}

		public function setNumeroDocumento($numeroDocumento){
			$this->numeroDocumento = $numeroDocumento;
		}
		public function getIdTipoDocumento(){
			return $this->idTipoDocumento;
		}

		public function setIdTipoDocumento($IdtipoDocumento){
			$this->idTipoDocumento = $IdtipoDocumento;
		}
		public function getTipoDocumento(){
			return $this->tipoDocumento;
		}

		public function setTipoDocumento($tipoDocumento){
			$this->tipoDocumento = $tipoDocumento;
		}
		public function getIdCiudad(){
		return $this->idCiudad;
		}

		public function setIdCiudad($idCiudad){
			$this->idCiudad = $idCiudad;
		}
		public function getCiudad(){
		return $this->Ciudad;
		}

		public function setCiudad($Ciudad){
			$this->Ciudad = $Ciudad;
		}
	}
?>
