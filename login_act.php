<?php
include("funcs.php");
// データ受け取り
$username = $_POST["username"];
$password = $_POST["password"];

// DB接続

$pdo = db_conn();

// SQL実行

$sql = 'SELECT * FROM users_table WHERE username=:username AND password=:password AND deleted_at IS NULL';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

// ユーザ有無で条件分岐
$user = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$user){
    //ログイン失敗
    echo "<p>ログインに失敗しました。</p>";
    echo '<a href="login.php">戻る</a>';
} else{
    //ログイン成功
    session_start();
    $_SESSION["session_id"] = session_id();
    $_SESSION["username"] = $user["username"];
    $_SESSION["is_admin"] = $user["is_admin"];
    $_SESSION["user_id"] = $user["id"];

    header("Location: read.php");
    exit();
}


