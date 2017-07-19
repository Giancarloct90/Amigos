<?php
session_start();
session_unset(); 
error_reporting(0);
// destroy the session 
session_destroy(); 
 ?>
<html>
	<head>
		<?php include 'style.php'; ?>
        <script>

        	$(function(){ 
        		$("#btning").click(function(){
        			var use_nombreusuario = $("#idNombreUsuario").val().trim();
        			var btning = $("#btning").attr('name'); 

        			$.post("logindb.php",{use_nombreusuario,btning},function(Drunk){$("#divi").html(Drunk);});
        		});
        	 });

        </script>
	</head>
	<body class="bodylogin">
    	<div class="container">
    		<br><br>
    		<div class="row text-center">
				<h1 class="titulo animated flip ani">Welcome to GiancarloBSDs</h1><br><br><br>
			</div>
			<div class="row">
				<div class="col-md-4"></div>

				<div class="col-md-4 text-center">

						<div class="divi" id="divi">
							
							<img src="css/img/ing2.png"  height="130" width="170"><br><br>
							<input type="text" class="textbox" id="idNombreUsuario" placeholder="Nombre de Usuario" autofocus>
							<br> <br>
							<input type="submit" id="btning" class="btn btn-primary botons" value="Ingresar"><br>
							
						</div>
				
				
					</div>
				<div class="col-md-4"></div>
			</div>
		</div>	
	</body>
</html>