<?php

class ContaBancaria {

    public $titular;
    public $saldo;
    public $numero;
    public $tipo;


    function depositar ($valor){
        $this->saldo = $this->saldo + $valor;
        echo "O valor depositado foi R$: ". $valor. "<br>";
        echo "Saldo atual R$:".  $this->saldo . "<br>";
    }

    function sacar ($valor){
        $this->saldo = $this->saldo - $valor;
        echo "O valor sacado foi R$: ". $valor. "<br>";
        echo "Saldo atual R$:". $this->saldo. "<br>";
    }

    function consultarSaldo (){
        echo "Saldo atual R$:".  $this->saldo. "<br>";
    }
}


$conta1 = new ContaBancaria ();

    $conta1->titular = "Tobias Barbosa Moreira";
    $conta1->saldo = 4000;
    $conta1->numero = 1;
    $conta1->tipo = "Digital";

    echo "Titular: ". $conta1->titular. "<br>";
    echo "Saldo: ". $conta1->saldo. "<br>";
    echo "Numero: ". $conta1->numero. "<br>";
    echo "Tipo: ". $conta1->tipo. "<br>";

    $conta1-> depositar (500);
    echo "<br>";
    $conta1-> sacar (700);
    echo "<br>";
    $conta1-> consultarSaldo ();
    echo "<br>";

    echo "<br>"."<br>";

$conta2 = new ContaBancaria ();

    $conta2->titular = "Lucas Pietro Alves da Costa";
    $conta2->saldo = 10000;
    $conta2->numero = 2;
    $conta2->tipo = "Corrente";

    echo "Titular: ". $conta2->titular. "<br>";
    echo "Saldo: ". $conta2->saldo. "<br>";
    echo "Numero: ". $conta2->numero. "<br>";
    echo "Tipo: ". $conta2->tipo. "<br>";

    $conta2-> depositar (900);
    echo "<br>";
    $conta2-> sacar (2500);
    echo "<br>";
    $conta2-> consultarSaldo ();
    echo "<br>";

    echo "<br>"."<br>";
?>