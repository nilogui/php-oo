<?php

function validarUsuario(array $usuario)
{
    if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
        throw new Exception('Preencha os Campos obrigatórios!');
    }
    return true;
}

$usuario = [
    'codigo' => 1,
    'nome' => '',
    'idade' => 57,
];

try {
    $status = validarUsuario($usuario);
} catch (Exception $e) {
    echo $e -> getMessage();
    die; //die(); // exit; // exit(); // return; // return false; // return true;
} finally {
    echo 'Status da Operação: ' . (int)$status; // cast // Permite a criação de Logs de aplicação
    die;
}

echo '<br> ,,,  executando  ... <br>';