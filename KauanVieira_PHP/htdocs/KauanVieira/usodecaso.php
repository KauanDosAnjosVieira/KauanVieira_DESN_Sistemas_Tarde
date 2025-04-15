<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de Caso Em PHP</title>
</head>
<body>
    <h1>Kauan Dos Anjos Vieira</h1>
    
    <?php
       $s ="lampada";
       switch ($s) {
           case "casa":
               echo "A casa é amarela";
               break;
           case "arvore":
               echo "a arvore é bonita";
               break;
           case "lampada":
               echo "João apagou a lampada.";
               break;
           default:
               print "você não selecionou.";
               break;
       }
    ?>
    <br><br>
    
    
    
</body>
</html>