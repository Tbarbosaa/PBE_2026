<?php

$num1 = 75;
$num2 = 25;
$operacao = "-";

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
        echo "Resultado: ". ($num1 / $num2) ;
        break; 
        
        if ($num1 == 0 or $num2 == 0){
            echo "ERRO!";
        }
        break ;

    default:
        echo "Operação inválida";
        break;
}

?>