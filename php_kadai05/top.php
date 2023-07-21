<?php
ini_set('display_errors', 'On');
?>

<?php
// modelとlist(View)を接続する役割　＝　MVC のコントロール

require_once("model.php");
$pdo = db_connect();
$view = get_all_posts($pdo);
require_once("view_top.php");
