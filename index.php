<?php 
$weeks = array( "日", "月", "火", "水", "木", "金", "土"); 
$days = array( 1, 2, 3, 4, 5, 6, 7);
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
              <?php for ($week = 0; $week < 7; $week++) { ?>
              <th><?php echo $weeks[$week]; } ?></th> 
            </tr>

            <tr>
              <?php for ($day = 0; $day < 7; $day++) { ?>
              <td><?php echo $days[$day]; } ?></td>
            </tr>
        </table>
    </div>
  </body>
  </html>