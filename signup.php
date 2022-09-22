<?php

  $user = 'root';
  $pass = '';
  $db = 'project024';

  $db = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
  echo "\nconnection established\n";

  if (!mysqli_select_db($db,'project024')) {
		  	
  		echo "\ndatabase not selected\n";
  }

  $UserID = $_POST['UserID'];
  $PhNo = $_POST['PhNo'];
  $sex = $_POST['sex'];
  $psw = $_POST['psw'];
  $age = $_POST['age'];

  $rs=mysqli_query($db,"select * from signup where UserID='$UserID'");
if (mysqli_num_rows($rs)>0)
{
  echo "\nLogin Id Already Exists....\n";
  header("refresh:1; url=signup.html");
  exit;
}
else{
  echo "\nTrying to create user....\n";
}
$sql="insert into signup(UserID,psw,PhNo,age,sex) values('$UserID','$psw','$PhNo','$age','$sex')";
if (!mysqli_query($db,$sql)) 
  {
    echo "\n value couldnt be inserted\n";
    header("refresh:1; url=signup.html");
  }
  else
  {
    echo "\n values inserted\n";
    header("refresh:1; url=login.html");
  }
  
?>