<div class="container">
  <center><h3>Reset Password</h3></center>
  <br>
  <form class="form-reset" action="route/auth.php" method="post">

    <div class="form-group row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <?php
          if(isset($_GET['message']))
          {
              echo "<div class='alert alert-danger'>".$_GET['message']."</div>";
          }
        ?>
      </div>
    </div>

    <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">

    <div class="form-group row">
      <label for="password" class="col-md-3">New Password</label>
      <div class="col-md-9">
        <input type="password" name="new_password" value="" required autofocus class="form-control" placeholder="New password">
      </div>
    </div>

    <div class="form-group row">
      <label for="re-password" class="col-md-3">Confirm Password</label>
      <div class="col-md-9">
        <input type="password" name="confirm_new_password" value="" required autofocus class="form-control" placeholder="Confirm new password">
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <input type="submit" name="reset" value="Reset" class="btn btn-success">
      </div>
    </div>

  </form>
</div>
