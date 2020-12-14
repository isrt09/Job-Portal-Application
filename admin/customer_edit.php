<?php 
  include('./includes/header.php'); 
  include('./includes/sidebar.php');
  include('../connection/db.php');    
?>
      
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-5 mb-5">
               <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboad</a></li>
                      <li class="breadcrumb-item"><a href="customers.php">Customers</a></li>
                      <li class="breadcrumb-item"><a href="add_customer.php">Update Customer</a></li>          
                   </ol>
               </nav>
               <?php 
                   if (isset($_GET['edit'])) {
                      $id = $_GET['edit'];
                      $sql = "SELECT * FROM admin_login WHERE admin_id = '$id'";
                      $query = mysqli_query($con,$sql);
                      $count = mysqli_num_rows($query);
                      if($count>0){
                         while($row = mysqli_fetch_array($query)){
                         $id          = $row['admin_id'];
                         $name        = $row['admin_name'];
                         $email       = $row['admin_email'];
                         $username    = $row['admin_username'];
                         $first_name  = $row['first_name'];
                         $last_name   = $row['last_name'];
                         $admin_type  = $row['admin_type'];
                        }
                      }
                    }
                ?>
               <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                  <h1 class="h2">Update Customer</h1>
                  <div class="btn-toolbar mb-2 mb-md-0">
                     <div class="btn-group mr-2">
                        
                     </div>
                     <a class="btn btn-primary" href="customers.php">View Customer</a> 
                   </div>                  
               </div>
               <div style="background-color: #F2F4F4; padding: 4px" width="50%">
                  <div id="msg"></div>
                  <?php 
                    if(isset($_POST['update'])){
                      $id          = $_POST['admin_id'];
                      $name        = $_POST['admin_name'];
                      $email       = $_POST['admin_email'];
                      $username    = $_POST['admin_username'];
                      $first_name  = $_POST['first_name'];
                      $last_name   = $_POST['last_name'];
                      $admin_type  = $_POST['admin_type'];
                      $sql = "UPDATE admin_login 
                      SET 
                      admin_name     ='$name',
                      admin_username = '$username',
                      admin_email    = '$email',
                      first_name     ='$first_name',                      
                      last_name      ='$last_name',
                      admin_type     ='$admin_type' 
                      WHERE admin_id = '$id'";
                      $query = mysqli_query($con,$sql);
                      if($query){
                        echo "<div class='alert alert-success'>Update Records Saved Successfully!</div>";   
                      }else{
                        echo "<div class='alert alert-danger'>Update Record Failed to Saved</div>";   
                      }
                    }
                  ?> 
                  <form action="" method="post" name="customer_form" id="customer_form">  <div class="form-group">
                        <input type="hidden" name="admin_id" value="<?php echo $id;?>">
                        <label for="Customer Name">Enter Name</label>
                        <input type="text" id="name" name="admin_name" class="form-control" placeholder="Enter Your Name ...." autocomplete="off" value="<?php echo $name;?>">
                    </div>                
                    <div class="form-group">
                        <label for="Customer Email">Enter Email</label>
                        <input type="email" id="email" name="admin_email" class="form-control" placeholder="Enter Your E-Mail Address ...." autocomplete="off" value="<?php echo $email;?>">
                    </div>
                    <div class="form-group">
                        <label for="Customer Email">Enter UserName</label>
                        <input type="text" id="username" name="admin_username" class="form-control" placeholder="Enter Your User Name ...." autocomplete="off" value="<?php echo $username;?>">
                    </div>
                    <div class="form-group">
                        <label for="Customer Email">Enter First Name </label>
                        <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Enter Your First Name ...." autocomplete="off" value="<?php echo $first_name;?>">
                    </div>
                    <div class="form-group">
                        <label for="Customer Email">Enter Last Name </label>
                        <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Enter Your Last Name ...." autocomplete="off" value="<?php echo $last_name;?>">
                    </div>
                    <div class="form-group">
                        <label for="Customer Email">Admin Type </label>
                        <select name="admin_type" id="admin_type" class="form-control" id="" value="<?php echo $admin_type;?>">
                          <option value="1">Super Admin</option>
                          <option value="2">Customer Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" id="update" class="btn btn-success btn btn-block" value="Update" name="update">
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
   </body>
</html>