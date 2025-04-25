<?php

$host = getenv('MYSQL_HOST');
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');
$dbname = getenv('MYSQL_DATABASE');
$port = getenv('MYSQL_PORT');

try {
	$pdo = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $username, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Mysql 연결이 성공했습니다.";

} catch(PDOException $e) {
	echo "Connection failed: ". $e->getMessage();
}