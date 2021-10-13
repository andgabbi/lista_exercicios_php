<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Exercícios </title>
    <link rel="stylesheet" type="text/css" href="../style3.css">
</head>
<body>
<div>
    <?php
    if ($_POST) {
        $nome = $_POST ['nome'];
        $senha1 = $_POST['senha1'];
        $senha2 = $_POST['senha2'];

        function confirm($sen1, $sen2, $name){
            if ($sen1 === $sen2){
                return strtoupper($name);
            } else {
                return 'Senha incorreta, tente outra vez!';
            }
        }
        echo confirm($senha1, $senha2, $nome);
    }
    ?>
    </br>
    <a href="exercicio1.php"> Voltar </a>
</div>
</body>
</html>