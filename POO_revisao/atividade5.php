<?php

class Turma {
    private $nome;
    private $professor;
    private $qtd_alunos ;
    private $capacidade ;

    public function __construct ($nome, $professor, $capacidade = 0, $qtd_alunos = 0){
        $this->nome = $nome;
        $this->professor= $professor;
        $this->capacidade = $capacidade;
        $this->qtd_alunos = $qtd_alunos;
    }

    public function aumentarAluno (){
        if ($this->qtd_alunos < $this->capacidade){
            $this->qtd_alunos += 1 ;
            echo "Entrou mais um aluno na sala <br>";
        }
        else{
            echo "A capacidade da sala já está cheia <br>";
        }
    }

    public function diminuirAluno (){
        if ($this->qtd_alunos > 0){
            $this->qtd_alunos -= 1 ;
            echo "Saiu um aluno na sala <br>";
        }
        else{
            echo "A sala já está vazia <br>";
        }
    }

    public function exibir (){
        echo "Nome da Turma: {$this->nome} <br>";
        echo "Professor da Turma: {$this->professor} <br>";
        echo "Capacidade máxima: {$this->capacidade} <br>";
        echo "Quantidade de alunos : {$this->qtd_alunos} <br>";
        echo "<hr>";
    }
}

$turma1 = new Turma ("2 ano A", "Leonardo", 32, 10);
$turma1-> exibir ();
$turma1-> aumentarAluno();
$turma1-> aumentarAluno();
$turma1-> diminuirAluno();
$turma1-> exibir ();

echo "<br><br>";

$turma2 = new Turma ("2 ano B", "Samuel", 32, 20);
$turma2-> exibir ();
$turma2-> aumentarAluno();
$turma2-> diminuirAluno();
$turma2-> diminuirAluno();
$turma2-> exibir ();
?>