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

    public function calcularDesconto (){
        if ($this->qtd > 10){
              return $this->calcularTotal() * 0.10;
        }
        else{
            return 0;
        }
    }

    public function calcularTotalcomDesconto (){
        return $this->calcularTotal() - $this->calcularDesconto();
    }

    public function verificarEstoque () {
        if ($this->qtd <= 5){
            return "O estoque está baixo!";
        }
        else{
            return "O estoque está alto!";
        }
    }
}



?>