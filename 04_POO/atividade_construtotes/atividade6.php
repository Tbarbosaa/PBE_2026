<?php

class Aluno {

    public $nome;
    public $nota1;
    public $nota2;
    public $media;

    public function __construct ($nome, $nota1, $nota2){
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this-> media = $this->calcularmedia ();
    }

    private function calcularmedia (){
        return ($this->nota1 + $this->nota2)/2;
    }

    public function exibir (){
    echo "Aluno :". $this->nome . "<br>";
    echo "Primeira Nota: ". $this->nota1. "<br>";
    echo " Segunda Nota: ". $this->nota2. "<br>";
    echo "Média do aluno: " . $this->media . "<br>";
    }
}

$aluno1 = new Aluno (" Tobias", 7, 6);
$aluno1-> exibir();
echo "<br><br>";

$aluno2 = new Aluno (" Lucas", 3,9);
$aluno2-> exibir();
?>