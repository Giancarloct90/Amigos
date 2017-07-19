<?php 
	session_start();
	error_reporting(0);
	if( $_SESSION["sesion"] === 1 && ($_SESSION['UserType'] === 'Admin' || $_SESSION['UserType'] === 'Normal') ):
		//95709835
?>
<?php 
 include 'MasterPages.php';
  include 'style.php';
?>

<?php if (isset($_POST['btnguardar']) and !empty($_POST['btnguardar']) ): ?>
	<?php  
			$filename=$_FILES["uplo"]["name"];
			$imageFileType = pathinfo($filename,PATHINFO_EXTENSION);
			$name = date("Ymd").$_POST['txtnombre'].'.'.$imageFileType; 
			/*$namedb = "../../../Pic Leia/".$name;*/
			$namedb = "/saved/".$name;
			date_default_timezone_set('America/Tegucigalpa');
			$fecha = (string)date("Y/m/d h:i:s A");
			include 'indexmy.php';
			$db = new conexion();
			/*Ami_FechaCreado ,'$fecha'*/
			$query = "INSERT INTO Amigos (Ami_Nombre,Ami_Apellido,Ami_Celular,Ami_Correo,Ami_Pic,Ami_FechaCreado) VALUES ('$_POST[txtnombre]','$_POST[txtapellido]','$_POST[txttel]','$_POST[txtemail]','$namedb','$fecha');";
			$db->ExeQuery($query);  
	?>	
	<div class="container">
					<div class="row">	
	<?php  	if (move_uploaded_file($_FILES["uplo"]["tmp_name"], "saved/{$name}") and $db->AffectedRows() == 1): ?> 
				
						<div class="alert alert-success">
				    		<button type="button" class="close" data-dismiss="alert">&times;</button>
				    		<h5>Se guardo con exito.</h5>
				    		<?php echo "hola: ".$_FILES["uplo"]["name"]; ?>
				    	</div>
							
	<?php  	else:?>
						<div class="alert alert-danger">
				    		<button type="button" class="close" data-dismiss="alert">&times;</button>
				    		<h5>Problemas al guardar !!!!!</h5>
				    	</div>
				
	<?php endif; ?>	
		</div>
	</div>		
	
<?php endif; ?>

 <html>
 	<head>
 	</head>
	<body class="body">
		<div class="container">
			<div class="row divcontent" id="divcontent">
					<h1 class="cuerpo" id="cuerpo">Nuevo Amigo</h1>
					<br>
					<form action="nuevoamigo.php" method="post" enctype="multipart/form-data">		
						<input type="text" class="textsize" placeholder="Nombre" name="txtnombre" id="txtnombre" required autofocus><br><br>
						<input type="text" class="textsize" placeholder="Apellido" name="txtapellido" id="txtapellido" required><br><br>
						<input type="tel" class="textsize" placeholder="Celular" name="txttel" id="txttel" required><br><br>
						<input type="email" class="textsize" placeholder="Correo" name="txtemail" id="txtemail" required><br><br>
						<input type="label"  readonly="readonly" class="txtboxupload" id="txtpic" placeholder="Seleciones una imagen" required>
						<label for="uplo" class="filepicker"><i class="fa fa-upload " aria-hidden="true"></i></label>
						<input type="file" name="uplo" id="uplo" required><br><br>
						<input type="submit" name="btnguardar" id="btnguardar" class="btn btn-primary" value="Guardar">
						<br><br>
						<div id="divnotify" class="divnotify">
							
						</div>
					</form>
					<br><br>
					
			</div>
		</div>
	</body>
 </html>



<?php else: ?>
<?php header('Location: restrinc.php');  ?>
<?php endif;?>



