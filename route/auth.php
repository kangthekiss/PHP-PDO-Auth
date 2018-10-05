<?php
  include('../controller/auth/UserController.php');

  if($_POST['create'])
  {
    checkRegister($_POST['email'], $_POST['password'], $_POST['confirm-password']);
  }
  else if($_POST['login'])
  {
    checkLogin($_POST['email'], $_POST['password']);
  }
  else if($_POST['forget'])
  {
    forget($_POST['email']);
  }
  else if($_POST['reset'])
  {
    reset_password($_POST['email'], $_POST['new_password'], $_POST['confirm_new_password']);
  }

?>
