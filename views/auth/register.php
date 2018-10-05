<div class="container">
  <center><h3>Form Register</h3></center>
  <br>
  <form class="form-register" action="route/auth.php" method="post">

    <div class="form-group row">
      <div class="col-md-2"></div>
      <div class="col-md-10">
        <?php
          if(isset($_GET['message']))
          {
            echo "<div class='alert alert-danger'>".$_GET['message']."</div>";
          }
        ?>
      </div>
    </div>

    <div class="form-group row">
      <label for="email" class="col-md-2">Email</label>
      <div class="col-md-10">
        <input type="email" name="email" value="<?php if(isset($_GET['email'])){ echo $_GET['email']; } ?>" required autofocus class="form-control" placeholder="Example@mail.com">
      </div>
    </div>

    <div class="form-group row">
      <label for="password" class="col-md-2">Password</label>
      <div class="col-md-10">
        <input type="password" name="password" value="" required class="form-control" placeholder="More than 6 characters">
      </div>
    </div>

    <div class="form-group row">
      <label for="re-password" class="col-md-2">Re-Password</label>
      <div class="col-md-10">
        <input type="password" name="confirm-password" value="" required class="form-control" placeholder="Confirm your password">
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-2"></div>
      <div class="col-md-10">
        <input type="submit" name="create" value="Register" class="btn btn-success">
      </div>
    </div>

  </form>
</div>
