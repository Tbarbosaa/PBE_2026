<?php

class Celular {

    public $marca;
    public $modelo;
    public $cor;
    public $bateria;
    public $ligado;

    function ligar (){
        $this->ligado = true;
        echo "O celular Ligou";
    }

    function desligar (){
        $this->ligado = false;
        echo "O celular Desligou";
    }

    function usar ($consumo){
        $this->bateria = $this->bateria - $consumo;
        echo "Consumo de ". $consumo. "% <br>";
        echo "Bateria total de: ". $this->bateria. "%";
    }

     function carregar ($carga){
        $this->bateria = $this->bateria + $carga;
        echo "Carga de ". $carga. "%". "<br>";
        echo "Bateria total de: ". $this->bateria. "%";
    }
}


$celular1 = new Celular ();

    $celular1->marca = "Iphone";
    $celular1->modelo = "Iphone 17 pro max";
    $celular1->cor = "Laranja";
    $celular1->bateria = 77;
    $celular1->ligado = "Sim";
    
    echo "Marca: ". $celular1->marca. "<br>";
    echo "Modelo: ". $celular1->modelo. "<br>";
    echo "Cor: ". $celular1->cor. "<br>";
    echo "Bateria: ". $celular1->bateria. "<br>";
    echo "Ligado: ". $celular1->ligado. "<br>";

    $celular1->ligar ();
    echo "<br>";
    $celular1->desligar();
    echo "<br>";
    $celular1-> usar (50);
    echo "<br>";
    $celular1-> carregar (22);

    echo "<br>"."<br>";

    $celular2 = new Celular ();

    $celular2->marca = "Xiaomi";
    $celular2->modelo = "Poco X6 Pro";
    $celular2->cor = "Preto";
    $celular2->bateria = 35;
    $celular2->ligado = "Sim";
    
    echo "Marca: ". $celular2->marca. "<br>";
    echo "Modelo: ". $celular2->modelo. "<br>";
    echo "Cor: ". $celular2->cor. "<br>";
    echo "Bateria: ". $celular2->bateria. "<br>";
    echo "Ligado: ". $celular2->ligado. "<br>";

    $celular2->ligar ();
    echo "<br>";
    $celular2->desligar();
    echo "<br>";
    $celular2-> usar (16);
    echo "<br>";
    $celular2-> carregar (42);
?>