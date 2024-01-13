<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <h3>昇順にソートします。</h3>
    <p>
      <?php
        // ソートする配列を宣言
        $nums = array(
            '15',
            '4', 
            '18',
            '23', 
            '10'
        );
        
        
        sort($nums, SORT_NATURAL | SORT_FLAG_CASE);
        foreach ($nums as $key => $val) {
            echo "" . $val . "\n" . '<br>';
        }
      ?>
    </p>
    <h3>降順にソートします。</h3>
    <P>
      <?php
        rsort($nums);
        foreach ($nums as $key => $val) {
        echo " $val\n" . '<br>';
        }
      ?>
    </p>
  </body>

</html>