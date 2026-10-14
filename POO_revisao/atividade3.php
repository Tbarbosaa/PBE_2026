<?php

class Filme {

    private $titulo ;
    private $genero ;
    private $duracao ;
    private $assistido ;

    public function __construct ($titulo, $genero, $assistido = FALSE, $duracao){
        $this->titulo = $titulo ;
        $this->genero = $genero ;
        $this->duracao = $duracao;
        $this->assistido = $assistido;
    }

    public function marcarAssitido (){
        $assistido = TRUE;
        return $assistido;

    }

    public function exibir (){
        echo "Nome do filme: {$this->titulo} <br>";
        echo "Gênero: {$this->genero} <br>";
        echo "Duração: {$this->duracao} min <br>";
    }

    public function foiAssistido ($assistido){
        if ($assistido == TRUE){
            echo "Assistido";
        }
        else {
            echo "Não assistido";
        }
    }
}

$filme1 = new Filme ("Tokyo Drify", "Corrida", TRUE, 140);
$filme1-> exibir();
$filme1->foiAssistido (TRUE);
echo "<hr>";
$filme2 = new Filme ("Cidade de Deus", "Ação", False, 170);
$filme2-> exibir();
$filme2->foiAssistido (FALSE);


?>