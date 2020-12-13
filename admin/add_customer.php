<?php 
  include('./includes/header.php'); 
  include('./includes/sidebar.php'); 
?>
      
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
               <div style="background-color: #F2F4F4; padding: 4px" width="50%">
                  <form action="" method="post" action="customers.php">
                    <div class="form-group">
                        <label for="Customer Email">Enter Email</label>
                        <input type="email" id="email" name="admin_email" class="form-control" placeholder="Enter Your E-Mail Address ...." autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="Customer Email">Enter UserName</label>
                        <input type="text" id="username" name="admin_username" class="form-control" placeholder="Enter Your User Name ...." autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="Customer Email">Enter First Name </label>
                        <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Enter Your First Name ...." autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="Customer Email">Enter Last Name </label>
                        <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Enter Your Last Name ...." autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="Customer Email">Admin Type </label>
                        <select name="admin_type" id="admin_type" class="form-control" id="">
                          <option value="1">Super Admin</option>
                          <option value="2">Customer Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" id="submit" class="btn btn-success btn btn-block" value="SAVE">
                    </div>
                 </form> 
               </div>                    
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
      <script type="text/javascript">
         $(document).ready(function(){
              $("#submit").click(function(){
                  var email         = $("#email").val();                  
                  var username      = $("#username").val();                  
                  var first_name    = $("#first_name").val();                  
                  var last_name     = $("#last_name").val();                  
                  var admin_type    = $("#admin_type").val();                  
                  alert(admin_type);
              });
         });
      </script>
   </body>
</html>