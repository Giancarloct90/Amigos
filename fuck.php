<?php

class conexion {

	private $conexion;

	public function OpenConnect(){
		if(!isset($this->conexion)){
			$this->conexion = new mysqli("192.168.0.25:3306","root","swastika","leiadb");
            if($this->conexion === FALSE){
 					die("Error al conectar BD". $this->conexion->error);
            }else{
            	echo "There is conexion wey yuupiii";
            }
		}
	}
}

?>


<?php


$db = new conexion();
$db->OpenConnect();

?>
