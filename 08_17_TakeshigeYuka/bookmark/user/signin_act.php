<?php
session_start();

// if(
//   !isset($_POST["name"]) || $_POST["name"]=="" ||
//   !isset($_POST["lid"]) || $_POST["lid"]=="" ||
//   !isset($_POST["lpw"]) || $_POST["lpw"]==""
// ){
//   exit('<p>必須項目が入力されていません</p><br><a href="user/index.php">入力フォームに戻る</a>');
// }

//1. POSTデータ取得
//$name = filter_input( INPUT_GET, "name" ); //こういうのもあるよ
//$lid= filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$lid= $_POST["lid"];
$lpw = $_POST["lpw"];

//2. DB接続します
include('functions.php');
$pdo = db_conn();

//３．データ登録SQL作成
$sql ="SELECT * FROM gs_user_table WHERE lid = :lid AND lpw = :lpw";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':lid', $lid);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lpw', $lpw);   //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();                        //実行！！

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  // $error[2]は２番目だけ人間にわかる言葉が返ってくる
  exit("sqlError:".$error[2]);
}

$val = $stmt->fetch();

if( $val["id"] != "" ) {
  $_SESSION["chk_ssid"]  = session_id();
  $_SESSION["kanri_flg"] = $val['kanri_flg'];
  $_SESSION["name"]      = $val['name'];
  header('Location: ../select.php');
} else {
  header('Location: signin.php');
}

exit();
?>
