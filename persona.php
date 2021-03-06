<?php
	abstract class Persona
	{
		private $_apellido;
		private $_dni;
		private $_nombre;
		private $_sexo;

		function __construct($nombre, $apellido, $dni, $sexo){
			$this->_nombre = $nombre;
			$this->_apellido = $apellido;
			$this->_dni = $dni;
			$this->_sexo = $sexo;
		}

		function getApellido(){
			return $this->_apellido;
		}

		function getDni(){
			return $this->_dni;
		}

		function getNombre(){
			return $this->_nombre;
		}

		function getSexo(){
			return $this->_sexo;
		}

		abstract function Hablar($idioma);

		function __toString(){
			return $this->_dni."-".$this->_apellido."-".$this->_nombre."-".$this->_sexo;
		}
	}
?>