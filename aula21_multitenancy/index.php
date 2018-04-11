<?php

/**
 * Aula 1 - Criar bd "curso_php-saas" e tabela "usuarios" (id, dominio, nome)
 *  Criar dois virtual hosts (projeto1 e projeto2) em C:\xampp\apache\conf\extra\httpd_vhosts.conf
 *  Incluir projeto1 e 2 em C:\Windows\System32\drivers\etc\hosts
 */

try {
    $pdo = new PDO("mysql:dbname=curso_php-saas;host=localhost","root","");
} catch(PDOException $e) {
    echo "Erro: ".$e->getMessage();
}

// Qual dominio esta acessando? $_SERVER['HTTP_HOST'] (<- + confiavel), $_SERVER['SERVER_NAME']
$dominio = $_SERVER['HTTP_HOST'];
$sql = "SELECT * FROM usuarios WHERE dominio = ?";
$query = $pdo->prepare($sql);
$query->execute(array($dominio));

if ($query->rowCount() > 0) {
    $cliente = $query->fetch();
//    echo "Cliente que acessou: ".$cliente['nome']."<br/>";
    if (file_exists('clientes/'.$cliente['id'].'/index.php')) {
        require 'clientes/'.$cliente['id'].'/index.php';
    } else {
        echo "Sistema fora do ar.<br/>";
    }
} else {
    echo "Sistema fora do ar. (Cliente caloteiro nao pagou).<br/>";
}
?>