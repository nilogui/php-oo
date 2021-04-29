<?php

function divisao(int $num, int $den) : float
{
    if (($num == 0) || ($den == 0)) {
        throw new Exception('Nros devem ser diferentes de 0!');
    }
    return $num/$den;
}

$num = 3; $den = 10;

try {
    $resultado = divisao($num, $den);
} catch (Exception $e) {
    echo $e -> getMessage();
    die; //die(); // exit; // exit(); // return; // return false; // return true;
} finally {
    echo 'Resultado: ' . $resultado; // cast // Permite a criação de Logs de aplicação
    die;
}

echo '<br> ,,,  executando  ... <br>';