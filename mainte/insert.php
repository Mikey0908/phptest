<?php

// DB接続 PDO
require 'db_connection.php';

// 入力 DB保存 prepare, bind, execute(配列(全て文字列))
$params = [
  'id' => null,
  'your_name' => 'なまえ123',
  'email' => 'test@test.com',
  'url' => 'http://test.com',
  'gender' => '1',
  'age' => '2',
  'contact' => 'いいい',
  'created_at' => null
];

$count = 0;
$columns = '';
$values = '';

foreach(array_keys($params) as $key){
  if($count++>0){
    $columns .= ',';
    $values .= ',';
  }
  $columns .= $key;
  $values .= ':'.$key;
}

$sql = 'INSERT INTO contacts (' . $columns .')values(' . $values . ' )';
// echo '<pre>';
// var_dump($sql);
// echo '</pre>';

$stmt = $pdo->prepare($sql); // プリペアドステートメント
$stmt->execute($params); // 実行

?>