<?php

class Pedido {

    private $cliente;
    private $valorItens;

    public function __construct($cliente) {
        $this->cliente = $cliente;
        $this->valorItens = 0;
        echo "Novo Pedido! <br>";
        echo "Cliente: {$this->cliente}<br>";
    }

    public function adicionarItem ($valor, $nome) {
        $this->valorItens += $valor;
        echo "O Produto {$nome} foi adicionado <br>";
    }

    public function getTotal() {
        return $this->valorItens;
    }

    public function exibirPedido() {
        echo "Cliente: {$this->cliente}<br>";
        echo "Total dos itens: R$ $this->valorItens <br>";
    }
}

class NotaFiscal {

    private $totalPedido;
    private $imposto;
    private $totalPagar;

    public function __construct($totalPedido, $imposto = 10) {
        $this->totalPedido = $totalPedido;
        $this->imposto = $imposto;
        $this->calcularTotal();
    }

    public function calcularTotal() {
        $valorImposto = $this->totalPedido * ($this->imposto / 100);
        $this->totalPagar = $this->totalPedido + $valorImposto;
    }

    public function exibirNota() {
        $subtotal = $this->totalPedido;
        $total = $this->totalPagar;

        echo "Subtotal: R$ {$subtotal}<br>";
        echo "Imposto {$this->imposto}%<br>";
        echo "Total a pagar: R$ {$total}<br>";
    }
}

$pedido = new Pedido("Tobias");
$pedido->adicionarItem(90, "Camisa");
$pedido->adicionarItem(130, "Tênis");
$pedido->exibirPedido();

$nota = new NotaFiscal($pedido->getTotal(), 10);
$nota->exibirNota();

?>