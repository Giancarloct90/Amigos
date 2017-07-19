<?php

class conexion {

	private $conexion;

	public function OpenConnect(){
		if(!isset($this->conexion)){
			$this->conexion = new mysqli("192.168.0.25","root","swastika","leiadb");
            if($this->conexion === FALSE){
 					die("Error al conectar BD". $this->conexion->error);
            }else{
               //echo "There is conexion wey yuupiii";
            
			}
		}
	}

	public function ExeQuery($query){
		$conexion = $this->OpenConnect();
		return $this->conexion->query($query);
	} 

	public function Select($query){
		$rows = array();
		$select = $this->ExeQuery($query);
		if ($select === FALSE) {
			return FALSE;
		}
		while ($row = $select->fetch_assoc()) {
		 	$rows[] = $row;

		}
		 return $rows;
	}


	public function AffectedRows(){
		return $this->conexion->affected_rows;
	}

	public function NumRows($query){
        $num_row = $this->ExeQuery($query);
		return $num_row->num_rows;
	}

	public function CloseConn(){
		$this->conexion->close();
	}


}

?>

<?php 
/*$db = new conexion();

echo $db->ExeQuery("INSERT INTO Amigos (Ami_Nombre,Ami_Apellido,Ami_Celular,Ami_Correo,Ami_Pic) VALUES('fuck','fuck','fuck','fuck','fuck'); ");
echo $db->AffectedRows();2*/
 ?>