<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログイン画面</title>
</head>

<body>
  <form action="login_act.php" method="POST">
    <fieldset>
      <legend>ログイン画面</legend>
      <div>
        ユーザネーム: <input type="text" name="username">
      </div>
      <div>
        パスワード: <input type="text" name="password">
      </div>
      <div>
        <button>Login</button>
      </div>
      <a href="register.php">ユーザ登録画面へ</a>
    </fieldset>
  </form>

</body>

</html>