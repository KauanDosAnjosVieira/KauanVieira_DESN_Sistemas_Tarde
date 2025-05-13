<?php

require_once 'conexao.php';
$conexao = conectarBanco();

$idCliente = $_GET['id']?? null;
$cliente = null;
$msgErro = "";


function buscarClientePorId($idCliente, $conexao){
    $stmt = $conexao->prepare("SELECT id_cliente, nome, endereco, telefone, email FROM cliente WHERE id_cliente = :id");
    $stmt->bindParam(':id', $idCliente, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
}
if ($idCliente && is_numeric($idCliente)){
    $cliente = buscarClientePorId($idCliente, $conexao);

    if (!$cliente) {
        $msgErro = "Cliente não encontrado.";
        
    }
} else {
    $msgErro = "Digite o ID do cliente para buscar os dados.";
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Atualizar Cliente</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function habilidarEdicao(campo){
            document.getElementById(campo).removeAtribute("readonly");
        }
    </script>
</head>
<body>
    <h2>Atualizar o Cliente</h2>
    
    <?php if ($msgErro): ?>
        <p style="color: red;"><?= htmlspecialchars($msgErro) ?></p>

        <form action="atualizarCliente.php" method="GET">
            <label for="id">ID do Cliente:</label>
            <input type="number" id="id" name="id" required>
            <button type="submit">Buscar</button>
        </form>
    <?php else: ?>
        <form action="processaratualizacao.php" method="POST">

            <input type="hidden" name="id_cliente" value="<?= htmlspecialchars($cliente['id_cliente']) ?>">
            
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($cliente['nome']) ?>" readonly onclick="habilidarEdicao('nome')">
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($cliente['email']) ?>" readonly onclick="habilidarEdicao('email')">-->
            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" value="<?= htmlspecialchars($cliente['endereco']) ?>" readonly onclick="habilidarEdicao('endereco')">
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" value="<?= htmlspecialchars($cliente['telefone']) ?>" readonly onclick="habilidarEdicao('telefone')">


            <button type="submit">Atualizar Cliente</button>
        </form>

    <?php endif; ?>

</body>
</html>