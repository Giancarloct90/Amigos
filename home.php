

<?php session_start(); error_reporting(0); if($_SESSION["sesion"]==1):?>



<?php 
 include 'MasterPages.php';
 ?>


 <html>
 	<head>
 		<script>
 			$(function(){
 				
 				$("p").click(function(){
 					$(this).hide();
 				});
 			});
 		</script>
 	</head>
	<body class="body">
		<div class="container">
			<div class="row divcontent" id="divcontent">
					<h1>hello</h1>
					<br><br>
					<p>if you click on me, i will disappear </p>
					<?php session_start(); echo $_SESSION["UserType"]; ?>
					
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