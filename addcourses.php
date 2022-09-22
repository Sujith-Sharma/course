<!DOCTYPE html>
<html>
  <head>
  <title>Online Course Recommendation</title>
  <style type="text/css">
    form{
      background:#0fcfdd;
        position: relative;
        max-width: 360px;
        margin:200px auto 100px;
        z-index: 1;
        padding: 45px;
        text-align: center;
        color:black;
    }
    form input{
      padding:5px;
    }
    #button{
      background-color: black;
      color:white;
      padding: 10px 20px 10px 20px;
      margin-left:200px;
      border:none;
    }
  </style>
  </head>

<body>



<form action="action_page.php">
<h1>Add Website Details</h1>
  <label for="cname">Website Name</label>
  <input type="text" id="cname" name="wname"><br><br>
  <label for="channel">Website Link</label>
  <input type="text" id="channel" name="weblnk"><br><br>
  <!-- <label for="video">Video Playlist</label>
  <input type="text" id="video" name="video"><br><br>
  <label for="hname">Host Name</label>
  <input type="text" id="hname" name="hname"><br><br>
  <label for="youtube">Youtube Link</label>
  <input type="text" id="youtube" name="youtube"><br><br> -->
 
  <input id="button" type="submit" value="Submit">
</form>


</body>
</html>
