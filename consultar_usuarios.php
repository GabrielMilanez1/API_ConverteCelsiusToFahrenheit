<?php

include_once 'services/Funcoes.class.php';

$header = getallheaders();
header("Content-Type: application/json");

$funcoes = new Funcoes();

$db = new PDO('sqlite:uninove.db');
// CRIAÇÃO DA TABELA echo $db->exec("CREATE TABLE users(username TEXT, senha TEXT, token TEXT)");
// INSERT NA TABELA echo $db->exec("INSERT INTO users VALUES(\"usuario\", \"senha\", \"token\")");
// APAGAR TUDO DA TABELA echo $db->exec("DELETE FROM users");exit();


$consulta = $db->query("SELECT * FROM users")->fetchALL(PDO::FETCH_ASSOC);

echo json_encode($consulta);