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
				<img src="/css/img/starlogo.png" alt=""  height='150' width='350'>				
				</div>
				<br><br>
				<div class="text-center">
				<div id="mycaru" class="carousel slide " data-ride="carousel" data-interval="3000">
					
					<ol class="carousel-indicators">
						<li data-target="#mycaru" data-slide-to="0" class="active"></li>		
						<li data-target="#mycaru" data-slide-to="1"></li>		
						<li data-target="#mycaru" data-slide-to="2"></li>
						<li data-target="#mycaru" data-slide-to="3"></li>		
						<li data-target="#mycaru" data-slide-to="4"></li>
						<li data-target="#mycaru" data-slide-to="5"></li>		
						<li data-target="#mycaru" data-slide-to="6"></li>
						<li data-target="#mycaru" data-slide-to="7"></li>		
						<li data-target="#mycaru" data-slide-to="8"></li>
						<li data-target="#mycaru" data-slide-to="9"></li>		
								
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="css/img/episodio1.jpg" id="imgcaru"  alt="">
						</div>	
						<div class="item">
							<img src="css/img/episodio2.jpg" id="imgcaru"  alt="">
						</div>
						<div class="item">
							<img src="css/img/episodio3.jpg" id="imgcaru"  alt="">
						</div>
						<div class="item">
							<img src="css/img/episodio4.jpg" id="imgcaru"  alt="">
						</div>	
						<div class="item">
							<img src="css/img/episodio5.jpg" id="imgcaru"  alt="">
						</div>
						<div class="item">
							<img src="css/img/episodio6.jpg" id="imgcaru"  alt="">
						</div>
						<div class="item">
							<img src="css/img/episodio7.jpg" id="imgcaru"  alt="">
						</div>	
						<div class="item">
							<img src="css/img/episodiorogue.jpg" id="imgcaru"  alt="">
						</div>
						<div class="item">
							<img src="css/img/episodio8.jpg" id="imgcaru"  alt="">
						</div>
					</div>
					
					 <a class="left carousel-control" href="#mycaru" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left"></span>
					 </a>
					 <a class="right carousel-control" href="#mycaru" data-slide="next">
					 	<span class="glyphicon glyphicon-chevron-right"></span>
					 </a>

				</div>
				</div>			
			</div>
		</div>
	</body>
 </html>



<?php else: ?>
<?php header('Location: restrinc.php');  ?>
<?php endif;?>