<?php

class Carro {

    private $modelo;
    private $velocidade;

     public function __construct ($modelo){
        $this->modelo = $modelo;
        $this->velocidade = 0 ;
     }

     public function acelerar (){
        $this->velocidade += 10 ;
        echo "O Carro acelerou! <br>";
         return $this->velocidade;
     }

     public function freiar (){
        $this->velocidade -= 10 ;
        echo "O Carro freiou! <br>";
        return $this->velocidade;
     }

     public function verVelocidade (){
        echo "A velocidade do carro é:  {$this->velocidade} KM/H ";
     }
}

$carro1 = new Carro ("Lambo");
$carro1-> acelerar();
$carro1-> acelerar();
$carro1-> acelerar();
$carro1-> acelerar();
$carro1-> acelerar();
$carro1-> acelerar();
$carro1-> freiar();
$carro1-> verVelocidade();
?>