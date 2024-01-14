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
        class Food_Object {
          // プロパティを定義する
          public $name;
          public $price;
          // メソッドを定義する
          public function food( $name, $price ) {
            $this -> name = $name;
            $this -> price = $price;
          }
          public function show_price() {
            echo $this -> price . '<br>';
          }
        }
        
        // クラスを定義する
        class Animal_Object {
          // プロパティを定義する
          public $name; 
          public $height;
          public $weight;
          // メソッドを定義する
          public function animal( $name, $height, $weight ) {
            $this -> name = $name;
            $this -> height = $height;
            $this -> weight = $weight;
          }
          public function show_height() {
            echo $this -> height . '<br>';
          }
        }
      ?>
    </p>

    <p>
      <?php
        // クラスを定義する
        class Food {
          // プロパティを定義する                        
          private $name;
          private $price;
          // コンストラクタを定義する
          public function __construct( string $name, int $price ) {
            $this -> name = $name;
            $this -> price = $price;
          }
        }
 
        // インスタンス化する
        $food = new Food ( 'Potato', 250 );
 
        // インスタンス$foodの各プロパティの値を出力する
        print_r('<pre>');
        print_r( $food );
        print_r('</pre>');
        

        // クラスを定義する
        class Animal {
            // プロパティを定義する                        
            private $name;
            private $height;
            private $weight;
            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this -> name = $name;
                $this -> height = $height;
                $this -> weight = $weight;
            }
          }
   
          // インスタンス化する
          $animal = new Animal ('dog', 60, 5000);
   
          // インスタンス$animalの各プロパティの値を出力する
          print_r('<pre>');
          print_r( $animal );
          print_r('</pre>');
      ?>
    </p>

    <p>
      <?php
        // インスタンス化する
        $price = new Food_Object();
        // プロパティにアクセスし、値を代入する
        $price -> price = 250;
        // プロパティにアクセスし、値を出力する
        echo $price -> price . '<br>';

        // インスタンス化する
        $height = new Animal_Object();
        // プロパティにアクセスし、値を代入する
        $height -> height = 60;
        // プロパティにアクセスし、値を出力する
        echo $height -> height . '<br>';
      ?>
    </p>
   </body>
 
 </html>