<?php

  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    include 'database-config.php';
    $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
    if($con)
    {
      $phone = $_POST['phone'];
      $password = $_POST['password'];
      $login_query = "SELECT * FROM rento.user_info_master where phone = '$phone' and password = '$password'";
      $check = mysqli_fetch_array(mysqli_query($con,$login_query));
      if(isset($check))
      {
        echo "LOGIN_CREDENTIALS_MATCH";
      }
      else
      {
        echo "LOGIN_CREDENTIALS_MISMATCH";
      }
    }
    else
    {
      echo "Database Connection Failed!";
    }
    // $email = $_POST['email'];

  }
  else
  {
    echo "Check Again";
  }
  mysqli_close($con);
?>
