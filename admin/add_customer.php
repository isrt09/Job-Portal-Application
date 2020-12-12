<?php
   require_once('../connection/db.php'); 
   session_start();
   if(isset($_SESSION['email']) == true){

   }else{
      header('location:admin_login.php');
   }
 ?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Jekyll v3.8.6">
      <title>Admin | Dashboard </title>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <!-- Custom styles for this template -->
      <link href="css/dashboard.css" rel="stylesheet">
       <!-- dataTable library -->
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

   </head>
   <body>
      <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
         <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
         <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
         <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
               <a class="nav-link" href="logout.php">Sign out</a>
            </li>
         </ul>
      </nav>
      <div class="container-fluid">
         <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
               <div class="sidebar-sticky">
                  <ul class="nav flex-column">
                     <li class="nav-item">
                        <a class="nav-link active" href="#">
                        <span data-feather="home"></span>
                        Dashboard <span class="sr-only">(current)</span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="file"></span>
                        Orders
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="shopping-cart"></span>
                        Products
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="customers.php">
                        <span data-feather="users"></span>
                        Customers
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="bar-chart-2"></span>
                        Reports
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="layers"></span>
                        Integrations
                        </a>
                     </li>
                  </ul>
                  <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                     <span>Saved reports</span>
                     <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                     <span data-feather="plus-circle"></span>
                     </a>
                  </h6>
                  <ul class="nav flex-column mb-2">
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Current month
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Last quarter
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Social engagement
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Year-end sale
                        </a>
                     </li>
                  </ul>
               </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-5 mb-5">
               <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboad</a></li>
                      <li class="breadcrumb-item"><a href="customers.php">Customers</a></li>
                      <li class="breadcrumb-item"><a href="add_customer.php">Add Customer</a></li>          
                   </ol>
               </nav>
               <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                  <h1 class="h2">Add Customer</h1>
                  <div class="btn-toolbar mb-2 mb-md-0">
                     <div class="btn-group mr-2">
                        
                     </div>
                     <a class="btn btn-primary" href="customers.php">View Customer</a> 
                   </div>                  
               </div>
               <form action="">
                  <div class="form-group">
                      <label for="Customer Email">Customer Email</label>
                      <input type="email" id="Customer Email" name="email" class="form-control" placeholder="Enter Your E-Mail Address ...." autocomplete="off">
                  </div>
                  <div class="form-group">
                      <label for="Customer Email">Customer UserName</label>
                      <input type="text" id="Customer Email" name="email" class="form-control" placeholder="Enter Your User Name ...." autocomplete="off">
                  </div>
                  <div class="form-group">
                      <label for="Customer Email">Customer First Name </label>
                      <input type="text" id="Customer Email" name="email" class="form-control" placeholder="Enter Your First Name ...." autocomplete="off">
                  </div>
                  <div class="form-group">
                      <label for="Customer Email">Customer Last Name </label>
                      <input type="text" id="Customer Email" name="email" class="form-control" placeholder="Enter Your Last Name ...." autocomplete="off">
                  </div>
                  <div class="form-group">
                      <input type="submit" class="btn btn-success" value="SAVE">
                  </div>
               </form>       
            </main>            
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
      <script src="js/dashboard.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript">
         $(document).ready(function() {
          $('#example').DataTable();
      });
      </script>
   </body>
</html>