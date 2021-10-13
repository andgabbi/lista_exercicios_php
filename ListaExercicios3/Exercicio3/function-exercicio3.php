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
        $alunos = array(
            '1' => $_POST['nome1'],
            '2' => $_POST['nome2'],
            '3' => $_POST['nome3'],
            '4' => $_POST['nome4'],
            '5' => $_POST['nome6'],
            '6' => $_POST['nome7'],
            '7' => $_POST['nome8'],
            '9' => $_POST['nome9'],
            '10' => $_POST['nome10']);

        sort($alunos);
        foreach ($alunos as $key => $val) {
            echo "Ordem de Chamada: Aluno [" . $key . "] = " . $val . "<br />";
        }
    }

    ?>

    </br>
    <a href="exercicio3.php"> Voltar </a>
</div>
</body>
</html>






<
?