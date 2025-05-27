<?php
// inclui o arquivo d econexao com o banco de dados
require_once ('conecta.php');

// cria a consulta sql para selecionar os dados principais (sem a coluna imagem)

$querySelecao = "SELECT codigo, evento, descricao, nome_imagem, tamanho_imagem FROM tabela_imagens";
$resultado = mysqli_query($conexao, $querySelecao);

if (!$resultado){
    die("Erro na consulta: " . mysqli_error($conexao));
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armazenamento Imagens no Banco de Dados</title>
    <style>
     body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.6;
    color: #444;
    max-width: 1100px;
    margin: 40px auto;
    padding: 20px;
    background: #eef2f7;
}

h2 {
    color: #34495e;
    border-bottom: 3px solid #5dade2;
    padding-bottom: 12px;
    margin-top: 40px;
    font-weight: 700;
    letter-spacing: 1px;
    text-align: center;
}

form {
    background: #fff;
    padding: 25px 30px;
    border-radius: 12px;
    box-shadow: 0 8px 16px rgba(0,0,0,0.12);
    margin-bottom: 40px;
    transition: box-shadow 0.3s ease;
}

form:hover {
    box-shadow: 0 12px 24px rgba(0,0,0,0.15);
}

input[type="text"],
input[type="file"] {
    width: 100%;
    padding: 14px 15px;
    margin: 12px 0 18px 0;
    border: 1.8px solid #bbb;
    border-radius: 8px;
    box-sizing: border-box;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

input[type="text"]:focus,
input[type="file"]:focus {
    border-color: #5dade2;
    outline: none;
}

input[type="submit"] {
    background: #5dade2;
    color: #fff;
    padding: 14px 30px;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    font-size: 1.1rem;
    font-weight: 600;
    box-shadow: 0 6px 12px rgba(93, 173, 226, 0.5);
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

input[type="submit"]:hover {
    background: #4178c0;
    box-shadow: 0 8px 16px rgba(65, 120, 192, 0.7);
}

table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 10px;
    margin-top: 30px;
    background: transparent;
}

th, td {
    padding: 14px 20px;
    text-align: center;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    font-weight: 500;
    color: #555;
}

th {
    background: #5dade2;
    color: #fff;
    font-weight: 700;
    box-shadow: none;
    border-radius: 10px 10px 0 0;
}

tr:hover td {
    background: #d6e9ff;
    color: #2c3e50;
}

a {
    color: #2980b9;
    font-weight: 600;
    text-decoration: none;
    transition: color 0.2s ease;
}

a:hover {
    color: #1b4f72;
    text-decoration: underline;
}

@media (max-width: 768px) {
    table {
        display: block;
        overflow-x: auto;
    }
    
    form {
        padding: 20px;
    }
    
    input[type="submit"] {
        width: 100%;
        border-radius: 10px;
    }
}

    </style>
</head>
<body>
    <h2 style=text-align:left;>Kauan Dos Anjos Vieira</h2>
    <h2>Selecione um novo arquivo de imagem</h2>
    <form enctype="multipart/form-data" action="upload.php" method="POST">
        <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
        <input name="evento" type="text" placeholder="Nome do Evento" required>
        <input name="descricao" type="text" placeholder="Descrição" required>
        <!--imagem-->
        <input name="imagem" type="file" required>
        <input type="submit" value="Salvar">
    </form>
    <br>
    <table border="1">
        <thead>
            <tr>
                <td align="center">Código</td>
                <td align="center">Evento</td>
                <td align="center">Descrição</td>
                <td align="center">Nome da Imagem</td>
                <td align="center">Tamanho da Imagem</td>
                <td align="center">Visualizar Imagem</td>
                <td align="center">Excluir Imagem</td>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop para exibir os dados na tabela
            while ($arquivos = mysqli_fetch_array($resultado)) { ?>
            <tr>

                <td align="center"><?php echo $arquivos['codigo'];?></td>
                <td align="center"><?php echo $arquivos['evento'];?></td>
                <td align="center"><?php echo $arquivos['descricao'];?></td>
                <td align="center"><?php echo $arquivos['nome_imagem'];?></td>
                <td align="center"><?php echo $arquivos['tamanho_imagem'];?></td>

                
                <td align="center"><a href="ver_imagens.php?id=<?php echo $arquivos['codigo'];?>">Ver Imagem</a></td>
                <td align="center"><a href="excluir_imagem.php?id=<?php echo $arquivos['codigo'];?>">Excluir</a></td>
                
            </tr>
            <?php } ?>
        </tbody>
    </table>
    
</body>
</html>