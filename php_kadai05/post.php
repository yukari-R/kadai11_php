<?php
session_start();
require_once('model.php');
loginCheck();

require_once("model.php");
$pdo = db_connect();
$view = get_all_posts($pdo);
require_once("view_post.php");

