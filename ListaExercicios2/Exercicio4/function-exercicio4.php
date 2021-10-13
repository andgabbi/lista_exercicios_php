<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Exercícios </title>
    <link rel="stylesheet" type="text/css" href="../style2.css">
</head>
<body>
<div>
    <?php
    if ($_POST) {
        $valor_rec = $_POST['valor1'];

        function valores($valor)
        {
            if ($valor > 0) {
                return 'Valor positivo' . true;
            } elseif ($valor < 0) {
                return 'Valor negativo ' . -1;
            } else {
                return 'Valor igual a zero' . false;
            }
        }
        function parImpar($valor)
        {
            if ($valor % 2 == 0) {
                echo 'O valor é par!';
            } else {
                echo 'O valor é ímpar!';
            }
        }
        echo valores($valor_rec) . "<br />";
        echo parImpar($valor_rec). "<br />";
    }
    ?>
    </br>
    <a href="exercicio4.php"> Voltar </a>
</div>
</body>
</html>
