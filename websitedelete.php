<?php

$username='root';
$password='';
$db='project024';
$conn=mysqli_connect('localhost',$username,$password,$db);
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
if (!mysqli_select_db($conn,'project024')) {
        
      echo "database not selected";
  }

$slno = $_GET['slno'];
$query = "DELETE FROM websites WHERE slno = '$slno'";
	$result = mysqli_query($conn, $query);
	
	if(!$result){
		echo "delete data unsuccessfully " . mysqli_error($conn);
		exit;
	}
	header("Location: web.php");