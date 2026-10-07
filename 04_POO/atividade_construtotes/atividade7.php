<?php

class ContaBancaria {

    public $titular;
    public $saldo;

     public function __construct ($titular, $saldo = 0){
        $this->titular = $titular;
        $this->saldo = $saldo;
        echo "Conta criada! <br>";
        echo "Titular da conta: ". $this->titular. "<br>";
    }

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

    function exibir (){
        echo "Titular da conta: ". $this->titular. "<br>";
        echo "Saldo Atual da Conta: ". $this->saldo;
    }
}

$conta1 = new ContaBancaria ("Tobias");
echo "<br>";
$conta1->depositar(150);
echo "<br>";
$conta1->sacar(65);
echo "<br>";
$conta1->exibir ();
echo "<hr>";
$conta2 = new ContaBancaria ("Lucas");
echo "<br>";
$conta2->depositar(360);
echo "<br>";
$conta2->sacar(245);
echo "<br>";
$conta2->exibir ();
?>