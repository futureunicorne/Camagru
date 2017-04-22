<?php

	include 'database.php';
	$bdd = new PDO('mysql:host=localhost;charset=utf8', 'root', 'root');
	$pdo = new PDO('mysql:host='.DB_DSN, DB_USER, DB_PASSWORD);
	$requete = "CREATE DATABASE IF NOT EXISTS `".DB_NAME."` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
	$pdo->prepare($requete)->execute();
?>
