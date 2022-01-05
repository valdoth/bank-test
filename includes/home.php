<!-- Header -->
<?php include "../header.php" ?>
<a href="create.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Create New User</a>

<main class="container m-auto mt-3">
  <div>
    <label for="">Show</label>
    <input type="number" placeholder="10"> entries
</div>
  <div>  
    <label for=""> Search</label>
    <input type="text">
  </div>

  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th scope="col">Responsable</th>
        <th scope="col">Montant du prêt</th>
        <th scope="col">Date du prêt</th>
        <th scope="col"=>Date fin du remboursement</th>
        <th scope="col" colspan="7" class="text-center">action</th>
      </tr>
    </thead>

    <tbody>
      <tr>

        <?php
        $query = "SELECT * FROM users";               // SQL query to fetch all table data
        $view_users = mysqli_query($conn, $query);    // sending the query to the database

        //  displaying all the data retrieved from the database using while loop
        while ($row = mysqli_fetch_assoc($view_users)) {
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
        ?>
      </tr>
    </tbody>
  </table>
  </div>

  <div class="flex">
    <span>Showing 1 to 10 of 57 entries</span>

    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
      <li class="page-item active"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">4</a></li>
      <li class="page-item"><a class="page-link" href="#">5</a></li>
      <li class="page-item"><a class="page-link" href="#">6</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>

  </div>
</main>


<!-- Footer -->
<?php include "./footer.php" ?>