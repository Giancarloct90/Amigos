
<?php 
	include 'style.php';
	include 'indexmy.php';
?>

<?php if( isset($_POST['idname']) and !empty($_POST['idpass']) ):?>
	
	<?php  	
			$db = new conexion();
			$query = "SELECT * FROM Users WHERE Use_NombreUsuario = '$_POST[idname]' AND Use_Password = '$_POST[idpass]' ";
			$row = $db->Select($query);
	?>
	
	<?php  if($db->NumRows($query)==1):?>
	<?php
		session_start();
		foreach ($row as $rows) {
			$_SESSION["UserType"] = $rows['Use_Tipo'];
		}
		
		$_SESSION["sesion"]=1;
	 ?>
		<html>
			<head>
				<script>
			    	$(function(){
			    		window.location.replace("home.php");
			    	});
			    </script>
			</head>
		</html>
		
	<?php endif;?>

	<?php  if($db->NumRows($query)==0):?>
		   	<div >
			       		<html>
			       			<head>
			       				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		       					<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
			            		<link rel="stylesheet" href="css/miestliologin.css">
			       				<script>
				       				$(function(){
					       				$("#btn5").click(function(){
			 								window.location.replace("index.php");
				            			});
			            			});
		            			</script>
			       			</head>
			       		</html>
						<h3>Contraseña Incorrecta</h3>
						<input type="submit" id="btn5" class="btn btn-warning botons" value="Intentar otra vez"><br>
				    </div>
	<?php endif;?>

<?php else: ?>

	<script>
				       				$(function(){
					       				
			 								window.location.replace("index.php");
				            			
			            			});
	</script>

<?php endif;?>