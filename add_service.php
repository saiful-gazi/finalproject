<?php
require_once 'dashboard_part/header.php';
 ?>

<div class="col-lg-12">
  <div class="col-lg-12">
    <h2>Add Service</h2>
  </div>
  <form action="service_post.php" method="post" enctype="multipart/form-data">
    <div class="col-lg-12">
      <label for="">Add service Image</label>
      <input type="file" name="service_img" class="form-control">
      <br>
    </div>
    <div class="col-lg-12">
      <label for="">Add service Title</label>
      <input type="text" name="service_title" class="form-control">
      <br>
    </div>
    <div class="col-lg-12">
      <label for="">Add service description</label>
      <textarea name="service_des" class="form-control"></textarea>
      <br>
    </div>
    <div class="col-lg-12">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>

 <?php
 require_once 'dashboard_part/footer.php';
  ?>
