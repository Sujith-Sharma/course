<?php

  $user = 'root';
  $pass = '';
  $db = 'project024';

  $conn = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
  echo "\nconnection established\n";

  if (!mysqli_select_db($conn,'project024')) {
		  	
  		echo "\ndatabase not selected\n";
  }
 date_default_timezone_set('Asia/Kolkata');

  $adminname = $_POST['adminname'];
  $pass = $_POST['pass'];

   $rs=mysqli_query($conn,"SELECT * FROM admin WHERE adminname ='$adminname' AND pass ='$pass'");
  if(mysqli_num_rows($rs)<1)
  {
    echo "\nInvalid user\n";
    header("refresh:1; url=adminlog.html");

  }
  else
  {
    echo "welcom administrator ;)";
    header("refresh:1; url=admin.html");


  }