<?php
require_once 'dashboard_part/header.php';

?>
<?php
require 'db.php';
$user_id = $_GET['id'];
$select_query = "SELECT * FROM logo WHERE id=$user_id";
$db_return = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($db_return);
?>

<div class="col-lg-12">
  <div class="col-lg-12">
    <h2>Change Logo</h2>
  </div>
  <div class="col-lg-12">
    <form action="update_logo.php" method="post" enctype="multipart/form-data">
      <div class="col-lg-12">
        <input type="hidden" name="id" value="<?php echo $after_assoc['id']; ?>">
      </div>
      <div class="col-lg-12">
        <label for="">select status</label>
        <select name="status" class="form-control">
          <option value="1">Active</option>
          <option value="0">Deactive</option>
        </select>
      </div>
      <div class="col-lg-12">
        <button type="submit" class="btn btn-primary">submit</button>
      </div>
    </form>
  </div>
</div>

 <?php
 require_once 'dashboard_part/footer.php';
  ?>
