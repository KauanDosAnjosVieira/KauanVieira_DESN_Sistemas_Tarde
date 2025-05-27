<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ob_clean(); // Limpa qualquer saida inesperada antes do header

//conecta ao banco de dados
require_once ('conecta.php');

//obtem o id da imagem da url, garantindo que seja um numero inteiro

$id_imagem = isset($_GET['id']) ? intval($_GET['id']) : 0;

//cria a consulta SQL para buscar a imagem no banco de dados
$querySelecionaPorCodigo = "SELECT imagem, tipo_imagem FROM tabela_imagens WHERE codigo = ? ";

// USA PREPARED STATEMENT PARA MAIOR SEGURANÇA

$stmt = $conexao->prepare($querySelecionaPorCodigo);
$stmt->bind_param("i", $id_imagem);
$stmt->execute();
$resultado = $stmt->get_result();


//verifica se a imagem existe no banco de dados
if ($resultado->num_rows > 0 ){
    $imagem = $resultado->fetch_object();

//define o tipo correto da imagem (fallback para JPEG caso esteja vazio)

$tipoImagem = !empty($imagem->tipo_imagem) ? $imagem->tipo_imagem : 'imagem/jpeg';
    header("Content-Type: $tipoImagem");
    
    //exibe a imagem
    echo $imagem->imagem;
} else {
    echo "<h2>Imagem não encontrada!</h2>";
}
//fecha a consulta
$stmt->close();
?>