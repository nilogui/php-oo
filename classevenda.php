<?php

class Venda
{
    private $data;
    private $produto;
    private $quantidade;
    private $valorTotal;
            
    public function __construct( $data, $produto, $quantidade, $valorTotal)
    {
        $this->data = $data;  $this->produto = $produto; $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;       
    }

    public function dadosDaVenda()
    {
        echo  '<br>' . 'Dados da Venda:' . '<br>' . 'Data: ' . $this->data . '<br>';
        echo 'Produto: ' . $this->produto . '<br>';
        echo 'Quantidade: ' . $this->quantidade . '<br>';
        echo 'ValorTotal: R$ ' . $this->valorTotal;        
    }
}

$venda1 = new Venda(
    '26/04/2022', // data
    'Carro Esporte', // produto
    '3', // quantidade
    '800.000,00', // valorTotal
);

var_dump($venda1);

$venda1->dadosDaVenda();

exit(); // termina o programa
