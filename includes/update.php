<!-- Header -->
<?php include "../header.php"?>
 
<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['user_id']))
    {
      $userid = $_GET['user_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM users WHERE id = $userid ";
      $view_users= mysqli_query($conn,$query);
 
      while($row = mysqli_fetch_assoc($view_users))
        {
          $respo = $row['responsable'];                
          $montant = $row['montantPret'];        
          $debut = $row['datePret'];         
          $fin = $row['dateRemboursement'];
        }
  
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      $respo = $_POST['responsable'];
      $montant = $_POST['montantPret'];
      $debut = $_POST['datePret'];
      $fin = $_POST['dateRemboursement'];

      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE users SET responsable = '{$respo}' , montantPret = '{$montant}' , datePret = '{$debut}', dateRemboursement = '{$fin}' WHERE id = $userid";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
    }             
?>value="
 
 <main class="container m-auto mt-3">       
        <form class="needs-validation border row" action="">
            <div>
                <h1 class="title">Formulaire de saisie d'un prêt</h1>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <label class="form-label" for="responsable">Responsable</label>
                        <select class="form-select form-check" name="responsable" id="responsable" required>
                            <option value=<?php echo $respo  ?>><?= $respo?></option>
                            <option value="agent 1">Agent 1</option>
                            <option value="agent 2">Agent 2</option>
                            <option value="agent 3">Agent 3</option>
                        </select>
                </div>
                <div class="form-group">
                    <label class="form-label" for="datePret">Date du prêt</label>
                    <input type="date" class="form-control " id="datePret" name="datePret" required value=<?php echo $debut  ?>>
                </div>
                <div class="form-group">
                    <label class="form-label" for="modeRemboursement">Mode de remboursement</label>
                        <select class="form-select" id="modeRemboursement" required>
                            <option>Mensuel</option>
                            <option>Bimestriel</option>
                            <option>trimestriel</option>
                            <option>semestriel</option>
                            <option>annuel</option>
                        </select>
                </div>
                <div class="form-group">
                    <label class="form-label" for="commentaire">Commentaire</label>
                    <textarea type="text" class="form-control" id="commentaire" rows="7"></textarea>
                <label class="form-label" for="commentaire" id="note">Ajouter votre note ici</label>
                </div>
            </div>
            <div class="col-lg-7">
               <div class="row">
                   <div class="col-md-7">
                        <label class="form-label" for="montant">Montant prêt</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="montant">Ar</span>
                            </div>
                            <input type="number" value=<?php echo $montant ?> name="montantPret"  class="form-control" id="montant" min="0" step="3000000" placeholder="Montant prêt" required>
                        </div>
                   </div>
                   <div class="col-md-5 form-group">
                   <label class="form-label" for="pourcentage">Pourcentage</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            </div>
                            <input type="number" class="form-control" id="pourcentage" placeholder="0%" max="100" min="1" required> 
                        </div> 
                   </div>
               </div>
               <div class="form-group">
                    <label class="form-label" for="dateRemboursement">Date de remboursement:</label>
                    <input type="date" class="form-control" id="dateRemboursement" value=<?php echo $fin ?> required name="dateRemboursement" >  
               </div>
               <div class="form-group">
                    <label class="form-label" for="modePayement">Mode de payement:</label>
                    <select class="form-select" id="modePayement" required>
                        <option>Mvola</option>
                        <option>OrangeMoney</option>
                        <option>AirtelMoney</option>
                        <option>Banque</option>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <input type="submit" value="Enregistrer" class="btn btn-primary my-3">
            </div>
        </form>


 
    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
      <a href="home.php" class="btn btn-warning mt-5"> Back </a>
    <div>
 
<!-- Footer -->
<?php include "../footer.php" ?>
