<?php

require_once 'conexao.php';

$conexao = conectarBanco();

$sql = "SELECT id_cliente, nome, endereco, telefone, email FROM cliente ORDER BY nome ASC";

$stmt = $conexao->prepare($sql);
$stmt->execute();
$clientes = $stmt->fetchAll();

?>