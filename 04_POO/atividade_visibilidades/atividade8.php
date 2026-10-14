<?php

class Funcionario {
    private $nome;
    private $salario;

    public function __construct($nome, $salario = 1000){
        $this->nome = $nome;
        $this->salario = $salario;
        echo "Novo funcionário! <br> " ;
        echo "Nome do Funcionário: ". $this->nome. "<br>" ;
    }

    public function aumentarSalario ($percentual){
        if ($percentual > 0 && $percentual <=10){
            $total_aumento = $this->salario * ($percentual/100);
            $this->salario = $this->salario + $total_aumento;
            echo "O Aumento do salário foi de : ". $total_aumento. "<br>";
        }
        else{
            echo "Erro! <br> ";
        }
    }

    public function exibir (){
        echo "Nome do Funcionário: ". $this->nome. "<br>" ;
        echo "Sálario : ". $this->salario . "<br> ";
    }
}

$funcionario1 = new Funcionario ("Tobias", 1200);
echo "<br>";
$funcionario1->aumentarSalario (6);
echo "<br>";
$funcionario1->exibir();
echo "<hr>";
$funcionario2 = new Funcionario ("Lucas", 2200);
echo "<br>";
$funcionario2->aumentarSalario (3);
echo "<br>";
$funcionario2->exibir();










?>
