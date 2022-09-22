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

$C_name = $_GET['C_name'];
$query = "DELETE FROM c_sources WHERE C_name = '$C_name'";
	$result = mysqli_query($conn, $query);
	
	if(!$result){
		echo "delete data unsuccessfully " . mysqli_error($conn);
		exit;
	}
	header("Location: courses.php");