<?php

class Livro {

    public $titulo;
    public $autor;
    public $paginas;
    public $ano_publicacao;

    public function __construct ($titulo, $autor, $paginas, $ano_publicacao = "Desconhecido"){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->ano_publicacao = $ano_publicacao;
    }

    public function exibir (){
        echo " Título: ". $this->titulo. " Autor: ". $this->autor. " Paginas: ". $this->paginas. " Publicado em: ". $this->ano_publicacao;
    }
}

$livro1 = new Livro ("O Cortiço", "Eu", 123, 1921);
$livro1-> exibir();
echo "<br><br>";

$livro2 = new Livro ("Biografia", "Eu", 1000);
$livro2-> exibir();
echo "<br><br>";
?>