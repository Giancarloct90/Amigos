<?php 
	include 'MasterPages.php'
 ?>

<?php if( $_SESSION['sesion'] == '1' &&  ($_SESSION['UserType'] == 'Admin' || $_SESSION['UserType'] == 'Normal') && isset($_GET['id']) && !empty($_GET['id'])): ?>
	<?php
		include 'indexmy.php';
		$db = new conexion();
		$query = "DELETE FROM Amigos WHERE Ami_ID = '$_GET[id]' ";
		$db->ExeQuery($query);
	 ?>
	 <?php if($db->AffectedRows() == 1): ?>
	 	<script>
	 		redirect(3);
	 	</script>
	 <?php else: ?>
	 	<script>
	 		redirect(4);
	 	</script>
	 <?php endif; ?>
	
<?php else: ?>
	<?php  header('Location: restrinc.php');?>	
<?php endif; ?>