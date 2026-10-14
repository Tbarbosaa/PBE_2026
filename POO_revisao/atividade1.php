<?php

class  Aluno {

    private $nome;
    private $nota;

    public function __construct ($nome , $nota = 0){

        $this->nome = $nome;
        $this->nota = $nota;
    }


    public function getStatus(){
        if ($nota >= 6){
            return "Aprovado";
        }
        else {
            return "Reprovado";
        }
    }
}

$aluno1 = new Aluno ("Tobias", 6.7);
    echo "<pre>";
    echo print_r ($aluno1);
    echo "<pre>";

$aluno2 = new Aluno ("Lucas", 7.6);
    echo "<pre>";
    echo print_r ($aluno1);
    echo "<pre>";
?>