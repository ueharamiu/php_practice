<?php 
$week = array( "日", "月", "火", "水", "木", "金", "土");
    
$days = array( 1, 2, 3, 4, 5, 6, 7);
    for ($day = 0; $day <= 7; $day++)
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
                <th><?php echo $week[0]; ?></th>
                <th><?php echo $week[1]; ?></th>
                <th><?php echo $week[2]; ?></th>
                <th><?php echo $week[3]; ?></th>
                <th><?php echo $week[4]; ?></th>
                <th><?php echo $week[5]; ?></th>
                <th><?php echo $week[6]; ?></th> 
            </tr>
            <tr>
                <td><?php echo $days[0]; ?></td>
                <td><?php echo $days[1]; ?></td>
                <td><?php echo $days[2]; ?></td>
                <td><?php echo $days[3]; ?></td>
                <td><?php echo $days[4]; ?></td>
                <td><?php echo $days[5]; ?></td>
                <td><?php echo $days[6]; ?></td>
            </tr>
        </table>
    </div>
  </body>
  </html>