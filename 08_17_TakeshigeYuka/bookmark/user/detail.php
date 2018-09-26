<?php
// getで送信されたidを取得
$id = $_GET['id'];


//1.  DB接続します
include('functions.php');
$pdo = db_conn();


//２．データ登録SQL作成，指定したidのみ表示する
$stmt = $pdo->prepare('SELECT * FROM gs_user_table WHERE id = :id');
$stmt->bindValue(':id',$id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
if($status==false){
  // エラーのとき
  errorMsg($stmt);
}else{
  // エラーでないとき
  $rs = $stmt->fetch();
  // fetch()で1レコードを取得して$rsに入れる
  // $rsは配列で返ってくる．$rs["id"], $rs["name"]などで値をとれる
  // var_dump()で見てみよう
}
?>

<!-- htmlは「index.php」とほぼ同じです -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザー情報更新</title>
  <link href="../assets/css/reset.css" rel="stylesheet">
  <link href="../assets/css/sanitize.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">

</head>
<body>
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/bookmark/ui/globalnav.php'); ?>
<form method="post" action="update.php" class="box-wrap" onsubmit="return checkform(this)">
  <div class="box">
    <h1 class="headline">ユーザー情報更新</h1>
    <label class="input-wrap">名前：<input type="text" name="name" class="input" value="<?=$rs['name']?>"></label><br>
    <label class="input-wrap">ログインID：<input type="text" name="lid" class="input" value="<?=$rs['lid']?>"></label><br>
    <label class="input-wrap">パスワード：<input type="text" name="lpw" class="input" value="<?=$rs['lpw']?>"></label><br>
    <input type="submit" value="送信" class="button">
    <input type="hidden" name="id" value="<?=$rs['id']?>">
    <a class="link" href="select.php">データ一覧</a>
  </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src=",,.js/app.js"></script>
</body>
</html>
