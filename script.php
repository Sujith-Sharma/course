<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>php demo</title>
</head>
<body>
	<?php

/*  echo "hello ".$Username." welcome aboard";*/
  // you can also out put usng :$str = <<<EOD my name is $Username EOD;
  // define('PI',3.14159265)
  // echo "the value is".PI;

  $user = 'root';
  $pass = '';
  $db = 'project024';

  $conn = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
  echo "\nconnection established\n";

  if (!mysqli_select_db($conn,'project024')) {
		  	
  		echo "\ndatabase not selected\n";
  }
 date_default_timezone_set('Asia/Kolkata');
 $date = date('Y/m/d H:i:s');
  $UserID = $_POST['UserID'];
  $psw = $_POST['psw'];
  
  $rs=mysqli_query($conn,"SELECT * FROM signup WHERE UserID ='$UserID' AND psw ='$psw'");
  if(mysqli_num_rows($rs)<1)
  {
    echo "\nInvalid user\n";;
  }
  else
  {
    $_SESSION["UserID"]=$_POST['UserID'];
    $_SESSION["psw"]=$_POST['psw'];

  }
  
  if (isset($_SESSION["UserID"]))
{
  $sql = "INSERT INTO login (UserID,datestime) VALUES ('$UserID','$date')";
  if (!mysqli_query($conn,$sql)) 
  {
    echo "\nlogin not registered\n";
  }
  else
  {
    echo "\nlogin registered\n";
  }

echo "\nyou are sucessfully loged in\n";
header("refresh:1; url=retrive.html");
exit;
}
else
{
  echo "\nlogin unsuccessfull\n";
  header("refresh:1;url=login.html");
}
?>
</body>
</html>