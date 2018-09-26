<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Sign up</title>
  <link href="../assets/css/reset.css" rel="stylesheet">
  <link href="../assets/css/sanitize.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
<form method="post" action="insert.php" class="box-wrap" onsubmit="return checkform(this)">
  <div class="box">
    <h1 class="headline">Sign up</h1>
    <label class="input-wrap">名前：<input type="text" name="name" class="input"></label><br>
    <label class="input-wrap">ログインID：<input type="text" name="lid" class="input"></label><br>
    <label class="input-wrap">パスワード：<input type="text" name="lpw" class="input"></label><br>
    <input type="submit" value="サインアップ" class="button">
    <a class="link" href="signin.php">アカウントをお持ちの方はこちら</a>
    <!-- <a class="link" href="select.php">データ一覧</a> -->
  </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../js/app.js"></script>
</body>
</html>
