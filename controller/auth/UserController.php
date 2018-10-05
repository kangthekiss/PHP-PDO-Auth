<?php
  // register
  function store($email, $password)
  {
    include('../config/connect.php');
    $stm = $connect->prepare(
      "INSERT INTO users (email, password) VALUES (:email, :password)"
    );
    try
    {
      $stm->execute([
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT)
      ]);
      $message = "สมัครสมาชิกสำเร็จ";
      header('location: ../index.php?auth=login&email='.$email.'&message2='.$message);
    }
    catch (\Exception $e)
    {
      echo $e;
    }
  }

  //login
  function checkLogin($email ,$password)
  {
    include('../config/connect.php');
    $stm = $connect->prepare(
      "SELECT * FROM users WHERE email = :email"
    );
    try
    {
      $stm->execute([
        'email' => $email,
      ]);
      $count = $stm->rowCount();
      if($count > 0)
      {
        $data = $stm->fetch();
        if(password_verify($password, $data['password']))
        {
          $_SESSION['login'] = $data['email'];
          header('location: ../index.php?login=success');
        }
        else
        {
          $message = "password ไม่ถูกต้อง";
          header('location: ../index.php?auth=login&email='.$email.'&message='.$message);
        }
      }
      else
      {
          $message = "email นี้ไม่มีในระบบ";
          header('location: ../index.php?auth=login&message='.$message);
      }

    }
    catch (\Exception $e) {
      echo $e;
    }
  }

  //check Email
  function checkRegister($email, $password, $confirm_password)
  {
    include('../config/connect.php');
    $stm = $connect->prepare(
      "SELECT email FROM users WHERE email = :email"
    );
    $stm->execute([
      'email' => $email
    ]);
    $count = $stm->rowCount();
    if($count == 0)
    {
      if(strlen($password) < 6)
      {
        $message = "รหัสผ่านต้องมีตั้งแต่ 6 ตัวอักษรขึ้นไป";
        header('location: ../index.php?auth=register&email='.$email.'&message='.$message);
      }
      else
      {
        if($password != $confirm_password)
        {
          $message = "รหัสผ่านไม่ตรงกัน";
          header('location: ../index.php?auth=register&email='.$email.'&message='.$message);
        }
        else
        {
          store($email, $password);
        }
      }
    }
    else
    {
      $message = "email นี้มีในระบบแล้ว";
      header('location: ../index.php?auth=register&message='.$message);
    }
  }

  //forget password
  function forget($email)
  {
    include('../config/connect.php');
    $stm = $connect->prepare(
      "SELECT email FROM users WHERE email = :email"
    );
    $stm->execute([
      'email' => $email
    ]);
    $count = $stm->rowCount();
    if($count == 0)
    {
      $message = "email ของคุณไม่ถูกต้อง";
      header('location: ../index.php?auth=forget&message='.$message);
    }
    else
    {
      header('location: ../index.php?auth=reset&email='.$email);
    }
  }

  //reset password
  function reset_password($email, $password, $confirm_password)
  {
    if(strlen($password) < 6)
    {
      $message = "รหัสผ่านต้องมีตั้งแต่ 6 ตัวอักษรขึ้นไป";
      header('location: ../index.php?auth=reset&email='.$email.'&message='.$message);
    }
    else
    {
      if($password != $confirm_password)
      {
        $message = "รหัสผ่านไม่ตรงกัน";
        header('location: ../index.php?auth=reset&email='.$email.'&message='.$message);
      }
      else
      {
          include('../config/connect.php');
          $stm = $connect->prepare(
            "UPDATE users SET password = :password WHERE email = :email"
          );
          $stm->execute([
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'email' => $email
          ]);
          $message = "reset รหัสผ่านสำเร็จ";
          header('location: ../index.php?auth=login&email='.$email.'&message3='.$message);
      }
    }
  }
 ?>
