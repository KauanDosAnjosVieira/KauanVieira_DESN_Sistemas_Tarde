<?php 
//definição das credenciais de conexao ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "armazena_imagem";

// Cria a conexão
$conexao = new mysqli($servername, $username, $password, $dbname);

// Verifica se houve erro na conexao
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
} 
