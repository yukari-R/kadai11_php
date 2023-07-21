<?php

$url = $_POST["url"];
$urlid = $_POST["urlid"];
$title = $_POST["title"];
$comment = $_POST["comment"];
$score = $_POST["score"];

require_once("model.php");
$pdo = db_connect();

$insert = $pdo->prepare("INSERT INTO ge_thumbnail_table (url, title, comment, urlid, score) VALUES(:url,:title,:comment,:urlid,:score)");
$insert->bindValue(':url', $url, PDO::PARAM_STR);
$insert->bindValue(':title', $title, PDO::PARAM_STR);
$insert->bindValue(':comment', $comment, PDO::PARAM_STR);
$insert->bindValue(':urlid', $urlid, PDO::PARAM_STR);
$insert->bindValue(':score', $score, PDO::PARAM_INT);
$status = $insert->execute();

header("Location:" . "./top.php", true, 303);
exit();

