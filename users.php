<?php 
 session_start();
 error_reporting(0); 
 if( $_SESSION["sesion"] === 1 && $_SESSION['UserType'] === 'Admin' ):?>
<?php 
 include 'MasterPages.php';
 ?>


 <html>
	<body class="body">
		<div class="container">
			<div class="row divcontent" id="divcontent">
					<h1>This the pages for the user's info</h1>
			</div>
		</div>
	</body>
 </html>
  <?php else: ?>
	 <?php 
	 	include 'style.php';
	 	include 'indexmy.php';
	 ?>

	 	<html>
	 		<head>
	 			
	 		</head>
	 		<body class="bodi">
	 			<div class="container">
	 				<div class="row">
	 					<div class="col-md-4"></div>
	 					<div class="col-md-4 dix text-center">
	 						<h1 class="titulo ">Acceso Restringido</h1>
	 						<img src="css/img/bio.jpg"  height="400" width="400"><br><br>
	 					</div>
	 					<div class="col-md-4"></div>
	 				</div>
	 			</div>
	 		</body>
	 	</html>
<?php endif;?>
