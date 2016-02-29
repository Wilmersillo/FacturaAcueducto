<?php
	/*class conexion{
		var $servidor="mysql2.000webhost.com";
		var $usuario="a8014553_root";
		var $clave="93o2o4o492o";
		var $conexion;
		function conectar(){
			$this->conexion=mysql_connect($this->servidor,$this->usuario,$this->clave);}}
	$connection=new conexion();
	$connection->conectar();
	$con=$connection->conexion;
	$nom_db="a8014553_root";
	$select=mysql_select_db($nom_db,$con);
	*/
	class conexion{
		var $servidor="localhost";
		var $usuario="root";
		var $clave="";
		var $conexion;
		function conectar(){
			$this->conexion=mysql_connect($this->servidor,$this->usuario,$this->clave);}}
	$connection=new conexion();
	$connection->conectar();
	$con=$connection->conexion;
	$nom_db="acueducto";
	$select=mysql_select_db($nom_db,$con);
	?>