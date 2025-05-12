<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <?php

        require_once 'conexao.php'; 
        $conexao = conectadb();

        $id_cliente = 3; // ID do cliente a ser excluído

        $stmt = $conexao->prepare("DELETE FROM cliente WHERE id_cliente = ?"); // Prepara a consulta SQL

        $stmt->bind_param("i", $id_cliente); // Liga o parâmetro à consulta

        if ($stmt->execute()) { // Executa a consulta
         echo "Cliente excluído com sucesso!<br>";
            } else {
         echo "Erro ao excluir cliente: " . $stmt->error . "<br>";
            }

    ?>
    
</body>
</html>