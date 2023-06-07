<?php

require_once 'vendor/autoload.php';

$caminhoBanco = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $caminhoBanco);

$statement =  $pdo->prepare("DELETE FROM students WHERE id = ?;");
$statement->bindValue(1, 4, PDO::PARAM_INT);

var_dump($statement->execute());
