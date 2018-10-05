<?php

  $host = "localhost";
  $dbname = "auth";
  $user = "root";
  $pass = "";

  try 
  {
    $connect = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
    session_start();
  } 
  catch (Exception $e) 
  {
    echo $e;
  }
