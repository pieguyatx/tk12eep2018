<?php
// $pdo = new PDO('DSN', 'username', 'password');

include 'config.php';

$pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');

echo "Hello world!"

?>