<?php

include_once 'services/Funcoes.class.php'; 

header("Content-Type: application/json; charset=utf-8");

$funcoes = new Funcoes();

$db = new PDO('sqlite:uninove.db');
// CRIAÇÃO DA TABELA echo $db->exec("CREATE TABLE users(username TEXT, senha TEXT, token TEXT)");
// INSERT NA TABELA echo $db->exec("INSERT INTO users VALUES(\"usuario\", \"senha\", \"token\")");
// APAGAR TUDO DA TABELA echo $db->exec("DELETE FROM users");

//checa se foi passado login e senha no body da requisição
if (isset($_POST['login']) and isset($_POST['senha'])) {

  $consulta = $db->query("SELECT * FROM users where username='{$_POST["login"]}'")->fetchALL(PDO::FETCH_ASSOC);

  //checa se não existe nenhum usuario com o login especificado
  if (!(isset($consulta[0]['senha']))) {

      $login = $_POST["login"];
      $senha = $_POST["senha"];
      $token = $funcoes->getToken($login, $senha);

      $array = [
        "msg" => "Voce acabou de criar sua conta, bem vindo(a): {$login}",
        "usuario" => $login,
        "token_type" => "Bearer",
        "jwt_token" => "Bearer " . $token,
      ];

      echo json_encode($array);

      echo PHP_EOL . PHP_EOL;
    
      $db->exec("INSERT INTO users VALUES('{$login}', '{$senha}', 'Bearer {$token}')");
      exit();
  } 

  //checa se a senha especificada é a mesma do usuario cadastrado
  if ($consulta[0]['senha'] == $_POST['senha']) { 

    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $token = $consulta[0]['token'];

    $array = [
      "msg" => "Bem vindo(a) de volta Sr(a): {$login}",
      "usuario" => $login,
      "token_type" => "Bearer",
      "jwt_token" => $token,
    ];

    echo json_encode($array);
    exit();

  } else {

    echo json_encode($array = ["msg" => "Usuario ja existente, senha errada"]);
    exit;
  }

} else {

  echo json_encode($array = ["msg" => "Requisicao mal sucedida"]);
  exit;

}
