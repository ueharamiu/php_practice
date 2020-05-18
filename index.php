<?php 
    $sun = "日";
?>
<?php
    $mon = "月";
?>
<?php
    $tue = "火";
?>
<?php
    $wed = "水";
?>
<?php
    $thu = "木";
?>
<?php
    $fri = "金";
?>
<?php
    $sat = "土";
?>



<?php
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