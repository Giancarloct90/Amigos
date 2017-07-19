<html>
	<head>
		<title></title>
		<?php include 'style.php'; session_start();?>

	</head>
	
	<body>

		<div class="container">
			<br>
			<div class="row text-center">
				<h1 class="titulo animated flip ani">Welcome to GiancarloBSD</h1>
			</div>
			<br><br>
			

			

			<?php if($_SESSION["UserType"] == 'Admin'): ?>
				<div class="row">
					<ul>
					  	<li><a href="home.php">Home</a></li>
					 	<li class="dropdown">
						  	<a href="" >Amigos</a>
							<div class="dropdown-content">
								<a href="nuevoamigo.php">Nuevo Amigo</a>
								<a href="veramigos.php">Ver Amigos</a>
							</div>	
					  	</li>
					  	<li><a href="starwars.php">Star War</a></li>
					  	<li><a href="donaciones.php">Donaciones</a></li>
					  	<li><a href="users.php">Usuarios</a></li>
			
					  	<li class="pull-right"><a href="index.php" title="Cerrar Sesion"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i></a></li>
			
				  	</ul> 
				</div>

			<?php elseif($_SESSION['UserType'] == 'Normal'): ?>
				<div class="row">
					<ul>
					  	<li><a href="home.php">Home</a></li>
					 	<li class="dropdown">
						  	<a href="" >Amigos</a>
							<div class="dropdown-content">
								<a href="nuevoamigo.php">Nuevo Amigo</a>
								<a href="veramigos.php">Ver Amigos</a>
							</div>	
					  	</li>
					  	<li><a href="starwars.php">Star War</a></li>
					  	<li><a href="donaciones.php">Donaciones</a></li>
						<li class="pull-right"><a href="index.php" title="Cerrar Sesion"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i></a></li>
					</ul>
				</div>	
			
			
			<?php elseif($_SESSION['UserType'] == 'Visitor'): ?>
				<div class="row">
					<ul>
					  	<li><a href="home.php">Home</a></li>
					 	<li class="dropdown">
						  	<a href="" >Amigos</a>
							<div class="dropdown-content">
								<a href="veramigos.php">Ver Amigos</a>
							</div>	
					  	</li>
					  	<li><a href="starwars.php">Star War</a></li>
					  	<li><a href="donaciones.php">Donaciones</a></li>
						<li class="pull-right"><a href="index.php" title="Cerrar Sesion"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i></a></li>
					</ul>
				</div>	
			<?php endif; ?>

					
		</div>
		
	</body>

</html>