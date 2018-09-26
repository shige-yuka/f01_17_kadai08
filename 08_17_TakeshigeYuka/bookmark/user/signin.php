<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Sign in</title>
  <link href="../assets/css/reset.css" rel="stylesheet">
  <link href="../assets/css/sanitize.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
<form method="post" action="signin_act.php" class="box-wrap" onsubmit="return checkform(this)">
  <div class="box">
    <h1 class="headline">Sign in</h1>
    <label class="input-wrap">ログインID：<input type="text" name="lid" class="input"></label><br>
    <label class="input-wrap">パスワード：<input type="text" name="lpw" class="input"></label><br>
    <input type="submit" value="サインイン" class="button">
    <a class="link" href="signup.php">新規登録はこちら</a>
  </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../js/app.js"></script>
</body>
</html>
