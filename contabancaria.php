<?php

declare(strict_types=1);

class ContaBancaria
{
    // public(aberto) - private(fechado) - protected(acessar por exceção. É semelhante ao private)
    /* @var string */ 
    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;  
        
    public function __construct( 
        string $banco, 
        string $nomeTitular, 
        string $numeroAgencia, 
        string $numeroConta, 
        float $saldo)
    {
        $this->banco = $banco;  $this->nomeTitular = $nomeTitular; $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;  $this->saldo = $saldo;        
        // echo 'Método Construtor:'.'<br>';
        // echo $nomeTitular.'<br>'; 
    }

    public function obterSaldo(): string
    {
        return 'Seu saldo atual é: R$ ' . $this->saldo;
    }

    public function depositar(float $valor): string
    {
        $this->saldo += $valor;
        return 'Depósito de R$ ' . $valor . ' realizado!';
    }

    public function sacar(float $valor): string
    {
        $this->saldo -= $valor;
        return 'Saque de R$ ' . $valor . ' realizado!';        
    }
}

$conta = new ContaBancaria(
    'Banco do Brasil', // banco
    'Nilo Guimarães', // nomeTitular
    '8244', // numeroAgencia
    '57354-10', // numeroConta
    0.00 // saldo
);

$conta2 = new ContaBancaria(
    'Caixa Econômica', // banco
    'Joana Silva', // nomeTitular
    '4324', // numeroAgencia
    '432345-10', // numeroConta
    300.00 // saldo
);

var_dump($conta); var_dump($conta2);

exit(); // termina o programa

echo $conta->obterSaldo(); // 0
// $conta->depositar(300); echo '<br>'.$conta->obterSaldo(); // 300
echo '<br>'.$conta->depositar(300); echo '<br>'.$conta->obterSaldo(); // 300
echo '<br>'.$conta->sacar(150); echo '<br>'.$conta->obterSaldo(); // 150
exit(); // termina o programa

var_dump($conta);
// echo '<br>'.$conta->banco; echo '<br>'.$conta->nomeTitular; echo '<br>'.$conta->numeroAgencia; 
// echo '<br>'.$conta->numeroConta; echo '<br>'.$conta->saldo;
var_dump($conta->obterSaldo()); echo '<br>'.$conta->obterSaldo();
// echo $conta->$saldo;

var_dump($conta->nomeTitular);
var_dump($conta->numeroAgencia);

$conta->numeroAgencia ='12345'; var_dump($conta->numeroAgencia);

echo $conta->obterSaldo();

var_dump($conta->saldo); $conta->saldo = 0.00; var_dump($conta->saldo);

echo '<br>' . 'O Saldo Atual é: ' . $conta->obterSaldo();
