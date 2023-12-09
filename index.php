<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentação</title>
</head>
<body>
  <h1 class="titulo">Documentação da API de conversão</h1>
  <h2 class="subtitulo">Requisições e métodos</h2>
  <h2 class="url-base">URL BASE: apiconversao.gabrielmilanez.repl.co (OU) apiconversao--gabrielmilanez.repl.co/</h2>

  <table class="requisicoes">
    
    <div class="login">
      <tr>
        <button class="btn metodo-post">POST</button>
        <strong class="link">
          ENDPOINT: /login.php
        </strong>
      
        <p>
          Exemplo de retorno:
        </p>
        <img class="exemplo-utilizacao" src="login.png" alt="Exemplo de utilização do login">
        
        <p>
          Deve ser informado dentro de "Body" o valor de usuário e senha, conforme o exemplo:
        </p>
        <img class="como-utilizar" src="como-utilizar-login.png" alt="Exemplo de como utilizar o login">
      </tr>      
    </div>
  
    <div class="conversor">
      <tr>
        <button class="btn metodo-get">GET</button>
        <strong class="link">
          ENDPOINT: /conversor.php?celsius={parâmetro}
        </strong>
        
        <p>
          Exemplo de retorno:
        </p>
        <img class="exemplo-utilizacao" src="conversor.png" alt="Exemplo de utilização do conversor">
  
        <p>
          Deve ser informado a key dentro de "Headers" conforme o exemplo:
        </p>
        <img class="como-utilizar" src="como-utilizar-conversor-1.png" alt="Exemplo de como utilizar o conversor (parte 1/2)">
        <p>
          Deve ser informado o valor em celsius como um parâmentro dentro da url, ou dentro de Params conforme o exemplo:
        </p>
        <img class="como-utilizar" src="como-utilizar-conversor-2.png" alt="Exemplo de como utilizar o conversor (parte 2/2)">
      </tr>
    </div> 
    
    <div class="consulta">
      <tr>
        <button class="btn metodo-get">GET</button>
        <strong class="link">
          
          ENDPOINT: /consultar_usuarios.php
        </strong>
        <p>
          Não é preciso nenhum parâmetro dentro de "Headers" ou "Body" para utilização desta requisição, criada apenas para fins demonstrativos e acadêmicos.
        </p>
        <p>
          Exemplo de retorno:
        </p>
        <img class="exemplo-utilizacao-consulta" src="consulta.png" alt="Exemplo de utilização da consulta">
        <a class="btn testar" href="https://replit.com/@GABRIELMILANEZ/execucaoapi">
          <button class="btn btn secondary testar-botao" class=>
            Clique aqui para testar as requisições!
          </button>
        </a>
      </tr>
    </div>

  </table>
  

  
</body>
<style>

  .metodo-get{
    background-color: #64d592;
    border-radius: 30px;
  }
  
  .metodo-post{
    background-color: #f8db75;
    border-radius: 30px;
  }

  .exemplo-utilizacao {
    width: 100%;
    height: 300px;
    padding-top: 10px;
    padding-bottom: 10px;
  }
  
  .exemplo-utilizacao-consulta {
    width: 100%;
    height: 400px;
    padding-top: 10px;
    padding-bottom: 5%;
    border-bottom: solid #000 5px;
  }

  .como-utilizar {
    width: 100%;
    height: 300px;
    padding-top: 10px;
    padding-bottom: 10px;
  }

  body {
    align-items: center;
    display: flex;
    flex-direction: column;
  }

  .url-base {
    padding-bottom: 20px;
    font-weight: 800;
  }

  .login {
    justify-content: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    border-top: solid #000 5px;
    margin-top: 5%;
  }

  .conversor {
    justify-content: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    border-top: solid #000 5px;
    margin-top: 10%;
  }

  .consulta {
    justify-content: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    border-top: solid #000 5px;
    margin-top: 10%;
  }

  .metodo-post {
    font-size: 40px;
    margin-bottom: 10px;
    margin-top: 30px;
    width:70%;
    border: solid #000 2px;
  }

  .metodo-get {
    font-size: 40px;
    margin-bottom: 10px;
    margin-top: 30px;
    width:70%;
    border: solid #000 2px;
  }

  .link {
    font-size: 20px;
    padding-bottom: 20px;
    display: flex;
    justify-content:center;
    width: 100%;
    height: 100%;
    font-weight: 800;
  }

  *{
    font-family: 'Montserrat';
    width: 100%;
    height: 100%;
    font-weight: 500;
  }

  p {
    font-size: 17px;
    width: 100%;
  }

  h1 {
    display: flex;
    justify-content: center;
  }
  
  h2 {
    display: flex;
    justify-content: center;
  }

  .testar {
    margin-top: 10%;
    display: flex;
    align-content: center;
    justify-content: center;
    width: 70%;
    padding-bottom: 5%;
    text-decoration: none;
  }
  
  .testar-botao {
    font-size: 20px;
    border-radius: 20px;
    padding: 10px 10px 10px 10px;
    background-color: #bf6034;
    font-weight: 600;
  }
  
</style>
</html>