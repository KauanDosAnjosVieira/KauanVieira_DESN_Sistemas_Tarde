<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Teste</title>
</head>
<body>
    <h1 style="text-align:center;">Escreva o nome (Inseguro)</h1>
    <form style="text-align:center;" action="login_inseguro.php" method="POST">
        <input type="text"  name="nome" placeholder="Digite seu nome">
        <button type="submit">Enviar</button>
    </form>
    <br><br>
    <h1 style="text-align:center;">Escreva o nome (Seguro)</h1>
    <form style="text-align:center;" action="login_seguro.php" method="POST">
        <input type="text"  name="nome" placeholder="Digite seu nome">
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>