<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Cadastro de Alunos</h1>

    <div id="dados">
    <form method="post">
        <h2>Cadastrar Aluno</h2>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="idade">Idade</label>
        <input type="number" name="idade" id="idade">
        <label for="serie">Série</label>
        <input type="number" name="serie" id="serie">
        <label for="media">Média</label>
        <input type="number" name="media" id="media">
        <br><br>
        <button class = "cad">Cadastrar</button>
        <br>
    </form>
    <form method="post">
        <button type="submit" name="limpar">Limpar Dados</button>
    </form>
    </div>
    <div id="cad">
    <h2>Alunos Cadastrados</h2>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Série</th>
                <th>Média</th>
            </tr>
        </thead>
    </div>
        <tbody>
            <?php
            session_start();
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['limpar'])) {
                    session_destroy();
                    session_start();
                }
                else{
                $nome = $_POST['nome'];
                $idade = $_POST['idade'];
                $serie = $_POST['serie'];
                $media_final = $_POST['media'];
    
                if (!isset($Alunos)) {
                    $Alunos = array();
                }
    
            $novoAluno = array($nome, $idade, $serie, $media_final);
    
            $_SESSION['Alunos'][] = $novoAluno;

            foreach ($_SESSION['Alunos'] as $linhas) {
                echo "<tr>";

                foreach ($linhas as $valor) {
                    echo "<td>$valor</td>";
            }
                echo "</tr>";
            }
            }
        }
            ?>
        </tbody>
    </table>
</body>
</html>
