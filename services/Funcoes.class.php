<?php

/** 
* <b>Funcoes:</b>
* Classe feita para auxiliar no uso do <b>conversor.php</b>
*
* @copyright (c) 2023 - Gabriel Milanez Rodrigues
*/


class Funcoes
  {
    
    /**
    * Gera um token de 40 caracteres
    * @param string $login - nome de usuario
    * @param string $senha - senha de usuario
    * @return string - token
    */  
    function getToken(string $login, string $senha)
    {

      $token = random_bytes(40);
      return (string)bin2hex($token);
      
    }

    /**
    * Realiza a conversão de celsius para fahrenheit
    * @param float $celsius - temperatura em celsius
    * @return float - temperatura em fahrenheit
    */  
    function celsiusFahrenheit(float $celsius)
    {
    
      return ($celsius * 1.8) + 32; 
  
    }

  }