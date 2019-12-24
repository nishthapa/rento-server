<?php

  include 'database-config.php';

  // $HostName = "localhost";
  // $HostUser = "root";
  // $HostPass = "admin";
  // $DatabaseName = "rento";
  $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
  if($con)
  {
    echo "Connected to database\n";
    mysqli_close($con);
  }
  else
  {
    echo "Error connecting to database\n";
  }
 ?>
