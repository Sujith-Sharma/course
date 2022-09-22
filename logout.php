<?php
  session_start();
  $user = 'root';
  $pass = '';
  $db = 'project024';

  $db = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
  echo "\nconnection established\n";

  if (!mysqli_select_db($db,'project024')) {
		  	
  		echo "\ndatabase not selected\n";
  }
 date_default_timezone_set('Asia/Kolkata');
 $date = date('Y/m/d H:i:s');

 $UserID= $_SESSION["UserID"];
 echo "\n userid is".$UserID." camo\n";

 $maxslrow = mysqli_query($db,"SELECT MAX(slno) AS max FROM login");
 $anrow =mysqli_fetch_array($maxslrow);
 $maxsl =$anrow['max'];
 $sql = "UPDATE login SET datestimes ='$date' WHERE UserID = '$UserID' AND slno ='$maxsl' ";
  if (!mysqli_query($db,$sql)) 
  {
    echo "\nlogout not registered\n";
    header("refresh:2;url=retrive.html");
  }
  else
  {
    echo "\nlogout registeres\n";
     unset($_SESSION["UserID"]);
unset($_SESSION["psw"]);
header("refresh:2;url=login.html");
  }
 
?>