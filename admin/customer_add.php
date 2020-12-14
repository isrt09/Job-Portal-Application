<?php  	
	include('../connection/db.php');	
	echo $name        = $_POST['admin_name'];
	echo $email       = $_POST['admin_email'];
	echo $username    = $_POST['admin_username'];
	echo $first_name  = $_POST['first_name'];
	echo $last_name   = $_POST['last_name'];
	echo $admin_type  = $_POST['admin_type'];
	$sql = "INSERT INTO admin_login(admin_name, admin_email,admin_username,first_name,last_name,admin_type) VALUES('$name','$email','$username','$first_name','$last_name','$admin_type')";
	$query = mysqli_query($con,$sql);
	if($query){
		echo "<div class='alert alert-success'>Data Saved Successfully!</div>";		
	}else{
		echo "<div class='alert alert-danger'>Data Failed to Saved</div>";		
	}
 ?>