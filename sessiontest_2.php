<?php

// セッションを使用する場合は必ず実行する関数
session_start();

?>

<html>
<head>
</head>

<body>

<?php

  echo 'セッション破棄しました';

  $_SESSION = [];


  session_destroy();

  setcookie('PHPSESSID', '', time() - 1800, '/');

  echo 'セッション';
  echo '<pre>';
  var_dump($_SESSION);
  echo '</pre>';

  echo 'クッキー';
  echo '<pre>';
  var_dump($_COOKIE);
  echo '</pre>';


?>
</body>
</html>