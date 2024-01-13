<!DOCTYPE html>
 <html lang="ja">
 
   <head>
     <meta charset="UTF-8">
     <title>PHP課題011</title>
   </head>
 
   <body>
     <p>
       <?php
         // 連想配列に値を代入する
         $food_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
 
         // 連想配列の値を出力する
         // print_r($food_data);

         // 改行する
         echo '<br>';
 
         //  配列$food_dataのキーと値を1つずつ順番に出力する
         foreach ($food_data as $key => $value) {
           echo "{$key}:{$value}<br>";
         }
       ?>
     </p>
     <p>
       <?php
         // 連想配列に値を代入する
         $personal_data = ['id' => 1, '名前' => '侍太郎', '年齢' => 30];
 
         // 連想配列の値を出力する
         // print_r($personal_data);
 
         // 改行する
         echo '<br>';
 
         //  配列$personal_dataのキーと値を1つずつ順番に出力する
         foreach ($personal_data as $key => $value) {
            echo "{$key}:{$value}<br>";
          }
       ?>
     </p>
   </body>
 
 </html>