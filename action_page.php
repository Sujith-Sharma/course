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

 $COurse=$_GET['wname'];
 $weblik=$_GET['weblnk'];
$sql = "INSERT INTO websites (website, link)
VALUES ('$COurse', '$weblik')";


if (!mysqli_query($conn,$sql)) 
  {



  echo "New record not created successfully";
} else {
  echo "<script language='javascript'>";
echo 'alert("Website added Successfully");';
echo "</script>";

header("Refresh:0; url=web.php");
}

$conn->close();
  ?>