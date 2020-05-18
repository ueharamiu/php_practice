<?php 
$week = array( "日", "月", "火", "水", "木", "金", "土");
    var_dump( $week );
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
                <th><?php echo $sun; ?></th>
                <th><?php echo $mon; ?></th>
                <th><?php echo $tue; ?></th>
                <th><?php echo $wed; ?></th>
                <th><?php echo $thu; ?></th>
                <th><?php echo $fri; ?></th>
                <th><?php echo $sat; ?></th> 
            </tr>
            <tr>
                <td><?php echo $day; ?></td>
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