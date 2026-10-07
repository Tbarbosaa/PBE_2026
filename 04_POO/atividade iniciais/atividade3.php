<?php

class Aula {

    public $disciplina;
    public $professor;
    public $duracao;
    public $num_sala;
    public $bloco;

    function Exibir (){
    echo "Disciplina: ". $this->disciplina. "<br>";
    echo "Professor: ". $this->professor. "<br>";
    echo "Duração: ". $this->duracao."<br>";
    echo "Número da Sala: ". $this->num_sala."<br>";
    echo "Bloco: ". $this->bloco . "<br>";
    }

    function AlterarProfessor ($novo_professor){
        $this->professor = $novo_professor;
        echo "O Novo Professor é: ". $this->professor. "<br>";
    }

    function Alterarlocal ($novo_num_sala, $novo_bloco) {
        $this->num_sala = $novo_num_sala;
        $this->bloco = $novo_bloco;
        echo "O Novo local é no bloco: ". $this->bloco. " Na sala de número: ". $this->num_sala. "<br>";
    }
}

$aula1 = new Aula ();

    $aula1->disciplina = "Matemática";
    $aula1->professor = "Ana Paula";
    $aula1->duracao = 100;
    $aula1->num_sala = 12;
    $aula1->bloco = 2;

    $aula1-> Exibir ();
    $aula1-> AlterarProfessor ("Bel");
    $aula1-> Alterarlocal (7, 2);
    echo "<br><br>";
    $aula1-> Exibir ();

    echo "<br><br>";
    echo "<br><br>";
$aula2 = new Aula ();

    $aula2->disciplina = "Programação Back-end";
    $aula2->professor = "Leonardo";
    $aula2->duracao = 300;
    $aula2->num_sala = 2;
    $aula2->bloco = 3;

    $aula2-> Exibir ();
    $aula2-> AlterarProfessor ("Gabriel");
    $aula2-> Alterarlocal (1, 3);
    echo "<br><br>";
    $aula2-> Exibir ();
?>