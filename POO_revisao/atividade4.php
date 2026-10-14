<?php

class Paciente {

    private $nome ; 
    private $idade ;
    private $altura ;
    private $peso;

    public function __construct ($nome, $idade, $altura, $peso){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->peso = $peso;
    }

    public function calcIMC ($altura, $peso){
        $imc = ($altura**2) / $peso;
        return $imc;
    }

    public function classIMC ($imc){
        if ($imc > 30){
            echo "Obeso";
        }
        elseif ($imc >= 25 && $imc <= 29.9){
            echo "Sobrepeso";
        }
        elseif ($imc >= 18.5 $$ $imc <= 24.9){
            echo "Adequado";
        }
        else{
            echo "Abaixo do Peso";
        }
    }

    public function exibir (){
        echo "Nome do Paciente: {$this->nome} <br>";
        echo "Idade: {$this->idade}<br>";
        echo "Altura (cm): {$this->altura} <br>";
        echo "Peso: {$this->peso}<br>";
    }
}

$paciente1 = new Paciente ("Tobias", 17, 180, 55);
$paciente1-> exibir ();
$imc = $paciente1-> calcIMC(180, 55);
$paciente1-> classIMC ($imc);

?>