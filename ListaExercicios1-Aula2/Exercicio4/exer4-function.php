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

        if ($valor > 0 ){
            echo ' O valor é positivo.';
        } elseif ( $valor < 0 ) {
            echo 'O valor é negativo.';
            } elseif ($valor == 0) {
                echo 'O valor digitado é igual a zero.';
        }
    }
    ?>
    </br>
    <a href="exercicio4.php"> Voltar </a>
</div>
</body>
</html>
