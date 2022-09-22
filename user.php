<!DOCTYPE html>
<html>
<head>
	<title>Online Course Recommendation</title>
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
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
}
button a{
  color:white;
  text-decoration:none;
}
.btn:hover {
  opacity: 0.8;
}
.bckbtn{
  float: right;
  background-color: green;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;

  }
  </style>
</head>
<body>
	 <button class="bckbtn"><a href="admin.html">BACK</a></button>
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

  $sqll=mysqli_query($conn,"SELECT * FROM signup");

?>
<h1 style="text-align: center;">MEMBERS:</h1>
<?php
if (mysqli_num_rows($sqll) > 0) {
?>
<table>
  
  <tr>
    <th>UserID</th>
    <th>Password</th>
    <th>Mobile</th>
    <th>Age</th>
    <th>Sex</th>
    <th>Delete Users</th>
  </tr>
<?php

$i=0;
while($row = mysqli_fetch_array($sqll)) {
?>
<tr>
    <td><?php echo $row["UserID"]; ?></td>
    <td><?php echo $row["psw"]; ?></td>
    <td><?php echo $row["PhNo"]; ?></td>
    <td><?php echo $row["age"]; ?></td>
    <td><?php echo $row["sex"]; ?></td>
    <td><a href="adimdel.php?UserID=<?php echo $row['UserID']; ?>">Delete</a></td>
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
</body>
</html>