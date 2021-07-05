<?php

// セッションを使用する場合は必ず実行する関数
session_start();



?>

<html>
<head>
</head>

<body>

<?php

// 初回訪問時
if(!isset($_SESSION['visited'])){
  echo '初回訪問です';

  $_SESSION['visited' ] = 1;
  $_SESSION['date' ] = date('c');
}

// 2回目の訪問時
else{

  // 訪問回数をカウントアップ
  $visited = $_SESSION['visited'];
  $visited++;
  $_SESSION['visited'] = $visited;

  // 訪問回数の表示
  echo $_SESSION['visited'].'回目の訪問です<br>';

  // 前回訪問時間の表示
  if(isset($_SESSION['date'])){
    echo '前回訪問は'.$_SESSION['date'].'です';
    $_SESSION['date'] = date('c');
  }

//  setcookie("id", 'aaa', , '/' );

  echo '<pre>';
  var_dump($_SESSION);
  echo '</pre>';

  echo '<pre>';
  var_dump($_COOKIE);
  echo '</pre>';

}

?>
</body>
</html>