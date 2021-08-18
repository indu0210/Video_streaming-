<!doctype html>
<html>
  <head>
    <?php
    include("file1.php");
 
    if(isset($_POST['but_upload'])){
       $maxsize = 89383400; // 80MB
 
       $name = $_FILES['file']['name'];
       $gener =$_POST['gener'];
       $season_no =$_POST['season_no'];
       $episode_no =$_POST['episode_no'];
       $target_dir = "videos/";
       $target_file = $target_dir . $_FILES["file"]["name"];

       // Select file type
       $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

       // Check extension
       if( in_array($videoFileType,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
            echo "File too large. File must be less than 8MB.";
          }else{
            // Upload
            if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
              // Insert record
              $query = "INSERT INTO videos(name, location, gener, season_no, episode_no) VALUES('".$name."','".$target_file."', '$gener', '$season_no', '$episode_no')";

              mysqli_query($con,$query);
              echo "Upload successfully.";
            }
          }

       }else{
          echo "Invalid file extension.";
       }
 
     } 
     ?>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  background-image : url("bg1.jpg");
  height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
<div class = "bg">
</head>
  <body>
    <div class = "centered">
    <form method="post" action="" enctype='multipart/form-data'>
      <input type='file' name='file' /><br/><br/>
      Gener &nbsp <input type = 'text' name ='gener' value = ''><br/><br/>
      Season &nbsp<input type = 'text' name = 'season_no'><br/><br/>
      Episode<input type = 'text'name = 'episode_no'><br/><br/>
      <input type='submit' value='Upload' name='but_upload'><br/><br/>
      <a href="play.php" class="btn btn-cool">Watch videos</a><br/><br/>
      <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </form>

  </body>
</html>