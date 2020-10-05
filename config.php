<?php
session_start();

global $pdo;
try
{
	$pdo = new PDO("mysql:dbname=classificados;host=localhost", "root", "");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo "FALHOU: ".$e->getMessage();
	exit;
}
?>