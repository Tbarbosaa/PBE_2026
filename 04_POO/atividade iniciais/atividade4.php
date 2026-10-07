<?php

class Pedido {

    public $num;
    public $cliente;
    public $valor;
    public $status;


    function adItem ($valor_item, $nome_item){
        if ($this -> status == "Aguardando"){
            $this->valor = $this->valor + $valor_item;
            echo "O item adicionado foi: ". $nome_item. "<br>";
            echo  "O Valor do pedido foi para :". $this->valor. "<br>";
        }
        else{
            echo "Não Podemos adicionar nada no pedido". "<br>";
        }

    }

    function cancelar (){
        $this->status = "Cancelado";
        echo " O pedido foi cancelado <br>";
    }

    function finalizar (){
        $this->status = "Finalizado";
        echo "O pedido foi finalizado <br>";
    }

    function exibir (){
        echo "Número do pedido: ". $this->num. "<br>";
        echo "Cliente: ". $this->cliente. "<br>";
        echo "Status do pedido: ". $this->status. "<br>"; 
        echo "Valor do pedido: ". $this->valor. "<br>";
    }
}

$pedido1 = new Pedido ();

    $pedido1->num = "123";
    $pedido1->cliente = "Tobias";
    $pedido1->valor = 150;
    $pedido1->status = "Aguardando";
    
    $pedido1-> exibir();
    $pedido1-> adItem (75, "camisa");
    $pedido1-> cancelar();
    echo "<br><br>";
    $pedido1-> exibir();

echo "<br><br>";
$pedido2 = new Pedido ();

    $pedido2->num = "456";
    $pedido2->cliente = "Lucas";
    $pedido2->valor = 310;
    $pedido2->status = "Aguardando";
    
    $pedido2-> exibir();
    $pedido2-> adItem (105, "Tênis");
    $pedido2-> finalizar();
    echo "<br><br>";
    $pedido2-> exibir();
?>