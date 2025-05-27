<?php
require_once ('conecta.php');

//obtem o id da imagem da url, garantindo que seja um numero inteiro

$id_imagem = isset($_GET['id']) ? intval($_GET['id']) : 0;

//Verifica se o id é válido (maior que zero)
if ($id_imagem > 0) {
    //cria a consulta SQL para excluir a imagem no banco de dados
    $queryExclusao = "DELETE FROM tabela_imagens WHERE codigo = ?";
    
    // USA PREPARED STATEMENT PARA MAIOR SEGURANÇA
    $stmt = $conexao->prepare($queryExclusao);
    $stmt->bind_param("i", $id_imagem); // define o ID como um inteiro
    
    //executa a exclusão
    if ($stmt->execute()) {
        echo "<h2>Imagem excluída com sucesso!</h2>";
    } else {
        die ("Erro ao excluir imagem: " .$stmt->error);
    }
    
    //fecha a consulta
    $stmt->close();
} else {
    echo "<h2>ID inválido!</h2>";
}

//redireciona para a index e garante que o script pare
header('Location: index.php');
exit();