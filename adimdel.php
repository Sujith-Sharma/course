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

$UserID = $_GET['UserID'];
$query1 = "DELETE FROM login WHERE UserID = '$UserID'";
$query = "DELETE FROM signup WHERE UserID = '$UserID'";
	$result = mysqli_query($conn, $query);
	$result1 = mysqli_query($conn, $query1);
	
	if(!$result or !$result1){
		echo "delete data unsuccessfully " . mysqli_error($conn);
		exit;
	}
	header("Location: user.php");