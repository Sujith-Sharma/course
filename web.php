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

td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    
}
th {
background-color: #00004d;
border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    color:white;
    
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
  .bckbtn1{
  
  background-color: #ADD8E6;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  color:black;

  }
	</style>
</head>
<body>
  <!-- <button class="bckbtn"><a href="retrive.html">BACK</a></button><br> -->


  <button id="myButton" class="bckbtn" >BACK</button>

<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "retrive.html";
    };
   
</script>
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

  $sql=mysqli_query($conn,"CALL proc()");

 ?>
<?php
if (mysqli_num_rows($sql) > 0) {
?>
  <table>   
  
  <tr>
    <th>slno</th>
    <th>website</th> 
    <th>Visit website</th>
    <th>Delete website</th>
  </tr>
<?php

$i=0;
while($row = mysqli_fetch_array($sql)) {
?>
<tr>
    <td><?php echo $row["slno"]; ?></td>
    <td><?php echo $row["website"]; ?></td>
    <td> <a href="<?php echo $row["link"];?>"> <button class="bckbtn1">Visit Website</button> </a></td>
    <td><a href="websitedelete.php?slno=<?php echo $row['slno']; ?>">Delete</a></td>
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