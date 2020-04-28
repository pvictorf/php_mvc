<?php

$dbname = 'dbdev';
$host   = 'mysql';
$user   = 'root';
$pass   = 'rootpass';

try {
   $pdo = new PDO("mysql:dbname=$dbname;host=$host;port=3306", $user, $pass);
   $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
   
} catch(PDOException $e) {
   print_r($e);
}
