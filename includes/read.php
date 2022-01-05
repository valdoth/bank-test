<!-- Header -->
<?php  include '../header.php'?>
 
<h1 class="text-center">User Details</h1>
  <div class="container">
    <table class="table table-striped table-bordered table-hover">
    <thead class="table-dark">
            <tr>
              <th  scope="col">Responsable</th>
              <th  scope="col">Montant du prêt</th>
              <th  scope="col">Date du prêt</th>
              <th  scope="col">Date fin du remboursement</th>
              <th  scope="col" colspan="7" class="text-center">action</th>
            </tr>  
          </thead>
        <tbody>
          <tr>
                
            <?php
              //  first we check using 'isset() function if the variable is set or not'
              //Processing form data when form is submitted
              if (isset($_GET['user_id'])) {
                  $userid = $_GET['user_id']; 
 
                  // SQL query to fetch the data where id=$userid & storing data in view_user 
                  $query="SELECT * FROM users WHERE id = {$userid} ";  
                  $view_users= mysqli_query($conn,$query);            
 
                  while($row = mysqli_fetch_assoc($view_users))
                  {
                      $id = $row['id'];
                      $respo = $row['responsable'];                
                      $montant = $row['montantPret'];        
                      $debut = $row['datePret'];         
                      $fin = $row['dateRemboursement'];
         
                      echo "<tr >";
                      echo " <td > {$respo}</td>";
                      echo " <td > {$montant}</td>";
                      echo " <td >{$debut} </td>";
                      echo " <td >{$fin} </td>";
                      echo " <td class='text-center'> <a href='view.php?edit&user_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>"; 
                      echo " <td class='text-center' > <a href='update.php?edit&user_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";
                      echo " <td  class='text-center'>  <a href='delete.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";
                      echo " </tr> ";
                          }  
                        }
                        ?>
                      </tr> 
        </tbody>
    </table>
  </div>
 
   <!-- a BACK Button to go to pervious page -->
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>
 
<!-- Footer -->
<?php include "../footer.php" ?>
