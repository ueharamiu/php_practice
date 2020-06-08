<?php 
  $weeks = array( "日", "月", "火", "水", "木", "金", "土"); 
  $days = array();
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Calendar</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">  
        <table class="table table-boedered"> 
        
           <tr>
            <?php
            for ($week = 0; $week < 7; $week++) {
              echo "<th>" . $weeks[$week] . "</th>"; 
            }
            ?>
           </tr>

           <?php
              for ($day = 1; $day < 32; $day++) {
                echo "<td>" . $day . "</td>";
                  if ( $day % 7 == 0) {
                    echo "</tr><tr>";
                  }
              }
           ?>     
        </table>
    </div>
  </body>
</html>