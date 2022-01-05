<!-- Header -->
<?php include "../header.php" ?>

<?php
// checking if the variable is set or not and if set adding the set data value to variable userid
if (isset($_GET['user_id'])) {
    $userid = $_GET['user_id'];
}
// SQL query to select all the data from the table where id = $userid
$query = "SELECT * FROM users WHERE id = $userid ";
$view_users = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($view_users)) {
    $respo = $row['responsable'];                
    $montant = $row['montantPret'];        
    $debut = $row['datePret'];         
    $fin = $row['dateRemboursement'];
}

//Processing form data when form is submitted
if (isset($_POST['view'])) {
    $respo = $_POST['responsable'];
    $montant = $_POST['montantPret'];
    $debut = $_POST['datePret'];
    $fin = $_POST['dateRemboursement'];
}
?>

<h1 class="text-center">View List Details</h1>
<div class="container ">
    Responsable: <?php echo $respo; ?><br>
    Montant du prêt: <?php echo $montant; ?><br>
    Date du prêt: <?php echo $debut ?><br>
    Date de remboursement: <?php echo $fin ?><br>
</div>

<!-- a BACK button to go to the home page -->
<div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
    <div>

        <!-- Footer -->
        <?php include "../footer.php" ?>