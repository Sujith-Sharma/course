<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<style type="text/css">
		table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}

tr:nth-child(even) {
    background-color: white;
}
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
}

button:hover {
  opacity: 0.8;
}
.bckbtn{
  float: right;
  background-color: red;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;

  }
	</style>

</head>
<body>
  
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

  $sqll=mysqli_query($conn,"SELECT * FROM login");

?>
<h1 style="text-align: center;">LOGINS</h1>
<?php
if (mysqli_num_rows($sqll) > 0) {
?>
  <table>
  
  <tr>
    <th>UserID</th>
    <th>psw</th>
    <th><button onclick="adimdel.php" style="width: 50%">DELETE USERS</button></th>
  </tr>
<?php

$i=0;
while($row = mysqli_fetch_array($sqll)) {
?>
<tr>
  <td><?php echo $row["UserID"]; ?></td>
  <!-- <td><?php echo $row["psw"]; ?></td> -->
  <td><button onclick=""><img src="ezio.jpg" style="width: 20px;height: 20pxss"></button>delete user</td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
<!-- <h1 style="text-align: center;">COURSES AVAILABLE</h1>
<?php

  $sql=mysqli_query($conn,"SELECT * FROM cources");

?>
<?php
if (mysqli_num_rows($sql) > 0) {
?>
  <table>
  
  <tr>
    <td>cID</td>
    <td>C_name</td>
    <td>Subject</td>
  </tr>
<?php

$i=0;
while($row = mysqli_fetch_array($sql)) {
?>
<tr>
    <td><?php echo $row["cID"]; ?></td>
    <td><?php echo $row["C_name"]; ?></td>
    <td><?php echo $row["Subject"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?> -->
</body>
</html>