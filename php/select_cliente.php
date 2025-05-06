<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
</head>
<body>
    <?php
    //Inclui o arquivo de conexão com o banco de dados
    require_once 'conexao.php';

    //Estabelecemos Conexão
    $conexao = conectadb();

    //Define a consulta SQL para buscar clientes
    $sql = "SELECT id_cliente, nome, email FROM cliente";
    
    //Executa a consulta
    $result = $conexao->query($sql);

    //Verifica se há resultados
    if ($result->num_rows >0){
        //Itera sobre os resultados e exibe os dados
        while ($linha = $result->fetch_assoc()){
            echo "ID: " . $linha["id_cliente"] . " - Nome: " . $linha["nome"] . " - Email: " . $linha["email"] . "<br>";
        }
    }else {
        echo "Nenhum cliente cadastrado.";
        //Fechando a conexão
        $conexao->close();
    }

    ?>
    
</body>
</html>