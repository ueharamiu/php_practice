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
            <!--  
            <tr>
              <?php for ($week = 0; $week < 7; $week++) { ?>
              <th><?php echo $weeks[$week]; } ?></th> 
            </tr>

           
            <tr>
              <?php for ($day = 1; $day < 32; $day++) { 
               echo "<td>"; 
               echo $day; 
               } ?>  
           </tr>
           -->
           
            
           <?php
           for($tr = 1; $tr < 6; $tr++) {
            
            
             for($td = 1; $td < 8; $td++) {
              for ($day = 1; $day < 32; $day++) {
                echo "<td>" . $day . "</td>";
                if ( $day == 8 || $day || 16 || $day == 23) {
                  echo "</tr><tr>";
              }}}
              
             echo "</tr>";
           } ?>
           
           
             <!--  
            <tr>
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <td>4</td>
              <td>5</td>
              <td>6</td>
              <td>7</td>
            </tr>
            <tr>
              <td>8</td>
              <td>9</td>
              <td>10</td>
              <td>11</td>
              <td>12</td>
              <td>13</td>
              <td>14</td>
            </tr>
            <tr>
              <td>15</td>
              <td>16</td>
              <td>17</td>
              <td>18</td>
              <td>19</td>
              <td>20</td>
              <td>21</td>
            </tr>
            <tr>
              <td>22</td>
              <td>23</td>
              <td>24</td>
              <td>25</td>
              <td>26</td>
              <td>27</td>
              <td>28</td>
            </tr>
            <tr>
              <td>29</td>
              <td>30</td>
              <td>31</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            -->
            
              
        </table>
    </div>
  </body>
</html>