<?php
require_once 'dashboard_part/header.php';

 ?>
<?php
require 'db.php';

$select = "SELECT * FROM  service";
$result = mysqli_query($db_connection, $select);

 ?>

<div class="col-lg-12">
  <div class="col-lg-12 text-center">
    <h2>All Services</h2>
  </div>
  <div class="col-lg-12">
    <a href="add_service.php"> <button type="button" class="btn btn-primary">Add Service</button> </a>
  </div>
  <div class="col-lg-12">
      <table class="table table_bordered">
        <tr class="info">
          <td>ID</td>
          <td>SERVICE IMAGE</td>
          <td>SERVICE TITLE</td>
          <td>SERVICE DESCRIPTION</td>
        </tr>

        <?php
        foreach ($result as $value) {
         ?>
        <tr>
          <td><?php echo $value['id']; ?></td>
          <td> <img width="50" src="uploads/service/<?php echo $value['service_img']; ?>" alt=""> </td>
          <td><?php echo $value['service_title']; ?></td>
          <td><?php echo $value['service_des']; ?></td>
        </tr>
        <?php   } ?>
      </table>
  </div>
</div>

 <?php
 require_once 'dashboard_part/footer.php';
  ?>
