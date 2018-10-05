<div class="container">
  <center><h3>Forget Password</h3></center>
  <br>
  <form class="form-forget" action="route/auth.php" method="post">

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
        <input type="email" name="email" value="" required autofocus class="form-control" placeholder="Input your email for reset password">
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-2"></div>
      <div class="col-md-10">
        <input type="submit" name="forget" value="Confirm" class="btn btn-success">
      </div>
    </div>

  </form>
</div>
