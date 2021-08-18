<?php
include("file1.php");
?>
<!doctype html>
<html>
  <head>
    <style>
    video{
     float: initial;
    }
    .holder{
      display: flex;
      flex-direction: row;
      justify-content: space-around;
    }
    .desc{
      margin: 60px;
    }
    .hold{
      display : flex;
      flex-direction: column;
      flex-wrap: wrap;
    }
    </style>
  </head>
  <body>
    <div>
     <?php
         // $det = mysqli_query($con, "SELECT gener, season_no, episode_no FROM videos ORDER BY id DESC");
     $fetchVideos = mysqli_query($con, "SELECT location FROM videos ORDER BY id DESC");
     $det = mysqli_query($con, "SELECT gener, season_no, episode_no FROM videos ORDER BY id DESC");
     echo "<div class='holder'>";
      echo"<div class = hold>";
     while($row = mysqli_fetch_assoc($fetchVideos)){
       $location = $row['location'];
       echo "<div >";
       echo "<video src='".$location."'controls width='320px' height='200px' >\n";
       echo "</div>";
     }
      echo "</div>";
      echo"<div class = hold>";
     while ($row = mysqli_fetch_assoc($det)){
       echo "<div class=desc>";
      echo "<br/>";
      echo "\nGener: " .$row["gener"];
      echo "<br/>";
      echo "\nSeason: " .$row["season_no"];
      echo "<br/>";
      echo "\nEpisode: " .$row["episode_no"];
      echo "</div>";
    }
    echo "</div>";
    echo "</div>";
    //}
     
     ?>
         <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </div>

  </body>
</html>