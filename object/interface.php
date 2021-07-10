<?php

// インターフェース
interface ProductInterface{
  public function getProduct();
}

// インターフェース
interface NewsInterface{
  public function getNews();
}

// クラス
final class Product implements ProductInterface, NewsInterface{
  // 変数
  private $products = [];

  function __construct($product){
    array_push($this->products,$product);
  }

  public function getProduct(){
    foreach($this->products as $product){
      echo $product . '<br>';
    }
  }

  public function getNews(){
    echo 'ニュースです'.'<br>';
  }

  public function addProduct($item){
    array_push($this->products,$item);
  }

}

$instance = new Product("テスト");
$instance->getProduct();
echo '<br>';

$instance->getNews();
echo '<br>';

$instance->addProduct("追加分");
$instance->getProduct();
echo '<br>';

echo '<pre>';
var_dump($instance);
echo '</pre>';
echo '<br>';

?>