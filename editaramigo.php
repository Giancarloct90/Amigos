<?php 
	session_start();
	error_reporting(0);
	if($_SESSION["sesion"]==1 && ($_SESSION['UserType'] === 'Admin' || $_SESSION['UserType'] === 'Normal') ):
?>

<?php 
	include 'MasterPages.php';
	include 'style.php';
?>

<?php if( isset($_POST['btnactualizar']) && !empty($_POST['btnactualizar']) ): ?>
	<?php
		include 'indexmy.php';
		$db = new conexion(); 
		date_default_timezone_set('America/Tegucigalpa');
		$fecha = (string)date("Y/m/d h:i:s A");
	?>
	<?php  if( empty($_FILES["uplo"]["name"]) ): ?>
		<?php //sin foto ?>	
		<?php 
			$query = "UPDATE Amigos SET Ami_Nombre = '$_POST[txtnombre]', Ami_Apellido = '$_POST[txtapellido]' , Ami_Celular = '$_POST[txttel]' , Ami_Correo = '$_POST[txtemail]', Ami_FechaModificado = '$fecha' WHERE Ami_ID = '$_POST[txtid]' ";
			$db->ExeQuery($query);
		?>	
		<?php if($db->AffectedRows() == 1): ?>
	 		<script>
		    	$(function(){
		   			var id = "<?php echo $_POST[txtid] ?>";
		   			window.location.replace("veramigos.php?flag=1");
			   	});
			</script>
		<?php else: ?>
			<script>
		    	$(function(){
		   			var id = "<?php echo $_POST[txtid] ?>";
		   			window.location.replace("veramigos.php?flag=2");
			   	});
			</script>
		<?php endif; $db->CloseConn();?>
	<?php  else: ?>
		<?php //con foto ?>
		<?php 
			$filename=$_FILES["uplo"]["name"];
			$imageFileType = pathinfo($filename,PATHINFO_EXTENSION);
			$name = date("Ymdgis").$_POST['txtnombre'].'.'.$imageFileType; 
			/*$namedb = "../../../Pic Leia/".$name;*/
			$namedb = "/saved/".$name;	
			$query = "UPDATE Amigos SET Ami_Nombre = '$_POST[txtnombre]', Ami_Apellido = '$_POST[txtapellido]' , Ami_Celular = '$_POST[txttel]' , Ami_Correo = '$_POST[txtemail]', Ami_Pic = '$namedb', Ami_FechaModificado = '$fecha' WHERE Ami_ID = '$_POST[txtid]' ";
			$db->ExeQuery($query);  
		 ?>
		<?php if(move_uploaded_file($_FILES["uplo"]["tmp_name"], "saved/{$name}") and $db->AffectedRows() == 1): ?>
			<script>
		    	$(function(){
		   			var id = "<?php echo $_POST[txtid] ?>";
		   			window.location.replace("veramigos.php?flag=1");
			   	});
			</script>
		<?php else: ?>
			<script>
		    	$(function(){
		   			var id = "<?php echo $_POST[txtid] ?>";
		   			window.location.replace("veramigos.php?flag=2");
			   	});
			</script>
		<?php endif; $db->CloseConn();?>
	<?php endif; ?>	
<?php endif; ?>	

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
					$nombre2 = $rows['Ami_Nombre'];
					$celular = $rows['Ami_Celular'];
					$correo = $rows['Ami_Correo'];
					$pic = $rows['Ami_Pic'];
					$fechacreacion = $rows['Ami_FechaCreado'];
					$fechamodificado = $rows['Ami_FechaModificado'];
					$apellido = $rows['Ami_Apellido'];
				}
				$db->CloseConn();
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
				 	<form action="editaramigo.php" method="post" enctype="multipart/form-data">
				 		<input type="text" class="textsize" placeholder="ID" name="txtid" id="txtid" required value=<?php echo $id ?> readonly="readonly"><br><br>		
						<input type="text" class="textsize" placeholder="Nombre" name="txtnombre" id="txtnombre" required autofocus value=<?php echo htmlentities($nombre2); ?>><br><br>
						<input type="text" class="textsize" placeholder="Apellido" name="txtapellido" id="txtapellido" required value=<?php echo $apellido ?>><br><br>
						<input type="tel" class="textsize" placeholder="Celular" name="txttel" id="txttel" required value=<?php echo $celular ?> ><br><br>
						<input type="email" class="textsize" placeholder="Correo" name="txtemail" id="txtemail" required value=<?php echo $correo ?> ><br><br>
						<input type="label"  readonly="readonly" class="txtboxupload" id="txtpic" placeholder="Seleciones una imagen" >
						<label for="uplo" class="filepicker"><i class="fa fa-upload " aria-hidden="true"></i></label>
						<input type="file" name="uplo" id="uplo"><br><br>
						<input type="submit" name="btnactualizar" id="btnactualizar" class="btn btn-primary" value="actualizar">
						<br><br>
						<div id="divnotify" class="divnotify">
						</div>
					</form>


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