<?php
$calendar = array();
$j = 0;

for ($i =1; $i < 7; $i++) {
    $week = date('w', mktime(0, 0, 0, 0, 0));

    if ($i == 1) {
        for ($s = 1; $s <= $week; $s++) {
            $calendar[$j]['day'] = '';
            $j++;
        }
    }
}


$calendar[$j]['day'] = $i;
$j++;

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
                <th>日</th>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th>土</th> 
            </tr>
            <?php $cnt = 0; ?>
            <?php foreach ($calendar as $key => $value): ?>

                <td>
                <?php $cnt++; ?>
                <?php echo $value['day']; ?>
                </td>

            <?php if ($cut == 7): ?>
            </tr>
            <td>
            <?php $cnt = 0; ?>
            <?php endif; ?>

            <?php endforeach; ?>
            </td>
        </table>
    </div>
  </body>
  </html>