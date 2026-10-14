<?php

class Produto {

    private $nome;
    private $preco;
    private $estoque;

    public function __construct($nome, $preco, $estoque){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
        echo "Novo produto! <br>";
        echo "Nome do Produto: ". $this->nome. "<br>" ;
    }

    public function vender ($quantidade, $nome, $estoque){
        if ($quantidade <= $estoque){
            $this->estoque = $this->estoque - $quantidade;
            echo "Foram vendidas ". $quantidade. " unidades, do produto: ". $nome;
        }
        else{
            echo "Estoque Insuficiente";
        }
    }

    public function ajustarPreco ($preco, $percentual){
            $total_aumento = $this->preco * ($percentual/100);
            $this->preco = $this->preco + $total_aumento;
            echo "O Aumento do Preço foi de : ". $total_aumento. "<br>";
    }

    public function exibir (){
        echo "Nome do Produto: ". $this->nome. "<br>" ;
        echo "Preço do Produto: ". $this->preco. "<br>";
        echo "Quantidade no estoque:".  $this->estoque .  "<br>";
    }
}

$produto1 = new Produto ("Monitor", 250, 9);
echo "<br>";
$produto1-> vender (4, "Monitor", 9);
echo "<br>";
$produto1-> ajustarPreco (250, 20);
echo "<br>";
$produto1-> exibir ();

echo "<hr>;";

$produto2 = new Produto ("SSD", 350, 13);
echo "<br>";
$produto2-> vender (2, "SSD", 13);
echo "<br>";
$produto2-> ajustarPreco (300, 10);
echo "<br>";
$produto2-> exibir ();
echo "<hr>";
?>