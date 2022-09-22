<!DOCTYPE html>
<html>
<head>
 <title>Logins</title>
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
.bckbtn{
  float: right;
  background-color: green;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
  }
  button a{
    color:white;
  }
  </style>
  
</head>
<body>
  <button class="bckbtn";><a href="admin.html">BACK</a></button>


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
    <th>date IN</th>
    <th>date OUT</th>
  </tr>
<?php

$i=0;
while($row = mysqli_fetch_array($sqll)) {
?>
<tr>
    <td><?php echo $row["UserID"]; ?></td>
    <td><?php echo $row["datestime"]; ?></td>
    <td><?php echo $row["datestimes"];?></td>
  
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