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
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
}
button a{
  color:white;
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
<button  class="bckbtn"><a href="admin.html">BACK</a></button><br>
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
  ?>
<h1 style="text-align: center;">COURSES AVAILABLE</h1>
<?php
  $sql=mysqli_query($conn,"SELECT c.C_name,s.* FROM courses c,c_sources s WHERE c.C_name=s.C_name");
?>
<?php
if (mysqli_num_rows($sql) > 0) {
?>
  <table>
  <tr>
    <td>C_name</td>
    <td>Channel</td>
    <td>Videoplaylists</td>
    <td>Host</td>
    <td>Delete Course</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($sql)) {
?>
<tr>
    <td><?php echo $row["C_name"]; ?></td>
    <td><?php echo $row["channel"]; ?></td>
    <td><?php echo $row["videoplaylists"]; ?></td>
    <td><?php echo $row["host_name"]; ?></td>
    <td><a href="coursedel.php?C_name=<?php echo $row['C_name']; ?>">Delete</a></td>
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