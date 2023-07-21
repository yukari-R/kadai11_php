<?php
session_start();
require_once('model.php');
loginCheck();

$id = $_GET['id'];

require_once('model.php');
$pdo = db_connect();
delete($pdo,$id);
