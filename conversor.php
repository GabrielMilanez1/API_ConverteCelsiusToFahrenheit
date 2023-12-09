<?php

include_once 'services/Funcoes.class.php';

$header = getallheaders();
header("Content-Type: application/json");

$funcoes = new Funcoes();

$db = new PDO('sqlite:uninove.db');
// CRIAÇÃO DA TABELA echo $db->exec("CREATE TABLE users(username TEXT, senha TEXT, token TEXT)");
// INSERT NA TABELA echo $db->exec("INSERT INTO users VALUES(\"usuario\", \"senha\", \"token\")");
// APAGAR TUDO DA TABELA echo $db->exec("DELETE FROM users");

//checa se existe um parâmetro celsius na URL
if (isset($_GET["celsius"])) {

  //checa se o parâmetro é numérico
  if(is_numeric($_GET["celsius"])) {

    $celsius = $_GET["celsius"];
  }
  else {
    
    echo json_encode($array = ["msg" => "Requisicao mal sucedida (o valor deve ser numerico)"]);
    exit();
  }
  
} else {
  
  echo json_encode($array = ["msg" => "Requisicao mal sucedida (sem parametro)"]);
  exit();
}

//checa se foi passado um token nos headers da requisição
if (isset($header['Authorization'])) {
  
  $token = $header['Authorization'];
  $login = 'nome do usuario';
} else {
  
  $token = '';
  $login = '';
}

//checa se o método utilizado é o correto
if ($_SERVER['REQUEST_METHOD'] != 'GET') {
  
  echo json_encode($array = ["msg" => "Requisicao mal sucedida (voce deve utilizar o metodo GET)"]);
  exit();
}

$fahrenheit = $funcoes->celsiusFahrenheit($celsius);

  $consulta = $db->query("SELECT * FROM users where token like '%{$token}%'")->fetchALL(PDO::FETCH_ASSOC);

//checa se existe o token no banco de dados
if (isset($consulta[0]['token'])) {

  //compara se o token no banco de dados é igual ao token especificado pelo usuário
  if (strtoupper($consulta[0]['token']) == strtoupper($token)) { 
    
    $array = [
      
      "usuario" => $consulta[0]['username'],
      "celsius" => $celsius,
      "fahrenheit" => number_format((float)$fahrenheit, 1, '.', ''),
      "criadorAPI" => "Gabriel Milanez Rodrigues - 3021101893"
      
    ];
      
    echo json_encode($array);
    
  } 
} else {
  
  echo json_encode($array = ["msg" => "Token invalido, sem permissao."]);
  exit();
}