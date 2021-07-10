<?php

class Product{
  // アクセス修飾子,private(外からアクセスできない),protected(自分・継承のみ使える),public(公開)
  // 変数
  private $products = [];

  // 関数

  // 初回
  function __construct($product){
    array_push($this->products,$product);
  }

  public function getProduct(){
    foreach($this->products as $product){
      echo $product . '<br>';
    }
  }

  public function addProduct($item){
    array_push($this->products,$item);
  }

  public static function getStaticProduct($str){
    echo $str.'<br>';
  }

}

$instance = new Product("テスト");
$instance->getProduct();
echo '<br>';


$instance->addProduct("追加分");
$instance->getProduct();
echo '<br>';

Product::getStaticProduct("静的");

echo '<pre>';
var_dump($instance);
echo '</pre>';
echo '<br>';

?>