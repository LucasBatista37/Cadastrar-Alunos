<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        table{
            border: 1px solid;
        }
        th{
            border: 1px solid;
        }
    </style>
</head>
<body>
    <h1>Cadastro de Alunos</h1>

    <form method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <br><br>
        <label for="idade">Idade</label>
        <input type="number" name="idade" id="idade">
        <br><br>
        <label for="serie">Serie</label>
        <input type="number" name="serie" id="serie">
        <br><br>
        <label for="media">Media</label>
        <input type="number" name="media" id="media">
        <br><br>
        <input type="submit" value="Cadastrar">
        <br><br>
    </form>

<table>
    <thead>
        <tr>
            <h1>Resultado</h1>
            <br>
            <th>Nome</th>
            <th>Idade</th>
            <th>Serie</th>
            <th>Média</th>
        </tr>
    </thead>
    <tbody>
        <?php
        
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $serie = $_POST['serie'];
    $media_final = $_POST['media'];
        
        $Alunos = array(
            array($nome, $idade, $serie, $media_final),
        );

        foreach($Alunos as $linhas){

            echo "<th>";

                foreach($linhas as $valor){
                    echo "<td> $valor </td>";
                }

            echo "<th>";
        }
    ?>
    </tbody>
</table>
</body>
</html>