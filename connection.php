<?php

  $db_server = "localhost:3308"; // Here i included new port no which ill be using in my project in XAMPP....
  $db_user   = "root";
  $db_pass   = "";
  $db_name   = "prmsdb";

  $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
  if(!$conn){
    die("Connection failed! :".mysqli_connect_error());
  }
?>
