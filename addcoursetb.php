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

  $cname=$_GET['cname'];
 
  $chan=$_GET['channel'];
  $vid=$_GET['video'];
  $host=$_GET['hname'];
  $youtubeli=$_GET['youtube'];

$sql = "INSERT INTO `c_sources` (`C_name`, `channel`, `videoplaylists`, `host_name`,  `youtube`) VALUES ('$cname', '$chan', '$vid', '$host',  '$youtubeli')";


if (!mysqli_query($conn,$sql)) 
  {



  echo "New record not created successfully";
} else {

echo "<script language='javascript'>";
echo 'alert("Course added Successfully");';
echo "</script>";

header("Refresh:0; url=courses.php");
}

$conn->close();
  ?>