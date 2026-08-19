<?php

$nota1 = 3;
$frequencia1 =88;
$nome1 = "Tobias";

if ($frequencia1 < 75){
    echo "O Aluno ". $nome1." está reprovado por falta, sua frênquencia final foi de: ". $frequencia1;
}

else {

    if ($nota1 >= 9){
        echo "O Aluno ". $nome1." está aprovado, sua nota final foi de: ". $nota1;
    }

    elseif ($nota1 > 5 && $nota1 <= 6.9){
        echo "O Aluno ". $nome1." está de recuperação, sua nota final foi de: ". $nota1;
    }

    else{
        echo "O Aluno ". $nome1." está reprovado, sua nota final foi de: ". $nota1;
    }
}


$nota2 = 8;
$frequencia2 =63;
$nome2 = "Lucas";
echo "<br>";

if ($frequencia2 < 75){
    echo "O Aluno ". $nome2." está reprovado por falta, sua frênquencia final foi de: ". $frequencia2;
}

else {

    if ($nota2 >= 9){
        echo "O Aluno ". $nome2." está aprovado, sua nota final foi de: ". $nota2;
    }

    elseif ($nota2 > 5 && $nota2 <= 6.9){
        echo "O Aluno ". $nome2." está de recuperação, sua nota final foi de: ". $nota2;
    }

    else{
        echo "O Aluno ". $nome2." está reprovado, sua nota final foi de: ". $nota2;
    }
}


$nota3 = 6.7;
$frequencia3 =83;
$nome3 = "Enzo";
echo "<br>";

if ($frequencia3 < 75){
    echo "O Aluno ". $nome3." está reprovado por falta, sua frênquencia final foi de: ". $frequencia3;
    echo "<br>";
}

else {

    if ($nota3 >= 9){
        echo "O Aluno ". $nome3." está aprovado, sua nota final foi de: ". $nota3;
    }

    elseif ($nota3 > 5 && $nota3 <= 6.9){
        echo "O Aluno ". $nome3." está de recuperação, sua nota final foi de: ". $nota3;
    }

    else{
        echo "O Aluno ". $nome3." está reprovado, sua nota final foi de: ". $nota3;
    }
}

?>