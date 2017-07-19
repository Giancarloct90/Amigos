
<?php if( isset($_POST['btnsend']) ): ?>
	<h1>se presiono el boton</h1>
	<br><br>
	<h3>Usuario es: <?php echo $_POST['txtnombre']; ?> </h3>
	<?php 
		include 'indexmy.php';
		$db = new conexion();
		$query =  "SELECT * FROM Users WHERE Use_NombreUsuario = '$_POST[txtnombre]' ";
		$row = $db->Select($query);
		foreach ($row as $rows) {
			
			echo $rows['Use_Tipo'];
		}
		
	 ?>

<?php endif; ?>


<html>
	<head>
		
	</head>
	<body>
		<h1>ingrese el users Raza</h1>
		<br>
		<form action="te.php" method="post">
			<input type="text" name="txtnombre" id="txtnombre" placeholder="UserName"><br>
			<input type="submit" name="btnsend" id="btnsend" value="Click BITCH!!!">
		</form>
		<br>


	</body>
</html>
	
			                