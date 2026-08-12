<?php

$idade = 12;
$acompanhado = TRUE;

if ($idade >= 18){
    echo "Entrada liberada";
}

elseif ($idade > 14 && $idade < 17){
    if ($acompanhado == TRUE){
        echo "Entrada liberada";
    }
    else {
        echo "Entrada bloqueada";
    }
}

else {
      echo "Entrada bloqueada";
}


?>