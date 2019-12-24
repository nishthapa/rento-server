<?php

  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    include 'database-config.php';
    $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
    if($con)
    {
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      $CheckSQL = "SELECT * FROM rento.user_info_master WHERE phone = '$phone';";
      $check = mysqli_fetch_array(mysqli_query($con,$CheckSQL));
      if(isset($check))
      {
        echo 'Phone Number Already Registered';
      }
      else
      {
        $registration_query = "INSERT INTO rento.user_info_master(first_name, last_name, phone, email, password) VALUES('$first_name', '$last_name', '$phone', '$email', '$password');";
        if(mysqli_query($con,$registration_query))
        {
          echo 'Registration Successful';
        }
        else
        {
          echo 'Registration Failure';
        }
      }
    }
    else
    {
      echo "Database Connection Failed!";
    }

  }
  else
  {
    echo "Check Again";
  }
  mysqli_close($con);
?>
