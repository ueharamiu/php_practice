<?php 
$week = array( "日", "月", "火", "水", "木", "金", "土");
    var_dump( $week );
    echo '<br>';
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
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
            </tr>
        </table>
    </div>
  </body>
  </html>