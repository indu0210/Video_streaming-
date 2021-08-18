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
    div.polaroid {
      width: 80%;
      background-color: white;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      margin-bottom: 25px;
    }
    div.container {
     text-align: center;
     padding: 10px 20px;
    }
    </style>
  </head>
  <body>
    <div>
     <?php
     $fetchVideos = mysqli_query($con, "SELECT location FROM videos ORDER BY id DESC");
     while($row = mysqli_fetch_assoc($fetchVideos)){
       $location = $row['location'];
   /*    echo "<div class="polaroid">";
       echo "<img src = '".$location."' alt="5 Terre" style="width:100%">";
       echo "<div class="container">";
       echo "<p>Cinque Terre</p>";
       echo "</div>";
       echo "</div>";
 */
      echo "<div >";
       echo "<video src='".$location."' controls width='320px' height='200px' >\n";
       echo "<br/>";
       echo "</div>";
       $det = mysqli_query($con, "SELECT gener, season_no, episode_no FROM videos ORDER BY id DESC");
       while ($row = mysqli_fetch_assoc($det)){
         echo "<br/>";
         echo "\nGener: " .$row["gener"];
         echo "<br/>";
         echo "\nSeason: " .$row["season_no"];
         echo "<br/>";
         echo "\nEpisode: " .$row["episode_no"];
       }
     }/*
     $det = mysqli_query($con, "SELECT gener, season_no, episode_no FROM videos ORDER BY id DESC");
     while ($row = mysqli_fetch_assoc($det)){
       echo "<br/>";
       echo "\nGener: " .$row["gener"];
       echo "<br/>";
       echo "\nSeason: " .$row["season_no"];
       echo "<br/>";
       echo "\nEpisode: " .$row["episode_no"];
     }*/
     ?>
 
    </div>

  </body>
</html>