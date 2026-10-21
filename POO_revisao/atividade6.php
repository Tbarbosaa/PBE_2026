<?php

class Pessoa {

    private $nome;
    private $idade;
    private $cidade;
    private $telefone ;

    public function __construct ($nome, $idade, $cidade, $telefone){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cidade = $cidade;
        $this->telefone = $telefone;
    }

    public function definirEndereco ($cidade){
        $this->cidade = $cidade;
    }

    public function definirTelefone ($telefone){
        $this->telefone = $telefone;
    }

    public function aniversario (){
        $this->idade += 1 ;
        echo "Feliz Aniversário !! <br>";
    }

    public function exibir (){
        echo "Nome da Pessoa: {$this->nome} <br>";
        echo "Idade da Pessoa: {$this->idade} <br>";
        echo "Cidade da Pessoa: {$this->cidade} <br>";
        echo "Telefone da Pessoa: {$this->telefone} <br>";
    }
}

$pessoa1= new Pessoa ("Tobias", 17, "Tambaú", "199909090");
$pessoa1-> exibir ();
$pessoa1->aniversario();
$pessoa1-> definirEndereco ("Ribeirão");
$pessoa1-> definirTelefone ("19967676");
echo "<hr>";

$pessoa2= new Pessoa ("Lucas", 17, "Tambaú", "199961870");
$pessoa2-> exibir ();
$pessoa2-> definirEndereco ("Palmeiras");
$pessoa2-> definirTelefone ("19091676767");
$pessoa2->aniversario();
?>