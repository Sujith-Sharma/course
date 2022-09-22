<!DOCTYPE html>
<html>
<title>Online Course Recommendation</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
form{
      background:#0fcfdd;
        position: relative;
        max-width: 360px;
        margin:100px auto 100px;
        z-index: 1;
        padding: 45px;
        text-align: center;
        color:black;
    }
    form input{
      padding:5px;
    }
    #button{
      background-color: #04AA6D;
      color:white;
      padding: 10px 20px 10px 20px;
      margin-left:200px;
      background:black;
      border:none;
    }
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

/* input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
} */

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>




<div class="container">
<form action="addcoursetb.php">
    <!-- <div class="row">
      <div class="col-25">
        <label for="fname">Course Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="cname" name="cname" placeholder="Course Name">
      </div>
    </div> -->
    <h1>Add Course Details</h1>
    <div class="row">
      <div class="col-25">
        <label for="cname">Course Name</label>
      </div>
      <div class="col-75">
        <select id="cname" name="cname">
          <?php
$username='root';
$password='';
$db='project024';
$conn=mysqli_connect('localhost',$username,$password,$db);
$sqll=mysqli_query($conn,"select * from courses");
while($row = mysqli_fetch_array($sqll)) {
  
echo  " <option value='". $row['C_name']."'>" .$row['C_name']."</option>";
}
  ?>


        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Channel</label>
      </div>
      <div class="col-75">
        <input type="text" id="channel" name="channel" placeholder="Channel ">
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="subject">Video Playlist</label>
      </div>
      <div class="col-75">
        <textarea id="subvideoject" name="video" placeholder="Video Playlist"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Host Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="hname" name="hname" placeholder="Host Name">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Youtube Link</label>
      </div>
      <div class="col-75">
        <input type="text" id="youtube" name="youtube" placeholder="Youtube Link">
      </div>
    </div>
    
    
    <input id ="button"type="submit" value="Submit">

  
</div>
</form>
</body>
</html>







































<!-- <!DOCTYPE html>
<html>
<body>




  <label for="cname">Course Name</label>
  <input type="text" id="cname" name="cname"><br><br>
 
                

  <label for="channel">Channel Link</label>
  <input type="text" id="channel" name="channel"><br><br>
  <label for="video">Video Playlist</label>
  <input type="text" id="video" name="video"><br><br>
  <label for="hname">Host Name</label>
  <input type="text" id="hname" name="hname"><br><br>
  <label for="youtube">Youtube Link</label>
  <input type="text" id="youtube" name="youtube"><br><br>
 
  
</form>


</body>
</html> -->
