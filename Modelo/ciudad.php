<?php
	class ciudad{
		private $id;
		private $idDepartamento;
		private $descripcion;


		function __construct(){}

      public function getId(){
      return $this->id;
      }

      public function setId($id){
        $this->id = $id;
      }

		public function getIdDepartamento(){
		return $this->idDepartamento;
		}

		public function setIdDepartamento($idDepartamento){
			$this->idDepartamento = $idDepartamento;
		}

		public function getDescripcion(){
			return $this->descripcion;
		}

		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function getDepartamento(){
		return $this->departamento;
		}
		public function setDepartamento($departamento){
			$this->departamento = $departamento;
		}
		}
?>
