<div class="container">
  <center><h3>Form Login</h3></center>
  <br>
  <form class="form-login" action="route/auth.php" method="post">

    <div class="form-group row">
      <div class="col-md-2"></div>
      <div class="col-md-10">
        <?php
          if(isset($_GET['message']))
          {
              echo "<div class='alert alert-danger'>".$_GET['message']."</div>";
          }
          else if(isset($_GET['message2']))
          {
            echo "<div class='alert alert-success'>".$_GET['message2']."</div>";
          }
          else if(isset($_GET['message3']))
          {
            echo "<div class='alert alert-success'>".$_GET['message3']."</div>";
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
        <input type="password" name="password" value="" class="form-control" placeholder="Input your password">
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-2"></div>
      <div class="col-md-10">
        <input type="submit" name="login" value="Login" class="btn btn-success">
        <a href="index.php?auth=forget">  Forget password</a>
      </div>
    </div>

  </form>
</div>
