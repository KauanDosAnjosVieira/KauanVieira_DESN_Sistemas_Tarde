<?php
require_once ('conecta.php');

$evento = $_POST['evento'];
$descricao = $_POST['descricao'];
$imagem = $_FILES['imagem']['tmp_name'];
$tamanho = $_FILES['imagem']['size'];
$tipo = $_FILES['imagem']['name'];
$nome = $_FILES['imagem']['type'];

if(!empty($imagem) && $tamanho> 0){
    //le o conteudo do arquivo
    $fp = fopen($imagem, 'rb');
    $conteudo = fread($fp, filesize($imagem));
    fclose($fp);
    
    //prepara o comando SQL
    $conteudo = mysqli_real_escape_string($conexao,$conteudo);

    $queryInsercao = "INSERT INTO tabela_imagens (evento, descricao, nome_imagem, tamanho_imagem, tipo_imagem, imagem) 
                      VALUES ('$evento', '$descricao', '$nome', '$tamanho', '$tipo', '$conteudo')";
    
    $resultado = mysqli_query($conexao, $queryInsercao);
    
    if ($resultado) {
        echo "<h2>Imagem inserida com sucesso!</h2>";
        header('Location: index.php');
        exit();
    }else{
        die("Erro na inserção: " . mysqli_error($conexao));
    }
    }else{
        die ("<h2>Erro: Nenhuma imagem foi enviada </h2>");
    }

?>