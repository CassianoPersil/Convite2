<?php
	//Conexão
	$username = 'root';
    $password = '';
    $pdo = new PDO('mysql:host=localhost;dbname=cha_cassiano', $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
