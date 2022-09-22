<!DOCTYPE html>
<html>
<head>
	<title>php demo</title>
</head>
<body>
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
  $UserID = $_POST['UserID'];
  $psw = $_POST['psw'];
  
  $rs=mysqli_query($conn,"SELECT * FROM signup WHERE UserID ='$UserID' AND psw ='$psw'");
  if(mysqli_num_rows($rs)<1)
  {
    echo "\nInvalid user\n";;
  }
  else
  {
    echo $UserID;
    $sqli = "DELETE FROM login WHERE UserID = '$UserID'";
    $sql = "DELETE FROM signup WHERE UserID = '$UserID'";

  if (!mysqli_query($conn,$sqli) or !mysqli_query($conn,$sql)) 
  {
    echo "\nSign out failed\n";
    header("refresh:3; url=signout.html");
  }
  else
  {
    echo "\n sucessfully signed out\n";
    header("refresh:1; url=login.html");
  }
 
}  
?>
</body>
</html>