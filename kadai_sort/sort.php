<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
      <?php
        function sort_2way($array, $order){
          // もし引数($order)がtrueだったら昇順にソートする。
          if ($order) {
            echo "昇順にソートします。<br>";
            sort($array);
          } else {
            // それ以外だったら降順にソートする。
            echo "降順にソートします。<br>";
            rsort($array);
          }

          // 配列の要素を1つずつ出力する。
          foreach ($array as $num) {
            echo $num . '<br>';
          }
        }

        $nums = [15, 4, 18, 23, 10];

        // 昇順でソートして出力
        sort_2way($nums, true);

        // 改行を入れて見やすくする
        echo "<br>";

        // 降順でソートして出力
        sort_2way($nums, false);
      ?>
    </p>
  </body>
</html>