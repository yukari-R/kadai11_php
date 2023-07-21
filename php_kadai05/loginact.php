<?php

ini_set('display_errors', 'On');

// ログインフォームで入力された情報を受け取ってデータベースに情報があるかを探す
session_start();

$lid = $_POST["lid"];
$lpw = $_POST["lpw"];

require_once('model.php');
$pdo = db_connect();
$stmt = $pdo->prepare('SELECT * FROM gs_user_table WHERE(lid = :lid AND lpw = :lpw)');
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);
$status = $stmt->execute();

if($status === false){
    sql_error($stmt);
}

$val = $stmt->fetch();
if( $val['id'] != ''){
    //Login成功時 該当レコードがあればSESSIONに値を代入
    $_SESSION["chk_ssid"] = session_id(); //session id（鍵）を入れる
    header('Location: top.php');
}else{
    //Login失敗時
    header('Location: login.php');
}

exit();
