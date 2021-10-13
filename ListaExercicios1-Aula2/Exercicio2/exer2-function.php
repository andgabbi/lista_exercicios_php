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
        $preco_kilo = $_POST ['kilo'];
        $qtde_kilo = $_POST['qtde'];

            $total =  $qtde_kilo * $preco_kilo;
            echo 'Total a pagar é de ' . $total . ' reais.';
        }
    ?>
    </br>
    <a href="exercicio2.php"> Voltar </a>
</div>
</body>
</html>
