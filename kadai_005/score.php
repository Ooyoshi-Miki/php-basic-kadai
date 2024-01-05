<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>PHP課題005</title>
  </head>

  <body>
    <p>
      <?php
        // 変数に値(10人分の点数)を代入する
        $score1 = 80;
        $score2 = 60;
        $score3 = 55;
        $score4 = 40;
        $score5 = 100;
        $score6 = 25;
        $score7 = 80;
        $score8 = 95;
        $score9 = 30;
        $score10 = 60;

        // 変数と数値を計算し、その合計を出力する
        $sum = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
        echo $sum;
 
        // 改行する
        echo '<br>';
 
        // 合計値を人数で割り、平均値を出力する
        $avg = $sum / 10;
        echo $avg;
      ?>
    </p>

    <p>
      <?php
        $a = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];

        $sum = array_sum($a);
        echo $sum;

        echo '<br>';
        
        $avg = $sum / count($a);
        echo $avg;
      ?>
    </p>
    
  </body>

</html>