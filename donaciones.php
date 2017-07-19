<?php 
	session_start();
	error_reporting(0);
	if($_SESSION["sesion"]==1):
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
				<div class="text-center">
				<h1 class="cuerpo" id="cuerpo"><center>Donaciones</center></h1>
				<img src="/css/img/weacepbtc.png" alt="" height='120' width='300'>				
				</div>
			</div>
		</div>
	</body>
 </html>



<?php else: ?>
<?php header('Location: restrinc.php');  ?>
<?php endif;?>