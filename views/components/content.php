<?php
  if (isset($_GET['auth']))
  {
    if($_GET['auth'] == "login")
    {
      include('views/auth/login.php');
    }
    else if($_GET['auth'] == "register")
    {
      include('views/auth/register.php');
    }
    else if($_GET['auth'] == "forget")
    {
      include('views/auth/forget_password.php');
    }
    else if($_GET['auth'] == "reset")
    {
      include('views/auth/reset_password.php');
    }
    else if($_GET['auth'] == "logout")
    {
      session_destroy();
      header('location: index.php');
    }
  }
  
  if(isset($_GET['login']))
  {
    if($_GET['login'] == "success")
    {
      echo "<div class='container'><div class='alert alert-success'>Wellcome ".$_SESSION['login']."</div></div>";
    }
  }
?>
