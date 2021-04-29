<?php

declare(strict_types=1);

/* phpinfo(INFO_MODULES);
exit; */

$pdo = null;

try {
    //$pdo =  new PDO('mysql:host=mysql;dbname=exemplo', 'root', '12345');
    $pdo =  new PDO('mysql:host=localhost;dbname=exemplo', 'root', ''); // user "root" without password

    //pgsql:host=localhost;port=5432;dbname=testdb;user=bruce;password=mypass
    //$conexao = new PDO("pgsql:host=localhost;port=;dbname=bancoteste;user=root;password=123456");
    //$pdo =  new PDO('pgsql:host=localhost;port=5432;dbname=aula;user=root;password=nilcris22');
    //$pdo =  new PDO('pgsql:host=localhost;port=5432;dbname=aula','postgres','postgres');
} catch (Exception $e) {
    echo $e -> getMessage();
    die; //die(); // exit; // exit(); // return; // return false; // return true;
} 

return $pdo; //var_dump($pdo);