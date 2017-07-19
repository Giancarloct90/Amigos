<?php 
 include 'style.php';
  include 'indexmy.php';
?>

	<?php if( isset($_POST['use_nombreusuario']) and !empty($_POST['use_nombreusuario']) ):?>

		<?php  	
			$db = new conexion();
			$query = "SELECT * FROM Users WHERE Use_NombreUsuario = '$_POST[use_nombreusuario]'";
			$row = $db->Select($query);

		?>
		<?php  if($db->NumRows($query)==1):?>
		            <html>
		            	<head>
		            		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	       					<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		            		<link rel="stylesheet" href="css/miestliologin.css">

		            		<script>
			            		$(function(){ 
		        					$("#btn2").click(function(){
		        						var idpass = $("#idpass").val().trim();
		        						var idname = "<?php echo $_POST['use_nombreusuario']; ?>";
		        						$.post("login2.php",{idpass,idname},function(Drunk){$("#divi").html(Drunk);});
		        					});
		        			 	});
		            		</script>
		            	</head>
		            </html>
			       	<div>
						<img src="css/img/ing2.png"  height="130" width="170">
						<h3><?php echo $_POST['use_nombreusuario']; ?> </h3> 
						<input type="password" class="textbox" id="idpass" placeholder="Contraseña" autofocus>
						<br> <br>
						<input type="submit" id="btn2" class="btn btn-primary botons" value="Ingresar"><br>
					</div>
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
					       				$("#btn3").click(function(){
			 								window.location.replace("index.php");
				            			});
			            			});
		            			</script>
			       			</head>
			       		</html>
						<h3>El Usuario no existe</h3>
						<input type="submit" id="btn3" class="btn btn-warning botons" value="Intentar otra vez"><br>
				    </div>
		<?php endif;?>

		<?php else: ?>
			<html>
			       			<head>
			       				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		       					<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
			            		<link rel="stylesheet" href="css/miestliologin.css">
			       				<script>
				       				$(function(){
					       				
			 								window.location.replace("index.php");
				            			
			            			});
		            			</script>
			       			</head>
			       		</html>

		

	<?php endif;?>




