<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Exercícios </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<div>
    <?php

    if ($_POST) {
        $valor = $_POST['valor'];

        if ($valor > 10){
            echo ' O valor digitado é maior que 10.';
        } else {
            echo ' O valor digitado é menor que 10.';
        }
    }
    ?>
    </br>
    <a href="exercicio3.php"> Voltar </a>
</div>
</body>
</html>
