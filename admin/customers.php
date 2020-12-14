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
                  <h1 class="h2">Customers</h1>
                  <div class="btn-toolbar mb-2 mb-md-0">
                     <div class="btn-group mr-2">
                        
                     </div>
                     <a class="btn btn-primary" href="add_customer.php">Add Customer</a>                    
                  </div>                  
               </div>
               <table id="example" class="table table-bordered display" style="width:100%">
                 <thead>
                     <tr>
                         <th>SL</th>
                         <th>Name</th>
                         <th>User Email</th>
                         <th>User Name</th>                         
                         <th>First Name</th>                         
                         <th>Last Name</th>                         
                         <th>Admin Type</th>
                         <th>Action</th>                         
                     </tr>
                 </thead>
                 <tbody>
                     <?php 
                        $sql  = "SELECT * FROM admin_login";
                        $query= mysqli_query($con,$sql);
                        $count= mysqli_num_rows($query);
                        if($count)
                        {
                           while($row = mysqli_fetch_assoc($query)){
                              $id    = $row['admin_id'];
                              $name  = $row['admin_name'];
                              $email = $row['admin_email'];
                              $user  = $row['admin_username'];
                              $fname = $row['first_name'];
                              $lname = $row['last_name'];                           
                              $type  = $row['admin_type']; ?>                          
                              <tr>
                                  <td><?php echo $id; ?></td>
                                  <td><?php echo $name; ?></td>
                                  <td><?php echo $email; ?></td>
                                  <td><?php echo $user; ?></td> 
                                  <td><?php echo $fname; ?></td> 
                                  <td><?php echo $lname; ?></td> 
                                  <td><?php echo $type; ?></td> 
                                  <td>
                                    <a href="customer_edit.php?edit=<?php echo $id; ?>" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <a href="customer_delete.php?delete=<?php echo $id; ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                  </td> 
                              </tr>  
                           <?php }
                        }
                      ?>                                        
                 </tbody>                 
               </table>            
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