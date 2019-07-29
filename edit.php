<?php
require_once 'dashboard_part/header.php';
 ?>

<?php
require 'session_check.php';
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

<div class="col-lg-8 m-auto">
    <div class="text-center py-3">
      <h2>Edit Message</h2>
    </div>
    <form action="update.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-lg-12 form-group">
        <label for="">Name</label>
          <input type="hidden" class="form-control" name="id" value="<?php echo $user_id; ?>">
          <input type="text" class="form-control" name="fname" value="<?php echo $name; ?>">
      </div>
      <div class="col-lg-12 form-group">
        <label for="">Email</label>
          <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
      </div>
      <div class="col-lg-12 form-group">
        <label for="">Message</label>
          <textarea name="message" class="form-control"><?php echo $message; ?></textarea>
      </div>
      <div class="col-lg-12 form-group">
        <label for="">Photo</label>
          <input type="file" name="photo">
          <br>
          <br>
          <img src="uploads/<?php echo $photo; ?>" alt="">
      </div>
      <div class="col-lg-12 text-center">
        <button type="submit" class="btn btn-success">Update info</button>
      </div>
    </div>
  </form>
</div>
<?php
  require_once 'dashboard_part/footer.php';
?>
