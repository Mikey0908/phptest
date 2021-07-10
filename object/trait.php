<?php

trait ProductTrait{
  public function getProduct(){
    echo 'プロダクト<br>';
  }
}

trait NewsTrait{
  public function getNews(){
    echo 'ニュース<br>';
  }
}

class Super{
  use ProductTrait;
  use NewsTrait;

  public function getInformation(){
    echo 'クラス<br>';
  }

  public function getProduct(){
    echo 'クラスgetProduct<br>';
  }

  public function getNews(){
    echo 'クラスgetNews<br>';
  }

}

$super = new Super();

$super->getProduct();
$super->getNews();
$super->getInformation();

?>