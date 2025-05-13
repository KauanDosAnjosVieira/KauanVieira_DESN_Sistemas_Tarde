<?php
require 'conexao.php';

$conexao = conectarBanco();
$stmt = $conexao->prepare("SELECT * FROM cliente");
$stmt->execute();
$clientes = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Lista de Clientes</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>E-mail</th>
        </tr>

        <?php foreach ($clientes as $cliente): ?>
        <tr>
            <td><?= htmlspecialchars($cliente["id_cliente"])?></th>
            <td><?= htmlspecialchars($cliente["nome"])?></th>
            <td><?= htmlspecialchars($cliente["endereco"])?></th>
            <td><?= htmlspecialchars($cliente["telefone"])?></th>
            <td><?= htmlspecialchars($cliente["email"])?></th>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>