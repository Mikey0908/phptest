<?php

$contactFile = '.contact.dat';

// ファイル丸ごと読み込み
$fileContents = file_get_contents($contactFile);
echo $fileContents.'<br>';

// ファイルに書き込み(上書き)
// file_put_contents($contactFile, "テストです"."\n");

// ファイルに書き込み(追記)
// file_put_contents($contactFile, $addText, FILE_APPEND);

// 配列 file ,区切る explode foreach

$allData = file($contactFile);

foreach( $allData as $lineData )
{
  $lines = explode(',', $lineData);
  echo $lines[0].' ';
  echo $lines[1].' ';
  echo $lines[2].' ';
  echo $lines[3].'<br>';
}

?>
