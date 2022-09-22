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
.bckbtn{
  float: right;
  background-color: green;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
  color:white;

  }
  .bckbtn1{
  
  background-color: #ADD8E6 ;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
    

  }
  .youtube{
    padding-top:10px;
    margin-top:30px;
  } 
  th {
  background-color: #00008B;
  color: white;
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
  $Request=$_GET['Request'];

  $sql=mysqli_query($conn,"SELECT * FROM courses c,c_sources s WHERE c.C_name=s.C_name AND c.Subject='$Request'");

?>
<?php
if (mysqli_num_rows($sql) > 0) {
?>
<h1><?php echo $Request; ?></h1>
    
  <table>
  
  <tr>
    <th>Course_name</th>
    <th>Channel</th>
    <th>Video</th>
    <th>Host Name</th>
    <th>Video Link</th>
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
    <!-- <td><?php //<iframe   width="300" height="200" echo $row["youtube"];></iframe> ?></td> -->
   <td> <a href="<?php echo $row["youtube"];?>"> <button class="bckbtn1">Watch Video</button> </a></td>
</tr>
<?php
$i++;
}
?>  
</table>
<!-- <div class="youtube">
<iframe   width="300" height="200" src="https://www.youtube.com/embed/PkZNo7MFNFg">
</iframe>
<iframe  padding-top='10px' width="300" height="200" src="https://www.youtube.com/embed/t2CEgPsws3U">
</iframe>
<iframe  padding-top='10px' width="300" height="200" src="https://www.youtube.com/embed/RyTRgQ7k6QE">
</iframe>
</div> -->
 <?php
}
else{
    echo "No result found";
}
?>

</body>

</html>         