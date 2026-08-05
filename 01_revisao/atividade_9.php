<?php

$idade = 16;
$acompanhado = TRUE;

if ($idade >= 18){
    echo "Entrada liberada";
}

elseif ($idade > 14 or $idade < 17){
    if ($acompanhado == TRUE){
        echo "Entrada liberada";
    }
    else {
        echo "Entrada bloqueada";
    }
}

elseif ($idade < 14){
      echo "Entrada bloqueada";
}


?>