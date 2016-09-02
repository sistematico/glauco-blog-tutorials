<?php
// Iniciamos a sessão para armazenar dados entre páginas
session_start();

try{
    // Faz conexão com banco de daddos
    $pdo = new PDO("sqlite:users.db");
}catch(PDOException $e){
    // Caso ocorra algum erro na conexão com o banco, exibe a mensagem
    echo 'Falha ao conectar no banco de dados: '.$e->getMessage();
    die;
}
?>
