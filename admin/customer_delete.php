<?php 
	include('../connection/db.php');
	if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		mysqli_query($con,"DELETE FROM admin_login WHERE admin_id = '$id'");
		header('location:customers.php');
	}	
 ?>