<?php

class Funcionario {
    private $nome;
    private $cargo;
    private $horas_extras;
    private $vale_transporte;
    private $salario_base;

    public function __construct($nome,  $cargo,  $horas_extras,  $valeTransporte) {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->horasExtras = $horas_extras;
        $this->valeTransporte = $vale_transporte;
        $this->salarioBase = $this->definirSalarioBase();
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function getHorasExtras(){
        return $this->horasExtras;
    }

    public function getValeTransporte() {
        return $this->valeTransporte;
    }

    public function getSalarioBase(){
        return $this->salarioBase;
    }

    public function definirSalarioBase(){
        if ($this->cargo === "auxiliar") {
            return 2200.00;
        } 
        elseif ($this->cargo === "tecnico") {
            return 3520.00;
        } 
        elseif ($this->cargo === "analista") {
            return 5500.00;
        }
        else{
            return 0;
        }
    }

    public function calcularHorasExtras() {
        $valorHora = $this->salario_base / 220;
        return $this->horas_extras * ($valorHora * 1.5);
    }

    public function calcularSalarioBruto() {
        return $this->salario_base + $this->calcularHorasExtras();
    }

    public function calcularPercentualINSS() {
        $bruto = $this->calcularSalarioBruto();

        if ($bruto <= 2500.00) {
            return 8;
        } elseif ($bruto <= 5000.00) {
            return 10;
        } else {
            return 12;
        }
    }

    public function calcularINSS() {
        $percentual = $this->calcularPercentualINSS();
        return $this->calcularSalarioBruto() * ($percentual / 100);
    }

    public function calcularValeTransporte() {
        if ($this->vale_transporte === "Sim") {
            return $this->salario_base * 0.06;
        }
        else{
            return 0;
        }
    }

    public function calcularSalarioLiquido()  {
        return $this->calcularSalarioBruto() - $this->calcularINSS() - $this->calcularValeTransporte();
    }
}