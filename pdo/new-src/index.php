<?php 
// CRUD (Create, Read, Update and Delete)  https://pt.wikipedia.org/wiki/CRUD

require 'Produto.php';

$produto = new Produto();

switch ($_GET['operacao']) {

    case 'list':
        echo '<h3>Produtos: </h3>'; // var_dump($produto->list());
        foreach ($produto->list() as $value) {
            echo 'Id: ' . $value['id'] . '<br> Descrição: ' . $value['descricao'] . '<hr>';
        }
        break;

    case 'insert':
        $status = $produto->insert('Produto teste do Nilo 01');
        if (!$status) {
            echo 'Não foi possível executar a operação!';
            return false;
        }
        echo 'Registro inserido com sucesso!';
        break;

    case 'update':
        $status = $produto->update('Produto Alt - Nilo', $_GET['id']);
        if (!$status) {
            echo 'Não foi possível executar a operação!';
            return false;
        }
        echo 'Registro atualizado com sucesso!';
        break;

    case 'delete':
        $status = $produto->delete($_GET['id']);
        if (!$status) {
            echo 'Não foi possível executar a operação!';
            return false;
        }
        echo 'Registro removido com sucesso!';
        break;

}