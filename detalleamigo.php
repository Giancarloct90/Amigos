<?php 
	session_start();
	error_reporting(0);
	if($_SESSION["sesion"]==1 && ($_SESSION['UserType'] === 'Admin' || $_SESSION['UserType'] === 'Normal') ):
?>
<?php 
	include 'MasterPages.php';
	include 'style.php';
?>

 <html>
 	<head>
 	</head>
	<body class="body">
		<div class="container">
			<div class="row divcontent" id="divcontent">
				<?php 
				include 'indexmy.php';
				$db = new conexion();
				$query = "SELECT * FROM Amigos WHERE Ami_ID = '$_GET[id]' ";
				$row=$db->Select($query);
				foreach ($row as $rows) {
					$id = $rows['Ami_ID'];
					$nombre = $rows['Ami_Nombre'].' '.$rows['Ami_Apellido'];
					$celular = $rows['Ami_Celular'];
					$correo = $rows['Ami_Correo'];
					$pic = $rows['Ami_Pic'];
					$fechacreacion = $rows['Ami_FechaCreado'];
					$fechamodificado = $rows['Ami_FechaModificado'];
				}
/*
				echo $id."<br>";
				echo $nombre."<br>";
				echo $celular."<br>";
				echo $correo."<br>";
				echo $pic."<br>";
				echo $fechacreacion."<br>";
				echo $fechamodificado."<br>";*/			
				 ?>
				 <h1 class="cuerpo" id="cuerpo"><?php echo $nombre; ?></h1>	<br>
				 <div class="row">
				 	<div class="col-md-3">
				 		<?php echo "<img src=".$pic." alt='' height='220' width='240'> "; ?>			
				 	</div>
				 	<div class="col-md-9">
				 		<?php 

				 		echo "<p class='textdetalleamigo'>ID: ".$id."<br>";
				 		echo "Nombre: ".$nombre."<br>";
				 		echo "Celular: ".$celular."<br>";
				 		echo "Correo: ".$correo."<br>";
				 		echo "Fecha Creacion: ".$fechacreacion."<br>";
				 		echo "Fecha Modificado: ".$fechamodificado."<br></p>";
				 		 ?>


				 	</div>
				 	
						

				 </div>
				 
				</div>
			</div>
		</div>
	</body>
 </html>



<?php else: ?>
<?php header('Location: restrinc.php');  ?>
<?php endif;?>