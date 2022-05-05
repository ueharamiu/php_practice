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
            for ( $week = 0; $week < 7; $week++ ) { // $week の数が最小、 7 未満、 $week に加算する、という条件でループ開始
              echo "<th>" . $weeks[$week] . "</th>"; // $weeks に上記の条件を満たした $week を <th> タグの中に出力
            }
            ?>
           </tr>

           <?php
              for ( $day = 1; $day < 32; $day++ ) { // $day の数が 1 、 32 未満、 $day に加算する、という条件でループ開始
                echo "<td>" . $day . "</td>"; // 上記の条件を満たした $day を <td> タグの中に出力
                  if ( $day % 7 == 0 ) { // もし $day を 7 で余剰した数が最小の場合
                    echo "</tr><tr>"; // 改行する
                  }
              }
           ?>
        </table>
    </div>
  </body>
</html>
