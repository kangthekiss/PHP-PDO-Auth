<?php
  if(isset($_GET['auth']))
  {
    if($_GET['auth'] == "login")
    {
      echo "Login Form";
    }
    else
    {
      echo "Register Form";
    }
  }
  else
  {
    echo "Home Page";
  }

?>
