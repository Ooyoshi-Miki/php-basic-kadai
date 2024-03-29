<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
      <?php
        // クラスを定義する
        class Food{
          // プロパティを定義する
          public $name;
          public $price;
          // コンストラクタを定義する
          public function __construct($name, $price){
            $this->name = $name;
            $this->price = $price;
          }

          // priceプロパティの値を出力するメソッド
          public function show_price(){
            return $this->price;
          }
        }

        // クラスを定義する
        class Animal{
          // プロパティを定義する
          public $name;
          public $height;
          public $weight;
          // コンストラクタを定義する
          public function __construct($name, $height, $weight){
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
          }

          // heightプロパティの値を出力するメソッド
          public function show_height(){
            return $this->height;
          }
        }

        // インスタンス化する
        $food = new Food('Potato', 250);
        $animal = new Animal('dog', 60, 5000);
        // 各プロパティの値を出力する
        print_r('<pre>');
        print_r($food);
        print_r($animal);
        print_r('</pre>');
      ?>
    </p>
    <p>
      <?php
        // インスタンス化してメソッドにアクセスし、値を出力する
        $price = new Food('Potato', 250);
        echo $price->show_price() . '<br>';
        $height = new Animal('dog', 60, 5000);
        echo $height->show_height() . '<br>';
      ?>
    </p>
  </body>
</html>
