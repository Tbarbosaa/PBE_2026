<?php


function analisarNotas ($nota1,$nota2,$nota3){
    $media = ($nota1 + $nota2 + $nota3)/ 3;
    $notas = [$nota1,$nota2,$nota3];
    $maior = $notas [0];
    $menor = $notas [0];

    foreach ($notas as $nota){
        if ($nota > $maior){
            $maior = $nota;
        }
        else{
            $menor = $nota;
        }
    }

    if ($media >= 7){
        $situacao = "Aprovado";
    }
    elseif($media >= 5 && $media < 7){
        $situacao = "Recuperção";
    }
    else {
        $situacao = "Reprovado";
    }

    return [
        "Primeira nota" => $nota1,
        "Segunda nota" => $nota2,
        "Terceira nota" => $nota3,
        "Média" => $media,
        "Maior nota" => $maior,
        "Menor nota" => $menor,
        "Situação" => $situacao
    ];
}

$nota1 = 7;
$nota2 = 5;
$nota3 = 8;

$resultado = analisarNotas ($nota1, $nota2, $nota3);
echo "A primeira nota é : ". $resultado ["Primeira nota"]. "<br>";
echo "A segunda nota é : ". $resultado ["Segunda nota"]. "<br>";
echo "A terceira nota é : ". $resultado ["Terceira nota"]. "<br>";
echo "A média foi: ". $resultado ["Média"]. "<br>";
echo "A maior nota foi: ". $resultado ["Maior nota"]."<br>";
echo "A menor nota foi: ". $resultado ["Menor nota"]."<br>";
echo "A situação do aluno é: ". $resultado ["Situação"]. "<br>";

?>