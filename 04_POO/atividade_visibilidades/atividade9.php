<?php

class Produto {

    private $nome;
    private $preco;
    private $estoque;

    public function __construct($nome, $preco, $estoque){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
        echo "Novo produto!";
        echo "Nome do Produto: ". $this->nome. "<br>" ;
    }

    public function vender ($quantidade){
        if ($quantidade <= $estoque){
            $this->estoque = $this->estoque - $quantidade;
        }
        else{
            echo "Estoque Insuficiente";
        }
    }

    public function ajustarPreco ($preco){
            $total_aumento = $this->preco * ($percentual/100);
            $this->salario = $this->preco + $total_aumento;
            echo "O Aumento do Preço foi de : ". $total_aumento. "<br>";
    }
}



?>