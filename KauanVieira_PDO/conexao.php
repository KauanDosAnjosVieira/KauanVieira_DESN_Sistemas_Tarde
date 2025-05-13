<?php
function conectarBanco(){
    $dsn = "mysql:host=localhost:3306;dbname=empresa;charset=utf8";
    $usuario = "root";
    $senha = "";
    try {
        $conexao = new PDO($dsn, $usuario, $senha, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
        return $conexao;
    } catch (PDOException $e) {
        error_log("Erro de conexão: " . $e->getMessage());
        echo("Erro ao conectar ao banco de dados.");
    }
}

?>