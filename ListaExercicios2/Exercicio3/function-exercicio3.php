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

        function parImpar($valor){
            if ($valor % 2 == 0){
                return true;
            } else {
                return false;
            }
        }
        if (parImpar($valor_rec) == 1){
            echo 'Esse número é par!';
        } else {
            echo 'Esse número é ímpar!';
        }
    }
    ?>
    </br>
    <a href="exercicio3.php"> Voltar </a>
</div>
</body>
</html>