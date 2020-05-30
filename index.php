<?php 
$weeks = array( "日", "月", "火", "水", "木", "金", "土"); 
$calendar = array();

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
              <?php for ($day = 1; $day < 32; $day++) { ?>
              <td><?php echo $day; } ?></td>
              <?php  ?>
            </tr>
        </table>
    </div>
  </body>
  </html>