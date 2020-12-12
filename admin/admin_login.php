<?php 
	session_start();
	require_once('../connection/db.php'); 
?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Jekyll v3.8.6">
      <title>Admin | Sign In</title>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <!-- Custom styles for this template -->
      <link href="css/admin_login.css" rel="stylesheet">      
   </head>   
   <body class="text-center">
      <form class="form-signin" id="admin_login" name="admin_login" action="admin_login.php" method="post">
         <img class="mb-4" src="../admin/img/logo.png" alt="" width="72" height="72">
         <h1 class="h3 mb-3 font-weight-normal"><b>SIGN IN</b></h1>
         <label for="email" class="sr-only">Email Address</label>
         <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" required autofocus>
         <label for="pass" class="sr-only">Password</label>
         <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required>         
         <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" id="submit" placeholder="SING IN">
         <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>
      </form>
      <?php 
   	   if(isset($_POST['submit'])){
   	   	  $email = $_POST['email'];
   	   	  $pass  = $_POST['pass'];
   	   	  $sql   = "SELECT * FROM admin_login WHERE admin_email = '$email' AND admin_password='$pass'";   	   	  
   	   	  $query = mysqli_query($con,$sql);
   	   	  $count = mysqli_num_rows($query);
   	   	  if($count>0){
   	   	  	$_SESSION['email'] = $email;
   	   	  	 header('location:admin_dashboard.php');
   	   	  }else{
   	   	  	 echo "<script>alert('Please try again to login')</script>";
   	   	  }
   	   }
    ?>
   </body>

   <script type="text/javascript" src="js/admin_login.js"></script>    
</html>