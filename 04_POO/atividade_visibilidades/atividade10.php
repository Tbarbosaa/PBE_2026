<?php

class Carro {

    private $modelo;
    private $consumo;
    private $tanque;

    public function __construct ($modelo, $consumo = 10, $tanque = 0){
        $this->modelo = $modelo;
        $this->consumo =$consumo;
        $this->tanque = $tanque;
        echo "Novo carro! <br>";
        echo "Nome do carro: ". $this->modelo. "<br>" ;
    }

    public function abastecer ($litros){
        if ($litros > 0){
            $this->tanque = $this->tanque + $litros;
            echo "Foram abastecidos ". $litros . "litros";
        }
        else{
            echo "Erro!";
        }
    }

    public function dirigir ($km){
        if ($km > 0){
            $consumo_litros = $km / $this->consumo;
            $this->tanque = $this->tanque - $consumo_litros;
            echo "Foram dirigidos : ". $km . " quilômetros <br>";
            echo "Foram consumidos ". $consumo_litros . " litros <br>";
        }
        else{
            echo "Erro!";
        }
    }

    public function exibir (){
        echo "Modelo do Carro: ". $this->modelo . "<br>" ;
        echo "Consumo em km/L : ". $this->consumo . "<br>";
        echo "Tanque de Combustível: ". $this->tanque. " litros <br>";
    }
}

$carro1 = new Carro ("Jetta", 12, 30);
echo "<br>";
$carro1-> exibir ();
echo "<br>";
$carro1-> abastecer (30);
echo "<br>";
$carro1-> dirigir (48);
echo "<br>";
$carro1-> exibir ();

echo "<hr>";

$carro2 = new Carro ("Mustang", 8, 35);
echo "<br>";
$carro2-> exibir ();
echo "<br>";
$carro2-> abastecer (20);
echo "<br>";
$carro2-> dirigir (96);
echo "<br>";
$carro2-> exibir ();

?>