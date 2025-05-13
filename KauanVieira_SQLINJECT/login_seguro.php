<?php
// Configuração do servidor do banco de dados

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "empresa_teste";

//Conecta com mysqli sem proteção
$conexao = new mysqli($servidor, $usuario, $senha, $banco);


//Verifica se há erro na conexão
if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}

//captura os dados do formulário
$nome = $_POST['nome'];

//Prepara a consulta SQL segura

$stmt = $conexao->prepare("SELECT * FROM cliente_teste WHERE nome = ?");
$stmt->bind_param("s", $nome);
$stmt->execute();
$result = $stmt->get_result();


//Verifica se há resultados
if($result->num_rows > 0){
    header("Location: area_restrita.php");
    exit();
}else{
    echo "nome não encontrado.";
}
$stmt->close();
$conexao->close();
?>
