<?php

require_once 'conexao.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $conexao = conectarBanco();

    $sql = "INSERT INTO cliente (nome, endereco, telefone, email) VALUES (:nome, :endereco, :telefone, :email)";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':nome', $_POST['nome']);
    $stmt->bindParam(':endereco', $_POST['endereco']);
    $stmt->bindParam(':telefone', $_POST['telefone']);
    $stmt->bindParam(':email', $_POST['email']);
    try {
        $stmt->execute();
        echo "Cliente cadastrado com sucesso!";
    } catch (PDOException $e) {
        error_log("Erro ao inserir cliente: " . $e->getMessage());
        echo "Erro ao cadastrar cliente.";
    }
}

















/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    try {
        $stmt = $conexao->prepare("INSERT INTO cliente (nome, endereco, telefone, email) VALUES (:nome, :endereco, :telefone, :email)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        echo "Cliente cadastrado com sucesso!";
    } catch (PDOException $e) {
        error_log("Erro ao inserir cliente: " . $e->getMessage());
        echo "Erro ao cadastrar cliente.";
    }
}*/





?>