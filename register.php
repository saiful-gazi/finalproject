<?php
require_once 'dashboard_part/header.php';
 ?>

<div class="col-lg-8 m-auto">
    <div class="text-center py-3">
      <h2>Register</h2>
    </div>
    <form action="register_post.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-lg-12 form-group">
        <label for="">Usrname</label>
          <input type="text" class="form-control" name="username">
      </div>
      <div class="col-lg-12 form-group">
        <label for="">Email</label>
          <input type="email" class="form-control" name="email">
      </div>
      <div class="col-lg-12 form-group">
        <label for="">Password</label>
          <input type="password" class="form-control" name="password">
      </div>
      <div class="col-lg-12 form-group">
        <label for="">Mobile</label>
          <input type="number" class="form-control" name="mobile">
      </div>
      <div class="col-lg-12 form-group">
        <label for="">profile pic</label>
          <input type="file" class="form-control" name="profile_photo">
      </div>
      <div class="col-lg-12 form-group">
        <label for="">Rolec</label>
          <select name="role">
            <option value="0">-Select Role-</option>
            <option value="1">admin</option>
            <option value="2">moderator</option>
            <option value="3">fakir</option>
          </select>
      </div>
      <div class="col-lg-12 text-center">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </form>
</div>
<?php
require_once 'dashboard_part/footer.php';
 ?>
