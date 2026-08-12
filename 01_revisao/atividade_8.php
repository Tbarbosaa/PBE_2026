<?php

$num1 = 0;
$num2 = 0;
$operacao = "/";

switch ($operacao){

    case "+":
        echo "Resultado: ". ($num1 + $num2) ;
        break;
    
      case "-":
        echo "Resultado: ". ($num1 - $num2) ;
        break; 
        
      case "*":
        echo "Resultado: ". ($num1 * $num2) ;
        break; 
        
      case "/":

        if ($num1 == 0 or $num2 == 0){
            echo "ERRO!";
        }
        break ;
        echo "Resultado: ". ($num1 / $num2) ;
        break; 
  

    default:
        echo "Operação inválida";
        break;
}

?>