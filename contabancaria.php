<?php

class ContaBancaria
{
    // public(aberto) - private(fechado) - protected(acessar por exceção. É semelhante ao private)
    public $banco;
    public $nomeTitular = 'Nilo Guimarães';
    public $numeroAgencia = '3467';
    public $numeroConta;
    public $saldo = 1000.00;   
}

$conta = new ContaBancaria();

//var_dump($conta);
var_dump($conta->nomeTitular);
var_dump($conta->numeroAgencia);

$conta->numeroAgencia ='12345'; var_dump($conta->numeroAgencia);

var_dump($conta->saldo); $conta->saldo = 0.00; var_dump($conta->saldo);
