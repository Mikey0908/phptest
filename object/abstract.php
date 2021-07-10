<?php

// 抽象クラス //設定するメソッドを強制
abstract class ProductAbstract{
  // 変数 関数
  public function echoProduct(){
    echo '抽象クラスです'.'<br>';
  }

  // オーバーライド
  abstract public function getProduct();
}

// 子クラス・派生クラス・サブクラス
final class Product extends ProductAbstract{
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

}

$instance = new Product("テスト");
$instance->echoProduct();
echo '<br>';

$instance->getProduct();
echo '<br>';


$instance->addProduct("追加分");
$instance->getProduct();
echo '<br>';

echo '<pre>';
var_dump($instance);
echo '</pre>';
echo '<br>';

?>