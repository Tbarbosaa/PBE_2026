<?php

class Produto {
    private $nome;
    private $qtd;
    private $preco;

    public function __construct ($nome, $qtd, $preco){
        $this->nome =  $nome;
        $this->qtd = $qtd;
        $this-> preco = $preco;
    }

    public function getNome (){
        return $this->nome;
    }

    public function getQtd (){
        return $this->qtd;
    }

    public function getPreco(){
        return $this->preco ;
    }

    public function calcularTotal (){
        return $this->preco * $this->qtd;
    }
}



?>