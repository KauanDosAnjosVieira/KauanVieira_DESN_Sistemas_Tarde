<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2 PHP</title>
</head>
<body>
    <h1>Kauan Dos Anjos Vieira</h1>
    <?php
    //Função usada para definir fuso horário padrão 
    date_default_timezone_set('America/Los_Angeles');
    //Manipulando HTML E PHP
    $data_hoje = date("d/m/Y", time());
    ?>
    <p align="center">Hoje é dia: <?php echo $data_hoje; ?>
    </p>

    <?php
       echo "texto <br>";
       echo "Olá Mundo <br>";
       echo "Isso abrange
       várias linhas. As novas linhas serão
       saída também.<br>";
       echo "Isso abrange\nMultiplas linhas. A nova linha será \na saída também<br>";
       echo "Caracteres Escaping são feitos \"Como esse\".<br>";
       ?>


    <?php
        $comida_favorita= "Italiana";
        print $comida_favorita[2];
        $comida_favorita = "Cozinha " .$comida_favorita;
        echo "<br>";
        print $comida_favorita;

    ?>

    
</body>
</html>