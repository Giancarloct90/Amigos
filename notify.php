<?php 
include 'style.php';

 ?>

 <?php if ($_POST['uplofile']):?>
	<div class="alert alert-danger">
    	<button type="button" class="close" data-dismiss="alert">&times;</button>
    	<h5>Elija una imagen Ejm: .jpg .jpeg .png</h5>
    </div>

 <?php endif; ?>




 <?php 	
					include 'indexmy.php';
				 	$newcon = new conexion();
			     	$query = "INSERT INTO Amigos (Ami_Nombre,Ami_Apellido,Ami_Celular,Ami_Correo,Ami_Pic) VALUES ('$_POST[txtnombre]','$_POST[txtapellido]','$_POST[txttel]','$_POST[txtemail]',$namedb);";
					$newcon->ExeQuery($query);
	 			?>
				<?php if ($newcon->AffectedRows() == 1): ?>
					<h1>se inserto bien chiquito</h1>
				<?php else: ?>
					<h1>se guardo la pic pero erro al insertar</h1>
				<?php endif; ?>