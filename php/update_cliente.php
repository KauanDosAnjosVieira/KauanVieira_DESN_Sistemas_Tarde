<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <?php
    //Inclui o arquivo de conexão com o banco de dados
    require_once "conexao.php";

    //Estabelecemos Conexão
    $conexao = conectadb();

    //Define os novos valores
    $nome = "Maria Da Silva";	
    $endereco = "Rua Kalamango, 32";
    $telefone = "(41) 5555-5555";
    $email = "mariasilva@teste.com";
    // trocando Ana Paula Souza para Maria Da Silva

    //Define o ID do cliente a ser atualizado
    $id_cliente = 1;

    //Prepara a consulta SQL usando 'prepare()' para evitar SQL Injection
    $stmt = $conexao->prepare("UPDATE cliente SET nome=?, endereco=?, telefone=?, email=? WHERE id_cliente=?");

    //Associa os parametros aos valores de consulta
    $stmt->bind_param("ssssi", $nome, $endereco, $telefone, $email, $id_cliente);

    //Executa a atualização
    if($stmt->execute()){
        echo "Cliente atualizado com sucesso!";
    }else{
        echo "Erro ao atualizar cliente: " . $stmt->error;
    }

    //Fecha a consulta e a conexão
    $stmt->close();
    $conexao->close();

    ?>
    
</body>
</html>