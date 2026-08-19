<?php


 
function VerificarMaioridade ($idade){

    if ($idade <18){
        return "Idade: ". $idade." Menor de idade";       
    }
    else {
        return "Idade: ". $idade." Maior de idade";
    }
}

echo VerificarMaioridade (11);
echo "<br>";
echo VerificarMaioridade (33);
echo "<br>";
echo VerificarMaioridade (54);
echo "<br>";


?>