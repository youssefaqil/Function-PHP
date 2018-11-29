  <style type="text/css">
      
      tr.impaire {
  background: white;
}

tr.paire {
  background: green;
}
    </style>
<?php
require 'db.php';
$sql = 'SELECT * FROM people';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>All people</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
        <?php 

        $table_coolor = array("impaire", "paire");
        $nbr_color = count($table_coolor);
       
        $cpt = 0;
        foreach($people as $person):
          
         ?>

          <tr class="<?php echo $table_coolor[$cpt % $nbr_color] ?>">
            <td><?= $person->id; ?></td>
            <td><?= $person->name; ?></td>
            <td><?= $person->email; ?></td>
            <td>
              <a href="edit.php?id=<?= $person->id ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $person->id ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php 
        $cpt++;
      endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
