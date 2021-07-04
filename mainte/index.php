<?php

require 'db_connection.php';

// ユーザー入力なし query

$sql = 'SELECT * FROM contacts'; // sql
$stmt = $pdo->query($sql); // ステートメント
$result = $stmt->fetchAll(); // 結果
echo '<pre>';
var_dump($result);
echo '</pre>';

// ユーザー入力あり prepare bind execute 悪意ユーザ delete * SQLインジェクション対策
$sql = 'SELECT * FROM contacts where id = :id'; // 名前付きプレースホルダ
$stmt = $pdo->prepare($sql); // プリペアドステートメント
$stmt->bindValue('id', 2, PDO::PARAM_INT); // 紐付け
$stmt->execute(); // 実行
$result = $stmt->fetchAll(); // 結果
echo '<pre>';
var_dump($result);
echo '</pre>';

// トランザクション まとまって処理 beginTransaction, commit, rollback
// ex)銀行 残高を確認->Aさんからの引き落とし->Bさんに振込
// $pdo->beginTransaction();
// try{
//   // sql処理

//   $stmt = $pdo->prepare($sql); // プリペアドステートメント
//   $stmt->bindValue('id', 2, PDO::PARAM_INT); // 紐付け
//   $stmt->execute(); // 実行

//   $pdo->commit();

// }catch(PDOException $e){
//   $pdo->rollback(); // 更新のキャンセル
// }


?>