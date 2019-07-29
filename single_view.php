<?php
require_once 'dashboard_part/header.php';
 ?>
<?php
require 'db.php';

$user_id = $_GET['id'];
$select_query = "SELECT * FROM contact_message WHERE id=$user_id";
$db_return = mysqli_query($db_connection,$select_query);

$after_assoc = mysqli_fetch_assoc($db_return);

$name = $after_assoc['name'];
$email = $after_assoc['email'];
$message = $after_assoc['message'];
$photo = $after_assoc['photo'];

?>

<div class="col-lg-12 m-auto">
    <div class="text-center py-3">
      <h2>Individual Message</h2>
    </div>
    <div>
      <table class="table table-bordered">
          <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
          </tr>
          <tr>
            <td>Eamil</td>
            <td><?php echo $email; ?></td>
          </tr>
          <tr>
            <td>Mesaage</td>
            <td><?php echo $message;?></td>
          </tr>
          <tr>
            <td>Photo</td>
            <td> <img src="uploads/<?php echo $photo;?>" alt="" width="100"> </td>
          </tr>
      </table>

    </div>
</div>
<?php
require_once 'dashboard_part/footer.php';
 ?>
