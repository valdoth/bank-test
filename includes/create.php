<!-- Header -->
<?php  include "../header.php" ?>
 
<?php 
  if(isset($_POST['create'])) 
    {
        $respo = $_POST['responsable'];
        $montant = $_POST['montantPret'];
        $debut = $_POST['datePret'];
        $fin = $_POST['dateRemboursement'];
       
        // SQL query to insert user data into the users table
        
        $query= "INSERT INTO `users` (`index`, `responsable`, `datePret`, `dateRemboursement`, `montantPret`) VALUES ('{$respo}','{$montant}','{$debut}', '{$fin}')";
        $add_user = mysqli_query($conn,$query);
     
        // displaying proper message for the user to see whether the query executed perfectly or not 
          if (!$add_user) {
              echo "something went wrong ". mysqli_error($conn);
          }
 
          else { echo "<script type='text/javascript'>alert('User added successfully!')</script>";
              }         
    }
?>
 
 <main class="container m-auto mt-3">       
        <form class="needs-validation border row" action="">
            <div class="row m-0">
                <h1 class="title">Formulaire de saisie d'un prêt</h1>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <label class="form-label" for="responsable">Responsable</label>
                        <select class="form-select form-check" name="responsable" id="responsable" required>
                            <option value="1">Agent 1</option>
                            <option value="2">Agent 2</option>
                            <option value="3">Agent 3</option>
                        </select>
                </div>
                <div class="form-group">
                    <label class="form-label" for="datePret">Date du prêt</label>
                    <input type="date" class="form-control" nmae="datePret" id="datePret" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="modeRemboursement">Mode de remboursement</label>
                        <select class="form-select" id="modeRemboursement" name="dateRemboursement" required>
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
                        <label class="form-label" for="montantPret">Montant prêt</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="montantPret">Ar</span>
                            </div>
                            <input type="number" name="montantPret"  class="form-control" id="montantPret" min="0" max="3000000" placeholder="Montant prêt" required>
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
                    <input type="date" name="dateRemboursement" class="form-control" id="dateRemboursement" required>  
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